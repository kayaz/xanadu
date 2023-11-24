@extends('layouts.page', ['body_class' => 'pricelist'])

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
                    <p>Poniższe ceny obejmują tylko kwotę zakwaterowania. Oferujemy korzystne pakiety ze śniadaniem i obiadokolacją. Rezerwując pobyt zapytaj o opcję z wyżywieniem!</p>
                    <table class="cennik mt-5" border="0">
                        <thead>
                        <tr>
                            <td class="majowka" colspan="4">Maj&oacute;wka 270 zł/doba, przy pobycie powyżej 5 d&oacute;b cena wynosi 230 zł</td>
                        </tr>
                        <tr>
                            <td>Pok&oacute;j do 3 os&oacute;b *</td>
                            <td>od</td>
                            <td>do</td>
                            <td>cena</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="tablethumb" rowspan="11">
                                <div class="sliderWrapper">
                                    <ul class="list-unstyled mb-0 rslides">
                                        <li><img src="https://placehold.co/600x400" alt="Dom 6 osobowy" /></li>
                                    </ul>
                                </div>
                            </td>
                            <td>28.04.2023</td>
                            <td>06.05.2023</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>06.05.2023</td>
                            <td>27.05.2023</td>
                            <td>180</td>
                        </tr>
                        <tr>
                            <td>27.05.2023</td>
                            <td>03.06.2023</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>03.06.2023</td>
                            <td>17.06.2023</td>
                            <td>220</td>
                        </tr>
                        <tr>
                            <td>17.06.2023</td>
                            <td>24.06.2023</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td>24.06.2023</td>
                            <td>01.07.2023</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>01.07.2023</td>
                            <td>08.07.2023</td>
                            <td>290</td>
                        </tr>
                        <tr>
                            <td>08.07.2023</td>
                            <td>12.08.2023</td>
                            <td>320</td>
                        </tr>
                        <tr>
                            <td>12.08.2023</td>
                            <td>26.08.2023</td>
                            <td>270</td>
                        </tr>
                        <tr>
                            <td>26.08.2023</td>
                            <td>02.09.2023</td>
                            <td>220</td>
                        </tr>
                        <tr>
                            <td>02.09.2023</td>
                            <td>30.09.2023</td>
                            <td>180</td>
                        </tr>
                        </tbody>
                    </table>
                    <ul class="list-unstyled mb-0 cenniklist d-none">
                        <li>
                            <div class="sliderWrapper">
                                <ul class="list-unstyled mb-0 rslides">
                                    <li><img src="https://placehold.co/600x400" alt="Dom 6 osobowy" /></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <h2 class="section-title">Pok&oacute;j do 3 os&oacute;b *</h2>
                        </li>
                        <li class="limaj">Maj&oacute;wka 270 zł/doba, przy pobycie powyżej 5 d&oacute;b cena wynosi 230 zł</li>
                        <li>28.04.2023 - 06.05.2023: <strong>270 zł</strong></li>
                        <li>06.05.2023 - 27.05.2023: <strong>180 zł</strong></li>
                        <li>27.05.2023 - 03.06.2023: <strong>200 zł</strong></li>
                        <li>03.06.2023 - 17-06.2023: <strong>220 zł</strong></li>
                        <li>17.06.2023 - 24.06.2023: <strong>250 zł</strong></li>
                        <li>24.06.2023 - 01.07.2023: <strong>270 zł</strong></li>
                        <li>01.07.2023 - 08.07.2023: <strong>290 zł</strong></li>
                        <li>08.07.2023 - 12.08.2023: <strong>320 zł</strong></li>
                        <li>12.08.2023 - 26.08.2023: <strong>270 zł</strong></li>
                        <li>26.08.2023 - 02.09.2023: <strong>220 zł</strong></li>
                        <li>02.09.2023 - 30.09.2023: <strong>180 zł</strong></li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <table class="cennik" border="0">
                        <thead>
                        <tr>
                            <td class="majowka" colspan="4">Maj&oacute;wka 390 zł/doba, przy pobycie powyżej 5 d&oacute;b cena wynosi 350 zł</td>
                        </tr>
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
                                        <li><img src="https://placehold.co/600x400" alt="Dom 6 osobowy" /></li>
                                    </ul>
                                </div>
                            </td>
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
                    <p>&nbsp;</p>
                    <ul class="list-unstyled mb-0 cenniklist d-none">
                        <li>
                            <div class="sliderWrapper">
                                <ul class="list-unstyled mb-0 rslides">
                                    <li><img src="https://placehold.co/600x400" alt="Dom 6 osobowy" /></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <h2 class="section-title">Dom 6 osobowy</h2>
                        </li>
                        <li class="limaj">Maj&oacute;wka 390 zł/doba, przy pobycie powyżej 5 d&oacute;b cena wynosi 350 zł</li>
                        <li>28.04.2023 - 06.05.2023: <strong>390 zł</strong></li>
                        <li>06.05.2023 - 27.05.2023: <strong>260 zł</strong></li>
                        <li>27.05.2023 - 03.06.2023: <strong>310 zł</strong></li>
                        <li>03.06.2023 - 17-06.2023: <strong>350 zł</strong></li>
                        <li>17.06.2023 - 24.06.2023: <strong>380 zł</strong></li>
                        <li>24.06.2023 - 01.07.2023: <strong>470 zł</strong></li>
                        <li>01.07.2023 - 08.07.2023: <strong>570 zł</strong></li>
                        <li>08.07.2023 - 12.08.2023: <strong>620 zł</strong></li>
                        <li>12.08.2023 - 19.08.2023: <strong>570 zł</strong></li>
                        <li>19.08.2023 - 26.08.2023: <strong>510 zł</strong></li>
                        <li>26.08.2023 - 02.09.2023: <strong>350 zł</strong></li>
                        <li>02.09.2023 - 30.09.2023: <strong>260 zł</strong></li>
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
                    <p style="text-align: center;"><strong>UWAGA!!!</strong><br /><strong>Jeżeli prowadzisz działalność gospodarczą i chcesz otrzymać fakturę za dokonane zakupy lub świadczone usługi, <span style="text-decoration: underline;">poinformuj o tym przed dokonaniem transakcji</span> i podaj numer NIP. </strong><strong>Od 1 stycznia 2020 roku nie wystawiamy faktur do paragonu bez numeru NIP dla firm i os&oacute;b prowadzących działalność gospodarczą.</strong></p>
                    <p>&nbsp;</p>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <section class="p-0 text-center">
                                        <h2 class="section-title"><span class="text-blue">Opłaty</span> dodatkowe</h2>
                                    </section>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <div class="features-box">
                                        <i class="las la-broom"></i>
                                        <h3>SPRZĄTANIE NA ŻYCZENIE</h3>
                                        <p>Pokój - 60 zł / domy 100 zł</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="features-box">
                                        <i class="las la-copy"></i>
                                        <h3>KOMPLET RĘCZNIKÓW</h3>
                                        <p>Wypożyczenie (duży i mały) - 10 zł</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="features-box">
                                        <i class="las la-parking"></i>
                                        <h3>PARKING</h3>
                                        <p>10 zł / doba za każdy samochód</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="features-box">
                                        <i class="las la-dog"></i>
                                        <h3>ZWIERZĘTA</h3>
                                        <p>30 zł / doba</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="features-box">
                                        <i class="las la-plug"></i>
                                        <h3>OPŁATA ZA PRĄD</h3>
                                        <p>Obowiązuje tylko w domach 1,00 zł / 1 kWh</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="features-box">
                                        <i class="las la-couch"></i>
                                        <h3>ŁÓŻECZKO DLA DZIECKA</h3>
                                        <p>Wypożyczenie - 10 zł / doba</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="features-box">
                                        <i class="las la-leaf"></i>
                                        <h3>OPŁATA KLIMATYCZNA</h3>
                                        <p>2 zł / doba osoba dorosła. Dzieci od 0 do 3 roku życia zwolnione z opłat. Brak ulgi dla seniorów, rencistów i dzieci powyżej 3 roku życia</p>
                                    </div>
                                </div>
                                <div class="col-4">
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
                        <div class="container">
                            <div class="row justify-content-center text-center">
                                <div class="col-8">
                                    <p class="text-danger"><sup>*</sup> Uwaga! <b>Akceptujemy psy do 20 kg</b>. Podczas rezerwacji pobytu poinformuj nas o przyjeździe ze zwierzakiem. Prosimy również o zapoznanie się z regulaminem dostępnym poniżej.</p>
                                    <a href="" class="btn btn-theme btn-icon mt-5">POBIERZ REGULAMIN XANADU RESORT <i class="las la-download"></i></a>
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
@endsection
@push('scripts')

@endpush