@extends('2017.layouts.layout')

@section('contents')
    <section id="header-capacitacao-content" class="capacitacao-content">
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
                <div class="col-xs-10 col-xs-offset-1">
                    <div class="row text-center capacitacao-intro">
                        <div class="capacitacao-greatings">Olá <span  class="capacitacao-username">Nome do Aluno{{ $loggedUser->name }} ,</span>
                            {{--<a href="/2017/training/logout" class="btn btn-primary">Sair</a>--}}
                        </div>


                        <p> É uma honra para o Parlamento Juvenil da ALERJ, recebê-lo por aqui. </p>
                        <p> É importante que faça todo o processo de capacitação com muita atenção, para que conheça as ferramentas necessárias para elaborar o seu projeto de lei, que pode ir para a mão do Governador.</p>

                        Boa aula!
                    </div>
                </div>
            </div>
            <div class="row aulas">
                <div class="col-md-6">
                    <div class="comofunciona-panel-border cerulean-blue">
                        <div class="assistido">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        </div>
                        <div class="colors-panel-body supernova-yellow text-center">

                            <img class="img-responsive" src="/templates/2017/images/capacitacao/capa-aula1.png">
                            <p class="botoes-capacitacao">
                                <a href="/training/watch/2017.1.video.1" class="btn violet-red btn-apostilas">Vídeo<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-film"></span></a>

                                <a href="/training/watch/2017.1.document.1" class="btn danube-blue btn-apostilas">Apostila<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span></a>

                                <a href="/training/quiz/2" class="btn ecstasy-orange btn-apostilas">Quiz<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="comofunciona-panel-border violet-red">
                        <div class="assistido">
                            <i class="fa fa-square-o" aria-hidden="true"></i>
                        </div>

                        <div class="colors-panel-body lima-green  text-center">

                            <img class="img-responsive" src="/templates/2017/images/capacitacao/capa-aula2.png">
                            <p class="botoes-capacitacao">
                                <a href="/training/watch/2017.1.video.1" class="btn violet-red btn-apostilas">Vídeo<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-film"></span></a>

                                <a href="/training/watch/2017.1.document.1" class="btn danube-blue btn-apostilas">Apostila<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span></a>

                                <a href="/training/quiz/2" class="btn ecstasy-orange btn-apostilas">Quiz<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span></a>
                            </p>
                        </div>
                        <div class="black-overlay">

                        </div>
                    </div>
                </div>
            </div>
        </div>



{{--
        <div class="row">

            <div class="col-xs-12 capacitacao-videos ">
                <div class="capacitacao-videos-titulo">
                    <h2>AULAS</h2>
                </div>

                @foreach($training as $courseKey => $course)
                    <div class="video-box supernova-yellow  {{ $course['visible'] ? '' : 'inactive' }}"> <!-- class inactive -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="/templates/2017/images/capacitacao/aula00{{$courseKey+1}}.jpg">
                            </a>
                            <div class="media-body {{ $course['done'] ? 'assistido' : '' }}">
                                <div class="shape ">
                                    <div class="shape-text jacksons-purple">
                                        Assistido
                                    </div>
                                </div>

                                <a href="{{ $course['relations']['videos'][0]['watch-url'] }}">
                                    <h4 class="media-heading">{{ $course['name'] }}</h4>
                                    <p>PJ, nesta aula você vai aprender mais sobre os processos e técnicas legislativas para montar um bom projeto de lei! </p>
                                </a>
                                <p>
                                    @if($course['relations']['videos'][0]['visible'])
                                        <a href="{{ $course['relations']['videos'][0]['watch-url']  }}" class="btn violet-red btn-apostilas">Vídeo<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-film"></span></a>
                                    @endif

                                    @if($course['relations']['documents'][0]['visible'])
                                        <a href="{{ $course['relations']['documents'][0]['watch-url'] }}" class="btn danube-blue btn-apostilas">Apostila<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span></a>
                                    @endif

                                    @if($course['relations']['quiz'][0]['visible'])
                                        <a href="{{ $course['relations']['quiz'][0]['watch-url'] }}" class="btn caixa-amarela btn-apostilas">Quiz<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-question-sign"></span></a>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
--}}

        </div>
    </section>





    {{--    <section class="fundo-azul1">
            <div class="container">
                <div class="row">
                    <a name="apostilas">
                    </a>
                    <div class="col-xs-12 capacitacao-videos ">
                        <div class="capacitacao-videos-titulo">
                            <h2>AULAS</h2>
                        </div>

                        @foreach($training as $courseKey => $course)
                            <div class="video-box {{ $course['visible'] ? '' : 'inactive' }}"> <!-- class inactive -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object" src="/templates/2017/images/capacitacao/aula00{{$courseKey+1}}.jpg">
                                    </a>
                                    <div class="media-body {{ $course['done'] ? 'assistido' : '' }}">
                                        <div class="shape">
                                            <div class="shape-text">
                                                Assistido
                                            </div>
                                        </div>

                                        <a href="{{ $course['relations']['videos'][0]['watch-url'] }}">
                                            <h4 class="media-heading">{{ $course['name'] }}</h4>
                                            <p>PJ, nesta aula você vai aprender mais sobre os processos e técnicas legislativas para montar um bom projeto de lei! </p>
                                        </a>
                                        <p>
                                            @if($course['relations']['videos'][0]['visible'])
                                                <a href="{{ $course['relations']['videos'][0]['watch-url']  }}" class="btn caixa-amarela btn-apostilas">Vídeo<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-film"></span></a>
                                            @endif

                                            @if($course['relations']['documents'][0]['visible'])
                                                <a href="{{ $course['relations']['documents'][0]['watch-url'] }}" class="btn caixa-amarela btn-apostilas">Apostila<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-list-alt"></span></a>
                                            @endif

                                            @if($course['relations']['quiz'][0]['visible'])
                                                <a href="{{ $course['relations']['quiz'][0]['watch-url'] }}" class="btn caixa-amarela btn-apostilas">Quiz<span style="font-size:22px; margin-left: 10px;" class="pull-right showopacity glyphicon glyphicon-question-sign"></span></a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        --}}
@stop
