@extends('2017.layouts.layout')

@section('contents')
    <section class="notifications">
        <div class="container">
            @if (config('app.subscriptions.enabled') === false)
                <div class="row">
                    <div class="jumbotron">
                        {{--jumbotrom--}}
                        <h2>Início das inscrições adiado para o dia 19/04</h2>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="masonry-pj">
        <div class="container">
            <div class="row">
                <div class="grid">
                    <div class="grow grid-item lilas1">
                        <img class="masonry-overflow masonry10 img-responsive" src="/templates/2017/images/masonry-10.png">
                    </div>
                    <div class="grow grid-item azul1"></div>
                    <div class="grow grid-item verde3"></div>
                    <div class="grow grid-item grid-item--height2 branco2">
                        <img class="masonry-padding img-responsive" src="/templates/2017/images/masonry-03.png">
                    </div>
                    <div class="grow grid-item verde1"><img class="masonry-overflow masonry07" src="/templates/2017/images/masonry-07.png"></div>
                    <div class="grow grid-item verde2"></div>
                    <div class="grow grid-item azul2">
                    </div>
                    <div class="grow grid-item verde1">
                        <img class="hidden-sm masonry-overflow masonri-right masonry08" src="/templates/2017/images/masonry-08.png">
                    </div>
                    <div class="grow grid-item lilas2"></div>
                    <div class="grow grid-item grid-item--height3 azul1">
                        <img class="masonry-overflow masonry-big" src="/templates/2017/images/masonry-big.png">
                    </div>
                    <div class="grow grid-item  grid-item--height2 amarelo1">
                        @if (subscriptionsEnabled())
                            <div class="inscrevase form-group">
                                <div class="center">
                                    <a href="{{ route('subscribe.index') }}" class="btn btn-primary btn-large center-block">Clique para se inscrever</a>
                                </div>
                            </div>
                            @endif

                                    <!-- line modal -->
                            <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                            <h3 class="modal-title" id="lineModalLabel">Identifique-se</h3>
                                        </div>
                                        <div class="modal-body social-login ">



                                            <p  class="social-login-button">
                                                <a class="social-login-btn social-facebook" href="/auth/facebook"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-facebook.png"></a>
                                                <a class="social-login-btn social-twitter" href="/auth/twitter"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-twitter.png"></a>
                                                <a class="social-login-btn social-instagram" href="/auth/instagram"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-instagram.png"></a>
                                                <a class="social-login-btn social-linkedin" href="/auth/linkedin"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-linkedin.png"></a>
                                                <a class="social-login-btn social-youtube" href="/auth/youtube"><img class="img-responsive" src="/templates/2017/assets/img/socialbtn-youtube.png"></a>

                                            </p>

                                            <div class="nao-possui-redes">
                                                <p>Caso você não esteja em nenhuma dessas redes sociais, clique aqui.</p>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img class="masonry-nopadding" src="/templates/2017/images/masonry-04.png">

                    </div>
                    <div class="grow grid-item verde3"></div>
                    <div class="grow grid-item amarelo1"></div>
                    <div class="grow grid-item vermelho1"></div>
                    <div class="grow grid-item amarelo2">
                        <img class="hidden-sm masonry-overflow masonry11" src="/templates/2017/images/masonry-11.png">
                    </div>
                    <div class="grow grid-item azul1"></div>
                    <div class="grow grid-item grid-item--height2 azul4">
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
                    <div class="grow grid-item laranja1">
                        <img class="masonry-overflow masonry10" src="/templates/2017/images/masonry-06.png">
                    </div>

                    <div class="grow grid-item azul1"></div>

                    <div class="grow grid-item laranja1"></div>

                    <div class="grow grid-item grid-item--height2 branco2">
                        <img class="masonry-padding img-responsive" src="/templates/2017/images/logo-alerj-cores.png">
                    </div>

                    <div class="grow grid-item verde3"></div>

                    <div class="grow grid-item vermelho1"></div>
                </div>
            </div>
        </div>
    </section>

    @include('2017.home.partials.about')
    @include('2017.home.partials.howitworks')

    @if (app()->environment() != 'production')
        @include('2017.home.partials.timeline')
        @include('2017.home.partials.subscriptions-map')
    @endif
@stop
