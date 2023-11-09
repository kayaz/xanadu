@extends('layouts.homepage')

@section('content')
<div id="slider">
    <ul class="mb-0 list-unstyled">
        <li>
            <div class="slider-apla">
                <h1>Bałtyckie przygody czekają na Ciebie.</h1>
            </div>
            <img src="{{ asset('/uploads/slider/slider-1.jpg') }}" alt="" width="1920" height="900" class="w-100">
        </li>
    </ul>

    <div class="booking">
        <form action="#" method="post">
            {{ csrf_field() }}
            <div id="checkin">
                <span class="label">PRZYJAZD</span>
                <span class="date_day">09</span>
                <span class="date_month">11</span>
                <span class="date_year">2023</span>
                <button class="date_change checkin" type="button">ZMIEŃ DATĘ</button>
                <input type="hidden" name="checkin" value="">
            </div>

            <div id="checkout">
                <span class="label">WYJAZD</span>
                <span class="date_day">10</span>
                <span class="date_month">11</span>
                <span class="date_year">2023</span>
                <button class="date_change checkout" type="button">ZMIEŃ DATĘ</button>
                <input type="hidden" name="checkout" value="">
            </div>
            <button type="submit" class="date_check">SPRAWDŹ DOSTĘPNOŚĆ</button>
        </form>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center"><span class="text-blue">Morska magia</span> każdego dnia.</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-8">
                <p>Ośrodek wczasowy Xanadu w Sianożętach (12 km od centrum Kołobrzegu) to nowoczesny i luksusowy kompleks wypoczynkowy zlokalizowany nad Morzem Bałtyckim, który został oddany do użytku w kwietniu 2016 roku. Ze względu na swoje położenie i przepiękną panoramę nadmorską jest doskonałym miejscem wypoczynku w sezonie letnim.</p>
            </div>
        </div>

        <div class="row mt-5 pt-3">
            <div class="col-12 d-flex justify-content-center">
                <div class="icon-box icon-box-blue">
                    <div>
                        <img src="{{ asset('/images/icons/icon-location.png') }}" alt="" width="70" height="70">
                        <h3>W samym <br>centrum Sianożęt</h3>
                    </div>
                </div>
                <div class="icon-box icon-box-blue">
                    <div>
                        <img src="{{ asset('/images/icons/icon-design.png') }}" alt="" width="70" height="70">
                        <h3>Nowoczesny <br>design</h3>
                    </div>
                </div>
                <div class="icon-box icon-box-blue">
                    <div>
                        <img src="{{ asset('/images/icons/icon-houses.png') }}" alt="" width="70" height="70">
                        <h3>25 komfortowych <br>domków</h3>
                    </div>
                </div>
                <div class="icon-box icon-box-blue">
                    <div>
                        <img src="{{ asset('/images/icons/icon-rooms.png') }}" alt="" width="70" height="70">
                        <h3>24 przytulne <br>pokoje</h3>
                    </div>
                </div>
                <div class="icon-box icon-box-blue">
                    <div>
                        <img src="{{ asset('/images/icons/icon-beach.png') }}" alt="" width="70" height="70">
                        <h3>Nadmorski <br>klimat</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-7">
                <img src="https://placehold.co/1120x780" alt="" class="w-100">
            </div>
            <div class="col-5 d-flex align-items-center">
                <div class="section-box text-left">
                    <h2 class="section-title"><span class="text-blue">Luksusowy domek</span> letniskowy blisko morza to znakomity pomysł na nocleg!</h2>
                    <p>Planowanie długiego urlopu z całą rodziną lub przyjaciółmi należy zacząć od wyboru idealnego kompleksu noclegowego. A nie ma nic lepszego niż przestronny domek letniskowy, w którym znajdzie się miejsce aż dla 6 osób.</p>
                    <p>&nbsp;</p>
                    <p>Ośrodek wypoczynkowy Xanadu w Sianożętach zapewni gościom wszystko, co niezbędne podczas urlopu nam morzem. Przytulne, nowoczesne, luksusowo wykończone wnętrza czekają.</p>
                    <a href="{{ route('front.menu', ['language' => 'pl', 'uri' => 'domki']) }}" class="btn btn-theme btn-icon mt-5">CZYTAJ WIĘCEJ <i class="las la-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid p-0">
        <div class="row g-0 flex-row-reverse">
            <div class="col-7">
                <img src="https://placehold.co/1120x780" alt="" class="w-100">
            </div>
            <div class="col-5 d-flex align-items-center">
                <div class="section-box text-left">
                    <h2 class="section-title"><span class="text-blue">Zaplanuj urlop</span> nad morzem w naszych pokojach.</h2>
                    <p>Wiemy, jak ważne jest, aby wczasy nad morzem okazały się udaną inwestycją. Pokój noclegowy powinien spełniać podstawową funkcję, ale jednocześnie odpowiadać wygórowanym oczekiwaniom Gości.</p>
                    <p>&nbsp;</p>
                    <p>Urlop jest przecież tym wyjątkowym momentem w roku, podczas którego jedyną troską powinno być planowanie czasu wolnego, nie zaś zamartwianie się o warunki noclegowe.</p>
                    <a href="{{ route('front.menu', ['language' => 'pl', 'uri' => 'pokoje']) }}" class="btn btn-theme btn-icon mt-5">CZYTAJ WIĘCEJ <i class="las la-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-4 text-left">
                <h2 class="section-title">Rozpocznij dzień od pysznego śniadania!</h2>
                <p>Nasza oferta śniadaniowa to doskonały sposób na rozpoczęcie dnia w pełni energii. Wybierz spośród różnorodnych świeżych produktów i ciesz się smakiem, który pobudzi Twoje zmysły. Niech każde śniadanie będzie wyjątkowym momentem. Dołącz do nas i odkryj magię poranka!</p>
                <a href="" class="btn btn-theme btn-icon mt-5">CZYTAJ WIĘCEJ <i class="las la-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-0">
                <div class="section-box text-left pe-5 ps-5">
                    <h2 class="section-title"><span class="text-blue">Atrakcje</span> w okolicy</h2>
                    <p>W sąsiadującym Ustroniu Morskim znajduje się "Wesołe Miasteczko", mini ZOO, galeria, biblioteka, kino, boiska i korty tenisowe. W samym Ustroniu Morskim w okresie letnim odbywa się wiele imprez cyklicznych.</p>
                    <a href="{{ route('front.menu', ['language' => 'pl', 'uri' => 'atrakcje-regionalne']) }}" class="btn btn-theme btn-icon mt-5">CZYTAJ WIĘCEJ <i class="las la-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-9 p-0">
                <ul class="mb-0 list-unstyled attraction-carousel">
                    <li>
                        <div class="attraction">
                            <img src="https://placehold.co/375x250" alt="">
                            <div class="attraction-text">
                                <h3>Wędkarstwo morskie - rejsy na dorsza</h3>
                                <p>Polecamy wędkarskie rejsy na Morzu Bałtyckim jachtem motorowym typ Rodman 1120 o długości 11,5 m i konstrukcji turystyczno-rekreacyjnej.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="attraction">
                            <img src="https://placehold.co/375x250" alt="">
                            <div class="attraction-text">
                                <h3>Wędkarstwo morskie - rejsy na dorsza</h3>
                                <p>Polecamy wędkarskie rejsy na Morzu Bałtyckim jachtem motorowym typ Rodman 1120 o długości 11,5 m i konstrukcji turystyczno-rekreacyjnej.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="attraction">
                            <img src="https://placehold.co/375x250" alt="">
                            <div class="attraction-text">
                                <h3>Wędkarstwo morskie - rejsy na dorsza</h3>
                                <p>Polecamy wędkarskie rejsy na Morzu Bałtyckim jachtem motorowym typ Rodman 1120 o długości 11,5 m i konstrukcji turystyczno-rekreacyjnej.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="attraction">
                            <img src="https://placehold.co/375x250" alt="">
                            <div class="attraction-text">
                                <h3>Wędkarstwo morskie - rejsy na dorsza</h3>
                                <p>Polecamy wędkarskie rejsy na Morzu Bałtyckim jachtem motorowym typ Rodman 1120 o długości 11,5 m i konstrukcji turystyczno-rekreacyjnej.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="attraction">
                            <img src="https://placehold.co/375x250" alt="">
                            <div class="attraction-text">
                                <h3>Wędkarstwo morskie - rejsy na dorsza</h3>
                                <p>Polecamy wędkarskie rejsy na Morzu Bałtyckim jachtem motorowym typ Rodman 1120 o długości 11,5 m i konstrukcji turystyczno-rekreacyjnej.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="attraction">
                            <img src="https://placehold.co/375x250" alt="">
                            <div class="attraction-text">
                                <h3>Wędkarstwo morskie - rejsy na dorsza</h3>
                                <p>Polecamy wędkarskie rejsy na Morzu Bałtyckim jachtem motorowym typ Rodman 1120 o długości 11,5 m i konstrukcji turystyczno-rekreacyjnej.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="attraction">
                            <img src="https://placehold.co/375x250" alt="">
                            <div class="attraction-text">
                                <h3>Wędkarstwo morskie - rejsy na dorsza</h3>
                                <p>Polecamy wędkarskie rejsy na Morzu Bałtyckim jachtem motorowym typ Rodman 1120 o długości 11,5 m i konstrukcji turystyczno-rekreacyjnej.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div id="homepage-map">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-7 p-0">
                    <img src="{{ asset('/images/mapa.png') }}" alt="Mapa lokalizacji" width="1178" height="738">
                </div>
                <div class="col-5 p-0">
                    <div class="map-text">
                        <div>
                            <h2>Nasza lokalizacja, <br>bliskość morza i spokoju.</h2>
                            <p>Nasze noclegi stwarzają możliwość spokojnego wypoczynku połączonego z aktywnościami na świeżym powietrzu. W pobliżu ośrodka Xanadu znajdą Państwo promenadę dla pieszych i rowerzystów, która łączy łączący Sianożęty z Ustroniem Morskim oraz Sianożęty z Kołobrzegiem.</p>
                            <a href="https://maps.app.goo.gl/jaWf75Q1rqin9oKv9" class="btn btn-theme btn-icon mt-5" target="_blank">WYZNACZ TRASĘ <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center"><span class="text-blue">Warto</span> wiedzieć!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="features-box">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="features-box">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="features-box">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="features-box">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="features-box">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="features-box">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="features-box border-0">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="features-box border-0">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="features-box border-0">
                    <i class="las la-concierge-bell"></i>
                    <h3>ZAMELDOWANIE</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam semper dignissim arcu, quis iaculis risus vulputate ac. Curabitur suscipit felis tellus.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/slick.min.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".attraction-carousel").slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                dots: false,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1930,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    }
                ]
            });
        });
    </script>
@endpush
