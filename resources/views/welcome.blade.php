
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    @if(Request::path() == "/")
        <title> CURMASA </title>
    @else
        <title> CURMASA - {{ strtoupper(Request::path()) }}</title>
    @endif
    <link rel="icon" href="img/logo_curmasa.ico">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
    <!-- CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="/css/animate.css" rel="stylesheet" type="text/css">
    <!-- links Javascript -->
    <script type="text/javascript" src="/js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="/js/wow.js"></script>
    <script type="text/javascript" src="/js/classie.js"></script>
    <script src="/contactform/contactform.js"></script>


    <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body>
<nav class="main-nav-outer" id="test">
    <!--main-nav-start-->
    <div class="container" style="width:100%;">
        <ul class="main-nav">
            <li>
                <a href="/"><i class="fa fa-home" style="margin-right: 10px;"></i>Empresa</a>
            </li>
            <li>
                <a href="/equipo"><i class="fa fa-users" style="margin-right: 10px;"></i>Equipo</a>
            </li>
            <li>
                <a href="/productos"><i class="fa fa-archive" style="margin-right: 10px;"></i>Productos</a>
            </li>
            <li class="small-logo">
                <a href="/"><img src="/img/logo_curmasa.jpg" alt="" width="120px"></a>
            </li>
            <li>
                <a href="/proveedores"><i class="fa fa-clipboard" style="margin-right: 10px;"></i>Proveedores</a>
            </li>
            <li>
                <a href="/localizacion"><i class="fa fa-map" style="margin-right: 10px;"></i>Donde estamos</a>
            </li>
            <li>
                <a href="/contacto"><i class="fa fa-phone" style="margin-right: 10px;"></i>Contacta</a>
            </li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav>
@if(url()->current() == "https://curmasa.oo")
<div  class="container" style="margin-top: 50px;" id="contenido">
    <div class="row justify-content-center ">
        <div class="col-lg-5 text-center wow fadeInLeft delay-04s">
            <img src="img/curmasa_portada.png" class="img-fluid" alt="" width="600px" style="margin-bottom: 15px;">
        </div>
        <div class="col-12 col-lg-7 fondo">
            <h3 class="text-info wow fadeInRight delay-01s" style="margin-bottom:20px; font-size: 20px;">  Comercial Murciana de Materiales S.L</h3>
            <p style="font-size: 15px; text-align: justify;margin-bottom: 10px;" class="wow fadeInDown delay-02s">
                <i class="fa fa-caret-square-o-right" style="font-size: 12px; color:black; font-weight: bold; margin-right: 5px;"></i>
                Curmasa nace en el año 1986 como una empresa para la comercialización de todos los productos del sector de la fontanería.
            </p>
            <p style="font-size: 15px; text-align: justify; margin-bottom: 10px;" class="wow fadeInDown delay-03s">
                <i class="fa fa-caret-square-o-right" style="font-size: 12px; color:black; font-weight: bold; margin-right: 5px;"></i>
                La independencia y la profesionalización de la gestión de la central para asegurar la equidad, se estructuran desde su creación. A través del tiempo Curmasa empezó a desarrollar una ampliación de distribución, y un aumento de clientes de otras provincias.
            </p>
            <p style="font-size: 15px; text-align: justify;margin-bottom: 10px;" class="wow fadeInDown delay-04s">
            <i class="fa fa-caret-square-o-right" style="font-size: 12px; color:black; font-weight: bold; margin-right: 5px;"></i>
                Mas de 25 años de historia han hecho de Curmasa, un pozo de experiencias, fruto del debate entre sus clientes donde las relaciones y las formas de hacer, junto con la transparencia, se han convertido en valores y cultura de empresa.
            </p>
            <p style="font-size: 15px; text-align: justify;margin-bottom: 10px;" class="wow fadeInDown delay-05s">
            <i class="fa fa-caret-square-o-right" style="font-size: 12px; color:black; font-weight: bold; margin-right: 5px;"></i>
                 Valores firmemente establecidos en la organización como son la rigor empresarial e igualdad entre todos los clientes, al mismo tiempo que la firmeza en el desarrollo y cuidado del sector de la fontanería y climatización. Nuestra filosofía y trato con los fabricantes, han hecho que con los años se pueda hablar de una relación de amistad con nuestros proveedores.
            </p>

        </div>
    </div>
</div>
@else
 @yield('content')
@endif
@if(url()->current() == "https://curmasa.oo")
<div class="container" id="banner" style="margin-top: 50px;">
    <img src="img/oferta_zenit_1.png" class="img-fluid">
</div>
@endif
<footer class="footer" style="margin-top: 50px;">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/logo.jpg" alt=""></a></div>
        <span class="copyright">&copy; CURMASA {{ date('Y') }}. Todos los derechos reservados.</span>
    </div>
</footer>
</body>
<script type="text/javascript">
    $(document).ready(function(e) {

        $('#test').scrollToFixed();
        $('.res-nav_click').click(function() {
            $('.main-nav').slideToggle();
            return false

        });

        $('.Portfolio-box').magnificPopup({
            delegate: 'a',
            type: 'image'
        });

    });
</script>

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>


<script type="text/javascript">
    $(window).load(function() {

        $('.main-nav li a, .servicelink').bind('click', function(event) {
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500, 'easeInOutExpo');
            /*
            if you don't want to use the easing effects:
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1000);
            */
            if ($(window).width() < 768) {
                $('.main-nav').hide();
            }
            event.preventDefault();
        });
    })
</script>

<script type="text/javascript">
    $(window).load(function() {


        var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 375,
            columns = null;


        $container.isotope({
            // disable window resizing
            resizable: true,
            masonry: {
                columnWidth: colW
            }
        });

        $(window).smartresize(function() {
            // check if columns has changed
            var currentColumns = Math.floor(($body.width() - 30) / colW);
            if (currentColumns !== columns) {
                // set new column count
                columns = currentColumns;
                // apply width to container manually, then trigger relayout
                $container.width(columns * colW)
                    .isotope('reLayout');
            }

        }).smartresize(); // trigger resize to set container width
        $('.portfolioFilter a').click(function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({

                filter: selector,
            });
            return false;
        });

    });
</script>

<script>
    $(window).load(function(){
        $("#contenido").hide();
        setTimeout(function(){
            $("#banner").fadeOut(function(){
               $("#contenido").show();
            });
        },15000);

        $("#banner").click(function(){
           $(this).hide();
            $("#contenido").show();
        });
    });
</script>

</html>
