@extends('2017.layouts.layout')

@section('contents')
    <section class="notifications">
            @if (config('app.subscriptions.enabled') === true)
                    <div class="jumbotron text-center">
                        <h2>Inscrições abertas</h2>
                        <p>Alunos do 1º e 2º ano do ensino médio da Rede Pública Estadual do Rio de Janeiro, com idade entre 14 e 17 anos (nascidos entre 26 de novembro de 2003 e 3 de dezembro de 1999).</p>
                        <a href="{{ route('subscribe.index') }}" class="btn btn-primary btn-large center-block">
                            Clique para se inscrever
                        </a>
                    </div>
            @endif

            @if (config('app.election.enabled') === true)
                <div class="jumbotron text-center">
                    <h2>Vote agora</h2>
                    <p>Todos os alunos da Rede Pública Estadual do Rio de Janeiro podem votar.</p>
                    <a href="{{ route('vote.index') }}" class="btn btn-primary btn-large center-block">
                        VOTE
                    </a>
                </div>
            @endif
    </section>

    <section class="masonry-pj">
        <div class="container">
            <div class="row">
                <div class="grid">
                    <div class="grow grid-item rouge">
                        <img class="masonry-overflow masonry10 img-responsive" src="/templates/2017/images/masonry-10.png">
                    </div>
                    <div class="grow grid-item cerulean-blue"></div>
                    <div class="grow grid-item haze-green"></div>
                    <div class="grow grid-item grid-item--height2 white">
                        <img class="masonry-padding img-responsive" src="/templates/2017/images/masonry-03.png">
                    </div>
                    <div class="grow grid-item lima-green"><img class="masonry-overflow masonry07" src="/templates/2017/images/masonry-07.png"></div>
                    <div class="grow grid-item verde2"></div>
                    <div class="grow grid-item danube-blue">
                    </div>
                    <div class="grow grid-item lima-green">
                        <img class="hidden-sm masonry-overflow masonri-right masonry08" src="/templates/2017/images/masonry-08.png">
                    </div>

                    <div class="grow grid-item violet-red"></div>

                    @if (config('app.election.enabled') === true)
                        <div class="grow grid-item grid-item--height3 white">
                            <a href="{{ route('vote.index') }}"><img class="" src="/templates/2017/images/vote-agora.png"></a>
                        </div>
                    @else
                        <div class="grow grid-item grid-item--height3 cerulean-blue">
                            <img class="masonry-overflow masonry-big" src="/templates/2017/images/masonry-big.png">
                        </div>
                    @endif


{{--
                    <div class="grow grid-item grid-item--height3 cerulean-blue">
                        <img class="masonry-overflow masonry-big" src="/templates/2017/images/masonry-big.png">
                    </div>
--}}


                    <div class="grow grid-item haze-green"></div>
                    <div class="grow grid-item supernova-yellow"></div>
                    <div class="grow grid-item torch-red"></div>
                    <div class="grow grid-item supernova-yellow">
                        <img class="hidden-sm masonry-overflow masonry11" src="/templates/2017/images/masonry-11.png">
                    </div>
                    <div class="grow grid-item cerulean-blue"></div>
                    <div class="grow grid-item grid-item--height2 jacksons-purple">
                        {{--<img class="asonry-padding paddingtop40 masonry-informacoes img-responsive" src="/templates/2017/images/masonry-05.png"><br>--}}
                        <div class="informacoes-masonry text-center">
                            <div class="title">Informações</div><br>
                            <div class="telefones">21 2588-1536 ou 21 2588-1202</div>
                        </div>
                        <div class="social-links-home text-center">
                            <a target="_blank" href="//www.facebook.com/parlamentojuvenilrio/"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="//www.youtube.com/user/parlamentojuvenilrj"><i class="fa fa-youtube"></i></a>
                        </div>

                    </div>
                    <div class="grow grid-item ecstasy-orange">
                        <img class="masonry-overflow masonry10" src="/templates/2017/images/masonry-06.png">
                    </div>

                    {{--<div class="grow grid-item cerulean-blue"></div>--}}

                    <div class="grow grid-item ecstasy-orange"></div>

                    <div class="grow grid-item grid-item--height2 white">
                        <img class="masonry-padding img-responsive" src="/templates/2017/images/logo-alerj-cores.png">
                    </div>

                    <div class="grow grid-item haze-green"></div>

                    {{--<div class="grow grid-item torch-red"></div>--}}
                </div>
            </div>
        </div>
    </section>



    @include('2017.home.partials.about')
    @include('2017.home.partials.howitworks')

    @if (app()->environment() != 'production')
        @include('2017.home.partials.timeline')

        {{--@include('2017.home.partials.subscriptions-map')--}}
    @endif

    @include('2017.home.partials.downloads')
@stop
