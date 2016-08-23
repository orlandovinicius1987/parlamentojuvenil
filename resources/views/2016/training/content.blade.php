@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao-content" class="fundo-capacitacao-content">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h1>Capacitação</h1>
                    &nbsp;<BR> &nbsp;<BR>
                    <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">{{ $loggedUser->name }}</span></div>
                    &nbsp;<BR> &nbsp;<BR>
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

                        <div class="video-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placekitten.com/408/287">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                    <h4 class="media-heading">Título do vídeo sobre a capacitação 1</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                                        Aliquam in felis sit amet augue.</p>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <div class="video-box inactive">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="http://placekitten.com/408/287">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Título do vídeo sobre a capacitação 2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                                        Aliquam in felis sit amet augue.</p>

                                </div>
                            </div>
                        </div>
                    <div class="video-box inactive">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placekitten.com/408/287">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Título do vídeo sobre a capacitação 3</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                                    Aliquam in felis sit amet augue.</p>

                            </div>
                        </div>
                    </div>
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

                    <div class="video-box">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placekitten.com/408/287">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading">Título da apostila sobre a capacitação 1</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                                        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                                        Aliquam in felis sit amet augue.</p>
                                </a>
                                <p><a href="#" class="btn caixa-amarela btn-apostilas">Fazer Download da Apostila NºXX <span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-download-alt"></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="video-box inactive">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placekitten.com/408/287">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Título da apostila sobre a capacitação 2</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                                    Aliquam in felis sit amet augue.</p>
                                <p><a href="#" class="btn caixa-amarela btn-apostilas">Fazer Download da Apostila NºXX <span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-download-alt"></a></p>

                            </div>
                        </div>
                    </div>
                    <div class="video-box inactive">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placekitten.com/408/287">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Título da apostila sobre a capacitação 3</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis
                                    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                                    Aliquam in felis sit amet augue.</p>

                                <p><a href="#" class="btn caixa-amarela btn-apostilas">Fazer Download da Apostila NºXX <span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-download-alt"></a></p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1 capacitacao-menu">

                </div>
            </div>
        </div>
    </section>


@stop
