<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Parlamento Juvenil - ALERJ</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link href="css/hybrid.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="packages/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="packages/owl.carousel/assets/owl.theme.default.min.css">

        <!-- IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        @yield('contents')

        <!-- footer -->
        <footer>
            <div class="container text-muted text-center wow fadeIn">
                <h2 class="heading"><a href="#top">LOREM<i class="fa fa-power-off fa-fw"></i></a></h2>
                <p>&copy;2015 Lorem Ipsum Dolor</p>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- owl -->
        <script type="text/javascript" src="packages/owl.carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="vendor/jquery-mousewheel/jquery.mousewheel.min.js"></script>


        <!-- Custom Theme JavaScripts -->
        <script src="vendor/vue/dist/vue.min.js"></script>
        <script src="vendor/vue-resource/dist/vue-resource.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- jQuery Plugins -->
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.placeholder.min.js"></script>

        <!-- Custom Theme JavaScripts -->
        <script src="js/hybrid.js"></script>

        <script src="js/app.js"></script>

        @yield('javascript')
    </body>
</html>
