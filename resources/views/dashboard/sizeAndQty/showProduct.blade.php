@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
@foreach($data as $value)
@if(session()->has('message'))
<div class="alert alert-danger text-center" id="sakri">
	{{ session()->get('message') }}
</div>
@endif
<div class="alert alert-success text-center" id="">
	Prikazan je proizvod sa Barcodom {{$value->barcode}}
</div>
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
	Cena : {{$value->price}},00din
	</h4>
	<div class="hov-img-zoom pos-relative" id="border">
		<img src="{{ asset('images/productPictures/' . $value->image2) }}" alt="IMG-BANNER">
		<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
			
		</div>
	</div>
</div>
<div class="col-sm-8 col-md-6 col-lg-4 m-l-r-auto p-t-15 p-b-15"id="responsiveSlika">
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
<form action="{{url('insertDataQtyNumbers/' . $value->id)}}" method="get">
	<div class="form-group{{ $errors->has('numberModel') ? ' has-error' : '' }}">
		<div class="leftbar p-r-20 p-r-0-sm" id="padingRight">
			<div class="filter-color p-t-22 p-b-50 bo3">
				<label for="sel1">Odbarite Broj Modela </label>
				<select class="form-control" id="sel1" name="number">
					@foreach($dataJoin as $value)
					<option value="{{$value->footweareNumber}}">{{$value->footweareNumber}}</option>
					@endforeach
				</select>
			</div>
		</div>
		@if ($errors->has('numberModel'))
		<span class="help-block">
			<strong>{{ $errors->first('numberModel') }}</strong>
		</span>
		@endif
	</div>
	<div class="form-group{{ $errors->has('kolicina') ? ' has-error' : '' }}" >
		<label for="kolicina">Unesiti Količinu</label>
		<input type="text" class="form-control" id="kolicina" placeholder="Unesiti Količinu" name="kolicina" value="{{old('kolicina')}}">
		<small class="form-text text-muted">Unestite količinu</small>
		@if ($errors->has('kolicina'))
		<span class="help-block">
			<strong>{{ $errors->first('kolicina') }}</strong>
		</span>
		@endif
	</div>
	<button type="submit" class="btn btn-success">Unesi Podatke</button>
	{{ csrf_field() }}
</form>
@endforeach
@endsection
@section('footer')
@endsection