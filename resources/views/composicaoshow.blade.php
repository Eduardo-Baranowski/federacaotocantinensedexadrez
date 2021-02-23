@extends('layouts.app', ['pageSlug' => 'composicaoshow'])

@section('content')
    <div class="row justify-content-center">

        <div class="container justify-content-center">
            <h4 align="center">Composições</h4>
            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-12">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse ($composicaos as $composicao)
                        <div class="card mt-2 justify-content-center">
                            <div class="px-4 pt-4">
                                <h5 class="float-left">
                                    <b>{{ $composicao->autor}}</b>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-title">{{ $composicao->ano }}</p>
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
