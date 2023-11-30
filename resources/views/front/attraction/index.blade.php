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

    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($attractions as $a)
                    <div class="col-4">
                        <div class="attraction-item">
                            <img src="{{ asset('/uploads/attractions/'.$a->file) }}" alt="{{ $a->name }}">
                            <h3>{{ $a->name }}</h3>
                            <div class="attraction-item-desc">
                                <div class="attraction-item-short">
                                    <p>{{ $a->short }}</p>
                                    <a href="#" class="btn btn-theme" data-id="{{ $a->id }}">CZYTAJ WIĘCEJ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row flex-row-reverse mt-5 pt-5 d-none">
                <div class="col-5"><img src="/uploads/przystan_rybacka_w_ustroniu_morskim.jpg" alt="Przystań Rybacka w Ustroniu Morskim" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="ps-5">
                        <h3>LOTY WIDOKOWE W BAGICZU</h3>
                        <p>W ośrodku szkolenia lotniczego organizowane są nie tylko kursy na licencję pilota turystycznego, ale również szkolenia instruktorów, organizowane są loty widokowe nad morzem w Kołobrzegu, Mielnie, Ustroniu Morskim i Koszalinie. Z tego typu atrakcji można skorzystać podczas urlopu lub podarować ją bliskiej osobie w formie vouchera podarunkowego. Loty odbywają się z lotniska w Bagiczu obok Kołobrzegu oraz z lotniska Szczecin-Dąbie. Jeżeli fascynują Cię samoloty i chcesz przeżyć niezapomniane emocje, to skorzystaj z przygotowanej oferty ośrodka szkolenia lotniczego.</p>
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse mt-5 pt-5 d-none">
                <div class="col-5"><img src="/uploads/przystan_rybacka_w_ustroniu_morskim.jpg" alt="Przystań Rybacka w Ustroniu Morskim" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="ps-5">
                        <h3>PARK WODNY KOSZALIN</h3>
                        <p>Park Wodny Koszalin to jeden z najnowocześniejszych i największych aquaparków w Polsce. Ten Park Wodny to przede wszystkim miejsce rozrywki, sportu i rekreacji. Klientom kompleksu oferowana jest moc atrakcji, z których mogą korzystać zarówno dorośli, młodzież jak i dzieci. Bogata oferta i jej różnorodność pozwala, aby każdy znalazł tu relaks i odpoczynek. W strefie rekreacyjnej czeka sześć basenów: basen sportowy, basen do nauki pływania, basen dla dzieci, rwącą rzekę, sztuczną falę i wiele innych atrakcji. W strefie saun, znajdują się łaźnie – solankowa, parowa, parowo-błotna, a także sauny – fińska, ziołowa, sauna do rytuałów, kabina infrared, koloroterapia, strefa jaccuzi, bicze szkockie, słoneczna łąka, grota solna, grota lodowa, zewnętrzna wypoczywalnia z tarasem i sześcioosobowym jacuzzi.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5 d-none">
                <div class="col-5"><img src="/uploads/latarnia_w_kolobrzegu.jpg" alt="Latarnia w Kołobrzegu" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="pe-5">
                        <h3>POMERANIA FUN PARK W DYGOWIE</h3>
                        <p>Pomerania to największy park rozrywki dla całej rodziny w województwie zachodniopomorskim, który przez cały rok zapewnia dobre humory dużym i małym. Liczne karuzele w części wesołego miasteczka, wodny świat, mini Zoo , plac zabaw z dmuchanymi dmuchańcami, czy inne atrakcje dla dzieci to prawdziwy raj dla pociech! Także dla maluchów, na których czekają bezpieczne i dostosowane do ich wieku atrakcje dla najmłodszych oraz różnorodne aktywności. Wraz z ekipą animatorów park rozrywki dba o szerokie uśmiechy wszystkich odwiedzających i zapewnia najlepszą zabawę w Kołobrzegu i okolicach. W Pomeranii nie ma miejsca na nudę!</p>
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse mt-5 pt-5 d-none">
                <div class="col-5"><img src="/uploads/przystan_rybacka_w_ustroniu_morskim.jpg" alt="Przystań Rybacka w Ustroniu Morskim" width="600" height="400" /></div>
                <div class="col-7 d-flex align-items-center">
                    <div class="ps-5">
                        <h3>OŚRODEK JAZDY KONNEJ W BUDZISTOWIE</h3>
                        <p>Ośrodek Jazdy Konnej w Budzistowie posiada maneż oraz krytą ujeżdżalnię z trybunami, na której można nauczyć się jeździć i doskonalić swoje umiejętności jeździeckie, bez względu na warunki atmosferyczne. Dodatkowo na terenie Ośrodka jest również plac konkursowy trawiasty z bardzo dobrym podłożem. Stadnina posiada dwa komplety przeszkód parkurowych (treningowy oraz konkursowy). W stajni znajduje się 30 boksów dla koni. Tereny zielone są podzielone na 4 duże pastwiska (które w zależności od potrzeb są dzielone na mniejsze). W zimie konie wychodzą na padoki piaszczyste lub do hali.</p>
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse mt-5 pt-5 d-none">
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

    <div class="modal" id="attractionModal">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                </div>
                <div class="modal-body" id="modalContent"></div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('.btn-theme').click(function(event) {
            event.preventDefault();

            const attractionId = $(this).data('id');
            const modal = new bootstrap.Modal(document.getElementById('attractionModal'));

            $.ajax({
                url: '/pl/atrakcje-regionalne/'+attractionId,
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json'
                },
                success: function(data) {
                    // Load the fetched content into the modal
                    $('#modalContent').html(data);
                    modal.show();
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>
@endpush