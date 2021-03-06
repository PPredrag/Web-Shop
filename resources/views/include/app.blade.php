<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Web Shop</title>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png')}}"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('fonts/themify/themify-icons.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('fonts/elegant-font/html-css/style.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('vendor/animate/animate.css') }}" >
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('vendor/animsition/css/animsition.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('vendor/select2/select2.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('vendor/daterangepicker/daterangepicker.css') }} ">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('vendor/slick/slick.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href=" {{ asset('vendor/lightbox2/css/lightbox.min.css') }}">
        <!--===============================================================================================-->
           <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
         <!--===============================================================================================-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/util.css') }}" rel="stylesheet">
        <!--===============================================================================================-->
    </head>
    <body class="animsition">
        <!-- Header -->
        <header class="header1">
            <!-- Header desktop -->
            <div class="container-menu-header">
                <div class="topbar">
                    <div class="topbar-social">
                        <a href="{{url('https://www.facebook.com/kopackeipatikevienna.srb/')}}" class="topbar-social-item fa fa-facebook" target="_blank"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                    <span class="topbar-child1">
                        <!-- <b>Besplatna isporuka za porudzbinu preko 2000.00din</b> -->
                    </span>
                    <div class="topbar-child2">
                        <!-- <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option>DIN</option>
                            </select>
                        </div> -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                            <li ><a href="{{ route('login') }}">Prijava Korisnika |</a>
                            <a href="{{ route('register') }}">Registracija</a>
                        </li>
                        
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        &nbsp&nbsp Odjava Korisnika
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                    
                </div>
            </div>
            <div class="wrap_header">
                <!-- Logo 
                <a href="index.php" class="logo">
                    <img src="{{ asset('images/icons/logo.png') }}" alt="IMG-LOGO">
                </a>-->
                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="{{ route('welcome')}}">Početna</a>
                                
                            </li>
                            <li class="sale-noti">
                                <a href="{{ route('sale')}}">Sale</a>
                            </li>
                            <li>
                                <a href="{{ route('men')}}">Muškarci</a>
                            </li>
                            
                            <li>
                                <a href="{{ route('women')}}">Žene</a>
                            </li>
                            <li>
                                <a href="{{ route('kids')}}">Deca</a>
                            </li>
                            <li>
                                <a href="{{ route('about')}}">O Nama</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Kontakt</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Header Icon -->
                <div class="header-icons">
                    <!-- <a href="#" class="header-wrapicon1 dis-block">
                        <img src="{{ asset('images/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON"> -->
                    </a>
                    <span class="linedivide1"></span>
                    <div class="header-wrapicon2">
                        <img src="{{ asset('images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>
                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{ asset('images/productPictures/d2l.jpg') }}" alt="IMG">
                                    </div>
                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nike Kids Run
                                        </a>
                                        <span class="header-cart-item-info">
                                            1 x 15000.00 din 
                                        </span>
                                    </div>
                                </li>
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{ asset('images/productPictures/p1l.jpg') }}" alt="IMG">
                                    </div>
                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nike Patike 
                                        </a>
                                        <span class="header-cart-item-info">
                                            1 x 8500.00 din
                                        </span>
                                    </div>
                                </li>
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{ asset('images/productPictures/k1l.jpg') }}" alt="IMG">
                                    </div>
                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nike Kopacke
                                        </a>
                                        <span class="header-cart-item-info">
                                            1 x 12500.00 din 
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-cart-total">
                                Ukupno: 36000.00 din 
                            </div>
                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="{{route('viewCart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                      Korpa
                                    </a>
                                </div>
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Kupi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie 
            <a href="index.php" class="logo-mobile">
                <img src="{{ asset('images/icons/logo.png') }}" alt="IMG-LOGO">
            </a>-->
            <!-- Button show menu -->
            <div class="btn-show-menu">
                Sportska Obuća "Play"
                <div class="header-icons-mobile">
                   
                    <span class="linedivide2"></span>
                    <div class="header-wrapicon2">
                        <img src=" {{ asset('images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>
                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{ asset('images/productPictures/k1l.jpg') }}" alt="IMG">
                                    </div>
                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            White Shirt With Pleat Detail Back
                                        </a>
                                        <span class="header-cart-item-info">
                                            1 x $19.00
                                        </span>
                                    </div>
                                </li>
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{ asset('images/productPictures/k1l.jpg') }}" alt="IMG">
                                    </div>
                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Converse All Star Hi Black Canvas
                                        </a>
                                        <span class="header-cart-item-info">
                                            1 x $39.00
                                        </span>
                                    </div>
                                </li>
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="{{ asset('images/productPictures/k1l.jpg') }}" alt="IMG">
                                    </div>
                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nixon Porter Leather Watch In Tan
                                        </a>
                                        <span class="header-cart-item-info">
                                            1 x $17.00
                                        </span>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-cart-total">
                                Total: $75.00
                            </div>
                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="{{route('viewCart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        View Cart
                                    </a>
                                </div>
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        Check Out
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>
        <!-- Menu Mobile -->
        <div class="wrap-side-menu" >
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <span class="topbar-child1">
                           Besplatna isporuka za porudzbinu preko 1500.00din
                        </span>
                    </li>
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                              <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @guest
                            <li ><a href="{{ route('login') }}">Prijava Korisnika |</a>
                            <a href="{{ route('register') }}">Registracija</a>
                        </li>
                        
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>

                            <!--<div class="topbar-language rs1-select2">
                                <select class="selection-1" name="time">
                                    <option>USD</option>
                                </select>
                            </div> -->
                        </div>
                    </li>
                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="#" class="topbar-social-item fa fa-facebook"></a>
                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                            <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                            <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                            <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                        </div>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="{{ route('welcome')}}">Početna</a>
                        
                        <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                    </li> <li class="item-menu-mobile">
                        <a href="{{ route('sale')}}">Sale</a>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="{{ route('men')}}">Muškarci</a>
                    </li>
                   
                    <li class="item-menu-mobile">
                        <a href="{{ route('women')}}">Žene</a>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="{{ route('kids')}}">Deca</a>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="{{ route('about') }}">O Nama</a>
                    </li>
                    <li class="item-menu-mobile">
                        <a href="{{route('contact')}}">Kontakt</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
    @yield('footer')
    <!-- Footer -->
    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                KOTAKTIRAJTE NAS
                </h4>
                <div>
                    <p class="s-text7 w-size27">
                        Svakoga dana nas možete kotaktirati na telefon +38160111111 ili nas posetitiu ulici Jurija Gagarina 555
                    </p>
                    <div class="flex-m p-t-30">
                        <a href="{{url('https://www.facebook.com/kopackeipatikevienna.srb/')}}" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                    </div>
                </div>
            </div>
            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                Kategorije
                </h4>
                <ul>
                    <li class="p-b-9">
                        <a href="{{ route('men')}}" class="s-text7">
                            Muška 
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="{{ route('women')}}" class="s-text7">
                            Ženska
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="{{ route('kids')}}" class="s-text7">
                            Deca
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="{{ route('sale')}}" class="s-text7" id="crvena">
                            SALE
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                Linkovi
                </h4>
                <ul>
                    <li class="p-b-9">
                        <a href="{{url('https://www.nike.com/language_tunnel')}}" class="s-text7" target="_blank">
                            Nike
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="{{url('https://www.adidas.com/us')}}" class="s-text7">
                            Addidas
                        </a>
                    </li>
                    <li class="p-b-9">
                        <a href="{{url('https://www.asics.com/us/en-us/')}}" class="s-text7">
                            Asics
                        </a>
                    </li>
                        <li class="p-b-9">
                        <a href="{{url('https://www.reebok.com/')}}" class="s-text7">
                            Reebok
                        </a>
                    </li>

                </ul>
            </div>
            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                Pomoć
                </h4>
                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                          Vratite Proizvod  
                        </a>
                    </li>
                 </ul>
            </div>
            <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                Prijava Za Bilten
                </h4>
                <form>
                    <div class="effect1 w-size9">
                        <input class="form-control" type="text" name="email" placeholder="vasemail@email.com">
                        
                    </div>
                    <div class="w-size2 p-t-20">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Prijavite Se
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="t-center p-l-15 p-r-15">

                <h4 class="m-text12 t-center">
                  Uskoro Plaćanje Karticama
                </h4>
               
               
            <a href="#">
                <img class="h-size2" src=" {{ asset('images/icons/paypal.png') }} " alt="IMG-PAYPAL">
            </a>
            <a href="#">
                <img class="h-size2" src=" {{ asset('images/icons/visa.png') }}" alt="IMG-VISA">
            </a>
            <a href="#">
                <img class="h-size2" src=" {{ asset('images/icons/mastercard.png') }}" alt="IMG-MASTERCARD">
            </a>
            <a href="#">
                <img class="h-size2" src=" {{ asset('images/icons/express.png') }}" alt="IMG-EXPRESS">
            </a>
            <a href="#">
                <img class="h-size2" src=" {{ asset('images/icons/discover.png') }}" alt="IMG-DISCOVER">
            </a>
            <div class="t-center s-text8 p-t-20">
                Copyright © 2019 All rights reserved. <a href="https://www.predragpandza.com" target="_blank">Predrag Pandza</a>
            </div>
        </div>
    </footer>
    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>
    <!-- Container Selection -->
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/select2/select2.min.js') }}"></script>
    <script type="text/javascript">
    $(".selection-1").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect1')
    });
    $(".selection-2").select2({
    minimumResultsForSearch: 20,
    dropdownParent: $('#dropDownSelect2')
    });
    </script>
     <script src="{{ asset('js/sakri.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('js/slick-custom.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        /*
    $('.block2-btn-addcart').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
    $(this).on('click', function(){
    swal(nameProduct, "is added to cart !", "success");
    });
    });
    $('.block2-btn-addwishlist').each(function(){
    var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
    $(this).on('click', function(){
    swal(nameProduct, "is added to wishlist !", "success");
    });
    });*/
    </script>
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <script src=" {{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>