<!doctype html>
<html lang="en">
<head>
    <!-- ************* MANTIDOS DO SITE ANTIGO ************* -->
    <meta charset="UTF-8">
    <title>Parlamento Juvenil {{ get_current_year() }}</title>
    <meta name="description" content="Parlamento Juvenil {{ get_current_year() }}">
    <meta name="author" content="Alerj | SDGI | Projetos Esperciais">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->

    <link rel="shortcut icon" href="/2020/img/favicon.ico">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">

    <script src="{{mix('js/app.js')}}" defer></script>

    <script>
        window.laravel = {year: '{{ get_current_year() }}'};
    </script>
    <!-- ********** FIM - MANTIDOS DO SITE ANTIGO ********** -->
</head>

<body class="noScroll" id="page-top">

@include( get_current_year().'.layouts.partials.variables')

<!-- Navigation -->




<nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand logo-alerj" href="http://www.alerj.rj.gov.br/" target="_blank">
            <img src="/images/ALERJ_NOVO_vertical-branco.png">
        </a>
        <a class="navbar-brand logo-aloalerj" href="/">
            <img src="/images/logo_pj2.png" class="img-fluid">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample08">


            @include(get_current_year().'.layouts.partials.menu')
{{--

            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/aloalerj">O Alô Alerj</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/committees">Comissões</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/telefones">Telefones Úteis</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact" title="Contato"> <i class="fa fa-envelope-o envelopemenu" aria-hidden="true"></i> Contato</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown04">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
--}}


            <form>
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>

    </div>
</nav>




{{--

    <nav class="navbar navbar-expand-lg bg-secondary header-bg fixed-top " id="mainNav">

        <div class="container-fluid">
            <div class="col-6 offset-3 col-md-6 col-lg-2 offset-lg-1">
                <a class="navbar-brand js-scroll-trigger" href="/#page-top">
                    <img class="logo-parlamento img-fluid" src="/2020/img/logo-parlamento.png">
                </a>
            </div>

            <button class="navbar-toggler navbar-toggler-right bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                @include(get_current_year().'.layouts.partials.menu')

            </div>

            <div class="col-1 pull-right logo-alerj-topo d-none d-lg-block">
                <img class="logo-alerj img-fluid" src="/2020/img/logo-alerj-topo.png">
                <div class="edicao2020 text-center"> EDIÇÃO 2020 </div>
            </div>
        </div>
    </nav>
--}}

<div class="masthead">
    <div class="container">
        @include('partials.errors')
    </div>
    @yield('contents')
</div>

<!-- Footer -->



<!-- Footer -->
<section id="footer">
    <div class="container text-lg-start">

        {{--
                    <div class="row">
                        <div class="comissoes col-md-12 text-white mt-4">
                            <h3 class="mb-4">Comissões </h3>

                            teste
                            <hr class="mt-4">
                        </div>
                    </div>
        --}}


        <div class="row d-flex align-items-center bd-highlight mb-3 text-white">

            <div class="col-12 col-sm-4 col-md-3">
                <img src="/images/logo_pj2.png" class="img-fluid">
            </div>

            <div class="col-12 col-sm-4 col-md-3">
                <a href="http://www.alerj.rj.gov.br/" target="_blank">
                    <img src="/images/ALERJ_NOVO_horizontal-branco.png" class="img-fluid">
                </a>
            </div>

            <div class="col-12 col-sm-4 col-md-6 text-white ">
                <div class="row mt-4 text-center">
                    <div class="col-lg-6">
                        <p>Rua Primeiro de março, s/n<br>
                            Praça XV - Rio de Janeiro<br>
                            <span>CEP</span> 20010-090 &nbsp;&nbsp; <span class="telefone">+55 (21) 2588-1000</span>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="social row mt-4">
                            <div class="col-3"><a href="https://www.facebook.com/assembleiaRJ" target="_blank"><i class="fab fa-facebook"></i></a></div>
                            <div class="col-3"><a href="https://twitter.com/alerj" target="_blank"><i class="fab fa-twitter"></i></a></div>
                            <div class="col-3"><a href="https://instagram.com/instalerj/" target="_blank"><i class="fab fa-instagram"></i></a></div>
                            <div class="col-3"><a href="https://www.youtube.com/user/dcsalerj" target="_blank"><i class="fab fa-youtube"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        {{--
                <div class="row mt-2">
                    <div class="col-12 col-sm-4 col-md-4 ">
                        <a href="//www.alerj.rj.gov.br/" target="_blank">
                            <img src="/templates/2021/images/ALERJ_NOVO_horizontal-branco.png" class="img-fluid">
                        </a>
                    </div>

                    <div class="col-12 col-sm-4 col-md-8 text-white ">
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <p>Rua Primeiro de março, s/n  |  Praça XV - Rio de Janeiro<br><span>CEP</span> 20010-090 &nbsp;&nbsp; <span>Telefone</span> +55 (21) 2588-1000 &nbsp;&nbsp; </p>
                            </div>
                            <div class="col-lg-6">
                                <div class="social row">
                                    <div class="col-2"><a href="https://www.facebook.com/assembleiaRJ" target="_blank"><i class="fab fa-facebook"></i></a></div>
                                    <div class="col-2"><a href="https://twitter.com/alerj" target="_blank"><i class="fab fa-twitter"></i></a></div>
                                    <div class="col-2"><a href="https://instagram.com/instalerj/" target="_blank"><i class="fab fa-instagram"></i></a></div>
                                    <div class="col-2"><a href="https://www.youtube.com/user/dcsalerj" target="_blank"><i class="fab fa-youtube"></i></a></div>
                                    <div class="col-2"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="far fa-envelope"></i></a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        --}}


        <div class="row text-center text-white">
            <div class="col-12">
                <hr class="mb-4">
                <p class="h6">© Todos os direitos reservados. |
                    <a class="ml-2" href="http://www.alerj.rj.gov.br/" target="_blank">
                        ALERJ - Assémbleia Legislativa do Estado do Rio de Janeiro
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- ./Footer -->
{{--





    <footer class="footer copyright text-center">
        <div class="container">
            <div class="row d-flex align-items-center bd-highlight ">

                <div class="col-md-5 col-lg-3 mb-5 mb-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/parlamentojuvenilrio/">
                                <i class="fab fa-fw fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/parlamentojuvenilrj/">
                                <i class="fab fa-fw fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.youtube.com/user/parlamentojuvenilrj">
                                <i class="fab fa-fw fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-7 col-lg-5 mb-5 mb-lg-0">
                    --}}
{{--<h4 class="text-uppercase mb-4">Location</h4>--}}{{--

                    <p class="lead mb-0">
                        @include('partials.phone')
                        <br>  <a href="mailto:@include('partials.email')">@include('partials.email')</a></p>
                </div>

                <div class="col-6 offset-md-3 col-md-3 offset-lg-0 col-lg-2">
                    --}}
{{--<h4 class="text-uppercase mb-4">About Freelancer</h4>--}}{{--

                    <p class="lead mb-0">
                        <img src="/2020/img/logo-governo.png" class="logo-governo img-fluid">
                    </p>
                </div>

                <div class="col-6  col-md-3 col-lg-2">
                    --}}
{{--<h4 class="text-uppercase mb-4">About Freelancer</h4>--}}{{--

                    <p class="lead mb-0">
                        <img src="/2020/img/logo-alerj.png" class="logo-governo img-fluid">
                    </p>
                </div>

            </div>
        </div>
    </footer>
--}}

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

@yield('page-javascripts')

@include('partials.analytics')

</body>
</html>
