@extends('layouts.app', ['pageSlug' => 'transparencia'])

@section('content')
    <div class="row">

        <div class="container">
            <h4 align="center">Últimos Gastos</h4>
            <div class="row justify-content-center">

                <div class="col-md-12">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse ($contas as $conta)
                        <div class="card mt-2">
                            <div class="px-4 pt-4">
                                <h5 class="float-left">
                                    <b>{{ $conta->titulo}}</b>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-title">{{ $conta->descricao }}</p>
                                <div class="card-text">{!! $conta->valor !!}</div>
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
