@extends('layouts.page', ['body_class' => 'houses no-top no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('content')
    <div id="page-header" class="offer-header">
        <div class="container" style="background:url({{ asset('section/domki-header.jpg') }})">
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
                                <h2 class="section-title text-center"><span class="text-blue">Domki letniskowe </span> w Sianożętach</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center">
                            <div class="col-11">
                                <p>Planowanie długiego urlopu z całą rodziną lub przyjaciółmi należy zacząć od wyboru idealnego kompleksu noclegowego. A nie ma nic lepszego niż przestronny domek letniskowy, w którym znajdzie się miejsce aż dla 6 osób. Ośrodek wypoczynkowy Xanadu w Sianożętach zapewni gościom wszystko, co niezbędne podczas urlopu nam morzem. Przytulne, nowoczesne, luksusowo wykończone wnętrza czekają.</p>
                            </div>
                        </div>

                        <div class="row mt-5 pt-3">
                            <div class="col-12 d-flex justify-content-center">

                                <div class="icon-box icon-box-blue">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                                        <h3>Ciekawy <br>atut</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-swieze-produkty.png') }}" alt="" width="70" height="70">
                                        <h3>Ciekawy <br>atut</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-kameralny.png') }}" alt="" width="70" height="70">
                                        <h3>Ciekawy <br>atut</h3>
                                    </div>
                                </div>

                                <div class="icon-box icon-box-blue">
                                    <div>
                                        <img src="{{ asset('/images/icons/icon-deser.png') }}" alt="" width="70" height="70">
                                        <h3>Ciekawy <br>atut</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div id="offer-form">
                        <h3>Rezerwacja on-line</h3>
                        <p>Już od <strong>450 zł</strong> / noc</p>
                        <a href="#" class="btn btn-theme w-100">ZAREZERWUJ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="cta-section domek-bg">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-4 text-left">
                    <h2 class="section-title">Nowoczesne i komfortowe domki!</h2>
                    <p>Oferujemy drewniane, dwupoziomowe domki, będące odzwierciedleniem nowoczesnego podejścia do budownictwa. Zostały wykończone z największą starannością, aby zapewnić idealne warunki do wypoczynku, a zarazem zachwycać funkcjonalnością i prostą formą. Wynajem domku to najlepsza decyzja, jaką można podjąć z myślą o komfortowym i kameralnym wypoczynku w kilka osób.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="section-title text-center"><span class="text-blue">Nasz ośrodek wczasowy</span> <br>zapewnia komfortowe warunki</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center">
                            <div class="col-11">
                                <p>Każdy obiekt ma dwa tarasy – niewielki, usytuowany na piętrze oraz większy, mieszczący na parterze, na którym można spędzać wolny czas w dowolny sposób: na porannej kawie lub wieczornych opowieściach. Wewnątrz, oprócz dwóch dużych sypialni, znajduje się przytulny salon z kuchnią oraz w luksusowo wyposażona łazienka. Pralka, lodówka, czajnik bezprzewodowy czy telewizor pozwolą na dłuższy pobyt, a darmowe połączenie Wi-Fi zapewni rozrywkę oraz dostęp do najświeższych informacji.</p>
                            </div>
                        </div>

                        <div class="row mt-5">
                            @include('front.parse.gallery', $list)
                        </div>
                    </div>

                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="section-title text-center">Cennik</h2>
                            </div>
                        </div>
                    </div>

                    <table class="cennik" border="0">
                        <thead>
                            <tr>
                                <td>od</td>
                                <td>do</td>
                                <td>cena</td>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>28.04.2023</td>
                            <td>06.05.2023</td>
                            <td>390</td>
                        </tr>
                        <tr>
                            <td>06.05.2023</td>
                            <td>27.05.2023</td>
                            <td>260</td>
                        </tr>
                        <tr>
                            <td>27.05.2023</td>
                            <td>03.06.2023</td>
                            <td>310</td>
                        </tr>
                        <tr>
                            <td>03.06.2023</td>
                            <td>17.06.2023</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>17.06.2023</td>
                            <td>24.06.2023</td>
                            <td>380</td>
                        </tr>
                        <tr>
                            <td>24.06.2023</td>
                            <td>01.07.2023</td>
                            <td>470</td>
                        </tr>
                        <tr>
                            <td>01.07.2023</td>
                            <td>08.07.2023</td>
                            <td>570</td>
                        </tr>
                        <tr>
                            <td>08.07.2023</td>
                            <td>12.08.2023</td>
                            <td>620</td>
                        </tr>
                        <tr>
                            <td>12.08.2023</td>
                            <td>19.08.2023</td>
                            <td>570</td>
                        </tr>
                        <tr>
                            <td>19.08.2023</td>
                            <td>26.08.2023</td>
                            <td>510</td>
                        </tr>
                        <tr>
                            <td>26.08.2023</td>
                            <td>02.09.2023</td>
                            <td>350</td>
                        </tr>
                        <tr>
                            <td>02.09.2023</td>
                            <td>30.09.2023</td>
                            <td>260</td>
                        </tr>
                        </tbody>
                    </table>

                    @include('front.partials.good-to-know')
                </div>
                <div class="col-3">
                    <div id="offer-form" style="margin-top: -210px">
                        <h3>Rezerwacja on-line</h3>
                        <p>Już od <strong>450 zł</strong> / noc</p>
                        <a href="#" class="btn btn-theme w-100">ZAREZERWUJ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

@endpush