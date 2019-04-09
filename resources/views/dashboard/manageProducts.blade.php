@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
@foreach($data as $value)
<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" style="border: 1px solid #cfd1d3; width: 33%; margin-right: 2px;">
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
<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" style="border: 1px solid #cfd1d3; width: 33%; margin-right: 2px;">
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
<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" style="border: 1px solid #cfd1d3; width: 33%; margin-right: 2px;">
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
<a href=""><button type="button" class="btn btn-default" id="buttonDashboard">Promeni Cenu</button></a>
<a href=""><button type="button" class="btn btn-default" id="buttonDashboard">Promeni Sliku</button></a>
<a href=""><button type="button" class="btn btn-default" id="buttonDashboard">Promeni Naziv</button></a>
<a href=""><button type="button" class="btn btn-default" id="buttonDashboard">Promeni Opis</button></a>
<a href=""><button type="button" class="btn btn-default" id="buttonDashboard">Dodaj Kolčinu</button></a>
<a href=""><button type="button" class="btn btn-default" id="buttonDashboard">Promeni Marku</button></a>
<a href=""><button type="button" class="btn btn-default" id="buttonDashboard">Promeni Kategoriju</button></a>
<a href=""><button type="button" class="btn btn-default" id="buttonDashboard">Upravljaj Slikama</button></a>


@endforeach
@endsection
@section('footer')
@endsection