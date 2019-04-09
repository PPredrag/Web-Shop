<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dashboard</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="{{ asset('AssetDashboard/css/bootstrap.css') }}" rel="stylesheet" />
        <script src="{{ asset('AssetDashboard/js/jquery-1.10.2.js') }}"></script>
        <script type="text/javascript" src=" {{ asset('vendor/bootstrap/js/popper.js') }}"></script>
        <script type="text/javascript" src=" {{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- FONTAWESOME STYLES-->
        <link href="{{ asset('AssetDashboard/css/font-awesome.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="{{ asset('AssetDashboard/css/custom.css') }}" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <!-- METISMENU SCRIPTS -->
        <script src="{{ asset('AssetDashboard/js/jquery.metisMenu.js') }}"></script>
        <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans') }}" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/util.css')}}">
    </head>
    <body>
        
        @yield('content')
        
        <div id="wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="adjust-nav">
                    <div class="navbar-header">
                        <!-- Hamburger Meni-->
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        
                        <a class="navbar-brand red" href="#"><i class="fa fa-square-o "></i>&nbsp; ADMIN PANEL</a>
                    </div>
                    
                    <form action="{{route('searchProduct')}}" id="searchPro" method="get"  style="width: 50%; float: left; margin-top: 10px; margin-left: 10%;">
                        

                        <div class="form-inline">
                            <input type="text" class="form-control" name="search" style="width: 75%;" placeholder="Pretražite Proizvod">
                            <input type="submit" class="btn btn-success" value="Pretražite">
                        </div>
                    </form>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('welcome')}}" target="_blank"><b class="red">POSETI SAJT</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <!--<li class="text-center user-image-back">
                            <img src="assets/img/find_user.png" class="img-responsive" />
                            
                        </li> -->
                        <li>
                            <a href="{{route('home')}}"><i class="fa fa-desktop "></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-picture-o  "></i>Slike<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('sliderPictures')}}">Početni Slider</a>
                                </li>
                                <li>
                                    
                                    <a href="#">Glavna Strana<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{ route('newSeason')}}">Nova Sezona</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('newShoes')}}">Najnoviji Proizvodi</a>
                                        </li>
                                        <li>
                                            <a href="#">Za najmlađe</a>
                                        </li>
                                        <li>
                                            <a href="#">Proizvodi na popustu</a>
                                        </li>
                                        <li>
                                            <a href="#">Ženska Obuića</a>
                                        </li>
                                        <li>
                                            <a href="#">Muška Obuća</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Sve Slike</a>
                                </li>
                                <li>
                                    <a href="#"><b class="red">Brisanje Slika</b><span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{route('showPictureToDelete')}}">Brisanje Početni Slider</a>
                                        </li>
                                        <li>
                                            <a href="#">Brisanje Glavna Strana</a>
                                        </li>
                                        <li>
                                            <a href="#">Brisanje Sve Slike</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('unosProizvoda')}}"><i class="fa fa-edit "></i>Unos Proizvoda </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-trash-o "></i><span class="red">Brisanje Proizvoda</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table "></i>Statistika Proizvoda</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user "></i>Korisnici<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Pregledaj Korisnike</a>
                                </li>
                                <li>
                                    <a href="#">Obrisi Korisnike</a>
                                </li>
                                <li>
                                    <a href="#">Status Korisnika<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Promeni Status</a>
                                        </li>
                                        <!--<li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li> -->
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-money "></i>Zarada</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-tag fa-lg"></i>Proizvodi na Popustu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Promeni Cenu Proizvoda</a>
                                </li>
                                <!-- <li>
                                    <a href="#">Glavna Strana</a>
                                </li>
                                <li>
                                    <a href="#">Sve Slike</a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-truck"></i>Nas Kontakt</a>
                        </li>
                        <li>
                            <a href="blank.html"><i class="fa fa-hand-o-left"></i>O Nama</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                
                <div id="page-inner">
                    
                    <div class="row">
                        <div class="col-md-12">
                            @yield('wrapper')
                            <p class="pera"></p>
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    
                    
                    <!-- /. ROW  -->
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        
        
    </body>
    @yield('footer')
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('AssetDashboard/js/bootstrap.min.js') }}"></script>
    
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('AssetDashboard/js/custom.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('js/slick-custom.js') }}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src=" {{ asset('vendor/sweetalert/sweetalert.min.js') }}">
    </script>
    
</html>