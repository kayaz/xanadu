@extends('layouts.page', ['body_class' => 'pricelist no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Cennik', 'header_file' => 'pageheader.jpg'])
@stop

@section('content')
    <section class="p-0">
        <div class="container page-text">
            <div class="row">
                <div class="col-12 text-left">
                    <h2 class="section-title">Cennik ośrodka wczasowego Xanadu</h2>
                    <p>Chcą Państwo zarezerwować u nas pobyt? Interesują Państwa najbardziej komfortowe i pełne pozytywnych wrażeń noclegi w Sianożętach nad polskim morzem? Zapraszamy do zapoznania się z cennikiem oraz do dobrania najbardziej korzystnej dla siebie opcji wczasowej. Urlop w naszym ośrodku polecamy zarówno parom, rodzinom z dziećmi oraz grupom znajomych, jak i turystom podróżującym samotnie. Oferujemy atrakcyjne ceny za wysoką jakość usług. Dostępne jest wyżywienie (śniadania i obiadokolacje zarówno dla gości z pokoi, jak i z domów). Zachęcamy do sprawdzenia terminów i cen na najbliższy sezon wypoczynkowy.</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <h2 class="section-title section-title-border mb-4">Terminy i ceny na rok 2023</h2>
                    <p><b>Poniższe ceny obejmują tylko kwotę zakwaterowania. Oferujemy korzystne pakiety ze śniadaniem i obiadokolacją. Rezerwując pobyt zapytaj o opcję z wyżywieniem!</b></p>

                    <img src="/section/pokoje-nad-morzem.jpg" alt="Pokoje nad morzem" class="mt-5 d-block d-lg-none" />

                    <div class="majowka mt-0 mt-lg-5 mb-3 mb-lg-0">
                        <img src="{{ asset('/images/grill.png') }}" width="42" height="42" alt="Ikonka grilla"> {{ $pricelist->rooms_may }} <img src="{{ asset('/images/grill.png') }}" width="42" height="42" alt="Ikonka grilla">
                    </div>
                    <table class="cennik d-none d-lg-table" border="0">
                        <thead>
                        <tr>
                            <td>Pok&oacute;j do 3 os&oacute;b *</td>
                            <td>od</td>
                            <td>do</td>
                            <td>cena</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tablethumb" rowspan="12">
                                <div class="sliderWrapper">
                                    <ul class="list-unstyled mb-0 rslides">
                                        <li><img src="/section/pokoje-nad-morzem.jpg" alt="Pokoje 2 i 3 osobowe nad morzem" /></li>
                                    </ul>
                                </div>
                                <a href="{{ route('reservation') }}?form_room_type=1" class="btn btn-theme btn-icon mb-3">REZERWACJA <i class="las la-concierge-bell"></i></a>
                            </td>
                            {!! tableFirstDatesAndPrices($pricelist->rooms_prices) !!}
                        </tr>

                        {!! tableDatesAndPrices($pricelist->rooms_prices, 1) !!}

                        </tbody>
                    </table>
                    <ul class="list-unstyled mb-0 cenniklist d-block d-lg-none">
                        <li>
                            <h2 class="section-title">Pok&oacute;j do 3 os&oacute;b *</h2>
                        </li>
                        {!! formatDatesAndPrices($pricelist->rooms_prices) !!}
                        <li>
                            <a href="{{ route('reservation') }}?form_room_type=1" class="btn btn-theme btn-icon w-100">REZERWACJA <i class="las la-concierge-bell"></i></a>
                        </li>
                    </ul>

                    <img src="/section/domki-nad-morzem.jpg" alt="Dom 6 osobowy" class="mt-5 d-block d-lg-none" />

                    <div class="majowka mt-0 mt-lg-5 mb-3 mb-lg-0">
                        <img src="{{ asset('/images/grill.png') }}" width="42" height="42" alt="Ikonka grilla"> {{ $pricelist->houses_may }} <img src="{{ asset('/images/grill.png') }}" width="42" height="42" alt="Ikonka grilla">
                    </div>

                    <table class="cennik d-none d-lg-table" border="0">
                        <thead>
                        <tr>
                            <td>Dom 6 osobowy</td>
                            <td>od</td>
                            <td>do</td>
                            <td>cena</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tablethumb" rowspan="12">
                                <div class="sliderWrapper">
                                    <ul class="list-unstyled mb-0 rslides">
                                        <li><img src="/section/domki-nad-morzem.jpg" alt="Dom 6 osobowy" /></li>
                                    </ul>
                                </div>
                                <a href="{{ route('reservation') }}?form_room_type=2" class="btn btn-theme btn-icon mb-3">REZERWACJA <i class="las la-concierge-bell"></i></a>
                            </td>
                            {!! tableFirstDatesAndPrices($pricelist->houses_prices) !!}
                        </tr>

                        {!! tableDatesAndPrices($pricelist->houses_prices, 1) !!}

                        </tbody>
                    </table>
                    <ul class="list-unstyled mb-0 cenniklist d-block d-lg-none">
                        <li>
                            <h2 class="section-title">Dom 6 osobowy</h2>
                        </li>
                        {!! formatDatesAndPrices($pricelist->houses_prices) !!}
                        <li>
                            <a href="{{ route('reservation') }}?form_room_type=2" class="btn btn-theme btn-icon w-100">REZERWACJA <i class="las la-concierge-bell"></i></a>
                        </li>
                    </ul>
                    <div class="text-center">
                        <p>&nbsp;</p>
                        <p>Przelew krajowy:</p>
                        <p>F.H.U &quot;Fiszerija&quot; s.c,</p>
                        <p>Ul. Bolesława Chrobrego 4A,</p>
                        <p>78-111 Ustronie Morskie</p>
                        <p>Bank Spółdzielczy Gryfice</p>
                        <p>Nr konta: 27 9376 0001 2006 00162463 0002</p>
                        <p><b>W tytule przelewu proszę podać: Imię i nazwisko</b></p>
                        <div class="hr mt-5 mb-5"><img src="https://xanaduhotel.test/images/svg/section-title-icon.svg" alt=""></div>
                    </div>
                    <p style="text-align: center;"><strong>UWAGA!!!</strong><br /><strong>Jeżeli prowadzisz działalność gospodarczą i chcesz otrzymać fakturę za dokonane zakupy <br>lub świadczone usługi, <span style="text-decoration: underline;">poinformuj o tym przed dokonaniem transakcji</span> i podaj numer NIP. <br></strong><strong>Od 1 stycznia 2020 roku nie wystawiamy faktur do paragonu bez numeru NIP <br>dla firm i os&oacute;b prowadzących działalność gospodarczą.</strong></p>
                    <p>&nbsp;</p>
                    <section>
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-12">
                                    <section class="p-0 text-center">
                                        <h2 class="section-title"><span class="text-blue">Opłaty</span> dodatkowe</h2>
                                    </section>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="features-box">
                                        <i class="las la-broom"></i>
                                        <h3>SPRZĄTANIE NA ŻYCZENIE</h3>
                                        <p>Pokój - 60 zł / domy 100 zł</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="features-box">
                                        <i class="las la-copy"></i>
                                        <h3>KOMPLET RĘCZNIKÓW</h3>
                                        <p>Wypożyczenie (duży i mały) - 10 zł</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="features-box">
                                        <i class="las la-parking"></i>
                                        <h3>PARKING</h3>
                                        <p>10 zł / doba za każdy samochód</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="features-box">
                                        <i class="las la-dog"></i>
                                        <h3>ZWIERZĘTA</h3>
                                        <p>30 zł / doba</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="features-box">
                                        <i class="las la-plug"></i>
                                        <h3>OPŁATA ZA PRĄD</h3>
                                        <p>Obowiązuje tylko w domach 1,00 zł / 1 kWh</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="features-box">
                                        <i class="las la-couch"></i>
                                        <h3>ŁÓŻECZKO DLA DZIECKA</h3>
                                        <p>Wypożyczenie - 10 zł / doba</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="features-box">
                                        <i class="las la-leaf"></i>
                                        <h3>OPŁATA KLIMATYCZNA</h3>
                                        <p>2 zł / doba osoba dorosła. Dzieci od 0 do 3 roku życia zwolnione z opłat. Brak ulgi dla seniorów, rencistów i dzieci powyżej 3 roku życia</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="features-box">
                                        <i class="las la-user-plus"></i>
                                        <h3>DODATKOWA OSOBA</h3>
                                        <p>Przy zakwaterowaniu powyżej 6 osób w domach, każda kolejna osoba 50 zł / doba, dziecko do 3 lat gratis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="pt-0">
                        <div class="container p-0">
                            <div class="row justify-content-center text-center">
                                <div class="col-12 col-xxl-8">
                                    <p class="text-danger"><sup>*</sup> Uwaga! <b>Akceptujemy psy do 20 kg</b>. Podczas rezerwacji pobytu poinformuj nas o przyjeździe ze zwierzakiem. Prosimy również o zapoznanie się z regulaminem dostępnym poniżej.</p>
                                    <a href="{{ asset('/uploads/files/regulamin-zwierzeta.pdf') }}" class="btn btn-theme btn-icon mt-5" target="_blank">POBIERZ REGULAMIN POBYTU ZWIERZĄT <i class="las la-download"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <p>&nbsp;</p>
                    <h2 class="section-title section-title-border mb-4">Regulamin rezerwacji</h2>
                    <ul>
                        <li>Rezerwacji można dokonać telefonicznie lub mailem przez formularz wstępnej rezerwacji.</li>
                        <li>Dokonując rezerwacji Klient wyraża zgodę na przetwarzanie jego danych osobowych tylko i wyłącznie w celach marketingowych przez Ośrodek wypoczynkowy Xanadu zgodnie z ustawą z dnia 29.08.1997 r. o ochronie danych osobowych (Dz. U. Nr 101 z 2002 r. poz. 926 z p&oacute;źniejszymi zmianami).</li>
                        <li>Rezerwację dokonuje się na osobę, kt&oacute;ra będzie dokonywała opłatę rezerwacyjną (przedpłatę) lub osobę wskazaną przez zamawiającego.</li>
                        <li>Rezerwację uważa się za potwierdzoną po wpłaceniu uzgodnionej opłaty rezerwacyjnej (przedpłaty) za pobyt na konto Ośrodka wypoczynkowego Xanadu. Jednocześnie wpłata opłaty rezerwacyjnej (przedpłaty) potwierdza dokonanie rezerwacji i akceptację warunk&oacute;w rezerwacji określonych w niniejszym regulaminie.</li>
                        <li>Płatności należy dokonać w ciągu 7 dni od daty rezerwacji lub w terminie uzgodnionym.</li>
                        <li>Nie wpłacenie opłaty rezerwacyjnej (przedpłaty) w uzgodnionym terminie powoduje automatyczną anulację rezerwacji.</li>
                        <li>Po otrzymaniu opłaty rezerwacyjnej (przedpłaty) od Państwa, wyślemy pisemne potwierdzenie z wyliczoną kalkulacją pobytu.</li>
                        <li>Faktury VAT wystawiamy na życzenie &ndash; prosimy o powiadomienie nas przy składaniu rezerwacji.</li>
                        <li>W przypadku rezygnacji z pobytu, kiedy została już wpłacona opłata rezerwacyjna (przedpłata), należy powiadomić nas najp&oacute;źniej na 30 dni przed terminem rozpoczęcia pobytu, w&oacute;wczas opłata rezerwacyjna (przedpłata) zostanie zwr&oacute;cona po odjęciu koszt&oacute;w manipulacyjnych w kwocie 100 zł.</li>
                        <li>Jeżeli rezerwacja jest dokonana w terminie kr&oacute;tszym niż 30 dni przed planowanym przyjazdem, to wpłacona zaliczka (przedpłata) nie podlega zwrotowi przy rezygnacji.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="ask-form" class="mb-0 rwd-section">
        @include('front.partials.askform')
    </section>
@endsection