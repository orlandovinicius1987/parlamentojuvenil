@extends('2017.layouts.layout')

@section('contents')

    <section id="identify" class="identify-yourself">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <div>
                        <h3 class="identify-title">Identifique-se</h3>
                    </div>

                        <div class="social-login">

                                <a href="{{ route('auth.social.redirect', ['facebook']) }}" class="facebook-login">
                                    <i class="fa fa-facebook fa-lg"></i>
                                    Entrar com facebook
                                </a>
                                <a href="{{ route('auth.social.redirect', ['twitter']) }}"  class="twitter-login" >
                                    <i class="fa fa-twitter fa-lg"></i>
                                    Entrar com Twitter
                                </a>
                                <a href="{{ route('auth.social.redirect', ['youtube']) }}"  class="instagram-login">
                                    <i class="fa fa-instagram fa-lg"></i>
                                    Entrar com Instagram
                                </a>
                                <a href="{{ route('auth.social.redirect', ['linkedin']) }}"  class="linkedin-login">
                                    <i class="fa fa-linkedin fa-lg"></i>
                                    Entrar com Linkedin
                                </a>
                                <a href="{{ route('auth.social.redirect', ['instagram']) }}" class="youtube-login" >
                                    <i class="fa fa-youtube fa-lg"></i>
                                    Entrar com Youtube
                                </a>

                        </div>


{{--
                            <a class="social-login-btn social-facebook" href="{{ route('auth.social.redirect', ['facebook']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-facebook.png"></a>
                            <a class="social-login-btn social-twitter" href="{{ route('auth.social.redirect', ['twitter']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-twitter.png"></a>
                            <a class="social-login-btn social-instagram" href="{{ route('auth.social.redirect', ['youtube']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-instagram.png"></a>
                            <a class="social-login-btn social-linkedin" href="{{ route('auth.social.redirect', ['linkedin']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-linkedin.png"></a>
                            <a class="social-login-btn social-youtube" href="{{ route('auth.social.redirect', ['instagram']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-youtube.png"></a>
                    --}}

                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-8">

                    <div class="nao-possui-redes">
                        <a href="naotenhorede.html"><p><a href="{{ route('auth.login.email') }}">Caso você não esteja em nenhuma dessas redes sociais, clique aqui.</a></p></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
