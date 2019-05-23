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