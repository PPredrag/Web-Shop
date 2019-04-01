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
			<h4 class="h4 t-center" id="nasloviPocetna">
			Naziv Proizvoda
			</h4>
			<div class="hov-img-zoom pos-relative" id="border">
				<img src="{{ asset('images/kids/dp1.jpg') }}" alt="IMG-BANNER">
				<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
				</div>
			</div>
		</div>


		<!-- One Pruduct Details-->
		<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15" >
			<h4 class="h4 t-center" id="nasloviPocetna" style="margin-bottom:5%;">
			Dostupne Veličin
			</h4>
			<ul class="list-inline text-center align-items-center">
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">38</li></a>
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">39</li></a>
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">39.5</li></a>
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">40</li></a>
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">41.5</li></a>

				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">38</li></a>
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">39</li></a>
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">39.5</li></a>
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">40</li></a>
				<a href="#"><li class="list-inline-item" id="shoesNumber" onclick="pisi(this)">41.5</li></a>

			
			</ul>
			<br>
			<h6 class="h6" id="nasloviPocetna" style="margin-bottom:5%;">
			Opis Proizvoda
			</h6>
			<hr>
			<span class="s-text11 t-center">
				Patike koje su lake za nosenje
			</span>
			<hr>
			<br><br>
			<h5 class="h5 t-center" id="darkRed" style="margin-bottom:5%; color:#7b7e82">
			Specifikacija Proizvoda
			</h5>
			<hr>
			<span class="s-text11 t-center">
				Brand : 
			</span>
			<hr>
			<span class="s-text11 t-center">
				Program : 
			</span>
			<hr>
			<span class="s-text11 t-center" id="darkRed">
				<h5 class="h5">					
					CENA  13500.00 din
				</h5>
		
			</span>
			<hr>
			<br>
			<a href="#">
				<button type="button" class="btn btn-success btn-lg btn-block">Dodaj U Korpu</button>
			</a>
		
		</div>	
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30" id="border">
						<img src="{{ asset('images/football/k1.jpg') }}" alt="IMG-BENNER">
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30" id="border">
						<img src="{{ asset('images/football/k1.jpg') }}" alt="IMG-BENNER">
					</div>
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