@extends( get_current_year().'.layouts.layout')

@section('contents')
    <!-- Subscribe Section -->
    <section id="subscribe-section" class="subscribe-section text-center">
        <div class="container">
            <div class="row text-center">
                <div class="offset-1 col-10 offset-md-3 col-md-6 offset-lg-4 col-lg-4">
                    <h3 class="identify-title">Identifique-se</h3>

                    <form id="email-register-login-form" method="POST" action="{{ route('auth.login.email') }}" id="loginform" class="form-signin">
                        {{ csrf_field() }}

                        <fieldset>
                            <div class="row text-left">
                                <label for="email" class="control-label">E-mail</label>
                                <input class="form-control email-title" placeholder="E-mail" name="email" type="text">

                                <label for="password" class="control-label">Senha</label>
                                <input class="form-control" placeholder="Senha" name="password" type="password" value="">
                            </div>
                            <div class="row remember-forgot text-left">
                                <div class="col-6">
                                    <div class="checkbox">
                                        <label><input name="remember" type="checkbox" value="Remember Me"> Lembrar de mim</label>
                                    </div>
                                </div>
                                <div class="col-6 forgot-password">
                                    <a class="pull-right" href="{{ route('auth.login.email.password') }}">Esqueceu sua senha?</a>
                                </div>
                            </div>
                            <div class="row subscribe-buttons mt-5 ">
                                <div class="col-6 signin-btn-container">
                                    <button type="submit" value="login" class="btn btn-lg btn-block btn-success btn-signin">Entre</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" value="register" class="btn btn-lg btn-block btn-danger btn-signup">Cadastre-se</button>
                                </div>

                                <div class="col-12">
                                    <br>
                                    <button type="submit" value="password_reset" class="btn btn-lg btn-block btn-info btn-password-reset">Enviar nova senha</button>
                                </div>
                            </div>


                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="row text-center">
                <div class="offset-1 col-10 offset-md-3 col-md-6 offset-lg-4 col-lg-4">



                        <h2 class="post-area-title m-5">ou</h2>


                    <div class="social-login mt-3">
                        <a href="{{ route('auth.social.redirect', ['facebook']) }}" class="btn btn-block btn-social btn-facebook">
                            <span class="fab fa-fw fa-facebook-f"></span>
                            Entrar com Facebook
                        </a>

                        <a href="{{ route('auth.social.redirect', ['twitter']) }}"  class="btn btn-block btn-social btn-twitter">
                            <span class="fab fa-fw fa-twitter"></span>
                            Entrar com Twitter
                        </a>
                        <a href="{{ route('auth.social.redirect', ['instagram']) }}"  class="btn btn-block btn-social btn-instagram">
                            <span class="fab fa-fw fa-instagram"></span>
                            Entrar com Instagram
                        </a>
                        <a href="{{ route('auth.social.redirect', ['linkedin']) }}"  class="btn btn-block btn-social btn-linkedin">
                            <span class="fab fa-fw fa-linkedin"></span>
                            Entrar com Linkedin
                        </a>
                        <a href="{{ route('auth.social.redirect', ['youtube']) }}" class="btn btn-block btn-social btn-youtube">
                            <span class="fab fa-fw fa-youtube-square"></span>
                            Entrar com Youtube
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('page-javascripts')
    <script>
        var formId = 'email-register-login-form';

        function processForm(e) {
            if (e.preventDefault) {
                e.preventDefault();
            }

            var val = $(document.activeElement).val();

            var form = document.getElementById(formId);

            if (val == 'login') {
                form.action = '{{ route('auth.login.email.post') }}';
            } else if (val == 'register') {
                form.action = '{{ route('auth.login.email.register') }}';
            } else if (val == 'password_reset') {
                form.action = '{{ route('auth.login.email.password') }}';
            }

            console.log('-------------------------------------------');
            console.log(val);
            console.log(document.activeElement);
            console.log(form.action);

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
