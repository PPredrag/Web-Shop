@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<div class="panel panel-success">
	<div class="panel-heading">
		Panel za unos Novih Proizvoda
	</div>
				@if(session('success'))
				<p class="help-block t-center" id="sakri"><b>{{session('success')}}</b></p>
				@endif
	<div class="panel-body">
		{{$id}}
		@foreach($data as $d)
			{{ $d->footweareNumber}}
		@endforeach
	</div>
	</div>	
@endsection

@section('footer')
@endsection



