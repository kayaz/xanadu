@extends('layouts.page', ['body_class' => 'houses no-top no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <div id="page-header" class="offer-header">
        <div class="container" style="background:url({{ asset('section/domki-header.jpg') }}) no-repeat top;background-size: cover">
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
                                <h2 class="section-title text-center"><span class="text-blue">Nowoczesne i komfortowe </span><br>domki w Sianożętach</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center">
                            <div class="col-11">
                                <p>Planowanie długiego urlopu z całą rodziną lub przyjaciółmi należy zacząć od wyboru idealnego kompleksu noclegowego. Domki Xanadu Resort zostały wykonane z drewna. Łączna powierzchnia użytkowa każdego z nich wynosi 60 m2, dzięki czemu bez obaw zmieści się w nim 6, a nawet 8 osób. Każdy dom posiada dwa tarasy – niewielki, usytuowany na piętrze oraz większy, mieszczący się na parterze, na którym można spędzać wolny czas w dowolny sposób: na porannej kawie lub wieczornych opowieściach. Wewnątrz, oprócz dwóch oddzielnych 3 osobowych sypialni, znajduje się przytulny salon z aneksem kuchennym oraz w łazienka z kabiną prysznicową.</p>
                            </div>
                        </div>

                        <div class="row mt-5 pt-3">
                            <div class="col-12 d-flex justify-content-center">

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-location.png') }}" alt="" width="70" height="70">
                                        <h3>Centrum <br>Sianożęt</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-houses.png') }}" alt="" width="70" height="70">
                                        <h3>25 komfortowych domów</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-area.png') }}" alt="" width="70" height="70">
                                        <h3>Przestronne <br>wnętrze (60 m<sup>2</sup>)</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-6-person.png') }}" alt="" width="70" height="70">
                                        <h3>6 <br>osobowe</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue m-2">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                                        <h3>Serwujemy śniadania <br>i obiadokolacje</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-5">
                      <div class="row">
                          <div class="col-12">
                              <h2 class="section-title text-center"><span class="text-blue">Galeria</span></h2>
                          </div>
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
                                        <p><b>2 sypialnie, każda z nich posiada:</b></p>
                                        <ul>
                                            <li>1 łóżko pojedyncze (90x200cm)</li>
                                            <li>1 łóżko podwójne (140x200cm)</li>
                                            <li>jedna szafka nocna wraz z lampką</li>
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
                                        <div class="majowka"><img src="{{ asset('/images/grill.png') }}" width="42" height="42" alt="Ikonka grilla"> {{ $pricelist->houses_may }} <img src="{{ asset('/images/grill.png') }}" width="42" height="42" alt="Ikonka grilla"></div>
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
                                        <p>Doba hotelowa rozpoczyna się o godzinie <b>15:00</b>. Po przyjeździe prosimy zameldować się w recepcji, gdzie recepcjonista udzieli Państwu wszelkich niezbędnych informacji oraz zaprowadzi Państwa do domku.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-concierge-bell"></i>
                                        <p>Doba hotelowa kończy się o godzinie <b>10:00</b>.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-smoking-ban"></i>
                                        <p>W domkach obowiązuje <b>bezwzględny zakaz palenia</b>. Możliwość na tarasie.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-parking"></i>
                                        <p>Miejsca parkingowe przydzielane są przez recepcje Xanadu Resort. Prosimy o niezajmowanie miejsca samodzielnie. Koszt miejsca parkingowego wynosi <b>10 zł/doba</b>.</p>
                                    </div>

                                    <div class="features-list">
                                        <i class="las la-plug"></i>
                                        <p>Opłata za energię elektryczną według podlicznika, obowiązuje tylko w domach <b>1,00 zł/ 1 kWh</b>.</p>
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
                                        <i class="las la-paw"></i>
                                        <p>Zwierzęta są mile widziane tylko i wyłącznie w DOMACH, <b>koszt pupila 30 zł / doba</b>. Akceptujemy psy <b>do 20 kg</b>!</p>
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
                <div class="col-3">
                    <div class="offer-form-track">
                        <div id="offer-form">
                            <h3>Rezerwacja on-line</h3>
                            <p>Już od <strong>260 zł</strong> / noc</p>
                            <a href="{{ route('reservation') }}?form_room_type=2" class="btn btn-theme w-100">ZAREZERWUJ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section domek-bg m-0">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-6">
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
                    <h2 class="section-title text-center"><span class="text-blue">Pokoje</span> w Xanadu Resort.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12 col-xxl-8">
                    <p>Nasze pokoje zaprojektowano z myślą o tych z Państwa, którzy poszukują przede wszystkim komfortu wysokiej klasy. Wyposażenie każdego pokoju hotelowego o wielkości 21 m<sup>2</sup> obejmuje niezbędne i zarazem luksusowe rozwiązania, dzięki którym czas spędzany w naszym obiekcie będzie należał do przyjemnych.</p>
                    <a href="{{ route('rooms') }}" class="btn btn-theme btn-icon mt-5">ZOBACZ OFERTĘ <i class="las la-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

@endpush