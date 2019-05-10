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
		Nova Sezona/Ovaj odeljak mora imati <span class="red">TAČNO 6 SLIKA</span>   
	</div>
	<div class="panel-heading text-center">
		 <span style="">Trenutno ima &nbsp <span class="red">{{ count($newSeason)}}</span>&nbsp proizvoda za Nova Sezona</span>   
	</div>
	
	<div class="panel-body">
		@foreach($newSeason as $value)

<a href="{{url('deleteNewSeasonPicture/' . $value->id)}}">
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
		Ovim putem brišete slike koje ce biti prikazane na početnoj strani u Nova Sezona Delu.
	</div>
		
	
	@endsection
	@section('footer')
	@endsection