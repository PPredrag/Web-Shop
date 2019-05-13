@extends('include.app')
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url({{ asset('images/banner/sale.jpg
	')}});">
	<h2 class="l-text2 t-center" id="sivaBojaSlova">
	SALE
	</h2>
	<p class="m-text13 t-center" id="sivaBojaSlova">
		Proizvodi na Popustu
	</p>
</section>
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
					Kategorije
					</h4>
					<ul class="p-b-54">
						<li class="p-t-4">
							<a href="{{route('welcome')}}" class="s-text13 active1">
								Sve
							</a>
						</li>
						<li class="p-t-4">
							<a href="#" class="s-text13">
								Ženske
							</a>
						</li>
						<li class="p-t-4">
							<a href="#" class="s-text13">
								Muške
							</a>
						</li>
						<li class="p-t-4">
							<a href="#" class="s-text13">
								Dečije
							</a>
						</li>
						<li class="p-t-4">
							<a href="#" class="s-text13">
								Patike
							</a>
						</li>
						<li class="p-t-4">
							<a href="#" class="s-text13">
								Kopačke
							</a>
						</li>
						<li class="p-t-4">
							<a href="#" class="s-text13">
								Koža
							</a>
						</li>
						<li class="p-t-4">
							<a href="#" class="s-text13">
								Platnene
							</a>
						</li>
						<li class="p-t-4">
							<a href="#" class="s-text13">
								Koža/Platno
							</a>
						</li>
						
					</ul>
					<div class="filter-color p-t-22 p-b-50 bo3">
						<div class="m-text15 p-b-12">
							Odaberi Boju
						</div>
						<ul class="flex-w">
							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
								<label class="color-filter color-filter1" for="color-filter1"></label>
							</li>
							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
								<label class="color-filter color-filter2" for="color-filter2"></label>
							</li>
							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
								<label class="color-filter color-filter3" for="color-filter3"></label>
							</li>
							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
								<label class="color-filter color-filter4" for="color-filter4"></label>
							</li>
							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
								<label class="color-filter color-filter5" for="color-filter5"></label>
							</li>
							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
								<label class="color-filter color-filter6" for="color-filter6"></label>
							</li>
							<li class="m-r-10">
								<input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
								<label class="color-filter color-filter7" for="color-filter7"></label>
							</li>
						</ul>
					</div>
					<div class="search-product pos-relative bo4 of-hidden">
						<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Pretraži Proizvode...">
						<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
						<i class="fs-12 fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!--  -->
				<div class="flex-sb-m flex-w p-b-35">
					<div class="flex-w">
						<form action="{{route('sortDesc')}}" method="get">
							<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" name="sorting" id="sort1">
								
								<option value="asc">Od Najjeftinije</option>
								<option value="desc">Od Najskuplje</option>
							</select>
							<button type="submit">klik</button>
						</div>
						{{ csrf_field() }}
						</form>
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" name="sorting2">
								<option>Cena</option>
								<option>0.00 din - 1000.00 din</option>
								<option>1000.00 din - 2000.00 din</option>
								<option>2000.00 din - 5000.00 din</option>
								<option>5000.00 din - 10000.00 din</option>
								<option>Više od 10000.00 din </option>
							</select>
						</div>
					</div>
					<span class="s-text8 p-t-5 p-b-5">
						Prikazano je {{count($data)}} od {{$count}} proizvoda
					</span>
				</div>
				{{ $data->links() }}
				<div class="row">
					
					
					@foreach($data as $value)
					
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" >
						<!-- Block2 -->
						<div class="block2" id="border">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
								<img src="{{ asset('images/productPictures/' . $value->image1) }}" alt="IMG-PRODUCT">
								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a href="{{url('lookProduct/' . $value->id)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" id="border">
											Pregledaj
										</a>
									</div>
								</div>
							</div>
							<div class="block2-txt p-t-20" id="spanPadding">
								<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5" >
									Spring Diadora
								</a>
								<span class="block2-oldprice m-text7 p-r-5">
									{{$value->price}}.00 din
								</span>
								<span class="block2-newprice m-text8 p-r-5">
									{{$value->newPrice}}.00 din
								</span>
							</div>
						</div>
					</div>
					
					@endforeach
					
					
					
					
					<!-- Pagination -->
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>


</section>
@endsection
@section('footer')
<script>
	
	$(document).ready(function(){
		var sortVal = $("#sort1 option:selected").val();
		$('#sort1').click(function(){
			alert('sortVal');
		});

	});
</script>
@endsection