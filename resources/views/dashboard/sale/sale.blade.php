@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<div class="panel panel-success">
	
		<div class="panel-heading text-center">
			Ovim putem stavljate proizvode u kategoriju Rasprodaja/SALE
		</div>
		@if($status == 2)
			<div class="alert alert-danger text-center" >
			Ovaj Artikal se nalazi u Rasprodaji/SALE, cena je {{$newPrice}},00din
			
		</div>
		@endif
		@if(session('success'))
		<div class="alert alert-danger text-center" id="sakri" >
			{{session('success')}}
			@endif
		</div>
		
		@foreach($data as $value )
		<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" id="responsiveSlika">
			<h4 class="h4 t-center" id="nasloviPocetna">
			Barcode : {{$value->barcode}}
			</h4>
			<h4 class="h4 t-center" id="nasloviPocetna">
			Naziv : {{$value->name}}
			</h4>
			<div class="hov-img-zoom pos-relative" id="border">
				<img src="{{ asset('images/productPictures/' . $value->image1) }}" alt="IMG-BANNER">
				<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
					
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" id="responsiveSlika">
			<h4 class="h4 t-center" id="nasloviPocetna">
			Marka : {{$value->brand}}
			</h4>
			<h4 class="h4 t-center" id="nasloviPocetna">
			<b style="color: red">Stara Cena : {{$value->price}} ,00din</b>
			</h4>
			<div class="hov-img-zoom pos-relative" id="border">
				<img src="{{ asset('images/productPictures/' . $value->image2) }}" alt="IMG-BANNER">
				<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
					
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15" id="responsiveSlika">
			<h4 class="h4 t-center" id="nasloviPocetna">
			Vrsta : {{$value->type}}
			</h4>
			<h4 class="h4 t-center" id="nasloviPocetna">
			Kategorija: {{$value->category}}
			</h4>
			<div class="hov-img-zoom pos-relative" id="border">
				<img src="{{ asset('images/productPictures/' . $value->image3) }}" alt="IMG-BANNER">
				<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
					
				</div>
			</div>
		</div>
		@endforeach		
		<form class="form-horizontal" action="{{url('changeToSale/' . $value->id)}}" method="get">
			<div class="form-group{{ $errors->has('cena') ? ' has-error' : '' }}" ></div>
			<label for="inputEmail3" class="col-sm-2 control-label" style="width: 18% !important">Nova Cena</label>
			<div class="form-group">
				
				<div class="col-sm-7">
					<input type="text" class="form-control" id="inputEmail3" placeholder="Unesite Novu Cenu" name="cena" style="margin-bottom: 1%;">
				</div>
				
				<button type="submit" class="btn btn-success" style=" border: 1px solid transparent !important;
				border-radius: 5px !important; margin-left: 4%;">Promeni Cenu</button>
			</div>
			<div class="text-center">
				@if ($errors->has('cena'))
				<span class="help-block">
					<strong>{{ $errors->first('cena') }}</strong>
				</span>
				@endif

			</div>
			
			{{ csrf_field() }}
		</form>
		<div class="panel-footer text-center" id="panelFooter">
			Ovim putem stavljate proizvode u kategoriju Rasprodaja/SALE
		</div>
	</div>
</div>
@endsection
@section('footer')
@endsection