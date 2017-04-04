<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Parlamento Juvenil 2017</title>

        <!-- Bootstrap Core CSS -->
        <link href="/templates/2017/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="/templates/2017/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->
        <link href="/templates/2017/css/freelancer.css" rel="stylesheet">

        <!-- Masonry CSS -->
        <link href="/templates/2017/css/masonry.css" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.min.js"></script>

        <!-- Temporary navbar container fix until Bootstrap 4 is patched -->
        <style>
            .navbar-toggler {
                z-index: 1;
            }

            @media (max-width: 576px) {
                nav > .container {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav id="mainNav" class="navbar fixed-top navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <div class="container">
                <a class="navbar-brand page-scroll" href="#page-top"><img src="/templates/2017/img/logo-parlamento2.png"></a>
                <div class="collapse navbar-collapse" id="navbarExample">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#portfolio"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#about"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact"><i class="fa fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <div class=" col-md-3 institucional">
                    <img src="/templates/2017/img/logo-alerj.png" class="logo-alerj img-responsive"><img src="/templates/2017/img/logo-governo.png" class="logo-governo img-responsive">
                </div>
            </div>
        </nav>

        <!-- Header -->
        <header>
            <div class="container">
                @yield('contents')
            </div>
        </header>

        <!-- Portfolio Grid Section -->
        <!--<section id="portfolio">
            <div class="container">
                <h2 class="text-center">Portfolio</h2>
                <hr class="star-primary">
                <div class="row">
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/templates/2017/img/portfolio/cabin.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/templates/2017/img/portfolio/cake.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/templates/2017/img/portfolio/circus.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/templates/2017/img/portfolio/game.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/templates/2017/img/portfolio/safe.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="/templates/2017/img/portfolio/submarine.png" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- About Section -->
        <!-- <section class="success" id="about">
             <div class="container">
                 <h2 class="text-center">About</h2>
                 <hr class="star-light">
                 <div class="row">
                     <div class="col-lg-4 offset-lg-2">
                         <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                     </div>
                     <div class="col-lg-4">
                         <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                     </div>
                     <div class="col-lg-8 offset-lg-2 text-center">
                         <a href="#" class="btn btn-lg btn-outline">
                             <i class="fa fa-download"></i> Download Theme
                         </a>
                     </div>
                 </div>
             </div>
         </section>-->

        <!-- Contact Section -->
        <!--   <section id="contact">
               <div class="container">
                   <h2 class="text-center">Contact Me</h2>
                   <hr class="star-primary">
                   <div class="row">
                       <div class="col-lg-8 offset-lg-2">
                           &lt;!&ndash; To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. &ndash;&gt;
                           &lt;!&ndash; The form should work on most web servers, but if the form is not working you may need to configure your web server differently. &ndash;&gt;
                           <form name="sentMessage" id="contactForm" novalidate>
                               <div class="row control-group">
                                   <div class="form-group col-xs-12 floating-label-form-group controls">
                                       <label>Name</label>
                                       <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                       <p class="help-block text-danger"></p>
                                   </div>
                               </div>
                               <div class="row control-group">
                                   <div class="form-group col-xs-12 floating-label-form-group controls">
                                       <label>Email Address</label>
                                       <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                       <p class="help-block text-danger"></p>
                                   </div>
                               </div>
                               <div class="row control-group">
                                   <div class="form-group col-xs-12 floating-label-form-group controls">
                                       <label>Phone Number</label>
                                       <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                       <p class="help-block text-danger"></p>
                                   </div>
                               </div>
                               <div class="row control-group">
                                   <div class="form-group col-xs-12 floating-label-form-group controls">
                                       <label>Message</label>
                                       <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                       <p class="help-block text-danger"></p>
                                   </div>
                               </div>
                               <br>
                               <div id="success"></div>
                               <div class="row">
                                   <div class="form-group col-xs-12">
                                       <button type="submit" class="btn btn-success btn-lg">Send</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </section>-->

        <!-- Footer -->
        <footer class="text-center">
            <!--<div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-social btn-outline "><i class="fa fa-fw fa-facebook"></i></a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#" class="btn-social btn-outline "><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-social btn-outline "><i class="fa fa-fw fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-youtube"></i></a>
                                </li>

                        </div>
                        <div class="footer-col col-md-4">

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-social btn-outline "><i class="fa fa-fw fa-facebook"></i></a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#" class="btn-social btn-outline "><i class="fa fa-fw fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-social btn-outline "><i class="fa fa-fw fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-col col-md-4">
                            <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="/templates/2017/img/logo-parlamento2.png">
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
        <div class="scroll-top hidden-lg-up">
            <a class="btn btn-primary page-scroll" href="#page-top">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>

        <!-- Portfolio Modals -->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="/templates/2017/img/portfolio/cabin.png" class="img-fluid img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="/templates/2017/img/portfolio/cake.png" class="img-fluid img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="/templates/2017/img/portfolio/circus.png" class="img-fluid img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="/templates/2017/img/portfolio/game.png" class="img-fluid img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="/templates/2017/img/portfolio/safe.png" class="img-fluid img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="modal-body">
                                    <h2>Project Title</h2>
                                    <hr class="star-primary">
                                    <img src="/templates/2017/img/portfolio/submarine.png" class="img-fluid img-centered" alt="">
                                    <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                                    <ul class="list-inline item-details">
                                        <li>Client:
                                            <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                            </strong>
                                        </li>
                                        <li>Date:
                                            <strong><a href="http://startbootstrap.com">April 2014</a>
                                            </strong>
                                        </li>
                                        <li>Service:
                                            <strong><a href="http://startbootstrap.com">Web Development</a>
                                            </strong>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery Version 3.1.1 -->
        <script src="/templates/2017/lib/jquery/jquery.js"></script>

        <!-- Tether -->
        <script src="/templates/2017/lib/tether/tether.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/templates/2017/lib/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="/templates/2017/js/jqBootstrapValidation.js"></script>
        <script src="/templates/2017/js/contact_me.js"></script>

        <!-- Theme JavaScript -->
        <script src="/templates/2017/js/freelancer.min.js"></script>

        <!-- Masonry JavaScript -->
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

        <script type="text/javascript">
            $('.grid').masonry({
                itemSelector: '.grid-item',
                columnWidth: 170,
                gutter: 20,
                isFitWidth: true
            });
        </script>

    </body>

</html>
