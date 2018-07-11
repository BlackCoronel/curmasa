@extends('welcome')

@section('content')
    <section class="main-section paddind" id="Portfolio">
        <div class="container">
            <h2><i class="fa fa-box"></i>  NUESTROS PRODUCTOS</h2>
            <h6>Aquí encontrará todos nuestros productos</h6>
        </div>
        <div class="portfolioContainer wow fadeInUp delay-04s">
            @foreach($categ as $campo)
                <div class=" Portfolio-box">
                    <a href="/productos/{{$campo->slug}}"><img src="img/{{$campo->imagen}}" alt="" width="200px" height="200px" style="border-radius:20px;"></a>
                    <h3>{{ $campo->nombre }}</h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection