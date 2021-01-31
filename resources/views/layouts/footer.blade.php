<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <button onclick="window.open('https://www.instagram.com/ftx_palmas/?hl=pt-br')" class="btn btn-icon btn-round btn-instagram">
                    <i class="fab fa-instagram"></i>
                </button>
            </li>
            <li class="nav-item">
                <button onclick="window.open('https://www.facebook.com/FTXPalmas')" class="btn btn-icon btn-round btn-facebook">
                    <i class="fab fa-facebook"></i>
                </button>
                <!--
                <a href="https://www.facebook.com/FTXPalmas" target="blank" class="nav-link">
                    {{ __('Facebook') }}
                </a>
                -->
            </li>
            <li class="nav-item">
                <button onclick="window.open('http://xadrez-tocantins.blogspot.com/')" class="btn btn-icon btn-round btn-blogger">
                    <i class="fab fa-blogger"></i>
                </button>
            </li>
            <li class="nav-item">
                <button onclick="window.open('mailto:admin@black.com')" class="btn btn-icon btn-round btn-blogger">
                    <i class="fab fa-google"></i>
                </button>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ __('Sobre') }}
                </a>
            </li>

        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ __('Produzido pela ') }} <i class="tim-icons icon-trophy"></i>
            <a href="" target="">{{ __('Federação Tocantinense de Xadrez') }}</a>
        </div>
    </div>
</footer>
