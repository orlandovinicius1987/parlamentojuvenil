<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parlamento Juvenil 2017</title>
    <meta name="description" content="Parlamento Juvenil 2017" >
    <meta name="author" content="Alerj | SDGI | Projetos Esperciais">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->

    <!-- Bootstrap  -->
    <link href="/templates/2017/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- icon fonts font Awesome -->
    <link href="/templates/2017/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- icon fonts font Awesome -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Import Magnific Pop Up Styles -->
    <link rel="stylesheet" href="/templates/2017/assets/css/magnific-popup.css">
    <!-- Import Custom Styles -->
    <!--	<link href="/templates/2017/assets/css/style.css" rel="stylesheet">-->
    <!-- Import Animate Styles -->
    <link href="/templates/2017/assets/css/animate.min.css" rel="stylesheet">
    <!-- Import owl.carousel Styles -->
    <link href="/templates/2017/assets/css/owl.carousel.css" rel="stylesheet">
    <!-- Import Custom Responsive Styles -->
    <link href="/templates/2017/assets/css/responsive.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="/templates/2017/assets/css/style.css" rel="stylesheet">


    <!-- FONTS CSS -->
    <link rel="stylesheet" type="text/css" href="/templates/2017/assets/css/stylesheet.css">


    <!-- TIMELINE CSS -->
    <link href="/templates/2017/assets/css/timeline.css" rel="stylesheet">

    <!-- Masonry CSS -->
    <link href="/templates/2017/assets/css/masonry.css" rel="stylesheet">



    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.js"></script>
</head>
<body class="header-fixed-top">
<div id="page-top" class="page-top"></div>



<section id="site-banner" class="site-banner text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-5">
                <a class="navbar-brand page-scroll" href="#page-top"><img class="logo-parlamento img-responsive" src="/templates/2017/images/logo-parlamento.png"></a>
            </div>
            <div class="col-md-4">

            </div>

            <div class="col-md-3 ">
                <div class="row">
                    <div class="col-md-6 user-email-login">
                        @if (isset($loggedUser) && $loggedUser->user)
                            <a href="{{ route('auth.logout')}}" class="signout-button"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            <p class="avatar-name" >{{ $loggedUser->student->social_name or $loggedUser->user->social_name }}</p>
                    </div>
                    <div class="col-md-6">
                            <img class="avatar img-responsive" src="{{ $loggedUser->user->avatar }}" alt="">
                        @endif

                    </div>
                </div>
{{--                <div class="row">
                    <div class="col-md-6">
                        <img src="/templates/2017/images/logo-alerj.png" class="logo-alerj img-responsive">
                    </div>
                    <div class="col-md-6">
                        <img src="/templates/2017/images/logo-governo.png" class="logo-governo img-responsive">
                    </div>
                </div>--}}


            </div>
            <div class="col-md-1 ">

            </div>


        </div>
    </div>
</section>

<header id="main-menu" class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="menu-logo">
                        <a href="{{ route('home') }}"><img src="/templates/2017/images/logo.png" alt="menu Logo"></a>
                    </div>
                    <!-- /.menu-logo -->
                </div>
                <nav id="menu" class="menu collapse navbar-collapse">
                    <ul id="headernavigation" class="menu-list nav navbar-nav">
                        <li class="active"><a href="#page-top">Sobre</a></li>
                        <li><a href="#about">Como Funciona</a></li>
                        <li><a href="#portfolio">Cronograma</a></li>
                        <li><a href="#services">Capacitação</a></li>
                        <li><a href="#latest-post">Mapa das Inscrições</a></li>
                        <li><a href="#contact">Downloads</a></li>
                        <li><a href="#contact">Notícias</a></li>
                        <li><a href="#contact">Contato</a></li>
                        <li class="social-buttons"><a target="_blank" href="https://www.facebook.com/parlamentojuvenilrio/"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-buttons ultimo"><a target="_blank" href="https://www.youtube.com/user/parlamentojuvenilrj"><i class="fa fa-youtube"></i></a></li>
                        <li class="menu-busca"><a class="" href="#contact"><i class="fa fa-search"></i></a></li>
                        <li class="menu-user"><a class="" href="#contact"><i class="fa fa-user"></i></a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</header>
<!-- /#main-menu -->
<!-- Header -->

<div class="container">
    @include('partials.errors')
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            @yield('contents')
        </div>
    </div>
</div>

<footer>
    {{--<div id="footer-top" class="footer-top">
        <div class="container">
            <div class="row">
                <div id="tweet" class="tweet text-left">
                    <div class="col-xs-4 about-tweet">
                        <span class="tweet-icon"><i class="fa fa-twitter"></i></span>
                        <span class="tweet-author">John Doe</span>
                        <p class="tweet-details">
                            Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis eupulvinar nuncint
                        </p>
                        <!-- /.tweet-details -->
                        <time datetime="PT2H">2 Hours Ago</time>
                    </div>
                    <div class="col-xs-4 about-tweet">
                        <span class="tweet-icon"><i class="fa fa-twitter"></i></span>
                        <span class="tweet-author">John Doe</span>
                        <p class="tweet-details">
                            Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis eupulvinar nuncint
                        </p>
                        <!-- /.tweet-details -->
                        <time datetime="PT2H">2 Hours Ago</time>
                    </div>
                    <div class="col-xs-4 about-tweet">
                        <span class="tweet-icon"><i class="fa fa-twitter"></i></span>
                        <span class="tweet-author">John Doe</span>
                        <p class="tweet-details">
                            Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis eupulvinar nuncint
                        </p>
                        <!-- /.tweet-details -->
                        <time datetime="PT2H">2 Hours Ago</time>
                    </div>
                </div>
                <!-- /#tweet -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>--}}
    <!-- /#footer-top -->
    <div id="footer-bottom" class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-2">
                    <img src="/templates/2017/images/logo-alerj.png" class="logo-alerj img-responsive">
                </div>
                <div class="col-md-2">
                    <img src="/templates/2017/images/logo-governo.png" class="logo-governo img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- /#footer-bottom -->
</footer>






<div id="scroll-to-top" class="scroll-to-top">
			<span>
			<i class="fa fa-chevron-up"></i>
			</span>
</div>
<!-- /#scroll-to-top -->
<!-- Include modernizr-2.8.3.min.js -->
<script src="/templates/2017/assets/js/modernizr-2.8.3.min.js"></script>
<!-- Include jquery.min.js plugin -->
<script src="/templates/2017/assets/js/jquery-2.1.0.min.js"></script>
<!-- Include magnific-popup.min.js -->
<script src="/templates/2017/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Google Maps Script -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- Gmap3.js For Static Maps -->
<script src="/templates/2017/assets/js/gmap3.js"></script>
<!-- Javascript Plugins  -->
<script src="/templates/2017/assets/js/plugins.js"></script>
<!-- Custom Functions  -->
<script src="/templates/2017/assets/js/functions.js"></script>
<script src="/templates/2017/assets/js/wow.min.js"></script>
<script type="text/javascript" src="/templates/2017/assets/js/jquery.ajaxchimp.min.js"></script>
<script>

    $(document).ready(function() {

        /* -------- One page Navigation ----------*/
        $('#main-menu #menu').onePageNav({
            currentClass: 'active',
            changeHash: false,
            scrollSpeed: 1500,
            scrollThreshold: 0.5,
            scrollOffset: 95,
            filter: ':not(.sub-menu a, .not-in-home)',
            easing: 'swing'
        });


        /*----------- Google Map - with support of gmaps.js ----------------*/

        function isMobile() {
            return ('ontouchstart' in document.documentElement);
        }

        function init_gmap() {
            if ( typeof google == 'undefined' ) return;
            var options = {
                center: [-37.817331, 144.955652],
                zoom: 15,
                mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                },
                navigationControl: true,
                scrollwheel: false,
                streetViewControl: true
            }

            if (isMobile()) {
                options.draggable = false;
            }

            $('#googleMaps').gmap3({
                map: {
                    options: options
                },
                marker: {
                    latLng: [-37.817331, 144.955652],
                    options: { icon: 'images/mapicon.png' }
                }
            });
        }

        init_gmap();
    });
</script>

<!-- Masonry JavaScript -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script type="text/javascript">
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 170,
        gutter: 20,
        isFitWidth: true
    });
</script>

    @yield('page-javascripts')
</body>
</html>
