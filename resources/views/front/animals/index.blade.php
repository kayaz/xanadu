@extends('layouts.page', ['body_class' => 'homepage no-bottom'])

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
                    <h2 class="section-title text-center">Jesteśmy obiektem <span class="text-blue">przyjaznym zwierzętom!</span></h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p>Z dumą informujemy, że jesteśmy resortem przyjaznym Gościom podróżującym ze swoimi pupilami. Dla wielu Gości ich pupile są jak rodzina i również zasługują na wypoczynek. Oferujemy zakwaterowanie w przestronnych domach. <br><b>Koszt pobytu zwierzęcia 30 zł / doba</b></p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-7">
                    <div class="section-img pe-5">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('/uploads/zwierzeta-na-plazy.webp') }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/zwierzeta-na-plazy.jpg') }}">
                            <img src="{{ asset('/uploads/zwierzeta-na-plazy.jpg') }}" alt="Chłopak z psem na plaży w Sianożętach" width="1120" height="780" class="w-100">
                        </picture>
                    </div>
                </div>
                <div class="col-5 d-flex align-items-center">
                    <div class="section-box text-justify">
                        <h2 class="section-title">Czy na plażę w Sianożętach <br><span class="text-blue">wolno wchodzić z psem?</span></h2>
                        <p>Pies na plaży w Sianożętach jest zawsze mile widziany, pod warunkiem, że nie stanowi zagrożenia dla innych użytkowników plaży. Właściciel rzecz jasna musi posprzątać po swoim pupilu, jeżeli zajdzie taka potrzeba. W Sianożętach właściciele czworonogów z pewnością poczują się jak w domu i nie odczują dyskomfortu z tak błahego powodu, jakim jest przyjazd z psem na wakacje.</p>
                        <p>&nbsp;</p>
                        <p>W Podczelu i Kołobrzegu znajduję się również wybiegi dla psów!</p>
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
                    <a href="{{ asset('/uploads/files/regulamin-zwierzeta.pdf') }}" class="btn btn-theme btn-icon mt-5" target="_blank">POBIERZ REGULAMIN <i class="las la-download"></i></a>
                </div>
            </div>
        </div>
    </section>

    @include('front.partials.good-to-know')

@endsection
@push('scripts')

@endpush