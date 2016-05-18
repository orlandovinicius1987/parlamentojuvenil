@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="titulo" class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-xs12">
                    <h1>&nbsp;</h1>
                    <h1>Inscreva-se</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="fundo-azul1">
        <div class="container">
            <div class="row">
                <div class="col-xs12">
                    @include('partials.subscribe-form', ['formId' => 'subscribe-simple'])
                </div>
            </div>
        </div>
    </section>

    @include('scripts.simpleForm')
@stop
