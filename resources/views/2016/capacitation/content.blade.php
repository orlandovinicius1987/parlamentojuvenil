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
                    <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">Nome do Usuário Logado</span></div>
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
                <div class="col-xs12 capacitacao-videos">


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
            </div>
        </div>
    </section>


@stop
