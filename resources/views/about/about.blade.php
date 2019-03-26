@extends('include.app')
@section('content')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{ asset('images/aboutUs/about.jpg') }});">
<h2 class="l-text2 t-center" id="sivaBojaSlova">
O nama
</h2>
</section>
<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
<div class="container">
<div class="row">
<div class="col-md-4 p-b-30">
	<div class="hov-img-zoom" id="border">
		<img src="{{ asset('images/aboutUs/about2.jpg') }}" alt="IMG-ABOUT">
	</div>
</div>
<div class="col-md-8 p-b-30">
	<h3 class="m-text26 p-t-15 p-b-16">
	Naša Priča
	</h3>
	<p class="p-b-28">
		Phasellus egestas nisi nisi, lobortis ultricies risus semper nec. Vestibulum pharetra ac ante ut pellentesque. Curabitur fringilla dolor quis lorem accumsan, vitae molestie urna dapibus. Pellentesque porta est ac neque bibendum viverra. Vivamus lobortis magna ut interdum laoreet. Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae ultrices orci.
	</p>
	<div class="bo13 p-l-29 m-l-9 p-b-10">
		<p class="p-b-11">
			Kreativnost je samo povezivanje stvari. Kada pitate kreativne ljude kako su uradili nešto, osećaju se malo krivim jer to nisu stvarno uradili, samo su nešto videli. Izgledalo im je očigledno nakon nekog vremena.
		</p>
		<span class="s-text7">
			- Steve Job’s
		</span>
	</div>
</div>
</div>
</div>
</section>

@endsection
@section('footer')
@endsection