@extends('layouts.app', ['pageSlug' => 'composicaoshow'])

@section('content')
    <div class="container">
        <div class="row">
            <h4 align="center">Composições</h4>
            <div class="row justify-content-center">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @forelse ($composicaos as $composicao)
                    <div class="card mt-2 justify-content-center" align="center">
                        <div class="px-4 pt-4" align="center">
                            <table class="table tablesorter" id="">
                                <thead class=" text-primary">
                                <tr>
                                    <th>Autor</th>
                                    <th>Ano</th>
                                    <th>Descição</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{ $composicao->autor}}</td>
                                    <td>{{ $composicao->ano}}</td>
                                    <td>{{ $composicao->descricao}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body" align="center">
                            <div class="card-text">{!! $composicao->link !!}</div>
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
