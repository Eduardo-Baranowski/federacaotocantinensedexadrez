@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">

        <div class="container">
            <h4>Últimas Notícias</h4>
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
                                <img src="{{ asset('black') }}/img/jalapao.jpg" class="d-inline w-75"
                                     style="width: 100px; height: 300px" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('black') }}/img/page_10.jpeg" class="d-inline w-75"
                                     style="width: 100px; height: 300px" alt="...">
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

        <div class="container">
            <div id="board"></div>
            <script>
                PGNV.pgnView('board', {pgn: '1. e4 e5 2. Nf3 Nc6 3. Bb5', pieceStyle: 'merida'});
            </script>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Últimas Partidas</h4>
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @forelse ($partidas as $partida)

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter" id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>Brancas</th>
                                    <th>Elo Brancas</th>
                                    <th>Negras</th>
                                    <th>Elo Negras</th>
                                    <th>Evento</th>
                                    <th>Data</th>
                                    <th>Resultado</th>
                                    <th>Partida</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $partida->brancas}}</td>
                                    <td>{{ $partida->elobrancas}}</td>
                                    <td>{{ $partida->negras}}</td>
                                    <td>{{ $partida->elonegras}}</td>
                                    <td>{{ $partida->evento}}</td>
                                    <td>{{ $partida->data}}</td>
                                    <td>{{ $partida->resultado}}</td>
                                    <td><a href="{{$partida->link}}" target="_blank">Visualizar</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                @empty
                    <div class="alert alert-info">
                        Não foram encontradas anotações.
                    </div>
                @endforelse


            </div>
            <br>
        </div>
    </div>


    <div class="container">
        <h4>Últimos Campeões da Semana</h4>


        <div class="card">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @forelse ($vencedor_semanas as $vencedor)
                <div class="card-header">
                    <h5 class="title">{{ $vencedor->titulo}}</h5>
                </div>

                <div class="card-body ">
                    <div class="card card-user">
                        <div class="card-body">
                            <p class="card-text">
                            <div class="author">
                                <div class="block block-one"></div>
                                <div class="block block-two"></div>
                                <div class="block block-three"></div>
                                <div class="block block-four"></div>
                                <a href="#">
                                    <img class="avatar" src="{{ asset('black') }}/img/none.jpeg"
                                         onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="">
                                    <h5 class="title">{{ $vencedor->descricao }}</h5>
                                </a>

                                <p class="description">
                                    {!! $vencedor->texto !!}
                                </p>
                            </div>
                            </p>
                        </div>
                    </div>

                </div>
            @empty
                <div class="alert alert-info">
                    Não foram encontradas anotações.
                </div>
            @endforelse


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
