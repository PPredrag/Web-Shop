@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<div>
	@if(session('success'))
	<p class="zeleno text-center" id="sakri">{{session('success')}}</p>
	@endif
</div>
<br>
<div class="panel panel-success">
	<div>
		@if(session('success'))
		<div class="alert alert-danger" >
			{{session('success')}}
		</div>
		@endif
	</div>
	<div class="panel-heading text-center">
		Panel za brisanje slika za Početni Slider
	</div>
	
	
	<div class="panel-body">
		@foreach($data as $value)
		<a href="{{url('deleteOnePictureSlider/' . $value->id)}}">
			<div class="newSeasonDiv" style="">
				<img src="{{ asset('images/delete.jpg')}}" alt="" id="buttonPosition">
			<img src="{{asset('images/sliderImages/' . $value->name  )}}" alt="" class="slika25"></a>
			
		</div>
	</a>
	@endforeach
</div>
<div class="panel-footer">
	Ovim putem brišete slike koje ce biti prikazane na početnoj strani u Proizvodi na popustu.
</div>

@endsection
@section('footer')
@endsection