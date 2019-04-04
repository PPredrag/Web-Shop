@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<div class="panel panel-success">
	<div class="panel-heading">
		Panel za unos Slika Nova Sezona/Ovaj odeljak mora imati <b class="red">TAČNO 6 SLIKA</b>
	</div>
	
	<div class="panel-body">
		<form method="post" action="{{route('insertNewShoes')}}"  enctype="multipart/form-data">
			<div class="form-group{{ $errors->has('statusPicture') ? ' has-error' : '' }}">
				</br>
				<label for="exampleFormControlSelect1">Odaberi Mesto za Unos Slike</label>
				<select class="form-control" id="exampleFormControlSelect1" name="statusPicture">
					<option value="2">Glavna Strana / Nova Sezona</option>
				</select>
				@if ($errors->has('statusPicture'))
				<span class="help-block">
					<strong>{{ $errors->first('statusPicture') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
				<label for="pictureButton">Odaberi Sliku</label>
				<input type="file" class="form-control-file" name="picture" >
				@if ($errors->has('picture'))
				<span class="help-block">
					<strong>{{ $errors->first('picture') }}</strong>
				</span>
				@endif
			</div>
			<button type="submit" class="btn btn-success">Učitaj Sliku</button>
			{{ csrf_field() }}
		</form>
		</br>
		@if(session('success'))
		<p class="zeleno" id="sakri">{{session('success')}}</p>
		@endif
	</div>
	<div class="panel-footer">
		Ovim putem unosite slike koje ce biti prikazane na početnoj strani u Nova Sezona Delu.
	</div>
		
	</div>
	@endsection
	@section('footer')
	@endsection