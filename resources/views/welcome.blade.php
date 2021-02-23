@extends('layouts.app', ['pageSlug' => 'home'])
@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">

                        <h1 class="text-white">{{ __('Federação Tocantinense de Xadrez') }}</h1>

                    </div>

                </div>

                <img src="{{ asset('black') }}/img/logonav1.jpeg" class="d-inline" alt="...">
            </div>
        </div>
    </div>
@endsection
