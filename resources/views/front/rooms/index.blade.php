@extends('layouts.page', ['body_class' => 'houses no-top no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <div id="page-header" class="offer-header">
        <div class="container" style="background:url({{ asset('section/pokoje-header.jpg') }}) no-repeat top;background-size: cover">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('/images/svg/section-title-icon.svg') }}" alt="{{ $page->title }}">
                    <h1 class="mt-4">{{ $page->title }}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="mix-nav text-center offer-mix-nav">
                                    <button type="button" class="btn btn-theme mt-0" data-bs-toggle="modal" data-bs-target="#equipmentModal"><span><i class="las la-file-alt"></i></span>Wyposażenie</button>
                                    <button type="button" class="btn btn-theme mt-0" data-bs-toggle="modal" data-bs-target="#priceModal"><span><i class="las la-th-list"></i></span>Cennik</button>
                                    <a href="{{ asset('/uploads/gallery/images/203121_dsc-0359.jpeg') }}" class="btn btn-theme mt-0 swipebox" rel="gallery-1"><span><i class="las la-image"></i></span>Galeria</a>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <h2 class="section-title text-center"><span class="text-blue">Luksusowe i komfortowe </span><br>pokoje w Sianożętach</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center">
                            <div class="col-11">
                                <p>Nasze pokoje zaprojektowano z myślą o tych z Państwa, którzy poszukują przede wszystkim komfortu wysokiej klasy. Wyposażenie każdego pokoju hotelowego o wielkości 21 m<sup>2</sup> obejmuje niezbędne i zarazem luksusowe rozwiązania, dzięki którym czas spędzany w naszym obiekcie będzie należał do przyjemnych. Pokoje zostały przystosowane do obecności maksymalnie 3 osób. Będą zatem idealne nie tylko dla par, ale także rodziców z dzieckiem.</p>
                            </div>
                        </div>

                        <div class="row mt-5 pt-3">
                            <div class="col-12 d-flex justify-content-center">

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-location.png') }}" alt="" width="70" height="70">
                                        <h3>Centrum Sianożęt <br>(150m do morza)</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-houses.png') }}" alt="" width="70" height="70">
                                        <h3>24 przytulne <br>pokoje</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-area.png') }}" alt="" width="70" height="70">
                                        <h3>Nowoczesne <br>wnętrze</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                                        <h3>Oferujemy pełne <br>wyżywienie</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                                        <h3>Dogodny <br>dojazd</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                @include('front.parse.slider', $list)
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="modal" id="equipmentModal">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                                    </div>
                                    <div class="modal-body p-4" id="modalContent">
                                        <p class="mt-0"><b>Salon z Aneksem Kuchennym:</b></p>
                                        <ul>
                                            <li>meble w zabudowie stałej, zlewozmywak z baterią,</li>
                                            <li>lodówka podblatowa,</li>
                                            <li>płyta 2 palnikowa</li>
                                            <li>mikrofalówka</li>
                                            <li>czajnik elektryczny</li>
                                            <li>komplet naczyń i sztućców dla 8 osobowej rodziny</li>
                                            <li>rozkładana sofa z funkcją spania dla 2 osób</li>
                                            <li>stół jadalniany z 6 krzesłami</li>
                                            <li>telewizor 42&quot;</li>
                                            <li>stolik kawowy</li>
                                            <li>parawan + 2 leżaki</li>
                                            <li>suszarka na ubrania</li>
                                        </ul>
                                        <p><b>Sypialnia, każda posiada:</b></p>
                                        <ul>
                                            <li>1 łóżko pojedyncze (90x200cm)</li>
                                            <li>1 łóżko podwójne (140x200cm)</li>
                                            <li>2 szafki nocne wraz z lampkami</li>
                                            <li>meble w zabudowie lub komoda</li>
                                        </ul>
                                        <p><b>Łazienka:</b></p>
                                        <ul>
                                            <li>toaleta</li>
                                            <li>umywalka z szafką i lustrem</li>
                                            <li>przestronny prysznic</li>
                                            <li>grzejnik</li>
                                            <li>pralka</li>
                                        </ul>
                                        <p><b>Taras / Ogródek (parter)</b></p>
                                        <ul>
                                            <li>meble tarasowe: stół + 4 krzesła</li>
                                        </ul>
                                        <p><b>Udogodnienia dodatkowe (do wypożyczenia w Recepcji)</b></p>
                                        <ul>
                                            <li>krzesełko dziecięce do jadalni</li>
                                            <li>wanienka dziecięca do kąpieli niemowląt</li>
                                            <li>łóżeczko dziecięce (dodatkowo płatne)</li>
                                            <li>żelazko z deską do prasowania</li>
                                            <li>ręczniki kąpielowe (dodatkowo płatne)</li>
                                            <li>suszarka do włosów</li>
                                        </ul>
                                        <p>Na terenie całego obiektu dostęp do <b>bezpłatnej sieci Wi-Fi</b>. <br><b>Akceptujemy pobyty ze zwierzętami</b>. Opcja dodatkowo płatna.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-theme" data-bs-target="#priceModal" data-bs-toggle="modal">ZOBACZ CENNIK</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="modal" id="priceModal">
                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                                    </div>
                                    <div class="modal-body p-4" id="modalContent">
                                        <table class="cennik" border="0">
                                            <thead>
                                            <tr>
                                                <td>Od</td>
                                                <td>Do</td>
                                                <td>Cena</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr><td>27.04.2024</td><td>05.05.2024</td><td>270</td></tr>
                                            <tr><td>05.05.2024</td><td>26.05.2024</td><td>180</td></tr>
                                            <tr><td>26.05.2024</td><td>02.06.2024</td><td>270</td></tr>
                                            <tr><td>02.06.2024</td><td>16.06.2024</td><td>220</td></tr>
                                            <tr><td>16.06.2024</td><td>23.06.2024</td><td>250</td></tr>
                                            <tr><td>23.06.2024</td><td>30.06.2024</td><td>270</td></tr>
                                            <tr><td>30.06.2024</td><td>07.07.2024</td><td>290</td></tr>
                                            <tr><td>07.07.2024</td><td>18.08.2024</td><td>320</td></tr>
                                            <tr><td>18.08.2024</td><td>25.08.2024</td><td>290</td></tr>
                                            <tr><td>25.08.2024</td><td>01.09.2024</td><td>220</td></tr>
                                            <tr><td>01.09.2024</td><td>08.09.2024</td><td>200</td></tr>
                                            <tr><td>08.09.2024</td><td>22.09.2024</td><td>180</td></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-theme" data-bs-target="#equipmentModal" data-bs-toggle="modal">ZOBACZ WYPOSAŻENIE</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="section-title text-center"><span class="text-blue">Dodatkowe</span> informacje i opłaty</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="features-list">
                                        <i class="las la-concierge-bell"></i>
                                        <p>Doba hotelowa rozpoczyna się o godzinie 15:00. Po przyjeździe prosimy zameldować się w recepcji, gdzie recepcjonista udzieli Państwu wszelkich niezbędnych informacji.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-concierge-bell"></i>
                                        <p>Doba hotelowa kończy się o godzinie 10:00.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-smoking-ban"></i>
                                        <p>W pokojach obowiązuje <b>bezwzględny zakaz palenia</b></p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-parking"></i>
                                        <p>Miejsca parkingowe przydzielane są przez recepcje Xanadu Resort. Prosimy o niezajmowanie miejsca samodzielnie. Koszt miejsca parkingowego wynosi 10 zł/doba.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-leaf"></i>
                                        <p>Opłata klimatyczna – 2 zł/doba osoba dorosła. Dzieci od 0 do 3 roku życia zwolnione z opłat. Brak ulgi dla seniorów, rencistów i dzieci powyżej 3 roku życia.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-trash-alt"></i>
                                        <p>W recepcji można bezpłatnie pobrać worki na śmieci oraz papier toaletowy.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-wallet"></i>
                                        <p>Rezerwacja będzie dokonana po wpłaceniu zadatku w wysokości 30% od naliczonej kwoty pobytu w terminie 7 dni od momentu wysłania przez biuro rezerwacji (reszta kwoty w dniu przyjazdu w kasie ośrodka).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-3">
                    <div class="offer-form-track">
                        <div id="offer-form">
                            <h3>Rezerwacja on-line</h3>
                            <p>Już od <strong>180 zł</strong> / noc</p>
                            <a href="#" class="btn btn-theme w-100">ZAREZERWUJ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section domek-bg m-0">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-6 text-left">
                    <h2 class="section-title">Nasz ośrodek wczasowy zapewnia komfortowe warunki</h2>
                    <p>Oferujemy drewniane, dwupoziomowe domki, będące odzwierciedleniem nowoczesnego podejścia do budownictwa. Zostały wykończone z największą starannością, aby zapewnić idealne warunki do wypoczynku, a zarazem zachwycać funkcjonalnością i prostą formą. Wynajem domku to najlepsza decyzja, jaką można podjąć z myślą o komfortowym i kameralnym wypoczynku w kilka osób.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center"><span class="text-blue">Domki</span> w Xanadu Resort.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur accumsan mauris ac orci convallis, sed sollicitudin urna pharetra. Pellentesque eu pellentesque augue. Nam eget eros dolor.</p>
                    <a href="#" class="btn btn-theme btn-icon mt-5">ZOBACZ OFERTĘ <i class="las la-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

@endpush