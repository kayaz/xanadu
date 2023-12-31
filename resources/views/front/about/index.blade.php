@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'O nas', 'header_file' => 'pageheader.jpg'])
@stop

@section('content')
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center"><span class="text-blue">Morska magia</span> każdego dnia.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12 col-xxl-8">
                    <p>Ośrodek wczasowy Xanadu w Sianożętach (12 km od centrum Kołobrzegu) to nowoczesny i luksusowy kompleks wypoczynkowy zlokalizowany nad Morzem Bałtyckim, który został oddany do użytku w kwietniu 2016 roku. Ze względu na swoje położenie i przepiękną panoramę nadmorską jest doskonałym miejscem wypoczynku w sezonie letnim.</p>
                </div>
            </div>

            <div class="row mt-3 mt-lg-5 pt-3">
                <div class="col-12 d-flex justify-content-center icon-box-row">
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
                            <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                            <h3>150 miejsc <br>w restauracji</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-parking.png') }}" alt="" width="70" height="70">
                            <h3>60 miejsc <br>parkingowych</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-playground.png') }}" alt="" width="70" height="70">
                            <h3>Plac zabaw <br>dla dzieci</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-wifi.png') }}" alt="" width="70" height="70">
                            <h3>Wi-Fi na terenie <br>całego ośrodka</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="offer text-center">
                        <a href="{{ route('houses') }}"><img src="{{ asset('section/domki-nad-morzem.jpg') }}" alt="Domki nad morzem 6-osobowe" width="750" height="520"></a>
                        <h2 class="m-0 mt-4"><a href="{{ route('houses') }}"><span class="text-blue">Domki nad morzem</span> <br>6-osobowe</a></h2>
                        <a href="{{ route('houses') }}" class="btn btn-theme btn-icon mt-4">PEŁNA OFERTA <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-5 mt-md-0">
                    <div class="offer text-center">
                        <a href="{{ route('rooms') }}"><img src="{{ asset('section/pokoje-nad-morzem.jpg') }}" alt="Pokoje nad morzem 2 i 3 - osobowe" width="750" height="520"></a>
                        <h2 class="m-0 mt-4"><a href="{{ route('rooms') }}"><span class="text-blue">Pokoje nad morzem</span> <br>2 i 3 - osobowe</a></h2>
                        <a href="{{ route('rooms') }}" class="btn btn-theme btn-icon mt-4">PEŁNA OFERTA <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ask-form" class="rwd-section">
        @include('front.partials.askform')
    </section>

    <div class="section-rwd">
        <section>
            <div class="container container-lg-fluid p-0">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-12 col-lg-7">
                        <img src="{{ asset('/section/restauracja.jpg') }}" alt="" class="w-100" width="1120" height="780">
                    </div>
                    <div class="col-12 col-lg-5 d-flex align-items-center">
                        <div class="section-box text-left">
                            <h2 class="section-title"><span class="text-blue">Pełne wyżywienie</span> w naszej restauracji.</h2>
                            <div class="text-left">
                                <p>W naszej restauracji dla gości dostępne są śniadania oraz obiady. Obiady serwujemy w formie ciepłego bufetu (8 dań, do wyboru). Mamy też coś specjalnego dla smakoszy deserów i włoskiej pizzy na cienkim cieście.</p>
                                <a href="{{ route('restaurant') }}" class="btn btn-theme btn-icon mt-4 mt-xxl-5">ZOBACZ WIĘCEJ <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container container-lg-fluid p-0 mt-3 mt-lg-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-7">
                        <img src="{{ asset('/section/plac-zabaw.jpg') }}" alt="" class="w-100" width="1120" height="780">
                    </div>
                    <div class="col-12 col-lg-5 d-flex align-items-center">
                        <div class="section-box text-left">
                            <h2 class="section-title"><span class="text-blue">Nasz plac zabaw czeka</span> <br>na małych odkrywców!</h2>
                            <div class="text-left">
                                <p>Nasz ośrodek wypoczynkowy to wyjątkowe miejsce, które stworzyliśmy z myślą o dzieciach i ich rodzicach. Tutaj każdy znajdzie coś dla siebie, a nuda nie ma u nas szans! Plac zabaw to miejsce, w którym dzieci mogą w pełni wyrazić swoją kreatywność i energię. Huśtawki, zjeżdżalnie, karuzele – u nas dzieci zawsze znajdą coś ciekawego do zrobienia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container container-lg-fluid p-0 mt-3 mt-lg-0">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-12 col-lg-7">
                        <img src="{{ asset('/section/basen.jpg') }}" alt="" class="w-100" width="1120" height="780">
                    </div>
                    <div class="col-12 col-lg-5 d-flex align-items-center">
                        <div class="section-box text-left">
                            <h2 class="section-title"><span class="text-blue">Basen w ośrodku</span> <br>wczasowym w Sianożętach.</h2>
                            <div class="text-left">
                                <p>Za dodatkową opłatą do dyspozycji naszych gości, na terenie zaprzyjaźnionego ośrodka wczasowego oddalonego od Xanadu o zaledwie 100 metrów, dostępny jest basen zewnętrzny z podgrzewaną wodą i atrakcjami dla dzieci i dorosłych. Znajdują się tu między innymi: zjeżdżalnia dwutorowa o długości ośmiu metrów, wylewnica do masażu, przeciwprąd. Na wielkość basenu 20 m x 10 m składa się basen rekreacyjny o głębokości 140 cm oraz brodzik o głębokości 50 cm. W obu częściach woda jest podgrzewana.
                                <p>&nbsp;</p>
                                <p>Basen czynny jest od 23 maja do 4 września.</p>
                                <a href="{{ route('pool') }}" class="btn btn-theme btn-icon mt-4 mt-xxl-5">ZOBACZ WIĘCEJ <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('front.partials.good-to-know')

    <section class="p-0">
        <div class="container">
            <div class="col-12">
                <div class="spacer-container">
                    <iframe src="/spacer/" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection