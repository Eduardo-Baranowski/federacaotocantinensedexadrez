@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Edit Profile') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('put')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>{{ __('Email address') }}</label>
                                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email address') }}" value="{{ old('email', auth()->user()->email) }}">
                                @include('alerts.feedback', ['field' => 'email'])
                            </div>

                            <div class="form-group{{ $errors->has('nickchess') ? ' has-danger' : '' }}">
                                <label>{{ __('Nick do Chess.com') }}</label>
                                <input type="text" name="nickchess" class="form-control{{ $errors->has('nickchess') ? ' is-invalid' : '' }}" placeholder="{{ __('Nick do Chess.com') }}" value="{{ old('nickchess', auth()->user()->nickchess) }}">
                                @include('alerts.feedback', ['field' => 'nickchess'])
                            </div>
                        <div class="form-group{{ $errors->has('nicklichess') ? ' has-danger' : '' }}">
                            <label>{{ __('Nick do Lichess') }}</label>
                            <input type="text" name="nicklichess" class="form-control{{ $errors->has('nicklichess') ? ' is-invalid' : '' }}" placeholder="{{ __('Nick do Lichess') }}" value="{{ old('nicklichess', auth()->user()->nicklichess) }}">
                            @include('alerts.feedback', ['field' => 'nicklichess'])
                        </div>
                        <div class="form-group{{ $errors->has('rattingchess') ? ' has-danger' : '' }}">
                            <label>{{ __('Ratting do Chess.com de Blitz') }}</label>
                            <input type="number" name="rattingchess" class="form-control{{ $errors->has('rattingchess') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting do Chess.com de Blitz') }}" value="{{ old('rattingchess', auth()->user()->rattingchess) }}">
                            @include('alerts.feedback', ['field' => 'rattingchess'])
                        </div>
                        <div class="form-group{{ $errors->has('rattingchessbullet') ? ' has-danger' : '' }}">
                            <label>{{ __('Ratting do Chess.com de Bullet') }}</label>
                            <input type="number" name="rattingchessbullet" class="form-control{{ $errors->has('rattingchess') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting do Chess.com de bullet') }}" value="{{ old('rattingchessbullet', auth()->user()->rattingchessbullet) }}">
                            @include('alerts.feedback', ['field' => 'rattingchessbullet'])
                        </div>
                        <div class="form-group{{ $errors->has('rattingchessrapido') ? ' has-danger' : '' }}">
                            <label>{{ __('Ratting do Chess.com de Rápidas') }}</label>
                            <input type="number" name="rattingchessrapido" class="form-control{{ $errors->has('rattingchess') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting do Chess.com de Rápidas') }}" value="{{ old('rattingchessrapido', auth()->user()->rattingchessrapido) }}">
                            @include('alerts.feedback', ['field' => 'rattingchessrapido'])
                        </div>
                        <div class="form-group{{ $errors->has('rattingchesspensado') ? ' has-danger' : '' }}">
                            <label>{{ __('Ratting do Chess.com de Pensado') }}</label>
                            <input type="number" name="rattingchesspensado" class="form-control{{ $errors->has('rattingchess') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting do Chess.com de Pensado') }}" value="{{ old('rattingchesspensado', auth()->user()->rattingchesspensado) }}">
                            @include('alerts.feedback', ['field' => 'rattingchesspensado'])
                        </div>

                        <div class="form-group{{ $errors->has('rattinglichess') ? ' has-danger' : '' }}">
                            <label>{{ __('Ratting do Lichess de Blitz') }}</label>
                            <input type="number" name="rattinglichess" class="form-control{{ $errors->has('rattinglichess') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting do Lichess de Blitz') }}" value="{{ old('rattinglichess', auth()->user()->rattinglichess) }}">
                            @include('alerts.feedback', ['field' => 'rattinglichess'])
                        </div>
                        <div class="form-group{{ $errors->has('rattinglichessbullet') ? ' has-danger' : '' }}">
                            <label>{{ __('Ratting do Lichess de Bullet') }}</label>
                            <input type="number" name="rattinglichessbullet" class="form-control{{ $errors->has('rattinglichessbullet') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting do Lichess de bullet') }}" value="{{ old('rattinglichessbullet', auth()->user()->rattinglichessbullet) }}">
                            @include('alerts.feedback', ['field' => 'rattinglichessbullet'])
                        </div>
                        <div class="form-group{{ $errors->has('rattinglichessrapido') ? ' has-danger' : '' }}">
                            <label>{{ __('Ratting do Lichess de Rápidas') }}</label>
                            <input type="number" name="rattinglichessrapido" class="form-control{{ $errors->has('rattinglichessrapido') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting do Lichess de Rápidas') }}" value="{{ old('rattinglichessrapido', auth()->user()->rattinglichessrapido) }}">
                            @include('alerts.feedback', ['field' => 'rattinglichessrapido'])
                        </div>
                        <div class="form-group{{ $errors->has('rattinglichesspensado') ? ' has-danger' : '' }}">
                            <label>{{ __('Ratting do Lichess de Pensado') }}</label>
                            <input type="number" name="rattinglichesspensado" class="form-control{{ $errors->has('rattinglichesspensado') ? ' is-invalid' : '' }}" placeholder="{{ __('Ratting do Lichess de Pensado') }}" value="{{ old('rattinglichesspensado', auth()->user()->rattinglichesspensado) }}">
                            @include('alerts.feedback', ['field' => 'rattinglichesspensado'])
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Password') }}</h5>
                </div>
                <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                    <div class="card-body">
                        @csrf
                        @method('put')

                        @include('alerts.success', ['key' => 'password_status'])

                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                            <label>{{ __('Current Password') }}</label>
                            <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Current Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'old_password'])
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label>{{ __('New Password') }}</label>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('New Password') }}" value="" required>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                            <label>{{ __('Confirm New Password') }}</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm New Password') }}" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Change password') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="avatar" src="{{ asset('black') }}/img/{{Auth::user()->name}}.jpg" onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="">
                                <h5 class="title">{{ auth()->user()->name }}</h5>
                            </a>
                            @if (Auth::user()->name == 'Eduardo Baranowski')
                                <p class="description">
                                    {{ __('Diretor Técnico') }}
                                </p>
                            @else
                                <p class="description">
                                    {{ __('Membro da FTX') }}
                                </p>
                            @endif
                        </div>
                    </p>
                    <!--
                    <div class="card-description">
                        {{ __('Do not be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...') }}
                    </div>
                    -->
                </div>
                <div class="card-footer">
                    <!--
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
@endsection
