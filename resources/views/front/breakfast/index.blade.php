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
                    <h2 class="section-title text-center"><span class="text-blue">Przywitaj dzień przepysznym śniadaniem</span> <br>w formie bogatego bufetu szwedzkiego</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p>Śniadanie traktujemy szczególnie, ponieważ jest ono nie tylko pierwszym, <br>lecz jednocześnie najważniejszym posiłkiem dnia.</p>
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
                            <img src="{{ asset('/images/icons/icon-swieze-produkty.png') }}" alt="" width="70" height="70">
                            <h3>Świeże <br>produkty</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-kameralny.png') }}" alt="" width="70" height="70">
                            <h3>Kameralny <br>klimat</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-deser.png') }}" alt="" width="70" height="70">
                            <h3>Połączenie tradycji <br>z nowoczesnością</h3>
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
                            <li><img src="{{ asset('section/restauracja-sniadanie.jpg') }}" alt="" width="1120" height="780"></li>
                            <li><img src="{{ asset('section/restauracja-sniadania.jpg') }}" alt="" width="1120" height="780"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                    <div class="section-box text-left">
                        <h2 class="section-title"><span class="text-blue">Tradycyjne</span> śniadania!</h2>
                        <p class="text-justify">Zapraszamy na noclegi ze śniadaniem do Xanadu Resort w Sianożętach. Codziennie dla naszych gości przygotowujemy bogaty bufet śniadaniowy. Znaleźć w nim można pożywne dania na ciepło, pyszne sałatki, świeże owoce oraz różnorodne dodatki, w tym chrupiące pieczywo, lokalne sery, wyborne wędliny oraz słodkie wypieki.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-7">
                    <img src="{{ asset('section/sniadanie-na-stole.jpg') }}" alt="" class="w-100" width="745" height="520">
                </div>
                <div class="col-5 d-flex align-items-center">
                    <div class="section-box text-left">
                        <h2 class="section-title"><span class="text-blue">Śniadanie</span> <br>w Xanadu Resort</h2>
                        <p class="text-justify">Rezerwując pobyt zapytaj o opcje z wyżywieniem. Oferujemy korzystne pakiety ze śniadaniem i obiadokolacją!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center"><span class="text-blue">Restauracja </span> Xanadu Resort.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p>Szeroki asortyment codziennie świeżych i nowych dań sprawi, że zaspokoimy zmysły nawet najbardziej wymagających Gości. Posiłki serwowane są w formie bufetu.</p>
                    <a href="{{ route('restaurant') }}" class="btn btn-theme btn-icon mt-5">ZOBACZ OFERTĘ <i class="las la-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

@endpush