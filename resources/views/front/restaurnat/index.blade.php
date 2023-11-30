@extends('layouts.page', ['body_class' => 'homepage no-bottom'])

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
                    <h2 class="section-title text-center"><span class="text-blue">Pełne wyżywienie </span> w naszej restauracji.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p><b>Restauracja Xanadu Resort</b> zlokalizowana jest na poziomie "0" serwuje śniadania, obiady, włoską pizze oraz desery. Szeroki asortyment codziennie świeżych i nowych dań sprawi, że zaspokoimy zmysły nawet najbardziej wymagających Gości. Posiłki serwowane są w formie bufetu. Rezerwując pobyt, zapytaj o opcje z wyżywieniem. Oferujemy korzystne <b>pakiety ze śniadaniem i obiadokolacją</b>!</p>
                </div>
            </div>

            <div class="row mt-5 pt-3">
                <div class="col-12 d-flex justify-content-center">

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                            <h3>150 miejsc <br>w restauracji</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-maindish.png') }}" alt="" width="70" height="70">
                            <h3>Serwujemy <br>śniadania i obiady</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-fish.png') }}" alt="" width="70" height="70">
                            <h3>Różnorodność <br>posiłków</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-deser.png') }}" alt="" width="70" height="70">
                            <h3>Pyszne desery <br>dla smakoszy</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-pizza.png') }}" alt="" width="70" height="70">
                            <h3>Włoskia pizzy <br>na cienkim cieście</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <div class="sliderWrapper m-0">
                        <ul class="rslides">
                            <li><img src="{{ asset('section/restauracja-sniadania.jpg') }}" alt="" width="1120" height="780"></li>
                            <li><img src="{{ asset('section/restauracja_2.jpg') }}" alt="" width="1120" height="780"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                    <div class="section-box text-left">
                        <h2 class="section-title"><span class="text-blue">Filozofia</span> smaku!</h2>
                        <p class="text-justify">Bliskość morza powoduje, że w menu pojawiają się oprócz wielu doskonałych potraw bałtyckie ryby, a także dania o niespotykanym nigdzie dotąd smaku. Świeżość, niezwykły smak, potrawy regionalne i z lokalnych produktów coraz częściej poszukiwane przez miłośników dobrego, zdrowego odżywiania na co dzień goszczą w naszym obiekcie.</p>
                        <p>&nbsp;</p>
                        <p>Restauracja jest również dostępna dla gości zewnątrz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-7">
                    <div class="sliderWrapper m-0">
                        <ul class="rslides">
                            <li><img src="{{ asset('section/glowne-danie.jpg') }}" alt="" width="1120" height="780"></li>
                            <li><img src="{{ asset('section/restauracja-pizza.jpg') }}" alt="" width="1120" height="780"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                    <div class="section-box text-left">
                        <h2 class="section-title"><span class="text-blue">Doskonała </span> obsługa!</h2>
                        <p class="text-justify">Dopełnieniem wypoczynku w obiekcie Xanadu Resort jest wyjątkowa kuchnia i potrawy przygotowane z niezwykłą starannością przez naszych kucharzy. Oferujemy menu oparte na tradycji kuchni polskiej, włoskiej, a także regionalnej. Jego bogactwo z pewnością zaspokoi gust każdego Gościa, a unikalna atmosfera i klimat panujący w naszej restauracji sprawi, że każdy posiłek stanie się dla Państwa wyjątkowy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center"><span class="text-blue">Śniadania</span> w Xanadu.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p>Śniadanie traktujemy szczególnie, ponieważ jest ono nie tylko pierwszym, lecz jednocześnie najważniejszym posiłkiem dnia.</p>
                    <a href="{{ route('breakfast') }}" class="btn btn-theme btn-icon mt-5">ZOBACZ OFERTĘ <i class="las la-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

@endpush