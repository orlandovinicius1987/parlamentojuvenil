@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="titulo" class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-xs12">
                    <h1>&nbsp;</h1>
                    <h1>Iscrição realizada</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="fundo-azul1">
        <div class="container">
            <div class="row">
                <div class="col-xs12">
                    Sua inscrição for realizada. Por favor aguarde o contato da equipe do Parlamento Juvenil.
                </div>
            </div>
        </div>
    </section>

    @include('scripts.simpleForm')
@stop
