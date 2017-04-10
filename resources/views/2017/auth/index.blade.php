@extends('2017.layouts.layout')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <h3 class="modal-title">Identifique-se</h3>
                </div>

                <div class="modal-body social-login ">
                    <p  class="social-login-button">
                        <a class="social-login-btn social-facebook" href="{{ route('auth.social.redirect', ['facebook']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-facebook.png"></a>
                        <a class="social-login-btn social-twitter" href="{{ route('auth.social.redirect', ['twitter']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-twitter.png"></a>
                        <a class="social-login-btn social-instagram" href="{{ route('auth.social.redirect', ['youtube']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-instagram.png"></a>
                        <a class="social-login-btn social-linkedin" href="{{ route('auth.social.redirect', ['linkedin']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-linkedin.png"></a>
                        <a class="social-login-btn social-youtube" href="{{ route('auth.social.redirect', ['instagram']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-youtube.png"></a>
                    </p>

                    <div class="nao-possui-redes">
                        <a href="naotenhorede.html"><p><a href="{{ route('auth.login.email') }}">Caso você não esteja em nenhuma dessas redes sociais, clique aqui.</a></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
