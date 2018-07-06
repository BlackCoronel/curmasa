@extends('welcome')

@section('content')
    <div class="container fondo" style="margin-top: 50px;" id="bloque">
        <div class="col-12 col-lg-7" style="margin-bottom: 20px; margin-top: 50px;">
            <h3 class="text-info wow fadeInRight delay-01s" style="margin-bottom:20px; font-size: 20px;"> <i class="fa fa-globe"></i> DONDE ESTAMOS</h3>
            <p style="font-size: 15px; text-align: justify;margin-bottom: 10px;" class="wow fadeInDown delay-03s">
                <i class="fa fa-location-arrow" style="font-size: 12px; color:black; font-weight: bold; margin-right: 5px;"></i>
                POLÍGONO INDUSTRIAL CABEZO CORTADO
            </p>
            <p style="font-size: 15px; text-align: justify;margin-bottom: 10px;" class="wow fadeInDown delay-04s">
                <i class="fa fa-location-arrow" style="font-size: 12px; color:black; font-weight: bold; margin-right: 5px;"></i>
                C/ FRANCISCO   ALFONSO HIDALGO MARTINEZ , Nº 56
            </p>
            <p style="font-size: 15px; text-align: justify;margin-bottom: 10px;" class="wow fadeInDown delay-05s">
                <i class="fa fa-location-arrow" style="font-size: 12px; color:black; font-weight: bold; margin-right: 5px;"></i>
                30100  ESPINARDO - MURCIA
            </p>
        </div>
        <div class="col-lg-5 text-center wow fadeInLeft delay-07s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3142.7169986709!2d-1.1769901844842798!3d38.030376579713604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6380e218f47983%3A0xcd57e90905efd53b!2sCurmasa!5e0!3m2!1ses!2ses!4v1530697398946" width="600" height="450" frameborder="0" style="border:0" allowfullscreen id="maps"></iframe>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            if($(window).width() < 600){
                $("#maps").css("width", ($(window).width()) - 50);
                $("#maps").css("height", ($('#maps').height()/1.5));
            }
        });
    </script>
@endsection