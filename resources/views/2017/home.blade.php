@extends('2017.layouts.layout')
@section('contents')
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
                        <img class="masonry-overflow masonri-right masonry08" src="/templates/2017/images/masonry-08.png">
                    </div>
                    <div class="grow grid-item lilas2"></div>
                    <div class="grow grid-item grid-item--height3 azul1">
                        <img class="masonry-overflow masonry-big" src="/templates/2017/images/masonry-big.png">
                    </div>
                    <div class="grow grid-item  grid-item--height2 amarelo1">
                        <div class="inscrevase form-group">
                            {{--<div class="input-group">
                                <input type="text" class="form-control" placeholder="Insira seu nome completo">
							<span class="input-group-btn">
							<button class="btn btn-default btfundo" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
							</span>
                            </div>--}}

                            <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary btn-large center-block">Clique para se inscrever</button></div>
                        </div>




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

                                        <!-- content goes here -->
                                        {{--<form>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">File input</label>
                                                <input type="file" id="exampleInputFile">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Check me out
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>--}}

                                    </div>
{{--                                    <div class="modal-footer">
                                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Close</button>
                                            </div>
                                            <div class="btn-group btn-delete hidden" role="group">
                                                <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal"  role="button">Delete</button>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                        </div>

                        <img class="masonry-nopadding" src="/templates/2017/images/masonry-04.png">

                    </div>
                    <div class="grow grid-item verde3"></div>
                    <div class="grow grid-item amarelo1"></div>
                    <div class="grow grid-item vermelho1"></div>
                    <div class="grow grid-item amarelo2">
                        <img class="masonry-overflow masonry11" src="/templates/2017/images/masonry-11.png">
                    </div>
                    <div class="grow grid-item azul1"></div>
                    <div class="grow grid-item grid-item--height2 azul4">
                        <img class="masonry-padding paddingtop40 masonry-informacoes img-responsive" src="/templates/2017/images/masonry-05.png">
                    </div>
                    <div class="grow grid-item laranja1">
                        <img class="masonry-overflow masonry10" src="/templates/2017/images/masonry-06.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="timeline-container">
        <div class="container-full">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Cronograma</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="watch">
                </div>
                <div class="col-xs-12">
                    <ul id="timeline" class="timeline">
                        <li class="timeline-inverted">
                            <div class="timeline-bullet info"><i class=""></i></div>
                            <div class="timeline-panel-border amarelo02">
                                <div class="timeline-date roxo01 date-left">
                                    <p>06</p>
                                    <p class="timeline-month">jul</p>
                                </div>
                                <div class="timeline-panel-body roxo01">
                                    <h4 class="timeline-panel-title">Eleições (1º turno)</h4>
                                    <p>lorem ipsum</p>
                                    <ul id="countdown">
                                        <li>
                                            <span class="time-font">48</span>
                                            <p>dias </p>
                                        </li>
                                        <li>
                                            <span class="time-font">11</span>
                                            <p class="">horas </p>
                                        </li>
                                        <li>
                                            <span class="time-font">8</span>
                                            <p class="">minutos</p>
                                        </li>
                                        <li>
                                            <span class="time-font">17</span>
                                            <p class="">segundos</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-bullet info"><i class=""></i></div>
                            <div class="timeline-panel-border roxo01">
                                <div class="timeline-date amarelo01 date-right txt-azul01">
                                    <p>30</p>
                                    <p class="timeline-month">jun</p>
                                </div>
                                <div class="timeline-panel-body amarelo01 txt-azul01">
                                    <h4 class="timeline-panel-title">Encerramento das inscrições</h4>
                                    <p> ipsum lorem quad esta</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-bullet info"><i class=""></i></div>
                            <div class="timeline-panel-border laranja01">
                                <div class="timeline-date verde01 date-left">
                                    <p>06</p>
                                    <p class="timeline-month">jul</p>
                                </div>
                                <div class="timeline-panel-body verde01">
                                    <h4 class="timeline-panel-title">Eleições (1º turno)</h4>
                                    <p> ipsum lorem quad esta</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-end"><i class=""></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@stop