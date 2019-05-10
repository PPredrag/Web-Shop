@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
	@if($status == 0)
		<div class="alert alert-danger text-center" id="">
				Slika se ne nalazi na početnoj starni
			</div>
	@endif

	@if($status == 2)
		<div class="alert alert-danger text-center" id="">
				Slika se  nalazi na početnoj starni u delu Nova Sezona
			</div>
	@endif

	@if($status == 3)
		<div class="alert alert-danger text-center" id="">
				Slika se  nalazi na početnoj starni u delu Najnoviji Proizvodi
			</div>
	@endif

	@if($status == 4)
		<div class="alert alert-danger text-center" id="">
				Slika se  nalazi na početnoj starni u delu za Najmladje
			</div>
	@endif

	@if($status == 5)
		<div class="alert alert-danger text-center" id="">
				Slika se  nalazi na početnoj starni u delu Proizvodi na popustu
			</div>
	@endif

	@if($status == 6)
		<div class="alert alert-danger text-center" id="">
				Slika se  nalazi na početnoj starni u delu Muška Obuća
			</div>
	@endif

	
	@if($status == 7)
		<div class="alert alert-danger text-center" id="">
				Slika se  nalazi na početnoj starni u delu Ženska Obuća
			</div>
	@endif

@if(session()->has('message'))
			<div class="alert alert-success text-center" id="sakri">
				{{ session()->get('message') }}
			</div>
			@endif
<form action="{{url('changePicturePosition/' . $id)}}" method="post">
		<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
				<div class="leftbar p-r-20 p-r-0-sm" id="padingRight">
					<div class="filter-color p-t-22 p-b-50 bo3">
						<div class="m-text15 p-b-12">
							Odaberi Poziciju na Glavnoj strani
						</div>
						<label for="sel1">Postavi Sliku na poziciju na Glavnoj Strani </label>
						<select class="form-control" id="sel1" name="statusPicture">
							<option value="0" >Odaberi Poziciju na Glavnoj Strani</option>
							<option value="2">Nova Sezona</option>
							<option value="3">Najnoviji Proizvodi</option>
							<option value="4">Za Najmladje</option>
							<option value="5">Na Popustu</option>
							<option value="7">Ženska</option>
							<option value="6">Muška</option>
							
						</select>
					</div>
				</div>
				@if ($errors->has('status'))
				<span class="help-block">
					<strong>{{ $errors->first('status') }}</strong>
				</span>
				@endif
			</div>
@foreach($data as $value)


<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" id="responsiveSlika">
	<h4 class="h4 t-center" id="nasloviPocetna">
	Barcode : {{$value->barcode}}
	</h4>
	<h4 class="h4 t-center" id="nasloviPocetna">
	Naziv : {{$value->name}}
	</h4>
	<div class="hov-img-zoom pos-relative" id="border">
		<img src="{{ asset('images/productPictures/' . $value->image1) }}" alt="IMG-BANNER">
		<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
			
		</div>
	</div>
</div>
<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" id="responsiveSlika">
	<h4 class="h4 t-center" id="nasloviPocetna">
	Marka : {{$value->brand}}
	</h4>
	<h4 class="h4 t-center" id="nasloviPocetna">
	Cena : {{$value->price}},00din
	</h4>
	<div class="hov-img-zoom pos-relative" id="border">
		<img src="{{ asset('images/productPictures/' . $value->image2) }}" alt="IMG-BANNER">
		<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
			
		</div>
	</div>
</div>

<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" id="responsiveSlika">
	<h4 class="h4 t-center" id="nasloviPocetna">
	Vrsta : {{$value->type}}
	</h4>
	<h4 class="h4 t-center" id="nasloviPocetna">
	Kategorija: {{$value->category}}
	</h4>
	<div class="hov-img-zoom pos-relative" id="border">
		<img src="{{ asset('images/productPictures/' . $value->image3) }}" alt="IMG-BANNER">
		<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
			
		</div>
	</div>
</div>

<button type="submit" class="btn btn-success" id="buttonDashboard">Premesti Sliku</button>
{{ csrf_field() }}
</form>

@endforeach
@endsection
@section('footer')
@endsection