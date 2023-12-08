@extends('layouts.page', ['body_class' => 'reservation no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Rezerwacja', 'header_file' => 'pageheader.jpg'])
@stop

@section('content')
    <section class="pt-0 page-text">
        <div class="container">
            <div class="row">
                <div class="col-12 text-left">
                    <h2 class="section-title">Basen w ośrodku wczasowym w Sianożętach</h2>
                    <p><b>Za dodatkową opłatą</b> do dyspozycji naszych gości, <b>na terenie zaprzyjaźnionego ośrodka wczasowego oddalonego od Xanadu o zaledwie 100 metrów</b>, dostępny jest basen zewnętrzny z podgrzewaną wodą i atrakcjami dla dzieci i dorosłych. Znajdują się tu między innymi:</p>
                    <p>&nbsp;</p>
                    <ul class="mb-0">
                        <li>zjeżdżalnia dwutorowa o długości ośmiu metrów</li>
                        <li>wylewnica do masażu</li>
                        <li>przeciwprąd</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Na wielkość basenu 20 m x 10 m składa się basen rekreacyjny o głębokości 140 cm oraz brodzik o głębokości 50 cm. W obu częściach woda jest podgrzewana.</p>
                    <p>&nbsp;</p>
                    <p>Przy basenie znajduje się także jacuzzi wyposażone w 24 dysze do hydromasażu, również z podgrzewaną wodą. Spędzanie czasu w jacuzzi stanowi doskonałą formę relaksu.</p>
                </div>
            </div>
            <div class="row mt-5 pt-3">
                <div class="col-12 d-flex justify-content-center">
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-pool.png') }}" alt="" width="70" height="70">
                            <h3>Basen rekreacyjny</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-kidspool.png') }}" alt="" width="70" height="70">
                            <h3>Brodzik dla dzieci</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-jacuzzi.png') }}" alt="" width="70" height="70">
                            <h3>Jacuzzi</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-sauna.png') }}" alt="" width="70" height="70">
                            <h3>Sauna fińska</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img src="/images/basen.jpg" alt="" class="w-100">

    <section class="page-text">
        <div class="container">
            <div class="row">
                <div class="col-12 text-left">
                    <h2 class="section-title">Sauna</h2>
                    <p>Formą relaksu jest również korzystanie z sauny suchej (fińskiej). Pomieszczenie rozgrzane do temperatury około 95°C, o wilgotności 10%. Tak wysoką temperaturę utrzymuje piec z rozgrzanymi kamieniami. W suchej saunie można przebywać od 8 do 15 minut, po czym należy z niej wyjść, wziąć zimny prysznic, osuszyć się i wrócić do sauny. Po trzecim wyjściu z sauny powinno się natrzeć ciało olejkiem i wypić około litra wody lub soku.</p>
                    <p>&nbsp;</p>
                    <p>Sauna fińska:</p>
                    <ul>
                        <li>poprawia krążenie</li>
                        <li>przyśpiesza metabolizm płynów z organizmu</li>
                        <li>wzmacnia układ odpornościowy</li>
                        <li>oczyszcza organizm z toksyn</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><b>Kompleks basenowy i strefa wellness czynne są od 23 maja do 4 września.</b></p>
                </div>
            </div>
        </div>
    </section>
    <img src="/images/sauna.jpg" alt="" class="w-100">
@endsection
@push('scripts')

@endpush