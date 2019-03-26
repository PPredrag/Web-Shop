@extends('include.app')
@section('content')
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{asset('images/contact/contact.jpg')}});">
<h2 class="l-text2 t-center" id="sivaBojaSlova">
Kontaktirajte nas
</h2>
</section>
<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
<div class="container">
<div class="row">
<div class="col-md-6 p-b-30">

		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1415.441231160504!2d20.38388637002706!3d44.803583965751564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1553585786583" width="100%" height="450" frameborder=""></iframe>

</div>
<div class="col-md-6 p-b-30">
	<form class="leave-comment">
		<h4 class="m-text26 p-b-36 p-t-15">
		Pošaljite Poruku
		</h4>
		<div class="bo4 of-hidden size15 m-b-20">
			<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Vaše Ime">
		</div>
		<div class="bo4 of-hidden size15 m-b-20">
			<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Telefon">
		</div>
		<div class="bo4 of-hidden size15 m-b-20">
			<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Adresa">
		</div>
		<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Poruka"></textarea>
		<div class="w-size25">
			<!-- Button -->
			<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" style="background-color: white; color: black; border: 1px solid gray;">
			Pošalji
			</button>
		</div>
	</form>
</div>
</div>
</div>
</section>

@endsection
@section('footer')

@endsection