@extends('templates.layout')

@section('contents')
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-1x fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <!--  Optional: close button
    <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-2x fa-times"></i></a> -->
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="#top">Parlamento Juvenil</i></a>
        </li>
        <li>
            <a href="#top">Home</a>
        </li>
        <li>
            <a href="#about">About</a>
        </li>
        <li>
            <a href="#services">Services</a>
        </li>
        <li>
            <a href="#case-study">Case Study</a>
        </li>
        <li>
            <a href="#portfolio">Portfolio</a>
        </li>
        <li>
            <a href="#testimonials">Testimonials</a>
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <img src="img/logoAlerj.png" alt="ALERJ"/> <br/>
                    <h1>Parlamento Juvenil <label class="label label-danger label-small">2015</label></h1>
                    <h2><i class="fa fa-calendar"></i> 22 a 28 de Novembro</h2>
                    <p>Participe, torne-se um parlamentar!</p>

                    <h1>
                        <i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-instagram"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    </h1>
                </div>

                <div class="col-md-4 col-md-offset-1">
                    <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. -->
                    <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                    <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                    <form method="POST" action="/post/formResponse">
                        {!! csrf_field() !!}

                        <h2>Inscreva-se</h2>
                        <p>Alunos da rede Estadual de Ensino</p>

                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name" class="sr-only control-label">Nome</label>
                                <input type="text" class="form-control input-lg" placeholder="Nome Completo" name="name" id="name" required data-validation-required-message="Por favor digite seu nome.">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name" class="sr-only control-label">Munic&iacute;pio</label>
                                <input type="text" class="form-control input-lg" placeholder="Munic&iacute;pio" name="city" id="city" required data-validation-required-message="Por favor digite seu nome.">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name" class="sr-only control-label">Escola</label>
                                <input type="text" class="form-control input-lg" placeholder="Escola" name="school" id="school" required data-validation-required-message="Por favor digite seu nome.">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-lg-6 floating-label-form-group controls no-pad-right">
                                <label for="email" class="sr-only control-label">Email</label>
                                <input type="email" class="form-control input-lg" placeholder="Email" name="email" id="email" required data-validation-required-message="Por favor digite seu e-mail.">
                                <span class="help-block text-danger"></span>
                            </div>
                            <div class="form-group col-lg-6 floating-label-form-group controls">
                                <label for="phone" class="sr-only control-label">Seu Telefone</label>
                                <input type="tel" class="form-control input-lg" placeholder="Telefone" name="phone" id="phone" required data-validation-required-message="Por favor digite seu telefone.">
                                <span class="help-block text-danger"></span>
                            </div>
                        </div>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block">Enviar inscri&ccedil;&atilde;o</button>
                            </div>
                            <div class="form-group col-xs-12">
                                <a id="spreadsheet" class="btn btn-lg btn-success btn-block hidden" href="{{ $spreadsheet }}" target="_blank">Ver planilha com inscri&ccedil;&otilde;es</a>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <div class="pull-right">
                        <img src="img/governo-150px-2.png" alt=""/>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
            <!-- mouse -->
               <span class="scroll-btn hidden-xs wow fadeInDownBig">
                   <a href="#about"><span class="mouse"><span></span></span></a>
               </span>
            <!-- mouse -->
        </div>
    </div>


</header>

<!-- about -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn">
                <i class="fa fa-5x fa-h-square"></i><br>
                <h2 class="heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, pariatur.</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur beatae delectus, distinctio dolor, eligendi ex facere fugit incidunt laborum molestiae odit omnis quasi soluta tempore tenetur velit voluptas. Non, voluptas!</p>
            </div>
        </div>
    </div>
</section>

<!-- The icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section class="about-grid">
    <div class="container-fluid wow fadeIn">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay=".2s">
                            <h3><i class="fa fa-desktop fa-lg"></i> Lorem ipsum.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus iure quae quia quod, ut voluptate.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay=".6s">
                            <h3><i class="fa fa-heart fa-lg"></i> Lorem ipsum dolor.</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, in omnis! Dolorum, nobis?</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay=".6s">
                            <h3><i class="fa fa-rocket fa-lg"></i> Lorem ipsum dolor sit.</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam atque corporis fugiat illo, iure maxime obcaecati odit ratione rem rerum.</p>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay=".8s">
                            <h3><i class="fa fa-css3 fa-lg"></i> Lorem ipsum dolor sit amet.</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequuntur illum impedit modi natus porro quas quibusdam quidem ratione voluptatibus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 hidden-sm img-about-greed text-center wow slideInRight"  data-wow-duration="2s">
                    <img src="img/laptop.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- call-to-action -->
<div class="call-to-action">
    <div class="container-fluid">
        <div class="col-lg-5 col-lg-offset-1">
            <div id="carousel-call-to-action" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-call-to-action" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-call-to-action" data-slide-to="1"></li>
                    <li data-target="#carousel-call-to-action" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="carousel-caption">
                            <h2 class="heading">Lorem ipsum dolor.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores earum, rerum. Ab asperiores, at atque aut delectus, exercitationem illum impedit natus neque nesciunt pariatur possimus rem reprehenderit ut, veniam. Accusamus aperiam atque cumque eum exercitationem libero mollitia pariatur, rem unde voluptatibus! Aperiam beatae fugiat id nostrum praesentium quasi saepe velit.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-caption">
                            <h1>Lorem ipsum.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci dicta distinctio doloremque itaque modi pariatur perferendis quis, voluptas. Aliquam aut corporis delectus enim quae quod veniam voluptas voluptatem! Ipsa ipsam laudantium quisquam vero. Corporis cupiditate dolorum possimus repellat suscipit!</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-caption">
                            <h2 class="heading">Lorem ipsum dolor sit.</h2>
                            <p>Seo Optimized, very lightweight code based on bootstrap. Easy to use and fast loading. Responsive layout, optimized for high conversion. Clean design focused on good readability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-lg-offset-2 text-center wow fadeIn">
            <br><i class="fa fa-5x fa-h-square"></i><br>
            <a href="https://wrapbootstrap.com/theme/hybrid-multipurpose-landing-page-WB0N64HDJ" class="btn border-button">DOWNLOAD LOREM <i class="fa fa-power-off"></i></a>
        </div>
    </div>
</div>

<!-- services -->
<section id="services" class="head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn">
                <h2 class="heading">Lorem Ipsum</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab deleniti earum fuga reprehenderit.</p>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container-fluid">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row wow fadeIn" data-wow-delay=".2s">
                <div class="col-md-4">
                    <h3><i class="fa fa-desktop fa-lg"></i> Lorem ipsum.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, saepe, velit. A enim impedit, ipsum necessitatibus officia qui quo unde!</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-heart fa-lg"></i> Lorem ipsum.</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque molestiae obcaecati odit quas, tempora veniam.</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-rocket fa-lg"></i> Lorem ipsum dolor.</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quae, quis. Ab, adipisci corporis id itaque labore nemo quas sequi sunt? Aspernatur eius eligendi minus?</p>
                </div>
            </div>
            <div class="row wow fadeIn" data-wow-delay=".6s">
                <div class="col-md-4">
                    <h3><i class="fa fa-male fa-lg"></i> Lorem ipsum.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-anchor fa-lg"></i> Lorem ipsum dolor.</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt?</p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-coffee fa-lg"></i> Lorem.</h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet deserunt dicta eveniet necessitatibus quibusdam voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- callout -->
<section class="callout">
    <div class="container-fluid text-vertical text-center">
        <div class="col-sm-10 col-sm-offset-1 wow fadeInDownBig">
            <i class="fa fa-5x fa-h-square"></i><br>
            <h2 class="heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus illo illum nobis.</p>
            <div class="row"><a href="https://wrapbootstrap.com/theme/hybrid-multipurpose-landing-page-WB0N64HDJ" class="btn border-button">DOWNLOAD LOREM <i class="fa fa-power-off"></i></a></div>
        </div>
    </div>
</section>

<!-- case-study -->
<section id="case-study" class="head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn">
                <h2 class="heading">Lorem Ipsum</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolores esse nesciunt ullam veritatis? Ad, magni, repudiandae?</p>
            </div>
        </div>
    </div>
</section>

<section class="case-study">
    <div class="container-fluid">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay=".2s">
                                <h3><i class="fa fa-desktop fa-lg"></i> Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis magni mollitia quaerat, quia quidem tempore veniam!<br>
                                    Lorem: <strong><a href="#">Lorem Ipsum</a></strong>
                                    Ipsum: <strong>20 Lorem</strong>
                                    Amet: <strong>Lorem Ipsum</strong>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay=".2s">
                                <h3><i class="fa fa-desktop fa-lg"></i> Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis magni mollitia quaerat, quia quidem tempore veniam!<br>
                                    Lorem: <strong><a href="#">Lorem Ipsum</a></strong>
                                    Ipsum: <strong>20 Lorem</strong>
                                    Amet: <strong>Lorem Ipsum</strong>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay=".2s">
                                <h3><i class="fa fa-desktop fa-lg"></i> Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis magni mollitia quaerat, quia quidem tempore veniam!<br>
                                    Lorem: <strong><a href="#">Lorem Ipsum</a></strong>
                                    Ipsum: <strong>20 Lorem</strong>
                                    Amet: <strong>Lorem Ipsum</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-lg-offset-1 hidden-sm img-case-study-greed text-center wow fadeInRight">
                        <img src="img/res2.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="head">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center wow fadeIn">
                <h2 class="heading">Lorem Ipsum</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequatur nam vitae. Saepe.</h3>
            </div>
        </div>
    </div>
</section>

<div class="portfolio">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-md-3 portfolio-item no-pad">
                <a data-target="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-youtube-square fa-4x"></i>
                        </div>
                    </div>
                    <img src="img/3.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-3 portfolio-item no-pad">
                <a data-target="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-vimeo-square fa-4x"></i>
                        </div>
                    </div>
                    <img src="img/1.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-3 portfolio-item no-pad">
                <a data-target="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-picture-o fa-4x"></i>
                        </div>
                    </div>
                    <img src="img/5.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-3 portfolio-item no-pad">
                <a data-target="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/8.jpg" class="img-responsive" alt="">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3 portfolio-item no-pad">
                <a data-target="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/7.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-3 portfolio-item no-pad">
                <a data-target="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/6.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-3 portfolio-item no-pad">
                <a data-target="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            Caption Text
                        </div>
                    </div>
                    <img src="img/2.jpg" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-6 col-md-3 portfolio-item no-pad">
                <a data-target="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-picture-o fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/4.jpg" class="img-responsive" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>Project Title</h2>
            <hr>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://player.vimeo.com/video/59642733" allowfullscreen></iframe>
            </div>
            <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            <ul class="list-inline item-details">
                <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                <li>Date: <strong><a href="#">April 2015</a></strong></li>
                <li>Service: <strong><a href="#">Web Development</a></strong></li>
            </ul>
            <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>Project Title</h2>
            <hr>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://player.vimeo.com/video/113287920" allowfullscreen></iframe>
            </div>
            <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            <ul class="list-inline item-details">
                <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                <li>Date: <strong><a href="#">April 2015</a></strong></li>
                <li>Service: <strong><a href="#">Web Development</a></strong></li>
            </ul>
            <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>Project Title</h2>
            <hr>
            <img src="img/5.jpg" class="img-responsive img-centered" alt="">
            <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            <ul class="list-inline item-details">
                <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                <li>Date: <strong><a href="#">April 2015</a></strong></li>
                <li>Service: <strong><a href="#">Web Development</a></strong></li>
            </ul>
            <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>Project Title</h2>
            <hr>
            <img src="img/8.jpg" class="img-responsive img-centered" alt="">
            <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            <ul class="list-inline item-details">
                <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                <li>Date: <strong><a href="#">April 2015</a></strong></li>
                <li>Service: <strong><a href="#">Web Development</a></strong></li>
            </ul>
            <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>Project Title</h2>
            <hr>
            <img src="img/7.jpg" class="img-responsive img-centered" alt="">
            <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            <ul class="list-inline item-details">
                <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                <li>Date: <strong><a href="#">April 2015</a></strong></li>
                <li>Service: <strong><a href="#">Web Development</a></strong></li>
            </ul>
            <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>Project Title</h2>
            <hr>
            <img src="img/6.jpg" class="img-responsive img-centered" alt="">
            <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            <ul class="list-inline item-details">
                <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                <li>Date: <strong><a href="#">April 2015</a></strong></li>
                <li>Service: <strong><a href="#">Web Development</a></strong></li>
            </ul>
            <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>Project Title</h2>
            <hr>
            <img src="img/2.jpg" class="img-responsive img-centered" alt="">
            <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            <ul class="list-inline item-details">
                <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                <li>Date: <strong><a href="#">April 2015</a></strong></li>
                <li>Service: <strong><a href="#">Web Development</a></strong></li>
            </ul>
            <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <i class="fa fa-times fa-3x fa-fw"></i>
        </div>
        <div class="modal-body">
            <h2>Project Title</h2>
            <hr>
            <img src="img/4.jpg" class="img-responsive img-centered" alt="">
            <p>Parlamento Juvenil is a multipurpose, responsive, one page html (bootstrap) theme, will look beautiful on any device. Parlamento Juvenil easily and efficiently scales your project with one code base, from phones to tablets to desktops.</p>
            <ul class="list-inline item-details">
                <li>Client: <strong><a href="#">Parlamento Juvenil</a></strong></li>
                <li>Date: <strong><a href="#">April 2015</a></strong></li>
                <li>Service: <strong><a href="#">Web Development</a></strong></li>
            </ul>
            <button type="button" class="border-button-black" data-dismiss="modal">CLOSE</button>
        </div>
    </div>
</div>

<!-- testimonials -->
<section id="testimonials">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="heading">Lorems</h2>

                <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/avatar1.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, soluta.</p>
                                <p class="carousel-name">Richard Miles, SomeCompany.com</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/avatar2.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet et nisi omnis similique.</p>
                                <p class="carousel-name">Jonnie Doe, SomeCompany.com</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="img/avatar3.jpg" alt="">
                            <div class="carousel-caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                <p class="carousel-name">Jane Roe, SomeCompany.com</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- sponsors -->
<div id="sponsor">
    <div class="container-fluid">
        <div class="row sponsor text-center wow fadeInLeftBig">
            <div class="col-md-2 gray col-md-offset-1">
                <a href="/"><img src="img/logo1.png" alt=""></a>
            </div>
            <div class="col-md-2 gray">
                <a href="/"><img src="img/logo2.png" alt=""></a>
            </div>
            <div class="col-md-2 gray">
                <a href="/"><img src="img/logo3.png" alt=""></a>
            </div>
            <div class="col-md-2 gray">
                <a href="/"><img src="img/logo4.png" alt=""></a>
            </div>
            <div class="col-md-2 gray">
                <a href="/"><img src="img/logo5.png" alt=""></a>
            </div>

        </div>
    </div>
</div>

<!-- contacts -->
<div id="contact">
    <div class="container-fluid overlay text-center">
        <div class="col-md-6 col-md-offset-3 wow fadeIn">
            <h2 class="heading">Entre Em Contato</h2>
            <h2><i class="fa fa-phone fa-fw"></i>(21) 2456-7890</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam commodi delectus doloribus ea esse fugit hic inventore laudantium, maiores nam natus numquam, officia quo ratione reiciendis, reprehenderit sequi tempora.</p>
            <ul class="list-inline">
                <li>
                    <a href="/"><i class="fa fa-twitter fa-2x fa-fw"></i></a>
                </li>
                <li>
                    <a href="/"><i class="fa fa-facebook fa-2x  fa-fw"></i></a>
                </li>
                <li>
                    <a href="/"><i class="fa fa-youtube fa-2x  fa-fw"></i></a>
                </li>
                <li>
                    <a href="/"><i class="fa fa-envelope-o fa-2x  fa-fw"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

@stop

