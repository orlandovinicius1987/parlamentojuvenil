<section id="noticias" class="fundo-azul">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <h2>Últimas Notícias</h2>
                    </div>
                </div>

                <div class="row">
                    @include('2016.partials.iterate-news', ['first' => 1, 'last' => 6])
                </div>

                <br>

                @if (count($articles) > 6)
                    <div class="row text-center">
                        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                        <div class="col-md-2 col-xs-12"><div class="quadro-vermelho borda-preta">Mais notícias</div></div>
                        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                    </div>
                @endif

                {{--<div class="row text-center">--}}
                {{--<button type="button" class="btn btn-default">Ver mais notícias</button>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
</section>
