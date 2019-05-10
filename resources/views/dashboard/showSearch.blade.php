@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<br>
@if(session()->has('message'))
<div class="alert alert-success ">
	{{ session()->get('message') }}&nbsp&nbsp&nbsp <span style="float: right;">prikazano&nbsp{{ count($searchData)}}&nbsp od &nbsp{{$count}}</span>
</div>
@endif
<div class="container" style="max-width: 100% !important;">
<section class="blog bgwhite p-t-10 p-b-65">
<p class="text-center">
	{{ $searchData->links() }}
</p>

	
		<div class="row">
			@foreach($searchData as $value)
			<div class="col-sm-12 col-md-4 p-b-30 m-l-r-auto">
				<!-- Block3 -->
				<div class="block3" id="border">
					<div class="block2-img wrap-pic-w of-hidden pos-relative">
						<a href="{{url('shoesU/' . $value->id)}}" class="block3-img dis-block hov-img-zoom">
							<img src="{{ asset('images/productPictures/' . $value->image1)}}" alt="IMG-BLOG">
						</a>
					</div>
					<div class="block3-txt p-t-14" style="padding: 10px;">
						
						<span class="s-text6">BarCode:</span> <span class="s-text7">{{$value->barcode}}</span>
						
						
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
@endsection
@section('footer')
@endsection