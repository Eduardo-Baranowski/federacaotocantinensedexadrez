@extends('layouts.app', ['class' => 'register-page', 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-badge"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Benefícios') }}</h3>
                    <p class="description">
                        {{ __('Registre-se para fazer parte da comunidade enxadrística tocantinense. Com o registro é possível ter acesso aos serviços adicionais do site.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Base de Dados') }}</h3>
                    <p class="description">
                        {{ __('Tenha fácil acesso a base de dados com partidas dos campeonatos tocantinenses.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Torneios') }}</h3>
                    <p class="description">
                        {{ __('Participe com facilidade dos campeonatos disputados no Tocantins.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Registro') }}</h4>
                </div>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>

                        <div class="input-group{{ $errors->has('nickchess') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-copy-04"></i>
                                </div>
                            </div>
                            <input type="text" name="nickchess" class="form-control{{ $errors->has('nickchess') ? ' is-invalid' : '' }}" placeholder="{{ __('Nick do Chess.com') }}">
                            @include('alerts.feedback', ['field' => 'nickchess'])
                        </div>

                        <div class="input-group{{ $errors->has('nicklichess') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-copy-04"></i>
                                </div>
                            </div>
                            <input type="text" name="nicklichess" class="form-control{{ $errors->has('nicklichess') ? ' is-invalid' : '' }}" placeholder="{{ __('Nick do Lichess') }}">
                            @include('alerts.feedback', ['field' => 'nicklichess'])
                        </div>

                        <div class="input-group{{ $errors->has('rattingchess') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chart-bar-32"></i>
                                </div>
                            </div>
                            <input type="number" name="rattingchess" class="form-control{{ $errors->has('rattingchess') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting Chess.com de blitz') }}">
                            @include('alerts.feedback', ['field' => 'rattingchess'])
                        </div>
                        <div class="input-group{{ $errors->has('rattingchessbullet') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chart-bar-32"></i>
                                </div>
                            </div>
                            <input type="number" name="rattingchessbullet" class="form-control{{ $errors->has('rattingchessbullet') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting Chess.com bullet') }}">
                            @include('alerts.feedback', ['field' => 'rattingchessbullet'])
                        </div>
                        <div class="input-group{{ $errors->has('rattingchessrapido') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chart-bar-32"></i>
                                </div>
                            </div>
                            <input type="number" name="rattingchessrapido" class="form-control{{ $errors->has('rattingchessrapido') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting Chess.com rapido') }}">
                            @include('alerts.feedback', ['field' => 'rattingchessrapido'])
                        </div>
                        <div class="input-group{{ $errors->has('rattingchesspensado') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chart-bar-32"></i>
                                </div>
                            </div>
                            <input type="number" name="rattingchesspensado" class="form-control{{ $errors->has('rattingchesspensado') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting Chess.com pensado') }}">
                            @include('alerts.feedback', ['field' => 'rattingchesspensado'])
                        </div>
                        <div class="input-group{{ $errors->has('rattinglichess') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chart-bar-32"></i>
                                </div>
                            </div>
                            <input type="number" name="rattinglichess" class="form-control{{ $errors->has('rattinglichess') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting Lichess de blitz') }}">
                            @include('alerts.feedback', ['field' => 'rattinglichess'])
                        </div>
                        <div class="input-group{{ $errors->has('rattinglichessbullet') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chart-bar-32"></i>
                                </div>
                            </div>
                            <input type="number" name="rattinglichessbullet" class="form-control{{ $errors->has('rattinglichessbullet') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting Lichess bullet') }}">
                            @include('alerts.feedback', ['field' => 'rattinglichessbullet'])
                        </div>
                        <div class="input-group{{ $errors->has('rattinglichessrapido') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chart-bar-32"></i>
                                </div>
                            </div>
                            <input type="number" name="rattinglichessrapido" class="form-control{{ $errors->has('rattinglichessrapido') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting Lichess rápido') }}">
                            @include('alerts.feedback', ['field' => 'rattinglichessrapido'])
                        </div>
                        <div class="input-group{{ $errors->has('rattinglichesspensado') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-chart-bar-32"></i>
                                </div>
                            </div>
                            <input type="number" name="rattinglichesspensado" class="form-control{{ $errors->has('rattinglichesspensado') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting Chess.com pensado') }}">
                            @include('alerts.feedback', ['field' => 'rattinglichesspensado'])
                        </div>
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}">
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                {{ __('I agree to the') }}
                                <a href="#">{{ __('terms and conditions') }}</a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Criar Conta') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
