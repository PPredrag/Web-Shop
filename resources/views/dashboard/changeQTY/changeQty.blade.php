@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
@foreach($data as $value)
@if(session()->has('message'))
<div class="alert alert-danger text-center" id="sakri">
	{{ session()->get('message') }}
</div>
@endif
<div class="alert alert-danger text-center" id="">
	<b>PANEL ZA PROMENU KOLIČINE</b>&nbsp &nbsp  Prikazan je proizvod sa Barcodom {{$value->barcode}}
</div>
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
<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15"id="responsiveSlika">
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
@endforeach

@foreach($dataJoin as $valueJoin)
<p><b>ID</b> &nbsp&nbsp&nbsp{{$valueJoin->footwear_id}}</p>
<p>Kolicina &nbsp&nbsp&nbsp{{$valueJoin->qty}}</p>

<p>Velicina&nbsp&nbsp&nbsp{{$valueJoin->number_id}}</p>
<hr>
@endforeach
<form action="" method="post">
	<button type="submit" class="btn btn-danger" style="width: 100%;margin-top: 20px;" >Promeni količine  </button>
		{{ csrf_field() }}
</form>




@endsection
@section('footer')

@endsection