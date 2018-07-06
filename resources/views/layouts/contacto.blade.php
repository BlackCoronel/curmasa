@extends('welcome')

@section('content')
    <div class="container">
        <section class="main-section contact" id="contacto">

            <div class="row fondo">
                <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa-location-arrow"></i>Direccion:</h3>
                        <span> POLÍGONO INDUSTRIAL CABEZO CORTADO C/FRANCISCO ALFONSO HIDALGO MARTINEZ,Nº56 30100 ESPINARDO-MURCIA </span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa-phone"></i>Teléfono:</h3>
                        <span> 968 83 45 60</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa fa-fax"></i>Fax:</h3>
                        <span> 968 83 45 60</span>
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa fa-envelope"></i>E-mail:</h3>
                        <span>administracion@curmasa.info</span>
                    </div>
                    <div class="contact-info-box hours clearfix">
                        <h3><i class="fa-clock-o"></i>Horario:</h3>
                        <span>L-V: 8:30 am - 14:30 pm <br /> 16:00 pm - 19:30 pm</span>
                    </div>
                    <ul class="social-link">
                        <li class="twitter"><a href="https://twitter.com/Viseras_Sakali" target="_blank"><i class=" fa fa-twitter"></i></a></li>
                        <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="gplus"><a href="https://plus.google.com/101587253726614371109?hl=es" target="_blank"><i class=" fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                    <div class="form">

                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>

                        <form method="POST" action="/contacto">
                            <input type="text" class="form-control input-text" name="name" placeholder="Nombre">
                            <input type="email" class="form-control input-text" name="email" placeholder="Email">
                            <input type="text" class="form-control input-text" name="telefono" placeholder="Telefono">
                            <input type="text" class="form-control input-text" name="asunto" placeholder="Asunto">
                            <textarea name="consulta" id="consulta" class="form-control input-text text-area">Escriba aquí su consulta</textarea>
                            <div class="text-center">
                                <input type="submit" class="input-btn">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(window).load(function(){
            $("#consulta").focus(function(){
                if($(this).val() == 'Escriba aquí su consulta') {
                    $(this).val('');
                }
            });
            $("#consulta").focusout(function(){
                if($(this).val() == ''){
                    $("#consulta").val('Escriba aquí su consulta');
                }
            });
        });
    </script>
@endsection