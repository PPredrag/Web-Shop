@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<div class="panel panel-success">
	<div>
	@if(session('success'))
	<div class="alert alert-danger" >
	{{session('success')}}
</div>
	@endif
</div>
	<div class="panel-heading">
		Panel za pregled Dečijih proizvoda/Ovaj odeljak mora imati <span class="red">TAČNO 2 SLIKE</span> <span style="float: right;">Trenutno ima &nbsp <span class="red">{{ count($forKids)}}</span>&nbsp proizvoda za Nova Sezona:</span>   
	</div>
	
	<div class="panel-body">
		@foreach($forKids as $value)

<a href="{{url('deleteForKids/' . $value->id)}}">
	<div class="newSeasonDiv" style="">
	<img src="{{ asset('images/delete.jpg')}}" alt="" id="buttonPosition">		
	<img src="{{ asset('images/productPictures/' . $value->image1)}}" alt="" class="slika25"></a>
	<p class="text-center">{{$value->barcode}}</p>
	<p class="text-center">{{$value->name}}</p>
	<p class="text-center">{{$value->brand}}</p>
</div>
</a>

@endforeach
</div>
	<div class="panel-footer">
		Ovim putem brišete slike koje ce biti prikazane na početnoj strani u Najnoviji Proizvodi.
	</div>
		
	
	@endsection
	@section('footer')
	@endsection