@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<div class="panel panel-success">
	<div class="panel-heading">
		Panel za unos Novih Proizvoda
	</div>
	
	<div class="panel-body">
		<div class="panel panel-success">
	
			
			@if(session('success'))
			<p class="help-block t-center" id="sakri"><b>{{session('success')}}</b></p>
			@endif	<div class="panel-body">
				<form action="{{url('insertQty/' . $id )}}" method="post">
					<div class="form-group{{ $errors->has('numberModel') ? ' has-error' : '' }}">
						<div class="leftbar p-r-20 p-r-0-sm" id="padingRight">
							<div class="filter-color p-t-22 p-b-50 bo3">
								<label for="sel1">Odbarite Broj Modela </label>
								<select class="form-control" id="sel1" name="number">
									@foreach($data as $d)
									<option value="{{$d->footweareNumber}}">{{$d->footweareNumber}}</option>
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
					<div class="form-group{{ $errors->has('qtyModel') ? ' has-error' : '' }}" >
						<label for="qtyModel">Unesiti Količinu</label>
						<input type="text" class="form-control" id="qtyModel" placeholder="Unesiti Količinu" name="qty" value="{{old('qtyModel')}}">
						<small class="form-text text-muted">Unestite količinu</small>
						@if ($errors->has('qtyModel'))
						<span class="help-block">
							<strong>{{ $errors->first('qtyModel') }}</strong>
						</span>
						@endif
					</div>
					<button type="submit" class="btn btn-success">Unesi Podatke</button>
					{{ csrf_field() }}
				</form>
				
			</div>
		</div>
	</div>
	@if(session('success'))
	<p class="help-block t-center" id="sakri"><b>{{session('success')}}</b></p>
	@endif
</div>
	@endsection
	@section('footer')
	@endsection