<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use App\Picture;
use DB;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use App\Footwear;


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
		// Insert pictures in slider and amin Page
	public function insertPicturesSlider(Picture $picture, Footwear $footewear){
			
			 $data = $picture->getPisturesSlider();
			 $dataPictures = $footewear->getPistures();
			 $newSeason = $footewear->getPicturesNewSeason();
			 $newShoes = $footewear->getPisturesNewProducts();
			 $forKids = $footewear->getPicturesForKids();
			 $forSale = $footewear->getPicturesForSale();
			 $forMen = $footewear->getPicturesForMen();
			 $forWomen = $footewear->getPicturesForWomen();
          	 return view('welcome')->with([ 'data'=>$data,
                                          'dataPictures'=>$dataPictures,
                                          'newSeason'=>$newSeason,
                                          'newShoes'=>$newShoes,
                                          'forKids'=>$forKids,
                                          'forSale'=>$forSale,
                                          'forMen'=>$forMen,
                                          'forWomen'=>$forWomen
                                    ]);

	}	


		// Return a view for  pictures for main page Nova Sezona part
	public function newSeason(Footwear $footewear){

		$newSeason = $footewear->getPicturesNewSeason();
		//dd($newSeason);
		return view('pictures/newSeason')->with(['newSeason'=>$newSeason]);

	}

	// Return a view for  pictures for main page NovaProducts part
		public function newShoes(Footwear $footewear){
			$newShoes = $footewear->getPisturesNewProducts();
		
			return view('pictures/newShoes')->with(['newShoes'=>$newShoes]);
	}

	// Return a view for  pictures for main page Kids part
	public function forKids(Footwear $footewear){

		$forKids = $footewear->getPicturesForKids();
		return view('pictures/forKids')->with(['forKids'=>$forKids]);
	}

		// Return a view for  pictures for main page Sale part
	public function forSale(Footwear $footewear){

		$forSale = $footewear->getPicturesForSale();

		return view('pictures/saleMainPage')->with(['forSale'=>$forSale]);
	}

		// Return a view for  pictures for main page Men part
	public function forMen(Footwear $footewear){

		$forMen = $footewear->getPicturesForMen();
		//dd($forMen);
		return view('pictures/menPictures')->with(['forMen'=>$forMen]);
	}

		// Return a view for  pictures for main page Men part
	public function forWomen(Footwear $footewear){

		$forWomen = $footewear->getPicturesForWomen();
		//dd($forWomen);
		return view('pictures/womenPictures')->with(['forWomen'=>$forWomen]);
	}
	public function showPictureToDelete(){
		$data = DB::table('pictures')->get();
		return view('pictures/deleteSlidePictures')->with(['data'=>$data]);
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
	 // Insert picture in main page in Nova Sezona
	public function imageAddNewSeason(Request $request){

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
				$destinationPath = public_path('/images/mainPageImages/newSeason');
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

	// Insert Pictures in New Products
	public function insertNewShoes(Request $request){
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
				$destinationPath = public_path('/images/mainPageImages/newShoes');
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

	// Delete picture from Main PAge New Season Part , it will change status from 2 to 0
	public function deleteNewSeasonPicture($id){

		DB::table('footwears')->where('id',$id)->limit(1)->update(array('statusPicture' => 0 ));
		return redirect()->back()->withSuccess('Uspešno ste uklonili sliku');

	}

	// Delete picture from Main Page New Products Part , it will change status from 3 to 0
	public function deleteNewShoesPicture($id){

		DB::table('footwears')->where('id',$id)->limit(1)->update(array('statusPicture' => 0));
		return redirect()->back()->withSuccess('Uspešno ste uklonili sliku');
	}

	// Delete picture from Main Page New Products Part , it will change status from 4 to 0
	public function deleteForKids($id){

		DB::table('footwears')->where('id',$id)->limit(1)->update(array('statusPicture' => 0 ));
		return redirect()->back()->withSuccess('Uspešno ste uklonili sliku');
	}

	// Delete picture from Main Page aleProducts Part , it will change status from 5 to 0
	public function deleteForSale($id){

		DB::table('footwears')->where('id',$id)->limit(1)->update(array('statusPicture' => 0 ));
		return redirect()->back()->withSuccess('Uspešno ste uklonili sliku');
	}

	// Delete picture from Main Page aleProducts Part , it will change status from 6 to 0
	public function deleteForWomen($id){

		DB::table('footwears')->where('id',$id)->limit(1)->update(array('statusPicture' => 0 ));
		return redirect()->back()->withSuccess('Uspešno ste uklonili sliku');
	}

	// Delete picture from Main Page aleProducts Part , it will change status from 7 to 0
	public function deleteForMen($id){

		DB::table('footwears')->where('id',$id)->limit(1)->update(array('statusPicture' => 0 ));
		return redirect()->back()->withSuccess('Uspešno ste uklonili sliku');
	}
}