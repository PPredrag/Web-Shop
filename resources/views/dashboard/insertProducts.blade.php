@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
@if (!empty($success))
<div class="alert alert-danger text-center" id="sakri">
	{{$success}}
</div>
@endif
<div class="panel panel-success">
	<div class="panel-heading text-center">
		Panel za unos Novih Proizvoda
	</div>
				@if(session('success'))
				<p class="help-block t-center" id="sakri"><b>{{session('success')}}</b></p>
				@endif
	<div class="panel-body">
		<form method="post" action="{{route('enterProductData')}}"  enctype="multipart/form-data">
			<!-- Form For Model Barcode -->
			<div class="form-group{{ $errors->has('barCode') ? ' has-error' : '' }}" >
				<label for="barCode">Bar Code Modela</label>
				<input type="text" class="form-control" id="barCode" placeholder="Unesite BarCode" name="barCode" value="{{old('barCode')}}">
				<small class="form-text text-muted">Unestite Bar Code</small>
				@if ($errors->has('barCode'))
				<span class="help-block">
					<strong>{{ $errors->first('barCode') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Model Name -->
			<div class="form-group{{ $errors->has('nazivModela') ? ' has-error' : '' }}" >
				<label for="modelName">Naziv Modela</label>
				<input type="text" class="form-control" id="modelName" placeholder="Naziv Modela" name="nazivModela" value="{{old('nazivModela')}}">
				<small class="form-text text-muted">Unestite pun naziv modela</small>
				@if ($errors->has('nazivModela'))
				<span class="help-block">
					<strong>{{ $errors->first('nazivModela') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Model  Brend -->
			<div class="form-group{{ $errors->has('nazivBrenda') ? ' has-error' : '' }}" >
				<label for="Brend">Naziv Brenda</label>
				<input type="text" class="form-control" id="Brend" placeholder="Naziv Brenda" name="nazivBrenda" value="{{old('nazivBrenda')}}">
				<small class="form-text text-muted">Unestite pun Brenda</small>
				@if ($errors->has('nazivBrenda'))
				<span class="help-block">
					<strong>{{ $errors->first('nazivBrenda') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Description -->
			<div class="form-group{{ $errors->has('opis') ? ' has-error' : '' }}" >
				<label for="opis">Opis Proizvoda</label>
				<textarea class="form-control" rows="3" id="opis" name="opis">{{old('opis')}}</textarea>
				<small class="form-text text-muted">Unestite Opis Proizvoda</small>
				@if ($errors->has('opis'))
				<span class="help-block">
					<strong>{{ $errors->first('opis') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Colors -->
			<div class="form-group{{ $errors->has('color1') ? ' has-error' : '' }}">
				<div class="leftbar p-r-20 p-r-0-sm" id="padingRight">
					<div class="filter-color p-t-22 p-b-15 bo3">
						<div class="m-text15 p-b-12">
							Odaberi Boju
						</div>
						<label for="sel1">Odaberite GLAVNU boju </label>
						<select class="form-control" id="sel1" name="color1">
							<option value="0" >----</option>
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
					</div>
				</div>
				@if ($errors->has('color1'))
				<span class="help-block">
					<strong>{{ $errors->first('color1') }}</strong>
				</span>
				@endif
			</div>
			<!-- For for a Secound Color -->
			<div class="form-group{{ $errors->has('color2') ? ' has-error' : '' }}">
				<div class="leftbar p-r-20 p-r-0-sm" id="padingRight">
					<div class="filter-color p-t-22 p-b-50 bo3" style="padding-bottom: 0;">
						<div class="m-text15 p-b-12">
							Odaberi Boju
						</div>
						<label for="sel1">Odaberite DRUGU boju </label>
						<select class="form-control" id="sel1" name="color2">
							<option >----</option>
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
					</div>
				</div>
				@if ($errors->has('color2'))
				<span class="help-block">
					<strong>{{ $errors->first('color2') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Meterijal -->
			<div class="form-group{{ $errors->has('vrstaMaterijala') ? ' has-error' : '' }}" >
				<label for="vrstaMaterijala">Vrsta Materijala</label>
				<div class="form-group">
					<select class="form-control" id="vrstaMaterijala" name="vrstaMaterijala">
						<option value="0" >----</option>
						<option value="koza">Koža</option>
						<option value="vestacka">Vestačka Koža</option>
						<option value="platno">Platno</option>
						<option value="kozaPlatno">Koža - Platno</option>
					</select>
				</div>
				<small class="form-text text-muted">Odaberite vrstu materijala proizvoda</small>
				@if ($errors->has('vrstaMaterijala'))
				<span class="help-block">
					<strong>{{ $errors->first('vrstaMaterijala') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Category -->
			<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}" >
				<label for="category">Kategorija Prozvoda</label>
				<div class="form-group">
					<select class="form-control" id="category" name="category">
						<option value="0" >----</option>
						<option value="muska">Muška</option>
						<option value="zenska">Ženska</option>
						<option value="decija">Decija</option>
					</select>
				</div>
				<small class="form-text text-muted">Odaberite Kategoriju proizvoda</small>
				@if ($errors->has('category'))
				<span class="help-block">
					<strong>{{ $errors->first('category') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Type -->
			<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}" >
				<label for="type">Vrsta Prozvoda</label>
				<div class="form-group">
					<select class="form-control" id="type" name="type">
						<option value="0">----</option>
						<option value="patike">Patike</option>
						<option value="kopacke">Kopačke</option>
					</select>
				</div>
				<small class="form-text text-muted">Odaberite Vrstu proizvoda</small>
				@if ($errors->has('type'))
				<span class="help-block">
					<strong>{{ $errors->first('type') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Status Sale or NOT Sale -->
			<div class="form-group{{ $errors->has('sale') ? ' has-error' : '' }}" >
				<label for="sale">Status Proizvoda</label>
				<div class="form-group">
					<select class="form-control" id="sale" name="sale">
						<option value="0">----</option>
						<option value="1">Nije na Sniženju</option>
					</select>
				</div>
				<small class="form-text text-muted">Odaberite da li je proizvod na SNIŽENJU</small>
				@if ($errors->has('sale'))
				<span class="help-block">
					<strong>{{ $errors->first('sale') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Product Price -->
			<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}" >
				<label for="price">Cena Proizvoda</label>
				<div class="form-group">
					<input type="text" class="form-control" id="price" placeholder="Unesite Cenu Proizvoda" name="price" value="{{old('price')}}">
				</div>
				<small class="form-text text-muted">Unesite cenu proizvoda</small>
				@if ($errors->has('price'))
				<span class="help-block">
					<strong>{{ $errors->first('price') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group" >
				
				<div class="form-group">
					<input type="hidden" class="form-control" id="price" placeholder="Unesite Cenu Proizvoda" name="statusPicture" value="">
				</div>
			</div>
			
			<div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
				<label for="exampleFormControlFile1">Odaberi Sliku</label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture">
				@if ($errors->has('picture'))
				<span class="help-block">
					<strong>{{ $errors->first('picture') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group{{ $errors->has('picture2') ? ' has-error' : '' }}">
				<label for="exampleFormControlFile1">Odaberi Sliku 2</label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture2">
				@if ($errors->has('picture2'))
				<span class="help-block">
					<strong>{{ $errors->first('picture2') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group{{ $errors->has('picture3') ? ' has-error' : '' }}">
				<label for="exampleFormControlFile1">Odaberi Sliku3</label>
				<input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture3">
				@if ($errors->has('picture3'))
				<span class="help-block">
					<strong>{{ $errors->first('picture3') }}</strong>
				</span>
				@endif
			</div>
			<button type="submit" class="btn btn-success">Unesi Podatke</button>
			{{ csrf_field() }}
		</form>
		</br>
		
	</div>
	<div class="panel-footer">
		Ovim Putem unosite Nove Proizvode
	</div>
</div>
@endsection
@section('footer')
@endsection