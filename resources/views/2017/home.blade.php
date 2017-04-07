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

    <section id="services" class="services">
        <div class="container">
            <div class="como-funciona">

                <div class="row">
                    <div class="como-funciona-itens">
                        <div class="col-sm-5">
                            <div class="item item-1">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="row">

                                        {{--<span class="sub-title">O Parlamento Juvenil é um projeto da Assembleia Legislativa do Estado do Rio de Janeiro (Alerj) para incentivar a participação de jovens na política. Os estudantes passasm uma semana vivendo o dia a dia de um Deputado Estadual, discutindo e aprimorando projetos de lei que els mesmos criam. Os seis projetos aprovados ainda podem virar lei no Estado. </span>--}}

                                            <p class="item-description">
                                                O Parlamento Juvenil é um projeto da Assembleia Legislativa do Estado do Rio de Janeiro (Alerj) para incentivar a participação de jovens na política. Os estudantes passasm uma semana vivendo o dia a dia de um Deputado Estadual, discutindo e aprimorando projetos de lei que els mesmos criam. Os seis projetos aprovados ainda podem virar lei no Estado.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="azul1 square02">

                                        </div>
                                        {{--<div class="grow grid-item verde3" style="position: absolute; left: 380px; top: 380px;"></div>--}}
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.item -->

                            <div class="item item-2">
                                <div class="row">
                                    <div class="col-sm-2 vermelho1 square01">

                                    </div>
                                    <div class="col-sm-10">
                                        <h3 class="item-title">Quem pode participar?</h3>
                                        <p class="item-description">
                                            Alunos do 1º e 2º ano do ensino médio da Rede Pública Estadual do Rio de Janeiro, com idade entre 14 e 17 anos.
                                        </p>
                                    </div>
                                </div>

                                <div class="row paddingtop10">
                                    <div class="col-sm-10">
                                        <ul>
                                            <li>
                                                O aluno que completar 18 anos após a semana do Parlamento Juvenil (20 a 26 de novembro) poderá concorrer.
                                            </li>
                                            <li>
                                                Os eleitores do PJ são alunos do 8º ano em diante.
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-2 verde01 square01">

                                    </div>
                                </div>
                            </div><!-- /.item -->
                        </div>
                        <div class="col-sm-7">

                            <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/tE6Tx5xbvzo' frameborder='0' allowfullscreen></iframe></div>

                        </div>
                    </div><!-- /.como-funciona-itens -->
                </div><!-- /.row -->
            </div><!-- /.service-area -->
        </div><!-- /.container -->
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





    <section id="latest-post" class="mapa-das-inscricoes">
        <div class="container">
            <div class="">


                <div class="row">
                    <div class="">
                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-6  text-center">
                            <h2 class="">Mapa das inscrições</h2>
                        </div>
                        <div class="col-sm-3">

                        </div>
                    </div>
                    <!-- /.latest-posts -->
                </div>
                <!-- /.row -->


                <div class="row">
                    <div class="">
                        <div class="col-sm-2">
                            <div class="item">
                                <article class="post type-post">
                                    <div class="post-top">
                                        <div class="post-thumbnail">
                                            <img src="images/blog/1.jpg" alt="post Image">
                                        </div><!-- /.post-thumbnail -->
                                        <div class="post-meta">
                                            <div class="entry-meta">
                      <span class="entry-date">
                        <time datetime="2015-01-15">15 Jan 2015</time>
                      </span>
                      <span class="author-name">
                        <a href="#">John Doe</a>
                      </span>
                      <span class="post-tags">
                        <ul class="tag-list">
                            <li><a href="#">web-design</a></li>
                            <li><a href="#">html5</a></li>
                            <li><a href="#">css3</a></li>
                        </ul>
                      </span>
                                            </div><!-- /.entry-meta -->
                                        </div><!-- /.post-meta -->
                                    </div><!-- /.post-top -->
                                    <div class="post-content">
                                        <h2 class="entry-title"><a href="blog-single.html">Standard Blog post Title</a></h2>
                                        <p class="entry-text">
                                            Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                                        </p>
                                        <a class="btn" href="#">
                                            <span class="btn-icon"><i class="fa fa-arrow-circle-right"></i></span>
                                            Read More
                                        </a>
                                    </div><!-- /.post-content -->
                                </article>
                            </div><!-- /.item -->
                        </div>
                        <div class="col-sm-8">


                            <div class="map-container">
                                <div id="googleMaps" class="google-map-container">
                                </div>
                            </div><!-- /.map-container -->
                        </div><!-- /#google-map-->
                        <!-- Google Map Section End -->

                        </div>
                        <div class="col-sm-2">
                            <div class="item">
                                <article class="post type-post">
                                    <div class="post-top">
                                        <div class="post-thumbnail">
                                            <img src="images/blog/2.jpg" alt="post Image">
                                        </div><!-- /.post-thumbnail -->
                                        <div class="post-meta">
                                            <div class="entry-meta">
                    <span class="entry-date">
                      <time datetime="2015-01-15">15 Jan 2015</time>
                    </span>
                    <span class="author-name">
                      <a href="#">John Doe</a>
                    </span>
                    <span class="post-tags">
                      <ul class="tag-list">
                          <li><a href="#">web-design</a></li>
                          <li><a href="#">html5</a></li>
                          <li><a href="#">css3</a></li>
                      </ul>
                    </span>
                                            </div><!-- /.entry-meta -->
                                        </div><!-- /.post-meta -->
                                    </div><!-- /.post-top -->
                                    <div class="post-content">
                                        <h2 class="entry-title"><a href="blog-single.html">Standard Blog post Title</a></h2>
                                        <p class="entry-text">
                                            Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                                        </p>
                                        <a class="btn" href="#">
                                            <span class="btn-icon"><i class="fa fa-arrow-circle-right"></i></span>
                                            Read More
                                        </a>
                                    </div><!-- /.post-content -->
                                </article>
                            </div><!-- /.item -->
                        </div>
                    </div><!-- /.latest-posts -->
                </div><!-- /.row -->

            <div class="row">
                <div class="">
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-6 text-center">
                        <h2 class="">Mapa das inscrições</h2>
                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
                <!-- /.latest-posts -->
            </div>
            <!-- /.row -->



            </div><!-- /.post-area -->
        </div><!-- /.container -->
    </section><!-- /#latest-post -->


    <section id="contact" class="contact">
        <div class="contact-area">
            <!-- Google Map Section -->
            <div id="google-map" class="google-map">


        </div><!-- /.contact-area -->
    </section><!-- /#contact -->


@stop