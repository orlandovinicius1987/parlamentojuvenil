@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao-content" class="fundo-capacitacao-content">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h2>Capacitação</h2>
                    &nbsp;<BR> &nbsp;<BR>
                    <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">{{ $loggedUser->name }}</span></div>
                    <a href="/2016/training/logout" class="btn btn-primary">Sair</a>
                    <div class="capacitacao-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus eget diam sagittis rutrum at at eros. Vestibulum vel efficitur nibh. Vestibulum consectetur, tortor sed feugiat rhoncus, nisi tortor semper risus, ut accumsan massa neque quis diam. In egestas eros et enim tempus, ac semper enim dignissim. Cras porta elit quis iaculis bibendum. Praesent pellentesque sapien odio, id aliquam metus dictum in. Maecenas dapibus lorem feugiat risus ultrices sollicitudin.</div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs12">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fundo-azul1">
        <div class="container">
            <div class="row">
                <a name="videos"></a>
                <div class="col-xs-11 capacitacao-videos">

                    <div class="capacitacao-videos-titulo">
                        <h2>Vídeos da Capacitação</h2>
                    </div>

                    <?php
                        $count = 0;
                    ?>
                    @foreach($videos as $item)
                        <?php
                            $count += $item['watched'] ? 0 : 1;
                        ?>
                        <div class="video-box {{ $count > 1 ? 'inactive' : '' }}"> <!-- class inactive -->
                            <div class="media">
                                <a class="pull-left" href="{{ $count > 1 ? '#' : $item['watch-url'] }}">
                                    <img class="media-object" src="{{ $item['thumb-url'] }}">
                                </a>
                                <div class="media-body">
                                    <a href="{{ $count > 1 ? '#' : $item['watch-url'] }}">
                                        <h4 class="media-heading">{{ $item['title'] }}</h4>
                                        <p>{{ $item['lead'] }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-xs-1 capacitacao-menu">
                    <nav class="navbar navbar-default sidebar" role="navigation">
                        <div class="">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#videos">Vídeos<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-play-circle"></span></a></li>
                                    <li ><a href="#apostilas">Apostilas<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-folder-open"></span></a></li>
                                    {{--<li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <a name="apostilas"></a>
                <div class="col-xs-11 capacitacao-videos capacitacao-apostilas">

                    <div class="capacitacao-videos-titulo">
                        <h2>Apostilas da Capacitação</h2>
                    </div>

                    <?php
                        $count = 0;
                    ?>
                    @foreach($documents as $item)
                        <?php
                            $count += $item['watched'] ? 0 : 1;
                        ?>
                        <div class="video-box {{ $count > 1 ? 'inactive' : '' }}"> <!-- class inactive -->
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="{{ $item['thumb-url'] }}">
                                </a>
                                <div class="media-body">
                                    <a href="{{ $count > 1 ? '#' : $item['watch-url'] }}">
                                        <h4 class="media-heading">{{ $item['title'] }}</h4>
                                        <p>{{ $item['lead'] }}</p>
                                    </a>
                                    <p><a href="{{ $count > 1 ? '#' : $item['watch-url'] }}" class="btn caixa-amarela btn-apostilas">Fazer Download da Apostila NºXX <span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-download-alt"></a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@stop
