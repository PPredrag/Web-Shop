@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<br>

@if(session()->has('message'))
    <div class="alert alert-danger ">
        {{ session()->get('message') }}&nbsp&nbsp&nbsp <span style="float: right;">Prikazano je&nbsp{{ count($searchData)}}  proizvoda:</span>   
    </div>
@endif



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