@extends('2017.layouts.layout')

@section('contents')

    <div class="container">
        <div class="row">
            {{--        <a href="{{ route('auth.social.redirect', ['facebook']) }}"><img src="/templates/2016/images/buttonsSocialLogin/fb_logo_blue29.png"></a>
                    <a href="{{ route('auth.social.redirect', ['twitter']) }}"><img src="/templates/2016/images/buttonsSocialLogin/twitter.png"></a>
                    <a href="{{ route('auth.social.redirect', ['youtube']) }}"><img src="/templates/2016/images/buttonsSocialLogin/youTube48px.png"></a>
                    <a href="{{ route('auth.social.redirect', ['linkedin']) }}"><img src="/templates/2016/images/buttonsSocialLogin/linkedin_2C_34px.png"></a>
                    <a href="{{ route('auth.social.redirect', ['instagram']) }}"><img src="/templates/2016/images/buttonsSocialLogin/instagram.png"></a>--}}

            <div class="">
                <div class="">
                    <h3 class="modal-title">Identifique-se</h3>
                </div>
                <div class="modal-body social-login ">



                    <p  class="social-login-button">
                        <a class="social-login-btn social-facebook" href="/auth/facebook"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-facebook.png"></a>
                        <a class="social-login-btn social-twitter" href="/auth/twitter"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-twitter.png"></a>
                        <a class="social-login-btn social-instagram" href="/auth/instagram"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-instagram.png"></a>
                        <a class="social-login-btn social-linkedin" href="/auth/linkedin"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-linkedin.png"></a>
                        <a class="social-login-btn social-youtube" href="/auth/youtube"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-youtube.png"></a>

                    </p>

                    <div class="nao-possui-redes">
                        <p>Caso você não esteja em nenhuma dessas redes sociais, clique aqui.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

@stop
