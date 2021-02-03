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
                    </ul>
                </div>
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
