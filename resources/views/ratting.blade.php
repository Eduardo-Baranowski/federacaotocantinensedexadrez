@extends('layouts.app', ['pageSlug' => 'ratting'])

@section('content')
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Lista de Ratting FTX</h4>
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter" id="">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Ratting FTX</th>
                                        <th>Ratting Lichess Bullet</th>
                                        <th>Ratting Lichess Blitz</th>
                                        <th>Ratting Lichess Rápidas</th>
                                        <th>Ratting Lichess Pensado</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse (\App\Models\User::orderby('ratting', 'DESC')->get() as $user)
                                    <tr>
                                        <td>{{ $user->id}}</td>
                                        <td>{{ $user->name}}</td>
                                        <td>{{ $user->ratting}}</td>
                                        <td>{{ $user->rattinglichessbullet}}</td>
                                        <td>{{ $user->rattinglichess}}</td>
                                        <td>{{ $user->rattinglichessrapido}}</td>
                                        <td>{{ $user->rattinglichesspensado}}</td>
                                    </tr>
                                    </tbody>
                                @empty
                                    <div class="alert alert-info">
                                        Não foram encontradas usuários.
                                    </div>
                                @endforelse
                            </table>
                        </div>
                    </div>


            </div>
            <br>
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
