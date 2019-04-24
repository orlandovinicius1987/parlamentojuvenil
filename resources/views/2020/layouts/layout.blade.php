
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Parlamento Juvenil {{ config('app.year') }}</title>
        <meta name="description" content="Parlamento Juvenil {{ config('app.year') }}">
        <meta name="author" content="Alerj | SDGI | Projetos Esperciais">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <![endif]-->


{{--

        <!-- Bootstrap  -->
        <link href="/templates/{{ config('app.year') }}/assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- icon fonts font Awesome -->
        <link href="/templates/{{ config('app.year') }}/assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- icon fonts font Awesome -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Import Magnific Pop Up Styles -->
        <link rel="stylesheet" href="/templates/{{ config('app.year') }}/assets/css/magnific-popup.css">
        <!-- Import Custom Styles -->
        <!--	<link href="/templates/{{ config('app.year') }}/assets/css/style.css" rel="stylesheet">-->
        <!-- Import Animate Styles -->
        <link href="/templates/{{ config('app.year') }}/assets/css/animate.min.css" rel="stylesheet">
        <!-- Import owl.carousel Styles -->
        <link href="/templates/{{ config('app.year') }}/assets/css/owl.carousel.css" rel="stylesheet">

        <!-- Style CSS -->
        <link href="/templates/{{ config('app.year') }}/assets/css/style.css" rel="stylesheet">

        <!-- FONTS CSS -->
        <link rel="stylesheet" type="text/css" href="/templates/{{ config('app.year') }}/assets/css/stylesheet.css">

        <!-- TIMELINE CSS -->
        <link href="/templates/{{ config('app.year') }}/assets/css/timeline.css" rel="stylesheet">

        <!-- Masonry CSS -->
        <link href="/templates/{{ config('app.year') }}/assets/css/masonry.css" rel="stylesheet">


        <!-- Import Custom Responsive Styles -->
        <link href="/templates/{{ config('app.year') }}/assets/css/responsive.css" rel="stylesheet">

        <!--[if IE]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.js"></script>
        <script src="//cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>

        <script src="/js/receita.js"></script>

     --}}

        <script>
            window.laravel = {year: '{{ get_current_year() }}'};
        </script>





    </head>




    <body class="header-fixed-top">
        @include( config('app.year').'.layouts.partials.variables')


        teste


{{--
        <div id="page-top" class="page-top"></div>
        <section id="site-banner" class="site-banner text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a class="navbar-brand page-scroll" href="/"><img class="logo-parlamento img-responsive" src="/templates/{{ config('app.year') }}/images/logo-parlamento.png"></a>
                    </div>
                    <div class="col-sm-8 pull-right">
                        <div class="row">
                            @if (isset($loggedUser) && $loggedUser->user)
                                <div class="col-sm-10 user-email-login">
                                    <a href="{{ route('auth.logout')}}" class="signout-button"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                    <p class="avatar-name">{{ $loggedUser->student->social_name or $loggedUser->user->social_name }}</p>
                                </div>
                                <div class="col-sm-2">
                                    <img class="avatar img-responsive" src="{{ $loggedUser->user->avatar }}" alt="" title="{{ $loggedUser->user->id }}">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-1 "></div>
                </div>
            </div>
        </section>

  --}}
{{--
        <header id="main-menu" class="main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="menu-logo">
                                <a href="{{ route('home') }}"><img src="/templates/{{ config('app.year') }}/images/logo.png" alt="menu Logo"></a>
                            </div>
                        </div>
                        @include(config('app.year').'.layouts.partials.menu')
                    </div>
                </div>
            </div>
        </header>
        <!-- /#main-menu -->
        <!-- Header -->

      --}}
{{--

        <div class="container">
            @include('partials.errors')
        </div>
--}}

{{--
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    @yield('contents')
                </div>
            </div>
        </div>
--}}

       {{-- <footer>
            <div id="footer-bottom" class="footer-bottom text-center">
                <div class="container">
                    <div class="row">

                        <div class="midias-sociais-rodape col-xs-12 col-sm-3 col-md-2" >
                            <a target="_blank" href="//www.facebook.com/parlamentojuvenilrio/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="//www.youtube.com/user/parlamentojuvenilrj"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="//www.facebook.com/parlamentojuvenilrio/"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="//www.youtube.com/user/parlamentojuvenilrj"><i class="fa fa-youtube"></i></a>
                        </div>
                        <div class="contatos col-sm-3 col-md-4 ">
                            21 2588 1536 - 21 2588 1202 &nbsp;| &nbsp;<a href="mailto:pjalerj@gmail.com">pjalerj@gmail.com</a>
                        </div>

                        <div class="col-xs-offset-2 col-xs-4 col-sm-offset-0 col-sm-3 col-md-offset-2 col-md-2">
                            <img src="/templates/{{ config('app.year') }}/images/logo-alerj.png" class="logo-alerj img-responsive">
                        </div>
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <img src="/templates/{{ config('app.year') }}/images/logo-governo.png" class="logo-governo img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#footer-bottom -->
        </footer>--}}


        {{--
        <div id="scroll-to-top" class="scroll-to-top">
			<span>
			    <i class="fa fa-chevron-up"></i>
			</span>
        </div>

--}}

{{--
        <!-- /#scroll-to-top -->
        <!-- Include modernizr-2.8.3.min.js -->
        <script src="/templates/{{ config('app.year') }}/assets/js/modernizr-2.8.3.min.js"></script>
        <!-- Include jquery.min.js plugin -->
        <script src="/templates/{{ config('app.year') }}/assets/js/jquery-2.1.0.min.js"></script>
        <!-- Include magnific-popup.min.js -->
        <script src="/templates/{{ config('app.year') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Google Maps Script -->
        <script src="//maps.google.com/maps/api/js?sensor=true"></script>
        <!-- Gmap3.js For Static Maps -->
        <script src="/templates/{{ config('app.year') }}/assets/js/gmap3.js"></script>
        <!-- Javascript Plugins  -->
        <script src="/templates/{{ config('app.year') }}/assets/js/plugins.js"></script>
        <!-- Custom Functions  -->
        <script src="/templates/{{ config('app.year') }}/assets/js/functions.js"></script>
        <script src="/templates/{{ config('app.year') }}/assets/js/wow.min.js"></script>
        <script type="text/javascript" src="/templates/q/assets/js/jquery.ajaxchimp.min.js"></script>

        --}}


        <script>
            $(document).ready(function () {
                /* -------- One page Navigation ----------*/
                /*$('#main-menu #menu').onePageNav({
                    currentClass: 'active',
                    changeHash: false,
                    scrollSpeed: 1500,
                    scrollThreshold: 0.5,
                    scrollOffset: 95,
                    filter: ':not(.sub-menu a, .not-in-home)',
                    easing: 'swing'
                });*/
                /*----------- Google Map - with support of gmaps.js ----------------*/


             /*
                function isMobile() {
                    return ('ontouchstart' in document.documentElement);
                }
*/
               /* function init_gmap() {
                    if (typeof google == 'undefined') return;
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
                            options: {icon: 'images/mapicon.png'}
                        }
                    });
                }*/
/*
                init_gmap();*/
            });
        </script>




{{--
        <!-- Masonry JavaScript -->
        <script src="//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

        <script type="text/javascript">
            $('.grid').masonry({
                itemSelector: '.grid-item',
                columnWidth: 176,
                gutter: 20,
                isFitWidth: true
            });
        </script>

--}}




        @yield('page-javascripts')



        @include('partials.analytics')



    </body>
</html>
