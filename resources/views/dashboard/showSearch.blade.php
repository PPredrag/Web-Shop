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
		
		



		@foreach($searchData as $value)
			
			<a href="{{url('shoesU/' . $value->id)}}">
			<div class="deleteDiv" style="">
			
			<img src="{{ asset('images/productPictures/' . $value->image1)}}" alt="" class="slika25"></a>
			<p class="text-center">{{$value->barcode}}</p>
			<p class="text-center">{{$value->name}}</p>
			<p class="text-center">{{$value->brand}}</p>
			</div>
				</a>
		
		@endforeach


@endsection
@section('footer')
@endsection