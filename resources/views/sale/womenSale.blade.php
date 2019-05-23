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
					<h4 class="m-text14 p-b-7" >
					Kategorije
					</h4>
					<ul class="p-b-5">
						<li class="p-t-4">
							<a href="{{route('sale')}}" class="s-text13 active1">
								Sve
							</a>
						</li>
						<li class="p-t-4">
							<form action="{{route('sortWomen')}}" method="get">
							  <input type="hidden" value="zenska" name="women">
								 <button type="submit" class="letterG">Ženske</button>
						      	{{csrf_field()}}
							</form>
						</li>
						<li class="p-t-4">
							<form action="{{route('sortMan')}}" method="get">
							  <input type="hidden" value="muska" name="man">
								 <button type="submit" class="letterG">Muške</button>
						      	{{csrf_field()}}
							</form>
						</li>
						<li class="p-t-4">
							<form action="{{route('sortKids')}}" method="get">
							  <input type="hidden" value="decija" name="kids">
								 <button type="submit" class="letterG">Dečije</button>
						      	{{csrf_field()}}
							</form>

						</li>
						<li class="p-t-4">
							<form action="{{route('sortSneakers')}}" method="get">
							  <input type="hidden" value="patike" name="patike">
								 <button type="submit" class="letterG">Patike</button>
						      	{{csrf_field()}}
							</form>
						</li>
						<li class="p-t-4">
							<form action="{{route('sortFootball')}}" method="get">
							  <input type="hidden" value="kopacke" name="kopacke">
								 <button type="submit" class="letterG">Kopačke</button>
						      	{{csrf_field()}}
							</form>
						</li>
											
					</ul>
					<div class="filter-color p-t-22 p-b-50 bo3">
						<div class="letterG">
							Odaberi Boju
						</div>
		
				<div class="leftbar p-r-20 p-r-0-sm" id="padingRight">
					<div class="filter-color p-t-22 p-b-15 bo3">
					
						<select class="browser-default custom-select  m-b-10 letterG" id="color">
							<option value="" >Odaberite Boju&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
							<option value="yellow">Žuta</option>
							<option value="#f4b609">Narandžasta</option>
							<option value="red">Crvena</option>
							<option value="grey">Siva</option>
							<option value="green">Zelena</option>
							<option value="pink">Roza</option>
							<option value="blue">Plava</option>
							<option value="purple">Ljubicasta</option>
							<option value="black">Crna</option>
							<option value="white">Bela</option>
							<option value="#724305">Braon</option>
							<option value="#1be5de">Svetlo Plava</option>
							<option value="#51ef39">Svetlo Zelena</option>
							<option value="#242624">Tamno Siva</option>

						</select>
				
						<br>
						<span class="krug1"></span>
						<span class="krug2"></span>
						<span class="krug3"></span>
						<span class="krug4"></span>
						<span class="krug5"></span>
						<span class="krug6"></span>
						<span class="krug7"></span>
						<span class="krug8"></span>
						<span class="krug9"></span>
						<span class="krug10"></span>
						<span class="krug11"></span>
						<span class="krug12"></span>
						<span class="krug13"></span>
						<span class="krug14"></span>
					</div>
				</div>
			
					</div>
					<div class="letterG">
						Kompletna Rasprodaja
						</div>
					<div class="search-product pos-relative bo4 of-hidden">

						<input class="s-text7 size6 p-l-23 p-r-50" id="search-product" type="text" name="product" placeholder="Pretraži Ceo SALE...">
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
						<div class="rs2-select2  of-hidden w-size m-t-5 m-b-5 m-r-10">
							<div class="letterG">
							Cena manja/veća
						</div>
							<select  id="sort1" class="browser-default custom-select  m-b-10 letterG ">
								<option value="">Odaberite &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
								<option value="asc">Od Najjeftinije</option>
								<option value="desc">Od Najskuplje</option>
							</select>

						</div>
						<div class="rs2-select2  of-hidden w-size m-t-5 m-b-5 m-r-10">
			
							<div class="letterG">
							Cena Od-Do
						</div>
							<select  id="sort2" class="browser-default custom-select  m-b-10 letterG" >
								<option value="">Odaberite &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
								<option value="1000">0.00 din - 1000.00 din</option>
								<option value="2000">0.00 din  - 2000.00 din</option>
								<option value="5000">0.00 din  - 5000.00 din</option>
								<option value="10000">0.00 din  - 10 000.00 din</option>
								<option value="20000">0.00 din  - 20 000.00 din</option>
								<option value="30000">0.00 din  - 30 000.00 din</option>
								<option value="40000">0.00 din  - 40 000.00 din</option>
								<option value="50000">0.00 din  - 50 000.00 din</option>
							</select>
							
						</div>
						<div class="rs2-select2  of-hidden w-size m-t-5 m-b-5 m-r-10">
			
							<div class="letterG">
							 Pretraži Veličinu
						</div>
							<select  id="sort3" class="browser-default custom-select  m-b-10 letterG" >
								<option value="">Odaberite &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
									<option value="32">32</option>
									<option value="33">33</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
							</select>
							
							
						</div>
					</div>
					<span class="s-text5 p-t-5 p-b-5" id="countShoes">
						Prikazano je {{count($data)}} od {{$count}} proizvoda
					</span>
					<span class="s-text5 p-t-5 p-b-5" id="countJavaScript">
						
					</span>
				</div>
				<div class="alert alert-danger text-center" id="rezSearch">
				Nema rezltata pretrage po ovom kriterijumu
				</div>
				{{ $data->links() }}
				<div class="row" id="orgDiv">
					
					
					@foreach($data as $value)
					
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50"  >
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
								<a href="" class="block2-name dis-block s-text3 p-b-5" >
									{{$value->name}}
								</a>
								<span class="block2-oldprice m-text7 p-r-5" id="price">
									{{$value->price}},00 din
								</span>
								<span class="block2-newprice m-text8 p-r-5" id="newPrice">
									&nbsp{{$value->newPrice}},00 din
								</span>
							</div>
						</div>
					</div>
					
					@endforeach
					
					<div>
					</div>
				</div>
			
				<div class="row" id="memList">

				</div>
			</div>
		</div>
	</section>
	@endsection
	@section('footer')
	<script>
		// Ajax to sort bz number
	$(document).ready(function(){
		$('#sort3').change(function(e){
			e.preventDefault();
		var numberSort = $('#sort3').val();
		$('#countShoes').hide();
			$('#orgDiv').hide();
			$('#countJavaScript').show();


		 $.ajax({
		 	url:'{{URL::to('sortNumberWomen')}}',
		 	type:'GET',
		 	data:{numberSelect:numberSort},
		 	success:function(data){
		 		$('#memList').show();
				$('#memList').empty();
				var count = data.length;
				var countSpan = 'Prikazano je: '+ count + ' proizvoda'
				$('#countJavaScript').empty();	
				$('#countJavaScript').append(countSpan);
				console.log(data)
						if(data.length === 0){
						$('#rezSearch').show();
					}else{
						$('#rezSearch').hide();
		$.each(data,function(key,value){
			var element='<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" >'+
						'<div class="block2" id="border">' +
						'<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">'+
						'<img src="{{asset("images/productPictures/")}}/'+value.image1+'"  alt="">' +
						'<div class="block2-overlay trans-0-4">' +
						'<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">' +
						'<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>' +
						'<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> </a>' +
						'<div class="block2-btn-addcart w-size1 trans-0-4">' +
						'<a href="{{url("lookProduct/" )}}/'+value.id+'" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" id="border">' +
						'Pregledaj' +
						'</a>' +
						'</div>' +
						'</div>' +
						'</div>' +
						'<div class="block2-txt p-t-20" id="spanPadding">' +
						'<a href="" class="block2-name dis-block s-text3 p-b-5" >' +value.name +
						' </a>' +
						' <span class="block2-oldprice m-text7 p-r-5"> '+value.price+' ,00 din</span> '+
						' <span class="block2-newprice m-text8 p-r-5"> '+value.newPrice+' ,00 din</span> '+				 
						' </div> </div></div>  ';
			$('#memList').append(element); //append it to anywhere in DOM using selector
							});
						}
		 	 }
		  });
		});
	});

	// Ajax to search ALL product by key type
	$(document).ready(function(){
		$('#rezSearch').hide();
		$('#countJavaScript').hide();
		$('#search-product').keyup(function(e){
			e.preventDefault();
			$('#countShoes').hide();
			$('#orgDiv').hide();
			$('#countJavaScript').show();
			var inputValue = $('#search-product').val();
			console.log(inputValue)
			$.ajax({
				type:'GET',
				url:'{{URL::to('searchSaleProducts')}}',
				data:{search:inputValue},
				success:function(data){
				$('#memList').show();
				$('#memList').empty();
				var count = data.length;
				var countSpan = 'Prikazano je: '+ count + ' proizvoda'
				$('#countJavaScript').empty();	
				$('#countJavaScript').append(countSpan);
				
						if(data.length === 0){
						$('#rezSearch').show();
					}else{
						$('#rezSearch').hide();
		$.each(data,function(key,value){
			var element='<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" >'+
						'<div class="block2" id="border">' +
						'<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">'+
						'<img src="{{asset("images/productPictures/")}}/'+value.image1+'"  alt="">' +
						'<div class="block2-overlay trans-0-4">' +
						'<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">' +
						'<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>' +
						'<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> </a>' +
						'<div class="block2-btn-addcart w-size1 trans-0-4">' +
						'<a href="{{url("lookProduct/" )}}/'+value.id+'" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" id="border">' +
						'Pregledaj' +
						'</a>' +
						'</div>' +
						'</div>' +
						'</div>' +
						'<div class="block2-txt p-t-20" id="spanPadding">' +
						'<a href="" class="block2-name dis-block s-text3 p-b-5" >' +value.name +
						' </a>' +
						' <span class="block2-oldprice m-text7 p-r-5"> '+value.price+' ,00 din</span> '+
						' <span class="block2-newprice m-text8 p-r-5"> '+value.newPrice+' ,00 din</span> '+				 
						' </div> </div></div>  ';
			$('#memList').append(element); //append it to anywhere in DOM using selector
							});
						}
				}

			});
		});
		
	});	

	// Ajax to color select
	$(document).ready(function(){
		$('#rezSearch').hide();
		$('#countJavaScript').hide();
		$('#color').change(function(e){
			e.preventDefault();
			var color = $('#color').val();
			$('#countShoes').hide();
			$('#countJavaScript').show();
			
			$.ajax({
				type:'GET',
				url:'{{URL::to('sortColorWomen')}}',
				data:{colorValue:color},
				success:function(data){
				$('#orgDiv').hide();
				$('#memList').show();
				$('#memList').empty();

				var count = data.length;
				var countSpan = 'Prikazano je: '+ count + ' proizvoda'
				$('#countJavaScript').empty();	
				$('#countJavaScript').append(countSpan);

				console.log(data);
					if(data.length === 0){
						$('#rezSearch').show();
					}else{
						$('#rezSearch').hide();
		$.each(data,function(key,value){
			var element='<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" >'+
						'<div class="block2" id="border">' +
						'<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">'+
						'<img src="{{asset("images/productPictures/")}}/'+value.image1+'"  alt="">' +
						'<div class="block2-overlay trans-0-4">' +
						'<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">' +
						'<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>' +
						'<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> </a>' +
						'<div class="block2-btn-addcart w-size1 trans-0-4">' +
						'<a href="{{url("lookProduct/" )}}/'+value.id+'" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" id="border">' +
						'Pregledaj' +
						'</a>' +
						'</div>' +
						'</div>' +
						'</div>' +
						'<div class="block2-txt p-t-20" id="spanPadding">' +
						'<a href="" class="block2-name dis-block s-text3 p-b-5" >' +value.name +
						' </a>' +
						' <span class="block2-oldprice m-text7 p-r-5"> '+value.price+' ,00 din</span> '+
						' <span class="block2-newprice m-text8 p-r-5"> '+value.newPrice+' ,00 din</span> '+				 
						' </div> </div></div>  ';
			$('#memList').append(element); //append it to anywhere in DOM using selector
							});
						}		
					}
				})

		});

	});

	// Ajax script to for select range of prices
	$(document).ready(function(){
				$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});
		$('#countJavaScript').hide();
		$('#sort2').change(function(e){
			e.preventDefault();
			$('#rezSearch').hide();
			$('#countShoes').hide();
			$('#countJavaScript').show();
			var sortPrice = $('#sort2').val();
		
			$.ajax({
			type:'GET',
			url:'{{URL::to('sortPriceWomen')}}',
			data:{dataRange:sortPrice},
			success:function(data){
				$('#orgDiv').hide();
				$('#memList').show();
				$('#memList').empty();
			var count = data.length;
			var countSpan = 'Prikazano je: '+ count + ' proizvoda'
			$('#countJavaScript').empty();	
			$('#countJavaScript').append(countSpan);
			if(data.length === 0){
						$('#rezSearch').show();
					}else{
						$('#rezSearch').hide();

			$.each(data,function(key,value){
	var element='<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" >'+
						'<div class="block2" id="border">' +
						'<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">'+
						'<img src="{{asset("images/productPictures/")}}/'+value.image1+'"  alt="">' +
						'<div class="block2-overlay trans-0-4">' +
						'<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">' +
						'<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>' +
						'<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> </a>' +
						'<div class="block2-btn-addcart w-size1 trans-0-4">' +
						'<a href="{{url("lookProduct/" )}}/'+value.id+'" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" id="border">' +
						'Pregledaj' +
						'</a>' +
						'</div>' +
						'</div>' +
						'</div>' +
						'<div class="block2-txt p-t-20" id="spanPadding">' +
						'<a href="" class="block2-name dis-block s-text3 p-b-5" >' +value.name +
						'</a>' +
						' <span class="block2-oldprice m-text7 p-r-5"> '+value.price+' ,00 din</span> '+
						' <span class="block2-newprice m-text8 p-r-5"> '+value.newPrice+' ,00 din</span> '+
						' </div> </div></div>  ';
					$('#memList').append(element); //append it to anywhere in DOM using selector
							});
						  }
						}
					});
				});
				
			});
				// Ajax script to sort from Cheapest to Expensive and swap
				$(document).ready(function(){
					$.ajaxSetup({
			headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
			});
					$('#memList').hide();
					$('#sort1').change(function(e){
					$('#countJavaScript').hide();
					$('#countShoes').show();	
					var host = "{{URL::to('/sortDescWomen')}}";
					$('#rezSearch').hide();
					var search = $('#sort1').val();
					e.preventDefault();
			$.ajax({
				type:'GET',
				url:host,
				data:{sendToController:search},
				success:function(data){
					$('#orgDiv').hide();
					$('#memList').show();
					$('#memList').empty();
					$.each(data,function(key,value){
			var element='<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" >'+
						'<div class="block2" id="border">' +
						'<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">'+
						'<img src="{{asset("images/productPictures/")}}/'+value.image1+'"  alt="">' +
						'<div class="block2-overlay trans-0-4">' +
						'<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">' +
						'<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>' +
						'<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i> </a>' +
						'<div class="block2-btn-addcart w-size1 trans-0-4">' +
						'<a href="{{url("lookProduct/" )}}/'+value.id+'" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" id="border">' +
						'Pregledaj' +
						'</a>' +
						'</div>' +
						'</div>' +
						'</div>' +
						'<div class="block2-txt p-t-20" id="spanPadding">' +
						'<a href="" class="block2-name dis-block s-text3 p-b-5" >' +value.name +
						' </a>' +
						' <span class="block2-oldprice m-text7 p-r-5"> '+value.price+' ,00 din</span> '+
						' <span class="block2-newprice m-text8 p-r-5"> '+value.newPrice+' ,00 din</span> '+
						' </div> </div></div>  ';
			$('#memList').append(element); //append it to anywhere in DOM using selector
									});
								}
					 		});						
						});
					});
					</script>
					@endsection