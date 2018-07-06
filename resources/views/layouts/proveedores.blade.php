@extends('welcome')

@section("content")

    <section class="main-section paddind" id="Portfolio">
        <!--main-section-start-->
        <div class="container">
            <h2> <i class="fa fa-clipboard"></i>  Nuestros Proveedores</h2>
            <h6>Aquí encontrará todos los proveedores que trabajan con nosotros.</h6>
            <div class="portfolioFilter">
                <ul class="Portfolio-nav wow fadeIn delay-02s">
                    <li><a href="#" data-filter="*" class="current">Nuestros Proveedores</a></li>
                    <li><a href="#" data-filter=".osmosis">Osmosis</a></li>
                    <li><a href="#" data-filter=".webdesign">Calderas</a></li>
                    <li><a href="#" data-filter=".printdesign">Print design</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                </ul>
            </div>

        </div>
        <div class="portfolioContainer wow fadeInUp delay-04s">
            <div class=" Portfolio-box osmosis">
                <a href="img/roca.jpg"><img src="img/roca.jpg" alt=""></a>
                <h3>Roca</h3>
                <p>Roca</p>
            </div>
            <div class="Portfolio-box osmosis">
                <a href="img/hidro_water.jpg"><img src="img/hidro_water.jpg" alt=""></a>
                <h3>Hidro Water</h3>
                <p>Hidro Water</p>
            </div>
            <div class=" Portfolio-box branding">
                <a href="img/saunier.jpg"><img src="img/saunier.jpg" alt=""></a>
                <h3>Saunier Duval</h3>
                <p>Saunier Duval</p>
            </div>
            <div class=" Portfolio-box photography">
                <a href="img/sh.jpg"><img src="img/sh.jpg" alt=""></a>
                <h3>Standard Hidraúlica</h3>
                <p>Standard Hidraúlica</p>
            </div>
            <div class=" Portfolio-box branding">
                <a href="img/jimtem.png"><img src="img/jimtem.png" alt=""></a>
                <h3>jimten</h3>
                <p>jimten</p>
            </div>
            <div class=" Portfolio-box photography">
                <a href="img/Portfolio-pic6.jpg"><img src="img/Portfolio-pic6.jpg" alt=""></a>
                <h3>Windmills</h3>
                <p>Photography</p>
            </div>
        </div>
    </section>

@endsection