@extends('layoutDasboard.dashboardNew')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/util.css')}}">
@section('content')
@endsection
@section('wrapper')
<div class="panel panel-success">
	<div class="panel-heading">
		Panel za unos Novih Proizvoda
	</div>
	<div class="panel-body">
		<form method="post" action="{{route('enterProductData')}}"  enctype="multipart/form-data">
			<!-- Form For Model Name -->
			<div class="form-group{{ $errors->has('nazivModela') ? ' has-error' : '' }}" >
				<label for="modelName">Naziv Modela</label>
				<input type="text" class="form-control" id="modelName" placeholder="Naziv Modela" name="nazivModela">
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
				<input type="text" class="form-control" id="Brend" placeholder="Naziv Brenda" name="nazivBrenda">
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
				<textarea class="form-control" rows="3" id="opis" name="opis"></textarea>
				<small class="form-text text-muted">Unestite Opis Proizvoda</small>
				@if ($errors->has('opis'))
				<span class="help-block">
					<strong>{{ $errors->first('opis') }}</strong>
				</span>
				@endif
			</div>
			<!-- Form For Colors -->
			<div class="form-group{{ $errors->has('boja') ? ' has-error' : '' }}">
				<div class="leftbar p-r-20 p-r-0-sm">
					<div class="filter-color p-t-22 p-b-50 bo3" style="padding-bottom: 0;">
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
							<!--<li class="m-r-10">
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
						</ul> -->
						<small class="form-text text-muted">Odaberite GLAVNU boju klikom na jednu od boja</small>
					</div>
				</div>
				@if ($errors->has('boja'))
				<span class="help-block">
					<strong>{{ $errors->first('boja') }}</strong>
				</span>
				@endif
			</div>
		<!-- Form For Meterijal -->
			<div class="form-group{{ $errors->has('vrstaMaterijala') ? ' has-error' : '' }}" >
				<label for="vrstaMaterijala">Vrsta Materijala</label>
				<div class="form-group">
    			<select class="form-control" id="vrstaMaterijala" name="vrstaMaterijala">
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
			      <option value="1">Nije na Sniženju</option>
			      <option value="2">Sniženje</option>
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
    			<input type="text" class="form-control" id="price" placeholder="Unesite Cenu Proizvoda" name="price">
				  </div>
				<small class="form-text text-muted">Unesite cenu proizvoda</small>
				@if ($errors->has('price'))
				<span class="help-block">
					<strong>{{ $errors->first('price') }}</strong>
				</span>
				@endif
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
			<button type="submit" class="btn btn-success">Unesi Podatke</button>
			{{ csrf_field() }}
		</form>
		</br>
		@if(session('success'))
		<p class="zeleno" id="sakri">{{session('success')}}</p>
		@endif
	</div>
	<div class="panel-footer">
		Ovim Putem unosite Nove Proizvode
	</div>
</div>
@endsection()
@section('footer')
@endsection