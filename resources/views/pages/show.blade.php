@extends('layouts.app')

@section('content')
    <div class="row">

        @if (Auth::user()->name == 'Eduardo Baranowski')


        <div class="col-md-7 mr-auto">
            <div class="card card-body card-white">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Registro de Campeão') }}</h4>
                </div>
                    <form action="{{ route('pages.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            @php( $field = 'titulo' )
                            <label for="{{ $field }}">Titulo</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Titulo">
                        </div>
                        <div class="form-group">
                            @php( $field = 'descricao' )
                            <label for="{{ $field }}">Descrição</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Descrição">
                        </div>
                        <div class="form-group">
                            @php( $field = 'texto' )
                            <label for="{{ $field }}">Texto</label>
                            <textarea class="form-control @error($field) is-invalid @enderror" id="{{ $field }}"
                                      name="{{ $field }}" rows="12">{{ old( $field ) }}</textarea>
                        </div>
                        <a href="" class="btn btn-primary">Cancelar</a>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 mr-auto">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse ($vencedor_semanas as $vencedor)
                        <div class="card mt-2">
                            <div class="px-4 pt-4">
                                <h5 class="float-left">
                                    <b>{{ $vencedor->titulo}}</b>
                                </h5>
                                <div class="float-right">
                                    <a href="{{ route('pages.edit', $vencedor->id ) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                                    <a href="{{ route('pages.delete', $vencedor->id ) }}" class="btn btn-sm btn-outline-danger">Deletar</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-title">{{ $vencedor->descricao }}</p>
                                <div class="card-text">{!! $vencedor->texto !!}</div>
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
        @else
            <div class="card card-body card-white">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Você não possui credenciais para este acesso!') }}</h4>
                </div>
            </div>
        @endif
    </div>
@endsection
