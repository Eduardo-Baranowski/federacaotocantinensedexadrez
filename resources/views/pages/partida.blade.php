@extends('layouts.app', ['page' => __('Cadastro de Partida'), 'pageSlug' => 'partida'])

@section('content')
    <div class="row">
        <div class="col-md-7 mr-auto">
            <div class="card card-body card-white">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Registro de Partida') }}</h4>
                </div>
                    <form action="{{ route('pages.storepartida') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            @php( $field = 'brancas' )
                            <label for="{{ $field }}">Brancas</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Brancas">
                        </div>
                        <div class="form-group">
                            @php( $field = 'elobrancas' )
                            <label for="{{ $field }}">Elo Brancas</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="elobrancas">
                        </div>
                        <div class="form-group">
                            @php( $field = 'negras' )
                            <label for="{{ $field }}">Negras</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="negras">
                        </div>
                        <div class="form-group">
                            @php( $field = 'elonegras' )
                            <label for="{{ $field }}">Elo Negras</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="elonegras">
                        </div>
                        <div class="form-group">
                            @php( $field = 'evento' )
                            <label for="{{ $field }}">Evento</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="evento">
                        </div>
                        <div class="form-group">
                            @php( $field = 'data' )
                            <label for="{{ $field }}">Data</label>
                            <input type="date" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="data">
                        </div>
                        <div class="form-group">
                            @php( $field = 'resultado' )
                            <label for="{{ $field }}">Resultado</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="resultado">
                        </div>
                        <div class="form-group">
                            @php( $field = 'pgn' )
                            <label for="{{ $field }}">PGN</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="pgn">
                        </div>
                        <div class="form-group">
                            @php( $field = 'link' )
                            <label for="{{ $field }}">Link</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="link">
                        </div>
                        <a href="" class="btn btn-primary">Cancelar</a>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
            </div>
        </div>


        @if (Auth::user()->name == 'Eduardo Baranowski')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mr-auto">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse ($partidas as $partida)
                        <div class="card mt-2">
                            <div class="px-4 pt-4">
                                <h5 class="float-left">
                                    <b>{{ $partida->titulo}}</b>
                                </h5>
                                <div class="float-right">
                                    <a href="{{ route('pages.edit', $partida->id ) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                                    <a href="{{ route('pages.deletepart', $partida->id ) }}" class="btn btn-sm btn-outline-danger">Deletar</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">{{ $partida->brancas }}</p>
                                <div class="card-text">{!! $partida->negras !!}</div>
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
            @endif
    </div>
@endsection
