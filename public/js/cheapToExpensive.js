	$(document).ready(function(){
			$.ajaxSetup({
	headers: {
	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
	});
			$('#memList').hide();
			$('#sort1').change(function(e){
			var host = "{{URL::to('/sortDesc')}}";
				var search = $('#sort1').val();
				e.preventDefault();
				console.log(search);
				console.log(host);
				
				
			$.ajax({
				type:'GET',
				url:host,
				data:{sendToController:search},
				success:function(data){
					$('#orgDiv').hide();
					$('#memList').show();
					$('#memList').empty();
					console.log(data);
					$.each(data,function(key,value){
							
		
		var url = '{{ asset('/images/productPictures/') }}';
		var slika = url + value.image1;
					console.log(slika);
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
							'<a href="" class="block2-name dis-block s-text3 p-b-5" >' +
							'Spring Diadora </a>' +
				' <span class="block2-oldprice m-text7 p-r-5"> '+value.price+' 00 din</span> '+
				' <span class="block2-newprice m-text8 p-r-5"> '+value.newPrice+' 00 din</span> '+
				
			' </div> </div></div>  ';
			$('#memList').append(element); //append it to anywhere in DOM using selector
			});
						    }
				    	});
					
					});
				});