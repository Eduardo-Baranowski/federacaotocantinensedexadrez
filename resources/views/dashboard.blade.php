@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">Últimas Partidas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead class=" text-primary">
                            <tr>
                                <th>
                                    Brancas
                                </th>
                                <th>
                                    Elo Brancas
                                </th>
                                <th>
                                    Negras
                                </th>
                                <th>
                                    Elo Negras
                                </th>
                                <th>
                                    Evento
                                </th>
                                <th>
                                    Data
                                </th>
                                <th>
                                    Resultado
                                </th>
                                <th>
                                    Partida
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    Raimundo, Eudes
                                </td>
                                <td>
                                    1802
                                </td>
                                <td>
                                    Josias, Mascarenhas
                                </td>
                                <td>
                                    1800
                                </td>
                                <td>
                                    Campeonato Tocantinense de Xadrez Final
                                </td>
                                <td>
                                    2010.10.09
                                </td>
                                <td>
                                    0-1
                                </td>
                                <td>
                                    <a href="https://lichess.org/study/SESSHCYq" target="blank">Visualizar</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                                    <img class="avatar" src="{{ asset('black') }}/img/none.jpeg" onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="">
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
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
