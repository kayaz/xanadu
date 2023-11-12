@extends('layouts.page', ['body_class' => 'gallery no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Galeria', 'header_file' => 'pageheader.jpg'])
@stop

@section('content')
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center"><span class="text-blue">Dwupoziomowe domki letniskowe</span> nad morzem.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p>A gdyby tak spędzić wakacje w przytulnym, luksusowym wnętrzu? Zapewniamy Państwu komfortowo wykończone pokoje zaopatrzone we wszystko, co niezbędne podczas udanych wakacji. Domki letniskowe zostały wykonane z drewna. Łączna powierzchnia użytkowa każdego z nich wynosi 60 m2, dzięki czemu bez obaw zmieści się w nim do 6 osób. Budynki zostały dodatkowo ocieplone. Ciekawa architektura, obecność przestronnego tarasu oraz duże okna dają gwarancję znakomitych warunków do wypoczynku nad morzem.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('front.parse.gallery', $list)
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
            <div class="row mt-5">
                <div class="col-2">
                    <div class="position-relative">
                        <label for="form_data_1"><i class="las la-calendar"></i></label>
                        <input type="text" name="" value="" id="form_data_1" placeholder="Data przyjazdu">
                    </div>
                </div>
                <div class="col-2">
                    <div class="position-relative">
                        <label for="form_data_1"><i class="las la-calendar"></i></label>
                        <input type="text" name="" value="" id="form_data_1" placeholder="Data odjazdu">
                    </div>
                </div>
                <div class="col-2">
                    <div class="position-relative">
                        <label for="form_data_1"><i class="las la-user"></i></label>
                        <input type="text" name="" value="" id="form_data_1" placeholder="Dorośli">
                    </div>
                </div>
                <div class="col-2">
                    <div class="position-relative">
                        <label for="form_data_1"><i class="las la-user"></i></label>
                        <input type="text" name="" value="" id="form_data_1" placeholder="Dzieci">
                    </div>
                </div>
                <div class="col-2">
                    <div class="position-relative">
                        <label for="form_data_1"><i class="las la-key"></i></label>
                        <input type="text" name="" value="" id="form_data_1" placeholder="Domek / pokój">
                    </div>
                </div>
                <div class="col-2">
                    <button>WYŚLIJ ZAPYTANIE</button>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')

@endpush