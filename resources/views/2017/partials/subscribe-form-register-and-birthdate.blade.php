
@extends('2017.layouts.layout')

@section('contents')
    {{--@include('2016.partials.header-fixed')--}}

    <section id="titulo" class="fundo-inscricao">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    <h1>&nbsp;</h1>
                    <h1>Inscreva-se</h1>
                </div>
            </div>
        </div>
    </section>

    <form id="login" method="POST" action="{{ route('auth.student.login') }}">
        {!! csrf_field() !!}

        <input
                v-model="name"
                type="text"
                class="form-control input-lg"
                value="{{ Input::old('name') }}"
                placeholder="Digite sua matrícula"
                name="registration"
                id="registration"
                required data-validation-required-message="Por favor digite seu nome."
        >

        <input
                v-model="birthdate"
                type="text"
                class="form-control input-lg"
                value="{{ Input::old('birthdate') }}"
                placeholder="Data de nascimento"
                name="birthdate"
                id="birthdate"
                required
                data-validation-required-message="Por favor digite sua data de nascimento."
        >

        <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
            Enviar
        </button>

    </form>


