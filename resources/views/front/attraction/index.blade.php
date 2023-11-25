@extends('layouts.page', ['body_class' => 'homepage no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => 'pageheader.jpg'])
@stop

@section('content')
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center"><span class="text-blue">Atrakcje turystyczne</span> <br>rozrywka na każdą pogodę</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p>Zwiedzaj, poznawaj, odkrywaj...</p>
                    <p>Xanadu Resort to doskonała baza wypadowa do pobliskich atrakcji regionu.</p>
                    <p>Sprawdź, co warto zobaczyć będąc w okolicy:</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row flex-row-reverse pt-5">
                <div class="col-5"><img src="/uploads/hortulus.jpg" alt="Ogrody Hortulus" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="pe-5">
                        <h3>OGRODY HORTULUS W DOBRZYCY</h3>
                        <p>Ogrody Hortulus w Dobrzycy to kompleks ogrodów pokazowych tworzonych już od ponad 25 lat z miłości do natury i z potrzeby dzielenia się tym, co piękne z innymi. Ogrody Hortulus to unikatowe miejsce wypoczynku, rozrywki oraz edukacji przyrodniczej.</p>
                        <p>Ogrody Hortulus położone są w powiecie koszalińskim w wyjątkowej strefie klimatycznej 7b. Ogrody oddalone są tylko o 8 kilometrów w linii prostej od brzegu Morza Bałtyckiego. Jest to najbardziej na północ wysunięta kolekcja dendrologiczna w Polsce.</p>
                        <p>Kompleks składa się z dwóch zespołów ogrodowych o odmiennym charakterze - Ogrodów Tematycznych Hortulus oraz Ogrodów Hortulus Spectabilis. Zespoły ogrodowe, oddalone są od siebie o 2 km, a między nimi znajduje się teren Szkółki Roślin Ozdobnych Hortulus.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-5"><img src="/uploads/latarnia_w_kolobrzegu.jpg" alt="Latarnia w Kołobrzegu" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="pe-5">
                        <h3>LATARNIA MORSKA W KOŁOBRZEGU</h3>
                        <p>Miejscem, które powinien zwiedzić każdy turysta spędzający czas w naszej okolicy, jest 26-metrowa latarnia morska w Kołobrzegu, a jej zasięg dochodzi do 16 Mm. Źródłem światła jest obrotowy aparat optyczny o dziesięciu ścianach świetlnych, a w każdej ścianie umieszczone są dwie żarówki, każda o mocy 200 W. Światło latarni wznosi się na wysokości 36,5 m. Latarnia wybudowana z czerwonej cegły, na planie dawnego fortu, pełni rolę nie tylko obiektu nawigacyjnego, ale także symbolu tego miejsca. Obiekt jest otwarty dla turystów, którzy po wspinaczce po metalowych schodach mogą podziwiać przepiękną panoramę miasta oraz zarys linii brzegowej Bałtyku. W pobliżu znajduje się również zabytkowa armata oraz tablica upamiętniająca rybaków, którzy stracili życie na morzu.</p>
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse mt-5 pt-5">
                <div class="col-5"><img src="/uploads/przystan_rybacka_w_ustroniu_morskim.jpg" alt="Przystań Rybacka w Ustroniu Morskim" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="ps-5">
                        <h3>LOTY WIDOKOWE W BAGICZU</h3>
                        <p>W ośrodku szkolenia lotniczego organizowane są nie tylko kursy na licencję pilota turystycznego, ale również szkolenia instruktorów, organizowane są loty widokowe nad morzem w Kołobrzegu, Mielnie, Ustroniu Morskim i Koszalinie. Z tego typu atrakcji można skorzystać podczas urlopu lub podarować ją bliskiej osobie w formie vouchera podarunkowego. Loty odbywają się z lotniska w Bagiczu obok Kołobrzegu oraz z lotniska Szczecin-Dąbie. Jeżeli fascynują Cię samoloty i chcesz przeżyć niezapomniane emocje, to skorzystaj z przygotowanej oferty ośrodka szkolenia lotniczego.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-5"><img src="/uploads/latarnia_w_kolobrzegu.jpg" alt="Latarnia w Kołobrzegu" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="pe-5">
                        <h3>PRZYSTAŃ RYBACKA W USTRONIU MORSKIM</h3>
                        <p>Niewątpliwą atrakcją zachodniego wybrzeża jest Przystań Rybacka w Ustroniu Morskim. Kolorowe kutry stanową urokliwą ozdobę plaży, z którą chętnie fotografują się turyści. O poranku rybacy wyruszają na połów, aby popołudniami oraz wieczorami przywozić ze sobą najlepsze bałtyckie ryby, których smakiem można cieszyć się w pobliskich smażalniach lub wędzarniach. To zarazem unikatowa, bo zanikająca pocztówka znad Bałtyku, która z roku na rok powoli znika z polskich plaż. Stąd warto jak najdłużej zachować ją w pamięci.</p>
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse mt-5 pt-5">
                <div class="col-5"><img src="/uploads/przystan_rybacka_w_ustroniu_morskim.jpg" alt="Przystań Rybacka w Ustroniu Morskim" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="ps-5">
                        <h3>PARK WODNY KOSZALIN</h3>
                        <p>Park Wodny Koszalin to jeden z najnowocześniejszych i największych aquaparków w Polsce. Ten Park Wodny to przede wszystkim miejsce rozrywki, sportu i rekreacji. Klientom kompleksu oferowana jest moc atrakcji, z których mogą korzystać zarówno dorośli, młodzież jak i dzieci. Bogata oferta i jej różnorodność pozwala, aby każdy znalazł tu relaks i odpoczynek. W strefie rekreacyjnej czeka sześć basenów: basen sportowy, basen do nauki pływania, basen dla dzieci, rwącą rzekę, sztuczną falę i wiele innych atrakcji. W strefie saun, znajdują się łaźnie – solankowa, parowa, parowo-błotna, a także sauny – fińska, ziołowa, sauna do rytuałów, kabina infrared, koloroterapia, strefa jaccuzi, bicze szkockie, słoneczna łąka, grota solna, grota lodowa, zewnętrzna wypoczywalnia z tarasem i sześcioosobowym jacuzzi.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-5"><img src="/uploads/latarnia_w_kolobrzegu.jpg" alt="Latarnia w Kołobrzegu" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="pe-5">
                        <h3>POMERANIA FUN PARK W DYGOWIE</h3>
                        <p>Pomerania to największy park rozrywki dla całej rodziny w województwie zachodniopomorskim, który przez cały rok zapewnia dobre humory dużym i małym. Liczne karuzele w części wesołego miasteczka, wodny świat, mini Zoo , plac zabaw z dmuchanymi dmuchańcami, czy inne atrakcje dla dzieci to prawdziwy raj dla pociech! Także dla maluchów, na których czekają bezpieczne i dostosowane do ich wieku atrakcje dla najmłodszych oraz różnorodne aktywności. Wraz z ekipą animatorów park rozrywki dba o szerokie uśmiechy wszystkich odwiedzających i zapewnia najlepszą zabawę w Kołobrzegu i okolicach. W Pomeranii nie ma miejsca na nudę!</p>
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse mt-5 pt-5">
                <div class="col-5"><img src="/uploads/przystan_rybacka_w_ustroniu_morskim.jpg" alt="Przystań Rybacka w Ustroniu Morskim" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="ps-5">
                        <h3>OŚRODEK JAZDY KONNEJ W BUDZISTOWIE</h3>
                        <p>Ośrodek Jazdy Konnej w Budzistowie posiada maneż oraz krytą ujeżdżalnię z trybunami, na której można nauczyć się jeździć i doskonalić swoje umiejętności jeździeckie, bez względu na warunki atmosferyczne. Dodatkowo na terenie Ośrodka jest również plac konkursowy trawiasty z bardzo dobrym podłożem. Stadnina posiada dwa komplety przeszkód parkurowych (treningowy oraz konkursowy). W stajni znajduje się 30 boksów dla koni. Tereny zielone są podzielone na 4 duże pastwiska (które w zależności od potrzeb są dzielone na mniejsze). W zimie konie wychodzą na padoki piaszczyste lub do hali.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-5"><img src="/uploads/latarnia_w_kolobrzegu.jpg" alt="Latarnia w Kołobrzegu" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="pe-5">
                        <h3>CENTRUM ROZRYWKOWO – REKREACYJNE HELIOS W USTRONIU MORSKIM</h3>
                        <p>Centrum Sportowo – Rekreacyjne Helios to nowoczesny kompleks sportowo rekreacyjny w skład którego wchodzi pływalnia kryta, kąpielisko otwarte, sauny, jacuzzi, kręgielnia, korty tenisowe oraz boisko do siatkówki plażowej. W obiekcie znajduje się również punkt gastronomiczny w którym po wspaniałej zabawie można odpocząć i smacznie zjeść.</p>
                        <p>&nbsp;</p>
                        <p>Pływalnia kryta oferuje Państwu min. 6-cio torowy basen pływacki, basen szkoleniowo – rekreacyjny, wydzieloną 2 torową strefę nauki pływania, 2 gejzery powietrzne, 2 kaskady wodne z szeroką wylewką do masażu karku, 2 stacje masażu wodno -powietrznego, 4-stanowiskową ławkę z hydromasażem. W strefie rekreacyjnej znajdują się również zjeżdżalnia wodna (rura zamknięta) o długości około 45m, 3 wanny WHIRLPOOL do hydromasażu oraz 2 sauny (sucha i parowa). Głównym elementem kąpieliska otwartego jest wielofunkcyjna niecka basenowa oraz plaża trawiasta z wydzieloną strefą do opalania i placem zabaw dla dzieci.</p>
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse mt-5 pt-5">
                <div class="col-5"><img src="/uploads/przystan_rybacka_w_ustroniu_morskim.jpg" alt="Przystań Rybacka w Ustroniu Morskim" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="ps-5">
                        <h3>PARK ROZRYWKI W ZIELENIEWIE</h3>
                        <p>Park Rozrywki Dziki Zachód Zieleniewo (koło Kołobrzegu) to idealne miejsce dla młodszych i starszych. Ośrodek działa od 2000 roku. Park Rozrywki Dziki Zachód gwarantuje wszystkim rozrywkę bez limitu – wystarczy jeden bilet, żeby korzystać do woli ze wszystkich atrakcji, a jest ich masa! W ofercie m.in.: mini zoo, wioska indiańska, pokazy artystyczne, strzelnica z łuku, karuzele, przejażdżki kucykiem, hummerem, quadem i wiele, wiele innych!</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
@push('scripts')

@endpush