@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<div class="panel panel-success">
	<div>
	@if(session('success'))
	<div class="alert alert-danger text-center" >
	{{session('success')}}
</div>
	@endif
</div>
	<div class="panel-heading text-center">
		Muška Obuća/Ovaj odeljak mora imati <span class="red">3,6 ili 9  SLIKA</span> <span style="float: right;">   
	</div>
	<div class="panel-heading text-center">
		Trenutno ima &nbsp <span class="red">{{ count($forMen)}}</span>&nbsp proizvoda za Muška Obuća</span>   
	</div>
	
	<div class="panel-body">
		@foreach($forMen as $value)

<a href="{{url('deleteForMen/' . $value->id)}}">
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
	Ovim putem brišete slike koje ce biti prikazane na početnoj strani u Muška Obuća.
</div>
		
	
	@endsection
	@section('footer')
	@endsection