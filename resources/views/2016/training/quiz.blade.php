@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="vue-quiz" class="fundo-quiz">
        <div class="container">
            <div class="row">
                <div class="col-xs12 text-center">
                    &nbsp;<BR>
                    <h2>Quiz</h2>
                    {{--<br>
                    <div class="capacitacao-heading">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus eget diam sagittis rutrum at at eros. Vestibulum vel efficitur nibh. Vestibulum consectetur, tortor sed feugiat rhoncus, nisi tortor semper risus, ut accumsan massa neque quis diam. In egestas eros et enim tempus, ac semper enim dignissim. Cras porta elit quis iaculis bibendum. Praesent pellentesque sapien odio, id aliquam metus dictum in. Maecenas dapibus lorem feugiat risus ultrices sollicitudin. Vivamus fringilla ullamcorper libero. Donec eget eleifend ligula. Etiam a consequat urna.</div>
                    <br>--}}
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-xs12">
                        <div class="modal-dialog">
                            <div class="modal-content quadro-amarelo borda-preta" v-if="quiz">

                                <div class="modal-header row caixa-preta">
                                    <div class="col-xs-2 numero-pergunta quadro-amarelo ">
                                        <span class="numero-quiz" id="qid">@{{ currentQuestion+1  }}</span>
                                    </div>
                                    <div class="col-xs-10">
                                        <h3>@{{ quiz.questions[currentQuestion].question }}</h3>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="quiz" id="quiz" data-toggle="buttons">
                                        <label
                                            class="element-animation1 btn btn-lg btn-primary btn-block caixa-vermelha"
                                            v-for="(index, answer) in quiz.questions[currentQuestion].answers"
                                            v-on:click="answerQuestion(index)"
                                        >
                                            <span class="btn-label">
                                                <i class="glyphicon glyphicon-chevron-right"></i>
                                            </span>

                                            @{{ answer }}
                                        </label>
                                    </div>
                                </div>
                                <div class="modal-footer text-muted">
                                    <div class="answer" id="answer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <modal :show.sync="askForConfirmation">
                <!--
                  you can use custom content here to overwrite
                  default content
                -->
                <h3 slot="header">custom header</h3>
            </modal>
        </div>
    </section>
@stop

@section('javascript')
    @include('scripts.vueQuiz')
@stop
