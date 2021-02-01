@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Federação Tocantinense de Xadrez') }}</h1>
                        <!--
                        <p class="text-lead text-light">
                            {{ __('Site da Federação Tocantinense de Xadrez - FTX.') }}
                        </p>
                        -->
                    </div>



                </div>


                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('black') }}/img/logofooter.jpeg" class="d-block w-100" style="width: 100px; height: 300px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('black') }}/img/logofooter.jpeg" class="d-block w-100" style="width: 100px; height: 300px" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('black') }}/img/logofooter.jpeg" class="d-block w-100" style="width: 100px; height: 300px" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
