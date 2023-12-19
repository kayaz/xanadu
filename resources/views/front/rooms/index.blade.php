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
                <div class="order-2 order-lg-1 col-12 col-lg-9">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="mix-nav text-center offer-mix-nav">
                                    <button type="button" class="btn btn-theme mt-0" data-bs-toggle="modal" data-bs-target="#priceModal"><span><i class="las la-th-list"></i></span>Cennik</button>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <h2 class="section-title text-center"><span class="text-blue">Luksusowe i komfortowe </span><br>pokoje w Sianożętach</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center">
                            <div class="col-12 col-xxl-11">
                                <p>Nasze pokoje zaprojektowano z myślą o tych z Państwa, którzy poszukują przede wszystkim komfortu wysokiej klasy. Wyposażenie każdego pokoju hotelowego o wielkości 21 m<sup>2</sup> obejmuje niezbędne i zarazem luksusowe rozwiązania, dzięki którym czas spędzany w naszym obiekcie będzie należał do przyjemnych. Pokoje zostały przystosowane do obecności maksymalnie 3 osób. Będą zatem idealne nie tylko dla par, ale także rodziców z dzieckiem.</p>
                            </div>
                        </div>

                        <div class="row mt-3 mt-lg-5 pt-3">
                            <div class="col-12 d-flex justify-content-center icon-box-row">

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-location.png') }}" alt="" width="70" height="70">
                                        <h3>Centrum Sianożęt <br>(150m do morza)</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-key.png') }}" alt="" width="70" height="70">
                                        <h3>24 przytulne <br>pokoje</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-roomdesign.png') }}" alt="" width="70" height="70">
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
                                        <img src="{{ asset('/images/icons/icon-sea.png') }}" alt="" width="70" height="70">
                                        <h3>Widok <br>na morze</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container p-0">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="nocleg text-center">
                                    <img src="/uploads/nocleg_pokoje.jpg" alt="Pokoje nad morzem do wynajęcia" />
                                    <h2>Pokój 2-osobowy</h2>
                                    <a href="#" class="btn btn-theme btn-icon mb-4 me-3" data-bs-toggle="modal" data-bs-target="#equipmentModal2">WYPOSAŻENIE <i class="las la-file-alt"></i></a>

                                    @foreach($pok2 as $index => $pok2si)
                                        @if($index === 0)
                                            <a href="/uploads/gallery/images/{{$pok2si->file}}" class="btn btn-theme btn-icon mb-4 swipebox" rel="gallery-{{$pok2si->gallery_id}}" title="Pokój 3-osobowy">GALERIA <i class="las la-file-alt"></i></a>
                                            @break
                                        @endif
                                    @endforeach

                                    @foreach($pok2 as $pok2i)
                                        <a href="/uploads/gallery/images/{{$pok2i->file}}" class="swipebox d-none" rel="gallery-{{$pok2i->gallery_id}}" title="Pokój 2-osobowy">
                                            <picture>
                                                <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$pok2i->file_webp) }}">
                                                <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$pok2i->file) }}">
                                                <img src="{{asset('uploads/gallery/images/thumbs/'.$pok2i->file) }}" alt="{{ $pok2i->name }}">
                                            </picture>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="nocleg text-center">
                                    <img src="/uploads/nocleg_pokoje.jpg" alt="Pokoje nad morzem do wynajęcia" />
                                    <h2>Pokój 3-osobowy</h2>
                                    <a href="#" class="btn btn-theme btn-icon mb-4 me-3" data-bs-toggle="modal" data-bs-target="#equipmentModal3">WYPOSAŻENIE <i class="las la-file-alt"></i></a>

                                    @foreach($pok3 as $index => $pok3si)
                                        @if($index === 0)
                                            <a href="/uploads/gallery/images/{{$pok3si->file}}" class="btn btn-theme btn-icon mb-4 swipebox" rel="gallery-{{$pok3si->gallery_id}}" title="Pokój 3-osobowy">GALERIA <i class="las la-file-alt"></i></a>
                                            @break
                                        @endif
                                    @endforeach
                                    @foreach($pok3 as $pok3i)
                                        <a href="/uploads/gallery/images/{{$pok3i->file}}" class="swipebox d-none" rel="gallery-{{$pok3i->gallery_id}}" title="Pokój 3-osobowy">
                                            <picture>
                                                <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$pok3i->file_webp) }}">
                                                <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$pok3i->file) }}">
                                                <img src="{{asset('uploads/gallery/images/thumbs/'.$pok3i->file) }}" alt="{{ $pok3i->name }}">
                                            </picture>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container mt-3 mt-md-5 p-0">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="section-title text-center"><span class="text-blue">Wideo</span></h2>
                            </div>
                            <div class="col-12">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/hlfIoCWMu6k?si=OykIob814tiYFb8X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="modal" id="equipmentModal2">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                                    </div>
                                    <div class="modal-body p-4" id="modalContent">


                                        <p class="mt-0"><b>Wyposażenie pokoju:</b></p>
                                        <ul>
                                            <li>2 łóżka pojedyncze (90x200cm) z możliwością połączenia w łóżko małżeńskie</li>
                                            <li>2 komplety ręczników (duży i mały)</li>
                                            <li>biurko z siedziskiem</li>
                                            <li>telewizor 42&quot;</li>
                                            <li>szafa,</li>
                                            <li>2 lampki nocne</li>
                                            <li>szafka nocna</li>
                                            <li>lodówka</li>
                                            <li>czajnik elektryczny</li>
                                            <li>komplet talerzy, kubków i sztućców dla 3 osób</li>
                                            <li>parawan + 2 leżaki</li>
                                            <li>suszarka na ubrania</li>
                                        </ul>
                                        <p><b>Łazienka:</b></p>
                                        <ul>
                                            <li>toaleta</li>
                                            <li>umywalka</li>
                                            <li>lustro</li>
                                            <li>przestronny prysznic</li>
                                            <li>grzejnik</li>
                                        </ul>
                                        <p><b>Balkon</b></p>
                                        <ul>
                                            <li>meble tarasowe: stół + 2 krzesła</li>
                                        </ul>
                                        <p><b>Udogodnienia dodatkowe (do wypożyczenia w Recepcji)</b></p>
                                        <ul>
                                            <li>wanienka dziecięca do kąpieli niemowląt</li>
                                            <li>łóżeczko dziecięce (dodatkowo płatne)</li>
                                            <li>żelazko z deską do prasowania</li>
                                            <li>suszarka do włosów</li>
                                        </ul>
                                        <p>Na terenie całego obiektu dostęp do <b>bezpłatnej sieci Wi-Fi</b>. <br><b>Zwierzęta w budynku hotelowym NIE są akceptowane</b>.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-theme" data-bs-target="#priceModal" data-bs-toggle="modal">ZOBACZ CENNIK</button>
                                        <button class="btn btn-theme" data-bs-target="#equipmentModal3" data-bs-toggle="modal">WYPOSAŻENIE POKÓJ 3 OS.</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="modal" id="equipmentModal3">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                                    </div>
                                    <div class="modal-body p-4" id="modalContent">


                                        <p class="mt-0"><b>Wyposażenie pokoju:</b></p>
                                        <ul>
                                            <li>2 łóżka pojedyncze (90x200cm) z możliwością połączenia w łóżko małżeńskie</li>
                                            <li>dostawka hotelowa (80x200cm)</li>
                                            <li>3 komplety ręczników (duży i mały)</li>
                                            <li>biurko z siedziskiem</li>
                                            <li>telewizor 42&quot;</li>
                                            <li>szafa,</li>
                                            <li>2 lampki nocne</li>
                                            <li>szafka nocna</li>
                                            <li>lodówka</li>
                                            <li>czajnik elektryczny</li>
                                            <li>komplet talerzy, kubków i sztućców dla 3 osób</li>
                                            <li>parawan + 2 leżaki</li>
                                            <li>suszarka na ubrania</li>
                                        </ul>
                                        <p><b>Łazienka:</b></p>
                                        <ul>
                                            <li>toaleta</li>
                                            <li>umywalka</li>
                                            <li>lustro</li>
                                            <li>przestronny prysznic</li>
                                            <li>grzejnik</li>
                                        </ul>
                                        <p><b>Balkon</b></p>
                                        <ul>
                                            <li>meble tarasowe: stół + 2 krzesła</li>
                                        </ul>
                                        <p><b>Udogodnienia dodatkowe (do wypożyczenia w Recepcji)</b></p>
                                        <ul>
                                            <li>wanienka dziecięca do kąpieli niemowląt</li>
                                            <li>łóżeczko dziecięce (dodatkowo płatne)</li>
                                            <li>żelazko z deską do prasowania</li>
                                            <li>suszarka do włosów</li>
                                        </ul>
                                        <p>Na terenie całego obiektu dostęp do <b>bezpłatnej sieci Wi-Fi</b>. <br><b>Zwierzęta w budynku hotelowym NIE są akceptowane</b>.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-theme" data-bs-target="#priceModal" data-bs-toggle="modal">ZOBACZ CENNIK</button>
                                        <button class="btn btn-theme" data-bs-target="#equipmentModal2" data-bs-toggle="modal">WYPOSAŻENIE POKÓJ 2 OS.</button>
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
                                        <div class="majowka"><img src="{{ asset('/images/grill.png') }}" width="42" height="42" alt="Ikonka grilla"> {{ $pricelist->rooms_may }} <img src="{{ asset('/images/grill.png') }}" width="42" height="42" alt="Ikonka grilla"></div>
                                        <table class="cennik" border="0">
                                            <thead>
                                            <tr>
                                                <td>Od</td>
                                                <td>Do</td>
                                                <td>Cena</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {!! tableDatesAndPrices($pricelist->houses_prices) !!}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-theme" data-bs-target="#equipmentModal2" data-bs-toggle="modal">WYPOSAŻENIE POKÓJ 2 OS.</button>
                                        <button class="btn btn-theme" data-bs-target="#equipmentModal3" data-bs-toggle="modal">WYPOSAŻENIE POKÓJ 3 OS.</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <section>
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="section-title text-center"><span class="text-blue">Dodatkowe</span> informacje i opłaty</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="features-list">
                                        <i class="las la-concierge-bell"></i>
                                        <p>Doba hotelowa rozpoczyna się o godzinie <b>15:00</b>. Po przyjeździe prosimy zameldować się w recepcji, gdzie recepcjonista udzieli Państwu wszelkich niezbędnych informacji.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-concierge-bell"></i>
                                        <p>Doba hotelowa kończy się o godzinie <b>10:00</b>.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-smoking-ban"></i>
                                        <p>W pokojach obowiązuje <b>bezwzględny zakaz palenia</b></p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-parking"></i>
                                        <p>Miejsca parkingowe przydzielane są przez recepcje Xanadu Resort. Prosimy o niezajmowanie miejsca samodzielnie. Koszt miejsca parkingowego wynosi <b>10 zł/doba</b>.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-leaf"></i>
                                        <p>Opłata klimatyczna – <b>2 zł/doba osoba dorosła</b>. Dzieci od 0 do 3 roku życia <b>zwolnione z opłat</b>. Brak ulgi dla seniorów, rencistów i dzieci powyżej 3 roku życia.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-trash-alt"></i>
                                        <p>W recepcji można bezpłatnie pobrać worki na śmieci oraz papier toaletowy.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-wallet"></i>
                                        <p>Rezerwacja będzie dokonana po wpłaceniu <b>zadatku w wysokości 30%</b> od naliczonej kwoty pobytu w terminie 7 dni od momentu wysłania przez biuro rezerwacji (reszta kwoty w dniu przyjazdu w kasie ośrodka).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="order-1 order-lg-2 col-12 col-lg-3 position-relative">
                    <div class="offer-form-track">
                        <div id="offer-form">
                            <h3>Rezerwacja on-line</h3>
                            <p>Już od <strong>180 zł</strong> / noc</p>
                            <a href="{{ route('reservation') }}?form_room_type=1" class="btn btn-theme w-100">ZAREZERWUJ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section pokoje-bg m-0 rwd-section">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6 text-left">
                    <h2 class="section-title">Nasz obiekt zapewnia przytulne i nowoczesne wnętrza</h2>
                    <p>Xanadu to obiekt zlokalizowany blisko morza w Sianożętach. Pokoje zostały zaprojektowane z myślą o tych z Państwa, którzy poszukują przede wszystkim komfortu wysokiej klasy. Tutaj Goście chcą zatrzymywać się jak najdłużej. Nic dziwnego, ponieważ na wszystkich odwiedzających czekają aż <b>24 luksusowo wykończone</b>, przestronne wnętrza z licznymi udogodnieniami. Nasz obiekt w Sianożętach to kwintesencja dobrze spędzonego urlopu nad morzem. Zachęcamy do tego, by zapomnieli Państwo na chwilę o stresie i troskach codziennego dnia i oddali się błogim, relaksującym chwilom w resorcie Xanadu. Zapraszamy do rezerwowania pobytu!</p>
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
                <div class="col-12 col-xxl-8">
                    <p>Oferujemy drewniane, dwupoziomowe domki, będące odzwierciedleniem nowoczesnego podejścia do budownictwa. Zostały wykończone z największą starannością, aby zapewnić idealne warunki do wypoczynku, a zarazem zachwycać funkcjonalnością i prostą formą.</p>
                    <a href="{{ route('houses') }}" class="btn btn-theme btn-icon mt-4 mt-xxl-5">ZOBACZ OFERTĘ <i class="las la-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

@endpush