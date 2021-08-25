<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@stack('title_base')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/templatePrueba/css/bootstrap.min.css') }}" />
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/templatePrueba/css/style.css') }}" />
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/templatePrueba/css/responsive.css') }}" />
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/images/developer-1.ico') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/templatePrueba/css/jquery.mCustomScrollbar.min.css') }}" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    @stack('styles')
    @livewireStyles

</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('assets/templatePrueba/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="/"><img
                                            src="{{ asset('assets/templatePrueba/images/Logo-invertido2.png') }}"
                                            alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"> About </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#service"> Service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="text-bg">
                        <h1>Área<br> Sandbox</h1>
                        <span>New development</span>
                        <p>En esta área probaremos atributos o diceños nuevos. PHP, JavaScript,CSS.Livewire y muchos más
                        </p>
                        <a href="#">Get Started</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-img">
                        <figure><img src="{{ asset('assets/templatePrueba/images/img.png') }}" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- Hosting -->
    <div id="" class="hosting">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Novedades de pruebas en web</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="web_hosting">
                        <figure><img src="{{ asset('assets/templatePrueba/images/web.jpg') }}" alt="#" />
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate</p>
                        <a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Hosting -->
    <!-- Services  -->
    {{ $slot }}
    <!-- end why -->


    <!-- Javascript files-->
    <script src="{{ asset('assets/templatePrueba/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/templatePrueba/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/templatePrueba/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/templatePrueba/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/templatePrueba/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/templatePrueba/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/templatePrueba/js/custom.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    @stack('styles')
</body>

</html>
