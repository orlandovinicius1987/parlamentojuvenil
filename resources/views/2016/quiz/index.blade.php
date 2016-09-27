@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header-fixed')

    <section id="header-capacitacao" class="fundo-quiz">
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
                            <div class="modal-content quadro-amarelo borda-preta ">

                                <div class="modal-header row caixa-preta">
                                    <div class="col-xs-2 numero-pergunta quadro-amarelo ">
                                        <span class="numero-quiz" id="qid">1</span>
                                    </div>
                                    <div class="col-xs-10">
                                        <h3>Quais são os três Poderes da República Federativa do Brasil?</h3>
                                    </div>
                                </div>

                                <div class="modal-body">
                                    <div class="col-xs-3 col-xs-offset-5">
                                        <div id="loadbar" style="display: none;">
                                            <div class="blockG" id="rotateG_01"></div>
                                            <div class="blockG" id="rotateG_02"></div>
                                            <div class="blockG" id="rotateG_03"></div>
                                            <div class="blockG" id="rotateG_04"></div>
                                            <div class="blockG" id="rotateG_05"></div>
                                            <div class="blockG" id="rotateG_06"></div>
                                            <div class="blockG" id="rotateG_07"></div>
                                            <div class="blockG" id="rotateG_08"></div>
                                        </div>
                                    </div>

                                    <div class="quiz" id="quiz" data-toggle="buttons">
                                        <label class="element-animation1 btn btn-lg btn-primary btn-block caixa-vermelha"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">Administrativo, Executivo e Parlamentar.</label>
                                        <label class="element-animation2 btn btn-lg btn-primary btn-block caixa-vermelha"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">Legislativo, Executivo e Administrativo.</label>
                                        <label class="element-animation3 btn btn-lg btn-primary btn-block caixa-vermelha"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3">Judiciário, Executivo e Parlamentar.</label>
                                        <label class="element-animation4 btn btn-lg btn-primary btn-block caixa-vermelha"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4">Executivo, Judiciário e Legislativo.</label>
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
    </section>
@stop


@section('javascript')
    <script>
$(function(){
    var loading = $('#loadbar').hide();
    $(document)
    .ajaxStart(function () {
        loading.show();
    }).ajaxStop(function () {
    	loading.hide();
    });

    $("label.btn").on('click',function () {
    	var choice = $(this).find('input:radio').val();
    	$('#loadbar').show();
    	$('#quiz').fadeOut();
    	setTimeout(function(){
           $( "#answer" ).html(  $(this).checking(choice) );
            $('#quiz').show();
            $('#loadbar').fadeOut();
           /* something else */
    	}, 1500);
    });

    $ans = 3;

    $.fn.checking = function(ck) {
        if (ck != $ans)
            return '<div class="wrong">ERRADA</div>';
        else
            return '<div class="correct">CERTA</div>';
    };
});
    </script>

@stop