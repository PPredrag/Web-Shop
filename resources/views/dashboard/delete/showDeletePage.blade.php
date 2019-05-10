@extends('layoutDasboard.dashboardNew')
@section('content')
@endsection
@section('wrapper')
<div class="alert alert-success text-center" id="">
				Panel za Brisanje Proizvoda
			</div>
@if (!empty($success))
<div class="alert alert-danger text-center" id="sakri">
	{{$success}}
</div>
@endif

<form class="form-horizontal" action="{{route('findForDelete')}}" method="get">
	<label for="inputEmail3" class="col-sm-2 control-label" style="width: 18% !important">Pronadji Barcode</label>
  <div class="form-group">
    
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Pronadji Barcode Proizvoda" name="barcode" style="margin-bottom: 1%;">
    </div>

      <button type="submit" class="btn btn-success" style=" border: 1px solid transparent !important;
  border-radius: 5px !important; margin-left: 3%;">Pronadji Barcode</button>

   </div>
</form>
@endsection
@section('footer')
@endsection