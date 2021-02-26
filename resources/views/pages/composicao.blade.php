@extends('layouts.app')

@section('content')
    <div class="row">
            <div class="col-md-7 mr-auto">
                <div class="card card-body card-white">
                    <div class="card-header">
                        <h4 class="card-title">{{ __('Registro de Composição') }}</h4>
                    </div>
                    <form action="{{ route('pages.storecomposicao') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            @php( $field = 'autor' )
                            <label for="{{ $field }}">Autor</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Autor">
                        </div>
                        <div class="form-group">
                            @php( $field = 'ano' )
                            <label for="{{ $field }}">Ano</label>
                            <input type="number" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Ano">
                        </div>
                        <div class="form-group">
                            @php( $field = 'descricao' )
                            <label for="{{ $field }}">Descrição</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Descrição">
                        </div>
                        <div class="form-group">
                            @php( $field = 'link' )
                            <label for="{{ $field }}">Link</label>
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="Link">
                        </div>
                        <a href="" class="btn btn-primary">Cancelar</a>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
                </div>
            </div>

            @if (Auth::user()->email == 'eduardobaranowski@gmail.com')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mr-auto">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @forelse ($composicoes as $composicao)
                            <div class="card mt-2">
                                <div class="px-4 pt-4">
                                    <h5 class="float-left">
                                        <b>{{ $composicao->autor}}</b>
                                    </h5>
                                    <div class="float-right">
                                        <a href="{{ route('pages.edit', $composicao->id ) }}"
                                           class="btn btn-sm btn-outline-primary">Editar</a>
                                        <a href="{{ route('pages.deletecomposicao', $composicao->id ) }}"
                                           class="btn btn-sm btn-outline-danger">Deletar</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title">{{ $composicao->ano }}</p>
                                    <p class="card-title">{{ $composicao->descricao }}</p>
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
        @else
            <div class="card card-body card-white">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Para ver as composições clique no link abaixo!') }}</h4>
                    <a href="{{ route('composicaoshow') }}">Composições</a>
                </div>
            </div>
        @endif

    </div>
@endsection
