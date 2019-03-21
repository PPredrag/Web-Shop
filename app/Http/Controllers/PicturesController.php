<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\Picture;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
use File;
class PicturesController extends Controller
{
	// Return view for picture upload
	public function getSliderPictures(){
		return view('pictures/sliderPictures');
}
	// Upload pictures in path and in DB for Slider on Nome Page
	public function imageAdd(Request $request){
		
		$this->validate($request, [
		'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		]);
			DB::beginTransaction();
			try {
				
				$statusPicture = $request['statusPicture'];
				$pictureName = $request['pictureName'];
				$image = $request->file('picture');
					// get original picure name
				$file = $image->getClientOriginalName();
				// store in variable picture name and extension
				$input['imagename'] = $file;
					// where to store picture
				$destinationPath = public_path('/images/sliderImages');
				$img = Image::make($image->getRealPath());
				// Checck if picture exist in path
				if(File::exists($destinationPath.'/'.$input['imagename'])){
					return redirect()->back()->withSuccess('Slika sa ovim nazivom postoji');
				}else{
					$img->fit(1400, 1400, function ($constraint) {
					$constraint->upsize();
				})->save($destinationPath.'/'.$input['imagename']);
				$add = new Picture();
				$add->name = $file;
				$add ->status = $statusPicture;
				$add->save();
				DB::commit();
				return redirect()->back()->withSuccess('Uspesno ste uneli Sliku');
				}
				
				}
				catch (Exception $e) {
				DB::rollback();
					return view('error');
				}
		
	}
		// Insert pictures in slider
	public function insertPicturesSlider(Picture $picture){
			
			$data = $picture->getPisturesSlider();
			return view('welcome')->with(array('data'=>$data));

	}	
		// Get data from Table and show in view
	public function showPictureToDelete(Picture $picture){
		$data = $picture->getPisturesSlider();
		return view('pictures/deleteSlidePictures')->with(array('data'=>$data));

	}
	 // Delete data from databAse and public folder imnage
	 public function deleteOnePictureSlider(Picture $picture, $id)
	{
		$data = Picture::findOrFail($id);
		$data->delete();
		$pictureName = $data->name;
		 // path to picture folder wit picture name
		$destinationPath = public_path('/images/sliderImages/' . $pictureName);
		 // check if image exists and delete 
		if(File::exists($destinationPath)) {
    	File::delete($destinationPath);
		}
		return redirect()->back()->withSuccess('Slika je uspesno Obrisana');
	}
}