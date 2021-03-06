@extends('include.app')
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url({{ asset('images/lookProduct.jpg')}}); min-height:100px;" >
	<h2 class="l-text2 t-center" id="sivaBojaSlova">
	Pregled Proizvoda
	</h2>
</section>
<br><br>
<div class="container">
	<div class="row">
		<!-- One Pruduct Picture-->
		<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15" >
			@foreach($data as $value)
			<h4 class="h4 t-center" id="nasloviPocetna">
			{{$value->name}}
			</h4>
			<div class="hov-img-zoom pos-relative" id="border">
				<img src="{{ asset('images/productPictures/' . $value->image1) }}" alt="IMG-BANNER">
				<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
				</div>
			</div>
			@endforeach
		</div>
		<!-- One Pruduct Details-->
		<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15" >
			<h4 class="h4 t-center" id="nasloviPocetna" style="margin-bottom:5%;">
			Dostupne Veličin
			</h4>
			
			<ul class="list-inline text-center align-items-center">
				@if($qty != 0)
				@foreach($footwearData as $value)
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">{{ $value->number_id}}</li></a>
				@endforeach
				@else
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">Ovaj model više nije dostupan</li></a>
				@endif
				
			</ul>
			<br>
			<h6 class="h6" id="nasloviPocetna" style="margin-bottom:5%;">
			Barcode Proizvoda:&nbsp	@foreach($data as $value)
			<span class="s-text11 t-center">
				<b>{{$value->barcode}}</b>
			</span>
			@endforeach
			</h6>
			<hr>
			<h6 class="h6" id="nasloviPocetna" style="margin-bottom:5%;">
			Naziv Proizvoda:	@foreach($data as $value)
			<span class="s-text11 t-center">
				<b>{{$value->name}}</b>
			</span>
			@endforeach
			</h6>
			<hr>
			
			<h6 class="h6" id="nasloviPocetna" style="margin-bottom:5%;">
			Opis Proizvoda:@foreach($data as $value)
			<span class="s-text11 t-center">
				<b>{{$value->description}}</b>
			</span>
			@endforeach
			</h6>
			
			
			<hr>
			@foreach($data as $value)
			<span class="s-text11 t-center">
				Brand : <b>{{$value->brand}}</b>
			</span>
			@endforeach
			<hr>
			@foreach($data as $value)
			<span class="s-text11 t-center">
				Program : <b>{{$value->category}}</b>
			</span>
			@endforeach
			<hr>
			@foreach($data as $value)
			<span class="s-text11 t-center">
				Materijal : <b>{{$value->material}}</b>
			</span>
			@endforeach
			<hr>
			@foreach($data as $value)
			@if($value->statusSale == 2)
			<span class="s-text11 t-center" id="darkRed">
				<h5 class="h5">
			 CENA NA POPUSTU {{$value->newPrice}},00  din
				</h5>
				
			</span>
			@else			
			<span class="s-text11 t-center" id="darkRed">
				<h5 class="h5">
				CENA {{$value->price}},00  din
				</h5>
				
			</span>
			@endif
			@endforeach
			<hr>
			<br>
			
			<a href="{{url('addToCart/' . $id)}}">
				<button type="button" class="btn btn-primary btn-lg btn-block">Dodaj u korpu</button>
			</a>
			
		</div>
		
		<div class="col-sm-6 col-md-6 col-lg-3">
			@foreach($data as $value)
			<!-- block1 -->
			<div class="block1 hov-img-zoom pos-relative m-b-30" id="border">
				<img src="{{ asset('images/productPictures/' . $value->image2) }}" alt="IMG-BENNER">
			</div>
			@endforeach
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3">
			@foreach($data as $value)
			<!-- block1 -->
			<div class="block1 hov-img-zoom pos-relative m-b-30" id="border">
				<img src="{{ asset('images/productPictures/' . $value->image3) }}" alt="IMG-BENNER">
			</div>
			@endforeach
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3">
			
			<div class="block1 hov-img-zoom pos-relative m-b-30" id="border">
				<img src="{{ asset('images/banner/besplatna.png') }}" alt="IMG-BENNER">
			</div>
			
		</div>
		<div class="col-sm-6 col-md-6 col-lg-3">
			<div class="block1 hov-img-zoom pos-relative m-b-30" id="border">
				<img src="{{ asset('images/banner/besplatna2.png') }}" alt="IMG-BENNER">
			</div>
			
		</div>
		
		<!-- Main Information-->
		<section class="shipping bgwhite p-t-62 p-b-46">
			<hr>
			<div class="flex-w p-l-15 p-r-15">
				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1" id="hoverDiv">
					<h4 class="m-text12 t-center">
					Besplatna Isporuka za porudžbine u vrednosti više od 3000,00 din
					</h4>
					<a href="#" class="s-text11 t-center">
						Za više informacija kliknite ovde
					</a>
				</div>
				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2" id="hoverDiv">
					<h4 class="m-text12 t-center">
					30 Dana Povratka
					</h4>
					<span class="s-text11 t-center">
						Jednostavno nam posaljite nazad proizvod u roku od 30 dana
					</span>
				</div>
				<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1" id="hoverDiv">
					<h4 class="m-text12 t-center">
					Porucivanje putem sajta
					</h4>
					<span class="s-text11 t-center">
						Svakoga dana 24/7
					</span>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection
@section('footer')
<script>
	$(document).ready(function(){
	var links = $('.list-inline-item');
	links.click(function() {
	links.css('background-color', 'white');
	$(this).css('background-color', '#aa0319');
	$(this).css('color', '#2d2d2d');
});
	})
</script>
@endsection