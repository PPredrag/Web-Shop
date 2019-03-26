@extends('layoutDasboard.dashboardNew')
@section('content')

@endsection
@section('wrapper')
<div>
	@if(session('success'))
	<p class="zeleno" id="sakri">{{session('success')}}aaaa</p>
	@endif
</div>
		<br>
		@foreach($data as $value)
	
			<a href="{{url('deleteOnePictureSlider/' . $value->id)}}">
			<div class="deleteDiv" style="">
			<img src="{{ asset('images/delete.jpg')}}" alt="" id="buttonPosition">	
			<img src="{{asset('images/sliderImages/' . $value->name  )}}" alt="" class="slika25"></a>
			</div>

		@endforeach


@endsection
@section('footer')
@endsection