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
                    <p>W naszej restauracji dla gości dostępne są śniadania oraz obiady. Obiady serwujemy w formie ciepłego bufetu (8 dań, do wyboru). Mamy też coś specjalnego dla smakoszy deserów i włoskiej pizzy na cienkim cieście.</p>
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
                            <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                            <h3>Serwujemy <br>śniadania i obiady</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                            <h3>8 dań <br>do wyboru na obiad</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                            <h3>Pyszne desery <br>dla smakoszy</h3>
                        </div>
                    </div>

                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                            <h3>Włoskia pizzy <br>na cienkim cieście</h3>
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
                        <h2 class="section-title"><span class="text-blue">Filozofia</span> smaku!</h2>
                        <p>Filozofia przygotowywanych posiłków jest prosta - świeżo, smacznie z pomysłem. Połączyliśmy tradycję z nowoczesnością, a wykończyliśmy wszystko staranną kombinacją składników, dzięki którym zaspokoimy nie tylko Państwa apetyt.</p>
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
                        <h2 class="section-title"><span class="text-blue">Specjalne</span> menu.</h2>
                        <p>Menu naszej restauracji oferuje specjalne dania, dzięki którym Państwa organizm wyciszy się na koniec dnia, a rano zostanie odpowiednio pobudzony. W ten sposób dajemy Państwu możliwość zbudowania znacznie szerszego doświadczenia, niż tylko wygodne miejsce do spania w naszych pokojach.</p>
                        <a href="" class="btn btn-theme btn-icon mt-5">NASZE MENU <i class="las la-arrow-right"></i></a>
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
                </div>
            </div>
        </div>
    </section>

    <section id="ask-form" class="mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Wyślij zapytanie o dostępność</h2>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')

@endpush