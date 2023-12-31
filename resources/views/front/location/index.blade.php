@extends('layouts.page', ['body_class' => 'location'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->file])
@stop

@section('content')
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center"><span class="text-blue">Xanadu Resort </span>  <br>Wyjątkowe miejsce w samym centrum Sianożęt.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12 col-xxl-8">
                    <p>Obiekt znajduję się w niewielkiej odległości od Morza Bałtyckiego (150m), jest nowoczesnym i luksusowym kompleksem wypoczynkowym. Ze względu na swoje zaciszne położenie i przepiękną panoramę nadmorską jest doskonałym miejscem głębokiego relaksu w sezonie letnim.</p>
                    <p>&nbsp;</p>
                    <p>Spragnionych spokojnego wypoczynku w komfortowych domkach, czy przytulnych pokojach gościmy pod adresem: <br><b>ul. Lotnicza 17, 78 -111 Sianożęty.</b></p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light rwd-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="distance">
                        <!-- upper distances -->
                        <i class="las la-map-marker"></i>

                        <div class="distance dist-top" style="left:11%">
                            <div class="dist-mark" style="height:240px">
                                <span>100 m</span>
                                <p>Basen <br>(ośrodek Bursztyn)</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:30%">
                            <div class="dist-mark" style="height:360px">
                                <span>150 m</span>
                                <p>Morze Bałtyckie</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:47%">
                            <div class="dist-mark" style="height:240px">
                                <span>150 m</span>
                                <p>Promenada <br>i ścieżki rowerowe</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:66%">
                            <div class="dist-mark" style="height:140px">
                                <span>3 km</span>
                                <p>Ustronie Morskie</p>
                            </div>
                        </div>

                        <div class="distance dist-top" style="left:84%">
                            <div class="dist-mark" style="height:360px">
                                <span>12 km</span>
                                <p>Kołobrzeg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid container-sm">
            <div class="row justify-content-center text-center mt-5">
                <div class="col-12 mb-4">
                    <h3>Dworzec PKP/PKS</h3>
                </div>
                <div class="col-4 col-sm-3 col-lg-2">
                    <div class="transport">
                        <i class="las la-bus"></i>
                        <span>3 km</span>
                        <p>Ustronie Morskie</p>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-lg-2">
                    <div class="transport">
                        <i class="las la-bus"></i>
                        <span>13 km</span>
                        <p>Kołobrzeg</p>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-lg-2">
                    <div class="transport">
                        <i class="las la-bus"></i>
                        <span>34 km</span>
                        <p>Koszalin</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="location-cta rwd-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8 text-center">
                    <h2 class="section-title">Nasza lokalizacja, <br>bliskość morza i spokoju.</h2>
                    <p>Nasze noclegi stwarzają możliwość spokojnego wypoczynku połączonego z aktywnościami na świeżym powietrzu. W pobliżu ośrodka Xanadu znajdą Państwo promenadę dla pieszych i rowerzystów, która łączy Sianożęty z Ustroniem Morskim oraz Sianożęty z Kołobrzegiem.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0 rwd-section">
        <div id="homepage-map">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-12 col-md-7 p-0">
                        <div class="position-relative">
                            <img src="{{ asset('/images/mapa.png') }}" alt="Mapa lokalizacji" width="1178" height="738">
                            <a href="https://maps.app.goo.gl/jaWf75Q1rqin9oKv9" target="_blank" class="btn btn-theme btn-icon">WSKAZÓWKI DOJAZDU<i class="las la-map-marker"></i></a>
                        </div>
                    </div>
                    <div class="col-5 p-0 d-none d-md-block">
                        <div class="map-text justify-content-center" style="background: url({{ asset('section/lokalizacja-domki.jpg') }}) no-repeat top center;background-size:  cover"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
@push('scripts')

@endpush