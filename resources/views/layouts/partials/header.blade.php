<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div id="logo">
                    <a href="/">
                        <img src="{{ asset('/images/xanadu-logo.png') }}" alt="" width="214" height="90">
                    </a>
                </div>
            </div>
            <div class="col-9">
                <nav>
                    <ul class="mb-0 list-unstyled">
                        <li><a href="/">Strona główna</a></li>
                        <li><a href="{{ route('about') }}">Xanadu Resort</a></li>
                        <li><a href="{{ route('front.menu', ['language' => 'pl', 'uri' => 'pokoje']) }}">Pokoje</a></li>
                        <li><a href="{{ route('front.menu', ['language' => 'pl', 'uri' => 'domki']) }}">Domki</a></li>
                        <li><a href="">Restauracja</a></li>
                        <li><a href="">Galeria</a></li>
                        <li><a href="{{ route('front.menu', ['language' => 'pl', 'uri' => 'basen']) }}">Basen</a></li>
                        <li><a href="{{ route('front.menu', ['language' => 'pl', 'uri' => 'cennik']) }}">Cennik</a></li>
                        <li><a href="{{ route('contact') }}">Kontakt</a></li>
                        <li><a href=""><i class="lab la-facebook-square"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>