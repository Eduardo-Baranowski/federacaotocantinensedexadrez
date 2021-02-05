@extends('layouts.app')

@section('content')
    <div class="row">

        @if (Auth::user()->name == 'Eduardo Baranowski')


        <div class="col-md-7 mr-auto">
            <div class="card card-body card-white">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Registro de Campeão') }}</h4>
                </div>
                    <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" class="form-control @error($field) is-invalid @enderror"
                                   value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}"
                                   placeholder="texto">
                        </div>

                        <div class="form-group">
                            @php( $field = 'imagem' )
                            <label for="{{ $field }}"><i class="tim-icons icon-image-02"></i><span><strong>    Escolha uma imagem: </strong></span></label>
                            <input type="file" class="form-control @error($field) is-invalid @enderror" value="{{ old( $field ) }}" id="{{ $field }}" name="{{ $field }}" accept=".png,.jpeg,.gif,.svg,.bitmap" placeholder="Imagem" required >
                        </div>

                        <a href="" class="btn btn-primary">Cancelar</a>
                        <input type="submit" class="btn btn-success" value="Salvar">
                    </form>
            </div>
        </div>

        <div class="container">

            <div class="card">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @forelse ($vencedor_semanas as $vencedor)
                    <div class="card-header">
                        <div class="px-4 pt-4">
                            <h5 class="float-left">
                                <b>{{ $vencedor->titulo}}</b>
                            </h5>
                            <div class="float-right">
                                <a href="{{ route('pages.edit', $vencedor->id ) }}"
                                   class="btn btn-sm btn-outline-primary">Editar</a>
                                <a href="{{ route('pages.deletevenc', $vencedor->id ) }}"
                                   class="btn btn-sm btn-outline-danger">Deletar</a>
                            </div>
                        </div>
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
                                        <img class="avatar" src="{{'storage/app/'.$vencedor->imagem}}" onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="">
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
        @else
            <div class="card card-body card-white">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Você não possui credenciais para este acesso!') }}</h4>
                </div>
            </div>
        @endif
    </div>
    </div>
@endsection
