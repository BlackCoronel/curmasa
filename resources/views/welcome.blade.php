
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Homepage</title>
    <link rel="icon" href="favicon.png" type="image/png">
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
    <div>
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
                <a href="/contact"><i class="fa fa-clipboard" style="margin-right: 10px;"></i>Proveedores</a>
            </li>
            <li>
                <a href="/localizacion"><i class="fa fa-map" style="margin-right: 10px;"></i>Donde estamos</a>
            </li>
            <li>
                <a href="/contact"><i class="fa fa-phone" style="margin-right: 10px;"></i>Contacta</a>
            </li>
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav>
@if(url()->current() == "https://curmasa.oo")
<div  class="container fondo" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-lg-5 text-center wow fadeInLeft delay-04s">
            <img src="img/curmasa_empresa.png" class="img-fluid" alt="" width="600px" style="margin-bottom: 15px;">
        </div>
        <div class="col-12 col-lg-7">
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
<!--<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-7 wow fadeInLeft">
            <h3 class="text-info wow fadeInLeft delay-02s" style="margin-bottom:20px; font-size: 20px;">
                <i class="fa fa-book"></i> Sobre nuestra empresa</h3>
            <p  style="font-size: 15px; text-align: justify;" class=" wow fadeInRight delay-04s">
                <i class="fa fa-angle-right" style="font-size: 17px; color:black; font-weight: bold; margin-right: 5px;"></i>
                Viseras Sakali, S. L. se sitúa entre los principales productores de accesorios para vehículos industriales en el ámbito de la Unión Europea.
            </p>
            <p  style="font-size: 15px; margin-top: 10px; text-align: justify;" class="wow fadeInRight delay-06s">
                <i class="fa fa-angle-right" style="font-size: 17px; color:black; font-weight: bold; margin-right: 5px;"></i>
                La constante investigación, innovación, control de materias primas y acabados dan como resultado productos con las más altas cotas de calidad.
                Los procesos de producción se desarrollan bajo un riguroso control de calidad y aseguran soluciones completas para un mercado cada vez más exigente.
            </p>
            <p  style="font-size: 15px; margin-top: 10px; text-align: justify; margin-bottom: 50px;" class="wow fadeInRight delay-07s">
                <i class="fa fa-angle-right" style="font-size: 17px; color:black; font-weight: bold; margin-right: 5px;"></i>
                Sakali ha logrado situarse como líder en el mercado europeo. Está presente en todos los países de la Comunidad Europea de manera consolidada,
                ofreciendo calidad y eficacia en todos sus productos y servicios.
            </p>
        </div>
        <div class="col-12 col-lg-4 text-center">
            <img src="img/empresa.png" class="img-fluid wow fadeInUp delay-06s" alt="" style="margin-bottom: 15px;">
        </div>
    </div>
    <hr style="color:lightblue; background-color: #5bc0de; height: 3px;" />
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-5 text-center" style="margin-bottom: 20px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.2548909960152!2d-1.2079385888664913!3d37.95822353628943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd637fe38e356265%3A0xf2076f4c78cd289a!2sViseras+Sakali%2C+s.l.!5e0!3m2!1ses!2ses!4v1527155795965" width="400" height="300" frameborder="0" style="border:0" allowfullscreen class="wow fadeInDown delay-06s"></iframe>
        </div>
        <div class="col-12 col-lg-7">
            <h3 class="text-info wow fadeInLeft delay-04s" style="margin-bottom:20px; font-size: 20px;"><i class="fa fa-location-arrow"></i> Donde encontrarnos</h3>
            <p style="font-size: 15px; text-align: justify;" class="wow fadeInRight delay-02s">
                <i class="fa fa-caret-right" style="font-size: 17px; color:black; font-weight: bold; margin-right: 5px;"></i>
                Estamos situados en el Polígono Industrial Oeste. Avenida de las Américas Parc. 5/14. 30169 Alcantarilla - Murcia.</p>
            <p style="font-size: 15px; text-align: justify; margin-top: 10px;" class=" wow fadeInRight delay-02s">
                <i class="fa fa-caret-right" style="font-size: 17px; color:black; font-weight: bold; margin-right: 5px;"></i>
                Horario : <span style="font-weight: bold;">Lunes - Jueves</span>: 8:30 am - 19:00 pm<span  style="font-weight: bold;"> Viernes</span>:  8:30 am - 14:30 pm
            </p>
        </div>
    </div>
    <hr style="color:lightblue; background-color: #5bc0de; height: 3px;" />
</div>-->
<!--main-nav-end-->
<!--<section class="main-section team" id="equipo">
    <div class="container">
        <h2>team</h2>
        <h6>Eche un vistazo a nuesto equipo</h6>
       <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                <span class="wow fadeInDown delay-06s">Product Manager</span>
                <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s">
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                <span class="wow fadeInDown delay-09s">Accountant</span>
                <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
        </div>
    </div>
</section>-->
<!--business-talking-end-->
<footer class="footer">
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

</html>
