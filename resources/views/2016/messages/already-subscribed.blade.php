@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="titulo" class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-xs12">
                    <h1>&nbsp;</h1>
                    <h2>Você já está inscrito!</h2>

                    <div class="contact-text">
                        <p>Caso queira alterar algum dado, por favor, entre em contato com a gente:</p>
                        <p><i class="fa fa-phone fa-fw"></i>(21) 2588-1202 - <a href="mailto:pjalerj@gmail.com" class="already-subscribed-email">pjalerj@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
