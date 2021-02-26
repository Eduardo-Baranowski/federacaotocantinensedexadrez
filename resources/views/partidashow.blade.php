@extends('layouts.app', ['pageSlug' => 'composicaoshow'])

@section('content')
    <div class="container">
        <div class="row">
            <h4 align="center">Últimas Partidas</h4>
            <div class="row justify-content-center">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @forelse ($partidas as $partida)
                    <div class="card mt-2 justify-content-center" align="center">
                        <div class="px-4 pt-4" align="center">
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
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body" align="center">
                            <div class="card-text">{!! $partida->link !!}</div>
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
        $(document).ready(function () {
            demo.initDashboardPageCharts();
        });
    </script>
@endpush
