<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
    <div class="container-fluid">
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
                        <i class="tim-icons icon-minimal-left"></i> {{ __('Informações e Eventos') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('calendario') }}" class="nav-link">
                        <i class="tim-icons icon-calendar-60"></i> {{ __('Calendário') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="tim-icons icon-laptop"></i> {{ __('Registro') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="tim-icons icon-single-02"></i> {{ __('Login') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('diretoria') }}" class="nav-link">
                        <i class="tim-icons icon-components"></i> {{ __('Diretoria') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('estatuto') }}" class="nav-link">
                        <i class="tim-icons icon-paper"></i> {{ __('Estatuto') }}
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('contact') }}" class="nav-link">
                        <i class="tim-icons icon-email-85"></i> {{ __('Contato') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
