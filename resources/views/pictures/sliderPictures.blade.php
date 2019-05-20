@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
@if(session('success'))
		<div class="alert alert-danger text-center" id="sakri">
				{{session('success')}}
				</div>
		@endif
<div class="panel panel-success">
	<div class="panel-heading text-center">
		Panel za unos slika na početnoj strani Slider delu.
	</div>
	
	<div class="panel-body">
		<form method="post" action="{{route('imageAdd')}}"  enctype="multipart/form-data">
			<div class="form-group{{ $errors->has('statusPicture') ? ' has-error' : '' }}">
				</br>
				<label for="exampleFormControlSelect1">Odaberi Mesto za Unos Slike</label>
				<select class="form-control" id="exampleFormControlSelect1" name="statusPicture">
					<option value="1">Slider Slika</option>
				</select>
				@if ($errors->has('statusPicture'))
				<span class="help-block">
					<strong>{{ $errors->first('statusPicture') }}</strong>
				</span>
				@endif
			</div>
			<div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
				<label for="pictureButton">Odaberi Sliku</label>
				<input type="file" class="form-control-file"  name="picture" >
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
	</div>
	<div class="panel-footer text-center">
		Ovim putem unosite slike koje ce biti prikazane na početnoj strani u Slider delu.
	</div>
</div>
@endsection
@section('footer')
@endsection