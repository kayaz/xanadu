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
                        <li>
                            <a href="#">Xanadu Resort</a>
                            <ul class="nav-sub mb-0">
                                <li><a href="{{ route('about') }}">O nas</a></li>
                                <li><a href="{{ route('location') }}">Lokalizacja</a></li>
                                <li><a href="{{ route('attraction') }}">Atrakcje turystyczne</a></li>
                                <li><a href="{{ route('animals') }}">Zwierzęta w resorcie</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pokoje</a></li>
                        <li><a href="{{ route('houses') }}">Domki</a></li>
                        <li>
                            <a href="#">Restauracja</a>
                            <ul class="nav-sub mb-0">
                                <li><a href="{{ route('restaurant') }}">O restauracji</a></li>
                                <li><a href="{{ route('breakfast') }}">Śniadania</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Galeria</a>
                            <ul class="nav-sub mb-0">
                                <li><a href="{{ route('gallery') }}">Zdjęcia</a></li>
                                <li><a href="#">Wirtualny spacer</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('pool') }}">Basen</a></li>
                        <li><a href="{{ route('pricelist') }}">Cennik</a></li>
                        <li><a href="{{ route('contact') }}">Kontakt</a></li>
                        <li><a href="https://www.facebook.com/xanadunadmorzem" target="_blank"><i class="lab la-facebook-square"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>