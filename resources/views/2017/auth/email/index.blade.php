@extends('2017.layouts.layout')

@section('contents')
    <!-- Subscribe Section -->
    <section id="subscribe-section" class="subscribe-section text-center">
        <div class="container">
            <div class="row" style="margin-top:60px;">
                <div class="col-md-6 col-md-offset-3">
                    <form method="POST" action="http://bootsnipp.com/login" accept-charset="UTF-8" role="form" id="loginform" class="form-signin">
                        <input name="_token" type="hidden" value="Bov3XwZudEvkoOMBPX2H5v6VSCR3Fi5zh6b1YEQO">
                        <fieldset>
                            <div class="row">
                                <input class="form-control email-title" placeholder="E-mail" name="email" type="text">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="checkbox">
                                        <label><input name="remember" type="checkbox" value="Remember Me"> Lembrar de mim</label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <a class="pull-right" href="http://bootsnipp.com/password">Forgot password?</a>
                                </div>

                            </div>

                            <div class="row subscribe-buttons">
                                <div class="col-md-6 signin-btn-container">
                                    <button type="submit" data-submit="login" class="btn btn-md btn-signin">Entre</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" data-submit="register" value="register" class="btn btn-md btn-signup">Cadastre-se</button>
                                </div>

                            </div>
                            <div class="row ou-divider">
                                <h2 class="post-area-title">ou</h2>
                            </div>

                            <div class="row">
                                <p  class="subscribe-social-buttons">
                                    <a class="social-login-btn social-facebook" href="{{ route('auth.social.redirect', ['facebook']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-facebook.png"></a>
                                    <a class="social-login-btn social-twitter" href="{{ route('auth.social.redirect', ['twitter']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-twitter.png"></a>
                                    <a class="social-login-btn social-instagram" href="{{ route('auth.social.redirect', ['youtube']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-instagram.png"></a>
                                    <a class="social-login-btn social-linkedin" href="{{ route('auth.social.redirect', ['linkedin']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-linkedin.png"></a>
                                    <a class="social-login-btn social-youtube" href="{{ route('auth.social.redirect', ['instagram']) }}"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-youtube.png"></a>

                                </p>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>


   {{-- <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <form id="email-register-login-form" method="POST" action="{{ route('auth.login.email') }}">
                    {!! csrf_field() !!}

                    <div>
                        Email
                        <input type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div>
                        Senha
                        <input type="password" name="password" id="password">
                    </div>

                    <div>
                        <input type="checkbox" name="remember"> Lembrar de mim
                    </div>

                    <div>
                        <input type="submit" data-submit="login" value="login">Entrar</input>
                        <input type="submit" data-submit="register" value="register">Cadastre-se</input>
                    </div>
                </form>
            </div>
        </div>
    </div>--}}
@stop

@section('page-javascripts')
    <script>
        var formId = 'email-register-login-form';

        function processForm(e) {
            if (e.preventDefault) e.preventDefault();

            var val = $(document.activeElement).val();

            var form = document.getElementById(formId);

            form.action = val !== 'register'
                ? '{{ route('auth.login.email.post') }}'
                : '{{ route('auth.login.email.register') }}';

            console.log(val, form.action);

            form.submit();

            return true;
        }

        var form = document.getElementById(formId);

        if (form.attachEvent) {
            form.attachEvent("submit", processForm);
        } else {
            form.addEventListener("submit", processForm);
        }
    </script>
@stop
