@extends('2017.layouts.layout')

@section('contents')
    <section id="header-capacitacao" class="capacitacao-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="grow grid-item danube-blue">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item verde2">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row">
                        <div class="hidden-sm col-sm-hidden col-md-7 col-lg-7">
                            <div class="grow grid-item--height5 supernova-yellow">
                            </div>
                        </div>
                        <div class="hidden-sm col-md-1 col-lg-1">
                            <div class="grow grid-item--height5 white">
                            </div>
                        </div>
                        <div class="hidden-sm col-md-3 col-lg-4">
                            <div class="grow grid-item--height5 lima-green">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="titulo-comofunciona">
                            <h2>Capacitação</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item ecstasy-orange">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item violet-red">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <div class="grow grid-item lima-green">
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="row text-center">

                        <div class="capacitacao-greatings-docs">
                            Olá <span  class="capacitacao-username">{{ $loggedUser->name }}</span>
                        </div>
                        <P>Por favor clique no botão abaixo para baixar a apostila<BR> <strong>{{ $lesson['title'] }}</strong></P>

                        <a class="btn btn-success" href="{{ $lesson['document-url'] }}">
                            <i class="fa fa-download fa-lg"></i> Baixar documento </a>

                        <a class="btn btn-danger" href="{{ route('training.index', ['year' => 2017]) }}">
                            <i class="fa fa-undo fa-lg"></i> Voltar
                        </a>


                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item haze-green">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="grow grid-item violet-red">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item ecstasy-orange">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item lima-green">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item verde2">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="grow grid-item danube-blue">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="grow grid-item supernova-yellow">
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xs12 text-center">

                    {{--<a href="{{ $lesson['document-url'] }}" class="btn btn-large btn-primary" target="_blank"><span class="fa-stack fa-lg">
<i class="fa fa-download fa-stack-1x"></i></span>Baixar documento</a>

                    <a href="{{ route('training.index', ['year' => 2017]) }}" class="btn btn-primary">
                        <span class="fa-stack fa-lg"><i class="fa fa-undo fa-stack-2x"></i></span> Voltar</a>--}}


                </div>
            </div>
        </div>
    </section>
@stop
