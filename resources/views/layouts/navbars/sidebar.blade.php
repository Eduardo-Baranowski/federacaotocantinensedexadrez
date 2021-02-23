<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="home" class="simple-text logo-mini">{{ __('FTX') }}</a>
            <a href="home" class="simple-text logo-normal">{{ __('Xadrez Tocantins') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug ?? '' == 'dashboard') class="active " @endif>
                <a href="{{ route('dashboard') }}">
                    <i class="tim-icons icon-trophy"></i>
                    <p>{{ __('Informações e Eventos') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-badge" ></i>
                    <span class="nav-link-text" >{{ __('Sobre a FTX') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="laravel-examples">
                    <ul class="nav pl-4">

                        <li @if ($pageSlug ?? '' == 'estatuto') class="active " @endif>
                            <a href="{{ route('estatuto')  }}">
                                <i class="tim-icons icon-paper"></i>
                                <p>{{ __('Estatuto') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'diretoria') class="active " @endif>
                            <a href="{{ route('diretoria')  }}">
                                <i class="tim-icons icon-components"></i>
                                <p>{{ __('Diretoria') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'apoio') class="active " @endif>
                            <a href="{{ route('apoio')  }}">
                                <i class="tim-icons icon-bank"></i>
                                <p>{{ __('Apoiadores') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'ratting') class="active " @endif>
                            <a href="{{ route('ratting')  }}">
                                <i class="tim-icons icon-paper"></i>
                                <p>{{ __('Lista de Ratting') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li @if ($pageSlug ?? '' == 'partida') class="active " @endif>
                <a href="{{ route('pages.partida')  }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Cadastro de Partida') }}</p>
                </a>
            </li>

            <li @if ($pageSlug ?? '' == 'composicao') class="active " @endif>
                <a href="{{ route('pages.composicao')  }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Cadastro de Composição') }}</p>
                </a>
            </li>

            <li @if ($pageSlug ?? '' == 'links') class="active " @endif>
                <a href="{{ route('links')  }}">
                    <i class="tim-icons icon-link-72"></i>
                    <p>{{ __('Links') }}</p>
                </a>
            </li>
            <li @if ($pageSlug ?? '' == 'calendario') class="active " @endif>
                <a href="{{ route('calendario')  }}">
                    <i class="tim-icons icon-calendar-60"></i>
                    <p>{{ __('Calendário') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#transparencia" aria-expanded="true">
                    <i class="tim-icons icon-bank" ></i>
                    <span class="nav-link-text" >{{ __('Transparência') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse" id="transparencia">
                    <ul class="nav pl-4">

                        <li @if ($pageSlug ?? '' == 'conta') class="active " @endif>
                            <a href="{{ route('pages.conta')  }}">
                                <i class="tim-icons icon-money-coins"></i>
                                <p>{{ __('Cadastro de Gasto') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug ?? '' == 'transparencia') class="active " @endif>
                            <a href="{{ route('transparencia')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Transparência') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug ?? '' == 'profile') class="active " @endif>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('User Profile') }}</p>
                </a>
            </li>

            <li @if ($pageSlug ?? '' == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Localização') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
