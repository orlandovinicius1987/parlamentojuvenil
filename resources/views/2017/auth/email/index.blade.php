@extends('2017.layouts.layout')

@section('contents')
    <div class="container">
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
    </div>
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
