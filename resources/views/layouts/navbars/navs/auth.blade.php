<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="navbar-wrapper">
        <div class="navbar-toggle d-inline">
            <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <a class="navbar-brand" href="#">{{ $page ?? '' }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link text-primary">
                    <i class="tim-icons icon-minimal-left"></i> {{ __('Novidades') }}
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="tim-icons icon-trophy"></i> {{ __('Home') }}
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('calendario') }}" class="nav-link">
                    <i class="tim-icons icon-calendar-60"></i> {{ __('Calendário') }}
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('links') }}" class="nav-link">
                    <i class="tim-icons icon-link-72"></i> {{ __('Links') }}
                </a>
            </li>
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="nav-link-text" >{{ __('Diretoria') }}</span>
                    <b class="caret d-none d-lg-block d-xl-block"></b>
                    <p class="d-lg-none"></p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                    <li class="nav-link">
                        <a href="{{ route('diretoria') }}" class="nav-item dropdown-item">{{ __('Diretoria') }}</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="nav-link">
                        <a href="{{ route('apoio') }}" class="nav-item dropdown-item">{{ __('Apoio') }}</a>
                    </li>

                    <li class="dropdown-divider"></li>
                    <li class="nav-link">
                        <a href="{{ route('estatuto') }}" class="nav-item dropdown-item">{{ __('Estatuto') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">
                <a href="{{ route('ratting') }}" class="nav-link">
                    <i class="tim-icons icon-paper"></i> {{ __('Rattings') }}
                </a>
            </li>
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="nav-link-text" ><i class="tim-icons icon-book-bookmark"></i> {{ __('Materiais') }}</span>
                    <b class="caret d-none d-lg-block d-xl-block"></b>
                    <p class="d-lg-none"></p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                    <li class="nav-link">
                        <a href="{{ route('composicaoshow') }}" class="nav-item dropdown-item">{{ __('Composições') }}</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="nav-link">
                        <a href="{{ route('links') }}" class="nav-item dropdown-item">{{ __('Links') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">
                <a href="{{ route('transparencia') }}" class="nav-link">
                    <i class="tim-icons icon-money-coins"></i> {{ __('Transparência') }}
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('contact') }}" class="nav-link">
                    <i class="tim-icons icon-email-85"></i> {{ __('Contato') }}
                </a>
            </li>
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <div class="photo">
                        <img src="{{ asset('black') }}/img/{{Auth::user()->name}}.jpg" onerror="this.src='{{ asset('black') }}/img/default-avatar.png'" alt="{{ __('Profile Photo') }}">
                    </div>
                    <b class="caret d-none d-lg-block d-xl-block"></b>
                    <p class="d-lg-none"></p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                    <li class="nav-link">
                        <a href="{{ route('profile.edit') }}" class="nav-item dropdown-item">{{ __('Profile') }}</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="nav-link">
                        <a href="{{ route('logout') }}" class="nav-item dropdown-item" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                    </li>
                    <li class="separator d-lg-none"></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
