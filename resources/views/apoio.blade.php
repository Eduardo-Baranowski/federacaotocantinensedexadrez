@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">

        <div class="container">
            <h4 class="text-white" align="center">{{ __('Deseja apoiar a FTX de alguma maneira ? Entre em contato conosco e nós o divulgaremos!') }}</h4>
            <br>
            <br>
            <br>
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('black') }}/img/logonav1.jpeg" class="d-inline  w-75"  alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('black') }}/img/logonav1.jpeg" class="d-inline  w-75"  alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('black') }}/img/logonav1.jpeg" class="d-inline  w-75"  alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script src="{{ asset('black') }}/js/pgnv.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            demo.initDashboardPageCharts();
        });
    </script>
@endpush
