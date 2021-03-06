@extends('include.app')
@section('content')
<!-- Slide1 -->
<section class="slide1">
<div class="wrap-slick1">
<div class="slick1">
    <!-- Insert data from DB in Slider-->
@foreach($data as $value)

  @if($value->status==1)
<div class="item-slick1 item1-slick1" style="background-image: url({{asset('images/sliderImages/' . $value->name  )}});">
    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
        <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown" id="sivaBojaSlova">
           SPORTSKA OBUĆA
        </span>
        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp" id="sivaBojaSlova">
       Nova Kolekcija
        </h2>
        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn" >
          
        </div>
    </div>
</div>
@endif
@endforeach

</div>
</div>
</section>
<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
    <div class="sec-title p-b-60">
        <h3 class="m-text5 t-center" id="nasloviPocetna">
        NOVA SEZONA
        </h3>
    </div>
    <div class="container">
        <div class="row">
            @foreach($newSeason as $value)
            @if($value->statusPicture==2)
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30" id="border">
                    <img src="{{ asset('images/productPictures/' . $value->image1) }}" alt="IMG-BENNER">
                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="{{url('lookProduct/' . $value->id)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" id="border">
                            Pregledaj
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105">
<div class="container">
<div class="sec-title p-b-60">
<h3 class="m-text5 t-center" id="nasloviPocetna">
NAJNOVIJI PROIZVODI
</h3>
</div>
<!-- Slide2 -->
<div class="wrap-slick2">
<div class="slick2">
    @foreach($newShoes as $value)
          @if($value->statusPicture==3)
    <div class="item-slick2 p-l-15 p-r-15">
        
        <div class="block2" id="border">
            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                <img src="{{ asset('images/productPictures/' . $value->image1) }}" alt="IMG-PRODUCT">
                <div class="block2-overlay trans-0-4">
                   
                    <div class="block2-btn-addcart w-size1 trans-0-4">
                        <!-- Button -->
                         <a href="{{url('lookProduct/' . $value->id)}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4" id="border">
                Pregledaj
            </a>
                    </div>
                </div>
            </div>
            <div class="block2-txt p-t-20" id="spanPadding">
                <a href="" class="block2-name dis-block s-text3 p-b-5">
                    {{$value->name}}
                </a>
                <span class="block2-price m-text6 p-r-5">
                   {{$value->price}} ,00 DIN
                </span>
            </div>
        </div>
    </div>
    @endif
    @endforeach

</div>
</div>
</div>
</section>
<!-- Banner2 -->
<section class="banner2 bg5 p-t-55 p-b-55">
    <div class="sec-title p-b-52">
    <h3 class="m-text5 t-center" id="nasloviPocetna">
        ZA NAJMLAĐE
    </h3>
</div>
<div class="container">
<div class="row">
    @foreach($forKids as $value)
      @if($value->statusPicture == 4)
<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15" >
    <div class="hov-img-zoom pos-relative" id="border">
        <img src="{{asset('images/productPictures/' . $value->image1)}}" alt="IMG-BANNER">
        <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15" >
            <span class="m-text9 p-t-45 fs-20-sm" id="sivaBojaSlova">
                Lakoća Trčanja
            </span>
            <h3 class="l-text1 fs-35-sm" id="sivaBojaSlova">
            Sa Nama
            </h3>
            <a href="{{route('kids')}}" class="s-text4 hov2 p-t-20 " id="sivaBojaSlova">
                Pregledaj Kolekciju
            </a>
        </div>
    </div>
</div>
    @endif
  @endforeach  

</div>
</div>
</section>
<!-- RASPRODAJA -->
<section class="blog bgwhite p-t-94 p-b-65">
<div class="container">
<div class="sec-title p-b-52">
<h3 class="m-text5 t-center" id="nasloviPocetna">
PROIZVODI NA POPUSTU
</h3>
</div>
<div class="row">

    @foreach($forSale as $value)
      @if($value->statusPicture==5)
<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
    <!-- Block3 -->
    <div class="block3" id="border"> 
        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
        <a href="{{route('sale')}}" class="block3-img dis-block hov-img-zoom">
            <img src="{{asset('images/productPictures/' . $value->image1)}}" alt="IMG-BLOG">
        </a>
    </div>
        <div class="block3-txt p-t-14" style="padding: 10px;">
            <h4 class="p-b-7">
            <a href="" class="m-text11">
               Obuća koja je savršena za sve prilike po najpovoljnijim cenama.....
            </a>
            </h4>
             
            <p class="s-text8 p-t-16">
               Značenje reči SALE kod nas to i stvarno znači!!! Posetite našu stranu sa popustima i do 80% od prodajne cene. Kod nas SALE stvrano znači <a href="{{route('sale')}}"><b style="color:black;">RASPRODAJA</b></a>
            </p>
        </div>
    </div>
</div>
@endif
@endforeach

</div>
</div>
</section>

<!-- ŽEnska Obuca -->
<section class="blog bgwhite p-t-94 p-b-65">
<div class="container">
<div class="sec-title p-b-52">
<h3 class="m-text5 t-center"  id="nasloviPocetna">
Ženska Obuća
</h3>
</div>
<div class="row">

    @foreach($forWomen as $value)
      @if($value->statusPicture==7 && $value->category == 'zenska')
<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
    <!-- Block3 -->
    <div class="block3" id="border"> 
        <div class="block2-img wrap-pic-w of-hidden pos-relative ">
        <a href="{{route('women')}}" class="block3-img dis-block hov-img-zoom">
            <img src="{{asset('images/productPictures/' . $value->image1)}}" alt="IMG-BLOG">
        </a>
    </div>
        <div class="block3-txt p-t-14" style="padding: 10px;">
            <h4 class="p-b-7">
            <a href="" class="m-text11">
               Obuća koja je savršena za sve prilike po najpovoljnijim cenama.....
            </a>
            </h4>
             
            <p class="s-text8 p-t-16">
               Značenje reči LAKOĆA kod nas to stvarno znači!!! Posetite našu stranu i odaberite jedan od modela kako bi ste sa LAKOĆOM hodali, trčali, šetali... <a href="{{route('women')}}"><b style="color:black;">ŽENSKA OBUĆA</b></a>
            </p>
        </div>
    </div>
</div>
@endif
@endforeach

</div>
</div>
</section>

<!-- Muška Obuca -->
<section class="blog bgwhite p-t-94 p-b-65">
<div class="container">
<div class="sec-title p-b-52">
<h3 class="m-text5 t-center"  id="nasloviPocetna">
Muška Obuća
</h3>
</div>
<div class="row">

    @foreach($forMen as $value)
      @if($value->statusPicture==6 && $value->category == 'muska')
<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
    <!-- Block3 -->
    <div class="block3" id="border"> 
        <div class="block2-img wrap-pic-w of-hidden pos-relative ">
        <a href="{{route('men')}}" class="block3-img dis-block hov-img-zoom">
            <img src="{{asset('images/productPictures/' . $value->image1)}}" alt="IMG-BLOG">
        </a>
    </div>
        <div class="block3-txt p-t-14" style="padding: 10px;">
            <h4 class="p-b-7">
            <a href="" class="m-text11">
               Obuća koja je savršena za sve prilike po najpovoljnijim cenama.....
            </a>
            </h4>
             
            <p class="s-text8 p-t-16">
               Značenje reči LAKOĆA kod nas to stvarno znači!!! Posetite našu stranu i odaberite jedan od modela kako bi ste sa LAKOĆOM hodali, trčali, šetali,igrali fudbal... <a href="{{route('men')}}"><b style="color:black;">MUŠKA OBUĆA</b></a>
            </p>
        </div>
    </div>
</div>
@endif
@endforeach

</div>
</div>
</section>


<br><br><br><br><br>
<!-- SLanje -->
<section class="shipping bgwhite p-t-62 p-b-46">
<div class="flex-w p-l-15 p-r-15">
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
<h4 class="m-text12 t-center">
   Besplatna Isporuka za porudžbine u vrednosti više od 3000,00 din
</h4>
<a href="#" class="s-text11 t-center">
    Za više informacija kliknite ovde
</a>
</div>
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
<h4 class="m-text12 t-center">
30 Dana Povratka 
</h4>
<span class="s-text11 t-center">
   Jednostavno nam posaljite nazad proizvod u roku od 30 dana
</span>
</div>
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
<h4 class="m-text12 t-center">
  Porucivanje putem sajta
</h4>
<span class="s-text11 t-center">
   Svakoga dana 24/7
</span>
</div>
</div>
</section>

@endsection
@section('footer')
@endsection