@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header')

    <section id="home">
        <div id="main-slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="/pj2016/images/slider/bg_home-3-min.jpg" alt="slider">
                    <div class="carousel-caption">
                        <h2>Inscreva-se já para a edição 2016 </h2>
                        <h4>participe do Parlamento Juvenil</h4>
                        <a href="/inscricao">Faça a sua inscrição <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="/pj2016/images/{{ $banner_file }}" alt="slider">
                    <div class="carousel-caption">
                        <h2>Edição 2015 </h2>
                        <h4>saiba o que aconteceu na 9ª edição</h4>
                        <a href="/2015">Saiba Mais <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" src="/pj2016/images/slider/bg_home-4-min.jpg" alt="slider">
                    <div class="carousel-caption">
                        <h2>Faça história com a gente<br> e mostre que você é 10!</h2>
                        {{--<h4></h4>--}}

                        {{--<a href="#contact">GRAB YOUR TICKETS <i class="fa fa-angle-right"></i></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#home-->

    <section id="sobre">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2>O que é o Parlamento Juvenil?</h2>
                    <p>O Parlamento Juvenil é um projeto da Assembleia Legislativa do Rio de Janeiro (Alerj), apartidário e autônomo, cujo objetivo é aproximar o jovem da política. Instalado em 2003, envolve as 1.200 escolas estaduais dos 92 municípios do Estado e chega à nona edição em 2015.

                    <p>A iniciativa, de autoria do deputado Jorge Picciani (PMDB), presidente da Alerj, segue os moldes de um parlamento convencional. Eleitos pelos próprios colegas de escola, por voto direto, os parlamentares juvenis têm as mesmas atribuições dos deputados estaduais. Durante uma semana, eles apresentam, discutem e aprimoram projetos de lei.

                    <p>Nos últimos quatro anos, 252 jovens foram escolhidos. Para participar da seleção, é preciso ter entre 14 e 17 anos e ser aluno da rede pública estadual de ensino.


                    </p>
                    <a href="#" class="btn btn-primary">View Date & Place <i class="fa fa-angle-right"></i></a>

                    <h3>Quem pode participar?</h3>
                    <p>
                        Alunos do Ensino Fundamental II e Médio da rede pública estadual do Rio de Janeiro, com idade entre 14 e 17 anos.
                    </p>


                    {{--<h3>Inscreva-se</h3>--}}
                    @include('partials.subscribe')

                            <!--<h3>E como funciona?</h3>


                    <div class="col-md-4">
                        <h4>1</h4>
                        Cada município do Rio de Janeiro pode ser representado por um parlamentar juvenil. As eleições acontecem nas escolas, em dois turnos de votação.
                        <p></p>
                    </div>

                    <div class="col-md-4">
                        <h4>2</h4>
                        Os Deputados eleitos aprendem mais sobre sua função em oficinas de capacitação preparadas pela Alerj.
                        <p></p>
                    </div>

                    <div class="col-md-4">
                        <h4>3</h4>
                        Durante uma semana, os parlamentares apresentam, debatem e votam os projetos de sua autoria no plenário da Alerj. No fim, as escolhas são encaminhadas á apreciação do Governador, podendo ou não virar lei.
                        <p></p>
                    </div>-->

                </div>
                <div class="side">
                    <div class="col-xs-12 col-md-4 col-md-offset-1 bg">
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <h3>E como funciona?</h3>

                                <div class="content">
                                    <div>
                                        <h4>1</h4>
                                        <p>Cada município do Rio de Janeiro pode ser representado por um parlamentar juvenil. As eleições acontecem nas escolas, em dois turnos de votação.
                                        </p>
                                    </div>

                                    <div>
                                        <h4>2</h4>
                                        <p>Os Deputados eleitos aprendem mais sobre sua função em oficinas de capacitação preparadas pela Alerj.
                                        </p>
                                    </div>

                                    <div>
                                        <h4>3</h4>
                                        <p>Durante uma semana, os parlamentares apresentam, debatem e votam os projetos de sua autoria no plenário da Alerj. No fim, as escolhas são encaminhadas á apreciação do Governador, podendo ou não virar lei.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<img class="img-responsive" src="/pj2016/images/guitar2.png" alt="guitar">--}}

                    </div>
                </div>
            </div>
        </div>

    </section><!--/#about-->

    <section id="explore">
        <div class="container">
            <div class="row">
                <div class="watch">
                    {{--<img class="img-responsive" src="/pj2016/images/watch.png" alt="">--}}
                </div>

                <div class="col-md-12 col-sm-5">
                    @include('2016.partials.timeline')
                </div>
                <!--<div class="col-sm-7 col-md-4">

                </div>-->
            </div>
            <div class="cart">
                <a href="#"><i class="fa fa-sign-in"></i> <span>Faça sua inscrição</span></a>
            </div>
        </div>
    </section><!--/#explore-->

    <section id="noticias" class="fundo-azul">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h2>Notícias</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-4 quadro-amarelo texto-preto">
                            <div class="titulo borda-preta text-center">Loren Post Title</div>
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="http://placehold.it/260x180" alt="">
                                </a>
                            </div>

                            <div class="col-xs-12 quadro-branco borda-preta-lateral texto-preto">
                                jkfsdl fjdks jfls jfs djfs jflds fk dkls fjklwslf sjk fjklsd jfk dsjfk jsd fjkdsl jfk
                            </div>
                            <div class="col-xs-12 quadro-branco borda-preta-lateral borda-preta-final">
                                <div class="pull-left">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 hidden-lg hidden-md respiro"></div>

                        <div class="col-xs-12 col-md-4 quadro-amarelo texto-preto">
                            <div class="titulo borda-preta text-center">Loren Post Title</div>
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="http://placehold.it/260x180" alt="">
                                </a>
                            </div>
                            <div class="col-xs-12 quadro-branco borda-preta-lateral texto-preto">
                                jkfsdl fjdks jfls jfs djfs jflds fk dkls fjklwslf sjk fjklsd jfk dsjfk jsd fjkdsl jfk
                            </div>
                            <div class="col-xs-12 quadro-branco borda-preta-lateral borda-preta-final">
                                <div class="pull-left">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 hidden-lg hidden-md respiro"></div>

                        <div class="col-xs-12 col-md-4 quadro-amarelo texto-preto">
                            <div class="titulo borda-preta text-center">Loren Post Title</div>
                            <div class="thumbnail">
                                <a href="#">
                                    <img src="http://placehold.it/260x180" alt="">
                                </a>
                            </div>
                            <div class="col-xs-12 quadro-branco borda-preta-lateral texto-preto">
                                jkfsdl fjdks jfls jfs djfs jflds fk dkls fjklwslf sjk fjklsd jfk dsjfk jsd fjkdsl jfk
                            </div>
                            <div class="col-xs-12 quadro-branco borda-preta-lateral borda-preta-final">
                                <div class="pull-left">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                        <div class="col-md-2 col-xs-12"><div class="quadro-vermelho borda-preta">Ler mais Notícias</div></div>
                        <div class="col-md-5 quadro-amarelo hidden-xs hidden-sm"><div class="borda-preta">&nbsp;</div></div>
                    </div>

                {{--<div class="row text-center">--}}
                        {{--<button type="button" class="btn btn-default">Ver mais notícias</button>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>
        </div>

    </section>


    <section id="event"  class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-9">
                    <div id="event-carousel" class="carousel slide" data-interval="false">
                        <h2 class="heading">Parlamentares da VII Edição</h2>
                        <a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event1.jpg" alt="event-image">
                                            <h4>Chester Bennington</h4>
                                            <h5>Vocal</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event2.jpg" alt="event-image">
                                            <h4>Mike Shinoda</h4>
                                            <h5>vocals, rhythm guitar</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event3.jpg" alt="event-image">
                                            <h4>Rob Bourdon</h4>
                                            <h5>drums</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event4.jpg" alt="event-image">
                                            <h4>Chester Bennington</h4>
                                            <h5>Vocal</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event5.jpg" alt="event-image">
                                            <h4>Mike Shinoda</h4>
                                            <h5>vocals, rhythm guitar</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event6.jpg" alt="event-image">
                                            <h4>Rob Bourdon</h4>
                                            <h5>drums</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event7.jpg" alt="event-image">
                                            <h4>Chester Bennington</h4>
                                            <h5>Vocal</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event8.jpg" alt="event-image">
                                            <h4>Mike Shinoda</h4>
                                            <h5>vocals, rhythm guitar</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="single-event">
                                            <img class="img-responsive" src="/pj2016/images/edicoes/viii/event9.jpg" alt="event-image">
                                            <h4>Rob Bourdon</h4>
                                            <h5>drums</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="guitar">--}}
                    {{--<img class="img-responsive" src="/pj2016/images/guitar.png" alt="guitar">--}}
                {{--</div>--}}
            </div>
        </div>
    </section><!--/#event-->

    <section id="galeria" class="fundo-azul">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>Galeria</h2>

                    <div id="masonry-container" class="fluid masonry-container">
                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="img-responsive" data-original="http://lorempixel.com/400/200/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="img-responsive" data-original="http://lorempixel.com/400/150/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/200/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/350/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/300/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/350/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/430/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/350/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/300/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="img-responsive" data-original="http://lorempixel.com/400/400/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="img-responsive" data-original="http://lorempixel.com/400/150/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="img-responsive" data-original="http://lorempixel.com/400/450/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/100/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/250/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/430/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/200/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="img-responsive" data-original="http://lorempixel.com/400/150/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="img-responsive" data-original="http://lorempixel.com/400/450/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/350/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/380/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/350/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/350/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/200/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/300/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/350/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/390/sports">
                        </div>

                        <div class="col-sm-6 col-md-4 item">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-original="http://lorempixel.com/400/430/sports">
                        </div>
                    </div>
    </section>

    {{--<section id="sponsor">--}}
        {{--<div id="sponsor-carousel" class="carousel slide" data-interval="false">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-10">--}}
                        {{--<h2>Sponsors</h2>--}}
                        {{--<a class="sponsor-control-left" href="#sponsor-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>--}}
                        {{--<a class="sponsor-control-right" href="#sponsor-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>--}}
                        {{--<div class="carousel-inner">--}}
                            {{--<div class="item active">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/svg/logoalerj-positivo.svg" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/svg/logoparlamento.svg" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/svg/logogoverno-positivo.svg" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor4.png" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor5.png" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor6.png" alt=""></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor6.png" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor5.png" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor4.png" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor3.png" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor2.png" alt=""></a></li>--}}
                                    {{--<li><a href="#"><img class="img-responsive" src="/pj2016/images/sponsor/sponsor1.png" alt=""></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="light">--}}
                {{--<img class="img-responsive" src="/pj2016/images/light.png" alt="">--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!--/#sponsor-->


    <section id="anteriores" class="fundo-azul">
        <div class="container-fluid">
            <div class="row text-center">
                <h2>Edições Anteriores</h2>

                <div class="owl-carousel">

                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joyce Dias de Lima<br><span class="city-name">Guapimirim</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Juliana Carneiro Pessanha - Duque de Caxias.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Juliana Carneiro Pessanha - Duque de Caxias.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Juliana Carneiro Pessanha<br><span class="city-name">Duque de Caxias</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Julie Souto da Silva - Japeri.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Julie Souto da Silva - Japeri.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kaio Klinsman L. Rodrigues - Rio das Ostras.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kaio Klinsman L. Rodrigues - Rio das Ostras.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Kaio Klinsman L. Rodrigues<br><span class="city-name">Rio das Ostras</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Karline Lima Belem - Marica.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Karline Lima Belem - Marica.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Karline Lima Belem<br><span class="city-name">Marica</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kassia Cristina C. Santos - Porto Real.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kassia Cristina C. Santos - Porto Real.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Kassia Cristina C. Santos<br><span class="city-name">Porto Real</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lara Carvalho de Oliveira - Duas Barras.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lara Carvalho de Oliveira - Duas Barras.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lara Carvalho de Oliveira<br><span class="city-name">Duas Barras</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Larissa da Silva Ferreira - Nova Iguacu.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Larissa da Silva Ferreira - Nova Iguacu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Larissa da Silva Ferreira<br><span class="city-name">Nova Iguacu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas Gomes R. S. Azevedo - Macae.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas Gomes R. S. Azevedo - Macae.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lucas Gomes R. S. Azevedo<br><span class="city-name">Macae</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas da Silva Goncalves - Natividade.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas da Silva Goncalves - Natividade.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lucas da Silva Goncalves<br><span class="city-name">Natividade</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Felipe Freire da Silva - Rio de Janeiro Metro VI.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Felipe Freire da Silva - Rio de Janeiro Metro VI.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiz Felipe Freire da Silva<br><span class="city-name">Rio de Janeiro Metro VI</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Gustavo Marinho - Teresopolis.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Gustavo Marinho - Teresopolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiz Gustavo Marinho<br><span class="city-name">Teresopolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiza Barros do Nascimento - Iguaba Grande.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiza Barros do Nascimento - Iguaba Grande.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiza Barros do Nascimento<br><span class="city-name">Iguaba Grande</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Magno de Carvalho Junior - Rio Claro.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Magno de Carvalho Junior - Rio Claro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Magno de Carvalho Junior<br><span class="city-name">Rio Claro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maisa Junqueira da Silva - Sao Francisco de Itabapoana.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maisa Junqueira da Silva - Sao Francisco de Itabapoana.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Maisa Junqueira da Silva<br><span class="city-name">Sao Francisco de Itabapoana</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcia Freire do Nascimento - Rio de Janeiro Metro III.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcia Freire do Nascimento - Rio de Janeiro Metro III.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcia Freire do Nascimento<br><span class="city-name">Rio de Janeiro Metro III</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcio Enoque de A. Crispim - Itatiaia.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcio Enoque de A. Crispim - Itatiaia.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcio Enoque de A. Crispim<br><span class="city-name">Itatiaia</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marco Antonio A. M. da Silva - Santo Antonio de Padua.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marco Antonio A. M. da Silva - Santo Antonio de Padua.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marco Antonio A. M. da Silva<br><span class="city-name">Santo Antonio de Padua</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcos Vinicius R. da Silva - Belford Roxo.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcos Vinicius R. da Silva - Belford Roxo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcos Vinicius R. da Silva<br><span class="city-name">Belford Roxo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maria Isabel Alfredo Silva - Quatis.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maria Isabel Alfredo Silva - Quatis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Maria Isabel Alfredo Silva<br><span class="city-name">Quatis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mateus F. Lima de Souza - Sao Joao de Meriti.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mateus F. Lima de Souza - Sao Joao de Meriti.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mateus F. Lima de Souza<br><span class="city-name">Sao Joao de Meriti</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Matheus de M. G. Vieira - Engenheiro Paulo de Frontin.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Matheus de M. G. Vieira - Engenheiro Paulo de Frontin.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Matheus de M. G. Vieira<br><span class="city-name">Engenheiro Paulo de Frontin</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mauro Braga Bastos - Areal.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mauro Braga Bastos - Areal.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mauro Braga Bastos<br><span class="city-name">Areal</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mylena Goncalves Lugate - Varre-Sai.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mylena Goncalves Lugate - Varre-Sai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mylena Goncalves Lugate<br><span class="city-name">Varre</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Natalia Azevedo Silva - Quissama.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Natalia Azevedo Silva - Quissama.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Natalia Azevedo Silva<br><span class="city-name">Quissama</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Nathalya Mendes Paiva - Nilopolis.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Nathalya Mendes Paiva - Nilopolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Nathalya Mendes Paiva<br><span class="city-name">Nilopolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Palloma Silva da Costa - Arraial do Cabo.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Palloma Silva da Costa - Arraial do Cabo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Palloma Silva da Costa<br><span class="city-name">Arraial do Cabo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Patrick Santos Silva - Cantagalo.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Patrick Santos Silva - Cantagalo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Patrick Santos Silva<br><span class="city-name">Cantagalo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Paulo Goncalves Neves Neto - Trajano de Moraes.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Paulo Goncalves Neves Neto - Trajano de Moraes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Paulo Goncalves Neves Neto<br><span class="city-name">Trajano de Moraes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rafael de Jesus Viviani - Silva Jardim.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rafael de Jesus Viviani - Silva Jardim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Rafael de Jesus Viviani<br><span class="city-name">Silva Jardim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Raone Silva Soares - Rio das Flores.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Raone Silva Soares - Rio das Flores.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Raone Silva Soares<br><span class="city-name">Rio das Flores</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rayssa Teixeira da Conceicao - Saquarema.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rayssa Teixeira da Conceicao - Saquarema.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Rayssa Teixeira da Conceicao<br><span class="city-name">Saquarema</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Taina Gomes Damas - Barra do Pirai.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Taina Gomes Damas - Barra do Pirai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Taina Gomes Damas<br><span class="city-name">Barra do Pirai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thais Silva Alcantara - Mage.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thais Silva Alcantara - Mage.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thais Silva Alcantara<br><span class="city-name">Mage</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thayna Nogueira da Silva - Mendes.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thayna Nogueira da Silva - Mendes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thayna Nogueira da Silva<br><span class="city-name">Mendes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thiago de Oliveira Lopes - Cardoso Moreira.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thiago de Oliveira Lopes - Cardoso Moreira.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thiago de Oliveira Lopes<br><span class="city-name">Cardoso Moreira</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Antonio Nascimento - Itaborai.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Antonio Nascimento - Itaborai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Vinicius Antonio Nascimento<br><span class="city-name">Itaborai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Selem da Fonseca - Carapebus.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Selem da Fonseca - Carapebus.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Vinicius Selem da Fonseca<br><span class="city-name">Carapebus</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Brito de Azevedo - Rio Bonito.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Brito de Azevedo - Rio Bonito.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yan Brito de Azevedo<br><span class="city-name">Rio Bonito</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Carlos S. da Silva - Valenca.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Carlos S. da Silva - Valenca.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yan Carlos S. da Silva<br><span class="city-name">Valenca</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yasmin Luizo de Sousa - Tres Rios.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yasmin Luizo de Sousa - Tres Rios.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yasmin Luizo de Sousa<br><span class="city-name">Tres Rios</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yolanda da Silva Nascimento - Volta Redonda.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yolanda da Silva Nascimento - Volta Redonda.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yolanda da Silva Nascimento<br><span class="city-name">Volta Redonda</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Acaian Neves dos Santos - Italva.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Acaian Neves dos Santos - Italva.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Acaian Neves dos Santos<br><span class="city-name">Italva</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Alex Leite Pereira - Pinheiral.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Alex Leite Pereira - Pinheiral.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Alex Leite Pereira<br><span class="city-name">Pinheiral</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Aline Goncalves Ferreira - Mangaratiba.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Aline Goncalves Ferreira - Mangaratiba.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Aline Goncalves Ferreira<br><span class="city-name">Mangaratiba</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Amanda Sheron M. Fernandes - Conceicao de Macabu.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Amanda Sheron M. Fernandes - Conceicao de Macabu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Amanda Sheron M. Fernandes<br><span class="city-name">Conceicao de Macabu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Beatriz F. da Silva - Queimados.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Beatriz F. da Silva - Queimados.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Ana Beatriz F. da Silva<br><span class="city-name">Queimados</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Carolina de Barros Nunes - Comendador Levy Gasparian.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Carolina de Barros Nunes - Comendador Levy Gasparian.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Ana Carolina de Barros Nunes<br><span class="city-name">Comendador Levy Gasparian</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andre Guilherme B. Barbosa - Cachoeiras de Macacu.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andre Guilherme B. Barbosa - Cachoeiras de Macacu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andre Guilherme B. Barbosa<br><span class="city-name">Cachoeiras de Macacu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andressa Fernandes de Souza - Miguel Pereira.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andressa Fernandes de Souza - Miguel Pereira.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andressa Fernandes de Souza<br><span class="city-name">Miguel Pereira</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andreza Ingride Goncalves - Sumidouro.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andreza Ingride Goncalves - Sumidouro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andreza Ingride Goncalves<br><span class="city-name">Sumidouro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Areza Zozimo Caputo Silva - Sao Jose do Vale do Rio Preto.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Areza Zozimo Caputo Silva - Sao Jose do Vale do Rio Preto.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Areza Zozimo Caputo Silva<br><span class="city-name">Sao Jose do Vale do Rio Preto</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Bianca Ramos Rosa - Paraty.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Bianca Ramos Rosa - Paraty.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Bianca Ramos Rosa<br><span class="city-name">Paraty</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Camila Sofia N. T. Sampaio - Santa Maria Madalena.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Camila Sofia N. T. Sampaio - Santa Maria Madalena.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Camila Sofia N. T. Sampaio<br><span class="city-name">Santa Maria Madalena</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Ferreira Pereira - Paty de Alferes.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Ferreira Pereira - Paty de Alferes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Carolina Ferreira Pereira<br><span class="city-name">Paty de Alferes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Pestana C. Leite - Tangua.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Pestana C. Leite - Tangua.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Carolina Pestana C. Leite<br><span class="city-name">Tangua</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Claudio Lucas Souza dos Reis - Mesquita.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Claudio Lucas Souza dos Reis - Mesquita.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Claudio Lucas Souza dos Reis<br><span class="city-name">Mesquita</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Debora Merces Mendes - Angra dos Reis.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Debora Merces Mendes - Angra dos Reis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Debora Merces Mendes<br><span class="city-name">Angra dos Reis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Deborah Milena F. de Paula - Itaguai.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Deborah Milena F. de Paula - Itaguai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Deborah Milena F. de Paula<br><span class="city-name">Itaguai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Evelyn Gomes Costa - Sao Joao da Barra.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Evelyn Gomes Costa - Sao Joao da Barra.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Evelyn Gomes Costa<br><span class="city-name">Sao Joao da Barra</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Fabricio Mathias S. Castilho - Pirai.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Fabricio Mathias S. Castilho - Pirai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Fabricio Mathias S. Castilho<br><span class="city-name">Pirai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel Richard B. Rodrigues - Rio de Janeiro Metro VI.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel Richard B. Rodrigues - Rio de Janeiro Metro VI.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriel Richard B. Rodrigues<br><span class="city-name">Rio de Janeiro Metro VI</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel da Silva Alves - Petropolis.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel da Silva Alves - Petropolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriel da Silva Alves<br><span class="city-name">Petropolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriele Barbosa de Sa - Sao Goncalo.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriele Barbosa de Sa - Sao Goncalo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriele Barbosa de Sa<br><span class="city-name">Sao Goncalo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giovanni Zuccolo S. Vellasco - Cambuci.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giovanni Zuccolo S. Vellasco - Cambuci.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Giovanni Zuccolo S. Vellasco<br><span class="city-name">Cambuci</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giulia Joana Santos Lopes - Armacao dos Buzios.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giulia Joana Santos Lopes - Armacao dos Buzios.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Giulia Joana Santos Lopes<br><span class="city-name">Armacao dos Buzios</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Greicykelly Miranda da Silva - Itaperuna.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Greicykelly Miranda da Silva - Itaperuna.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Greicykelly Miranda da Silva<br><span class="city-name">Itaperuna</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Guilherme M. P. Caldeira - Casimiro de Abreu.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Guilherme M. P. Caldeira - Casimiro de Abreu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Guilherme M. P. Caldeira<br><span class="city-name">Casimiro de Abreu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Helvis Esteff Braga - Sao Sebastiao do Alto.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Helvis Esteff Braga - Sao Sebastiao do Alto.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Helvis Esteff Braga<br><span class="city-name">Sao Sebastiao do Alto</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isabela Leticia de Assis - Cabo Frio.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isabela Leticia de Assis - Cabo Frio.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Isabela Leticia de Assis<br><span class="city-name">Cabo Frio</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isis Leal Silva - Carmo.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isis Leal Silva - Carmo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Isis Leal Silva<br><span class="city-name">Carmo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jeferson da Silva Viana - Sao Fidelis.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jeferson da Silva Viana - Sao Fidelis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jeferson da Silva Viana<br><span class="city-name">Sao Fidelis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jessica Goncalves da Silva - Barra Mansa.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jessica Goncalves da Silva - Barra Mansa.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jessica Goncalves da Silva<br><span class="city-name">Barra Mansa</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Carlos Freze Sthorc - Nova Friburgo.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Carlos Freze Sthorc - Nova Friburgo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Carlos Freze Sthorc<br><span class="city-name">Nova Friburgo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Aguiar Moreira - Cordeiro.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Aguiar Moreira - Cordeiro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro Aguiar Moreira<br><span class="city-name">Cordeiro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Costa Pitzer - Araruama.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Costa Pitzer - Araruama.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro Costa Pitzer<br><span class="city-name">Araruama</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro da Costa Valente - Sao Pedro da Aldeia.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro da Costa Valente - Sao Pedro da Aldeia.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro da Costa Valente<br><span class="city-name">Sao Pedro da Aldeia</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao da Rocha Ferreira Silva - Macuco.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao da Rocha Ferreira Silva - Macuco.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao da Rocha Ferreira Silva<br><span class="city-name">Macuco</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Johnatan Franca de Assis - Campos dos Goytacazes.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Johnatan Franca de Assis - Campos dos Goytacazes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Johnatan Franca de Assis<br><span class="city-name">Campos dos Goytacazes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jonathan Carlos S. Werneck - Seropedica.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jonathan Carlos S. Werneck - Seropedica.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jonathan Carlos S. Werneck<br><span class="city-name">Seropedica</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jorge Luiz Silva - Niteroi.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jorge Luiz Silva - Niteroi.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jorge Luiz Silva<br><span class="city-name">Niteroi</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Josafa Ferraz E. da Silva - Rio de Janeiro Metro IV.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Josafa Ferraz E. da Silva - Rio de Janeiro Metro IV.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Josafa Ferraz E. da Silva<br><span class="city-name">Rio de Janeiro Metro IV</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jose Pedro Geraldo Vieira - Bom Jardim.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jose Pedro Geraldo Vieira - Bom Jardim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jose Pedro Geraldo Vieira<br><span class="city-name">Bom Jardim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joyce Dias de Lima<br><span class="city-name">Guapimirim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Juliana Carneiro Pessanha - Duque de Caxias.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Juliana Carneiro Pessanha - Duque de Caxias.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Juliana Carneiro Pessanha<br><span class="city-name">Duque de Caxias</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Julie Souto da Silva - Japeri.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Julie Souto da Silva - Japeri.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Julie Souto da Silva<br><span class="city-name">Japeri</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kaio Klinsman L. Rodrigues - Rio das Ostras.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kaio Klinsman L. Rodrigues - Rio das Ostras.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Kaio Klinsman L. Rodrigues<br><span class="city-name">Rio das Ostras</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Karline Lima Belem - Marica.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Karline Lima Belem - Marica.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Karline Lima Belem<br><span class="city-name">Marica</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kassia Cristina C. Santos - Porto Real.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Kassia Cristina C. Santos - Porto Real.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Kassia Cristina C. Santos<br><span class="city-name">Porto Real</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lara Carvalho de Oliveira - Duas Barras.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lara Carvalho de Oliveira - Duas Barras.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lara Carvalho de Oliveira<br><span class="city-name">Duas Barras</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Larissa da Silva Ferreira - Nova Iguacu.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Larissa da Silva Ferreira - Nova Iguacu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Larissa da Silva Ferreira<br><span class="city-name">Nova Iguacu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas Gomes R. S. Azevedo - Macae.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas Gomes R. S. Azevedo - Macae.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lucas Gomes R. S. Azevedo<br><span class="city-name">Macae</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas da Silva Goncalves - Natividade.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Lucas da Silva Goncalves - Natividade.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Lucas da Silva Goncalves<br><span class="city-name">Natividade</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Felipe Freire da Silva - Rio de Janeiro Metro VI.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Felipe Freire da Silva - Rio de Janeiro Metro VI.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiz Felipe Freire da Silva<br><span class="city-name">Rio de Janeiro Metro VI</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Gustavo Marinho - Teresopolis.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiz Gustavo Marinho - Teresopolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiz Gustavo Marinho<br><span class="city-name">Teresopolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiza Barros do Nascimento - Iguaba Grande.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Luiza Barros do Nascimento - Iguaba Grande.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Luiza Barros do Nascimento<br><span class="city-name">Iguaba Grande</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Magno de Carvalho Junior - Rio Claro.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Magno de Carvalho Junior - Rio Claro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Magno de Carvalho Junior<br><span class="city-name">Rio Claro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maisa Junqueira da Silva - Sao Francisco de Itabapoana.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maisa Junqueira da Silva - Sao Francisco de Itabapoana.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Maisa Junqueira da Silva<br><span class="city-name">Sao Francisco de Itabapoana</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcia Freire do Nascimento - Rio de Janeiro Metro III.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcia Freire do Nascimento - Rio de Janeiro Metro III.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcia Freire do Nascimento<br><span class="city-name">Rio de Janeiro Metro III</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcio Enoque de A. Crispim - Itatiaia.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcio Enoque de A. Crispim - Itatiaia.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcio Enoque de A. Crispim<br><span class="city-name">Itatiaia</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marco Antonio A. M. da Silva - Santo Antonio de Padua.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marco Antonio A. M. da Silva - Santo Antonio de Padua.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marco Antonio A. M. da Silva<br><span class="city-name">Santo Antonio de Padua</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcos Vinicius R. da Silva - Belford Roxo.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Marcos Vinicius R. da Silva - Belford Roxo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Marcos Vinicius R. da Silva<br><span class="city-name">Belford Roxo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maria Isabel Alfredo Silva - Quatis.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Maria Isabel Alfredo Silva - Quatis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Maria Isabel Alfredo Silva<br><span class="city-name">Quatis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mateus F. Lima de Souza - Sao Joao de Meriti.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mateus F. Lima de Souza - Sao Joao de Meriti.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mateus F. Lima de Souza<br><span class="city-name">Sao Joao de Meriti</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Matheus de M. G. Vieira - Engenheiro Paulo de Frontin.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Matheus de M. G. Vieira - Engenheiro Paulo de Frontin.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Matheus de M. G. Vieira<br><span class="city-name">Engenheiro Paulo de Frontin</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mauro Braga Bastos - Areal.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mauro Braga Bastos - Areal.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mauro Braga Bastos<br><span class="city-name">Areal</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mylena Goncalves Lugate - Varre-Sai.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Mylena Goncalves Lugate - Varre-Sai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Mylena Goncalves Lugate<br><span class="city-name">Varre</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Natalia Azevedo Silva - Quissama.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Natalia Azevedo Silva - Quissama.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Natalia Azevedo Silva<br><span class="city-name">Quissama</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Nathalya Mendes Paiva - Nilopolis.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Nathalya Mendes Paiva - Nilopolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Nathalya Mendes Paiva<br><span class="city-name">Nilopolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Palloma Silva da Costa - Arraial do Cabo.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Palloma Silva da Costa - Arraial do Cabo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Palloma Silva da Costa<br><span class="city-name">Arraial do Cabo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Patrick Santos Silva - Cantagalo.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Patrick Santos Silva - Cantagalo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Patrick Santos Silva<br><span class="city-name">Cantagalo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Paulo Goncalves Neves Neto - Trajano de Moraes.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Paulo Goncalves Neves Neto - Trajano de Moraes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Paulo Goncalves Neves Neto<br><span class="city-name">Trajano de Moraes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rafael de Jesus Viviani - Silva Jardim.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rafael de Jesus Viviani - Silva Jardim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Rafael de Jesus Viviani<br><span class="city-name">Silva Jardim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Raone Silva Soares - Rio das Flores.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Raone Silva Soares - Rio das Flores.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Raone Silva Soares<br><span class="city-name">Rio das Flores</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rayssa Teixeira da Conceicao - Saquarema.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Rayssa Teixeira da Conceicao - Saquarema.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Rayssa Teixeira da Conceicao<br><span class="city-name">Saquarema</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Taina Gomes Damas - Barra do Pirai.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Taina Gomes Damas - Barra do Pirai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Taina Gomes Damas<br><span class="city-name">Barra do Pirai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thais Silva Alcantara - Mage.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thais Silva Alcantara - Mage.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thais Silva Alcantara<br><span class="city-name">Mage</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thayna Nogueira da Silva - Mendes.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thayna Nogueira da Silva - Mendes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thayna Nogueira da Silva<br><span class="city-name">Mendes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thiago de Oliveira Lopes - Cardoso Moreira.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Thiago de Oliveira Lopes - Cardoso Moreira.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Thiago de Oliveira Lopes<br><span class="city-name">Cardoso Moreira</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Antonio Nascimento - Itaborai.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Antonio Nascimento - Itaborai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Vinicius Antonio Nascimento<br><span class="city-name">Itaborai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Selem da Fonseca - Carapebus.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Vinicius Selem da Fonseca - Carapebus.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Vinicius Selem da Fonseca<br><span class="city-name">Carapebus</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Brito de Azevedo - Rio Bonito.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Brito de Azevedo - Rio Bonito.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yan Brito de Azevedo<br><span class="city-name">Rio Bonito</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Carlos S. da Silva - Valenca.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yan Carlos S. da Silva - Valenca.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yan Carlos S. da Silva<br><span class="city-name">Valenca</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yasmin Luizo de Sousa - Tres Rios.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yasmin Luizo de Sousa - Tres Rios.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yasmin Luizo de Sousa<br><span class="city-name">Tres Rios</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yolanda da Silva Nascimento - Volta Redonda.jpg" class="img-responsive owl-lazy loading" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Yolanda da Silva Nascimento - Volta Redonda.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Yolanda da Silva Nascimento<br><span class="city-name">Volta Redonda</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Acaian Neves dos Santos - Italva.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Acaian Neves dos Santos - Italva.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Acaian Neves dos Santos<br><span class="city-name">Italva</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Alex Leite Pereira - Pinheiral.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Alex Leite Pereira - Pinheiral.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Alex Leite Pereira<br><span class="city-name">Pinheiral</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Aline Goncalves Ferreira - Mangaratiba.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Aline Goncalves Ferreira - Mangaratiba.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Aline Goncalves Ferreira<br><span class="city-name">Mangaratiba</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Amanda Sheron M. Fernandes - Conceicao de Macabu.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Amanda Sheron M. Fernandes - Conceicao de Macabu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Amanda Sheron M. Fernandes<br><span class="city-name">Conceicao de Macabu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Beatriz F. da Silva - Queimados.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Beatriz F. da Silva - Queimados.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Ana Beatriz F. da Silva<br><span class="city-name">Queimados</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Carolina de Barros Nunes - Comendador Levy Gasparian.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Ana Carolina de Barros Nunes - Comendador Levy Gasparian.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Ana Carolina de Barros Nunes<br><span class="city-name">Comendador Levy Gasparian</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andre Guilherme B. Barbosa - Cachoeiras de Macacu.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andre Guilherme B. Barbosa - Cachoeiras de Macacu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andre Guilherme B. Barbosa<br><span class="city-name">Cachoeiras de Macacu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andressa Fernandes de Souza - Miguel Pereira.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andressa Fernandes de Souza - Miguel Pereira.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andressa Fernandes de Souza<br><span class="city-name">Miguel Pereira</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andreza Ingride Goncalves - Sumidouro.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Andreza Ingride Goncalves - Sumidouro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Andreza Ingride Goncalves<br><span class="city-name">Sumidouro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Areza Zozimo Caputo Silva - Sao Jose do Vale do Rio Preto.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Areza Zozimo Caputo Silva - Sao Jose do Vale do Rio Preto.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Areza Zozimo Caputo Silva<br><span class="city-name">Sao Jose do Vale do Rio Preto</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Bianca Ramos Rosa - Paraty.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Bianca Ramos Rosa - Paraty.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Bianca Ramos Rosa<br><span class="city-name">Paraty</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Camila Sofia N. T. Sampaio - Santa Maria Madalena.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Camila Sofia N. T. Sampaio - Santa Maria Madalena.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Camila Sofia N. T. Sampaio<br><span class="city-name">Santa Maria Madalena</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Ferreira Pereira - Paty de Alferes.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Ferreira Pereira - Paty de Alferes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Carolina Ferreira Pereira<br><span class="city-name">Paty de Alferes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Pestana C. Leite - Tangua.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Carolina Pestana C. Leite - Tangua.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Carolina Pestana C. Leite<br><span class="city-name">Tangua</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Claudio Lucas Souza dos Reis - Mesquita.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Claudio Lucas Souza dos Reis - Mesquita.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Claudio Lucas Souza dos Reis<br><span class="city-name">Mesquita</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Debora Merces Mendes - Angra dos Reis.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Debora Merces Mendes - Angra dos Reis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Debora Merces Mendes<br><span class="city-name">Angra dos Reis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Deborah Milena F. de Paula - Itaguai.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Deborah Milena F. de Paula - Itaguai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Deborah Milena F. de Paula<br><span class="city-name">Itaguai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Evelyn Gomes Costa - Sao Joao da Barra.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Evelyn Gomes Costa - Sao Joao da Barra.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Evelyn Gomes Costa<br><span class="city-name">Sao Joao da Barra</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Fabricio Mathias S. Castilho - Pirai.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Fabricio Mathias S. Castilho - Pirai.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Fabricio Mathias S. Castilho<br><span class="city-name">Pirai</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel Richard B. Rodrigues - Rio de Janeiro Metro VI.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel Richard B. Rodrigues - Rio de Janeiro Metro VI.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriel Richard B. Rodrigues<br><span class="city-name">Rio de Janeiro Metro VI</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel da Silva Alves - Petropolis.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriel da Silva Alves - Petropolis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriel da Silva Alves<br><span class="city-name">Petropolis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriele Barbosa de Sa - Sao Goncalo.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Gabriele Barbosa de Sa - Sao Goncalo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Gabriele Barbosa de Sa<br><span class="city-name">Sao Goncalo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giovanni Zuccolo S. Vellasco - Cambuci.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giovanni Zuccolo S. Vellasco - Cambuci.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Giovanni Zuccolo S. Vellasco<br><span class="city-name">Cambuci</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giulia Joana Santos Lopes - Armacao dos Buzios.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Giulia Joana Santos Lopes - Armacao dos Buzios.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Giulia Joana Santos Lopes<br><span class="city-name">Armacao dos Buzios</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Greicykelly Miranda da Silva - Itaperuna.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Greicykelly Miranda da Silva - Itaperuna.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Greicykelly Miranda da Silva<br><span class="city-name">Itaperuna</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Guilherme M. P. Caldeira - Casimiro de Abreu.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Guilherme M. P. Caldeira - Casimiro de Abreu.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Guilherme M. P. Caldeira<br><span class="city-name">Casimiro de Abreu</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Helvis Esteff Braga - Sao Sebastiao do Alto.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Helvis Esteff Braga - Sao Sebastiao do Alto.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Helvis Esteff Braga<br><span class="city-name">Sao Sebastiao do Alto</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isabela Leticia de Assis - Cabo Frio.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isabela Leticia de Assis - Cabo Frio.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Isabela Leticia de Assis<br><span class="city-name">Cabo Frio</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isis Leal Silva - Carmo.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Isis Leal Silva - Carmo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Isis Leal Silva<br><span class="city-name">Carmo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jeferson da Silva Viana - Sao Fidelis.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jeferson da Silva Viana - Sao Fidelis.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jeferson da Silva Viana<br><span class="city-name">Sao Fidelis</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jessica Goncalves da Silva - Barra Mansa.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jessica Goncalves da Silva - Barra Mansa.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jessica Goncalves da Silva<br><span class="city-name">Barra Mansa</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Carlos Freze Sthorc - Nova Friburgo.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Carlos Freze Sthorc - Nova Friburgo.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Carlos Freze Sthorc<br><span class="city-name">Nova Friburgo</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Aguiar Moreira - Cordeiro.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Aguiar Moreira - Cordeiro.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro Aguiar Moreira<br><span class="city-name">Cordeiro</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Costa Pitzer - Araruama.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro Costa Pitzer - Araruama.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro Costa Pitzer<br><span class="city-name">Araruama</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro da Costa Valente - Sao Pedro da Aldeia.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao Pedro da Costa Valente - Sao Pedro da Aldeia.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao Pedro da Costa Valente<br><span class="city-name">Sao Pedro da Aldeia</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao da Rocha Ferreira Silva - Macuco.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joao da Rocha Ferreira Silva - Macuco.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joao da Rocha Ferreira Silva<br><span class="city-name">Macuco</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Johnatan Franca de Assis - Campos dos Goytacazes.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Johnatan Franca de Assis - Campos dos Goytacazes.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Johnatan Franca de Assis<br><span class="city-name">Campos dos Goytacazes</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jonathan Carlos S. Werneck - Seropedica.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jonathan Carlos S. Werneck - Seropedica.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jonathan Carlos S. Werneck<br><span class="city-name">Seropedica</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jorge Luiz Silva - Niteroi.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jorge Luiz Silva - Niteroi.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jorge Luiz Silva<br><span class="city-name">Niteroi</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Josafa Ferraz E. da Silva - Rio de Janeiro Metro IV.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Josafa Ferraz E. da Silva - Rio de Janeiro Metro IV.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Josafa Ferraz E. da Silva<br><span class="city-name">Rio de Janeiro Metro IV</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jose Pedro Geraldo Vieira - Bom Jardim.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Jose Pedro Geraldo Vieira - Bom Jardim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Jose Pedro Geraldo Vieira<br><span class="city-name">Bom Jardim</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div>
                            <div class="congressman-info">
                                <img data-src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" class="img-responsive owl-lazy" alt="" src="http://www.parlamento-juvenil.rj.gov.br/files/apps/parlamentojuvenil/parlamentares/fotos/8a edicao (2014)/Joyce Dias de Lima - Guapimirim.jpg" style="opacity: 1;">
                                <div class="blackbg"></div>
                                <div class="label">Joyce Dias de Lima<br><span class="city-name">Guapimirim</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!--/#anteriores-->

    <section id="downloads">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center">
                    {{--<img src="/pj2016/images/download.png">--}}
                    <h2>Downloads</h2>
                    <br>
                    <p class="caixa-vermelha" style="margin-top: -9px;">Você pode precisar desses documentos</p>
                    <div class="row text-center">
                        <div class="col-xs-12 col-lg-4">
                            <div class="classWithPad caixa-amarela">
                            <a href="http://www.parlamento-juvenil.rj.gov.br/download/regimento-interno.pdf" class="btn border-button">
                               <img src="/pj2016/images/regimento.png" class="img-responsive">
                            </a>
                            <p>Regimento Interno</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-lg-4">
                            <div class="classWithPad caixa-amarela">
                            <a href="http://www.parlamento-juvenil.rj.gov.br/download/anexo-ii-calendario-de-atividades-9a-edicao.pdf" class="btn border-button">
                                <img src="/pj2016/images/calendario.png" class="img-responsive">
                            </a>
                            <p>Calendário de Atividades</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-lg-4">
                            <div class="classWithPad caixa-amarela">
                        <a href="http://www.parlamento-juvenil.rj.gov.br/download/documentos-necessarios-para-participar-parlamento-juvenil.zip" class="btn border-button">
                            <img src="/pj2016/images/documentos.png" class="img-responsive">
                        </a>
                        <p>Documentos Necessários para Participar</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#event-->

    <section id="depoimentos" class="fundo-azul">
        <div id="depoimentos-feed" class="carousel slide" data-interval="false">
            {{--<div class="depo">--}}
                {{--<img class="img-responsive" src="/pj2016/images/twit.png" alt="twit">--}}
            {{--</div>--}}
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center carousel-inner borda-preta">
                        <div class="item active">
                            <div class="pull-left"><img src="/pj2016/images/depoimentos/depoimento1.png" alt=""></div>
                            <div class="text-center"><p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
                                <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a></div>

                        </div>
                        <div class="item">
                            <img src="/pj2016/images/depoimentos/depoimento2.png" alt="">
                            <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
                            <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
                        </div>
                        <div class="item">
                            <img src="/pj2016/images/depoimentos/depoimento3.png" alt="">
                            <p>In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit </p>
                            <a href="#">http://t.co/yY7s1IfrAb 2 days ago</a>
                        </div>
                    </div>
                    <a class="depoimentos-control-left" href="#depoimentos-feed" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a class="depoimentos-control-right" href="#depoimentos-feed" data-slide="next"><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </section><!--/#depoimentos-feed-->



    <section id="contato" class="fundo-azul">
        <div class="contact-section">
            {{--<div class="ear-piece">--}}
                {{--<img class="img-responsive" src="/pj2016/images/ear-piece.png" alt="">--}}
                {{--<i class="fa fa-envelope fa-10x" aria-hidden="true" style="opacity: 0.2"></i>--}}
            {{--</div>--}}
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12">
                        <div class="contact-text">
                            <!--<h3>Contact</h3>
                                <address>
                                    E-mail: promo@party.com<br>
                                    Phone: +1 (123) 456 7890<br>
                                    Fax: +1 (123) 456 7891
                                </address>-->
                            <div class="quadro-amarelo borda-preta"><h2>Contato</h2></div>
                            <h2><i class="fa fa-phone fa-fw"></i>(21) 2588-1202</h2>
                            <h2><a href="mailto:pjalerj@gmail.com">pjalerj@gmail.com</a></h2>
                            <br>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            <i class="fa fa-youtube" aria-hidden="true"></i>

                            {{--<ul class="list-inline">--}}

                              {{----}}
                                {{--<li>--}}
                                    {{--<a href="https://www.facebook.com/parlamentojuvenilrio"><img src="/pj2016/images/svg/facebook-icon.svg" height="35px" alt="" class="loading"></a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="https://www.youtube.com/parlamentojuvenilrj"><img src="/pj2016/images/svg/youtube-icon.svg" height="35px" alt="" class="loading"></a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}



                        </div>
                        <!--<div class="contact-address">
                            <h3>Contact</h3>
                            <address>
                                Unit C2, St.Vincent's Trading Est.,<br>
                                Feeder Road,<br>
                                Bristol, BS2 0UY<br>
                                United Kingdom
                            </address>
                        </div>-->
                    </div>
                    <div class="col-xs-12">
                        <div id="contact-section">
                            <h3>Envie-nos uma Mensagem</h3>
                            <div class="status alert alert-success" style="display: none"></div>
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="required" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="required" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Escreva sua mensagem ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#contact-->
@stop
