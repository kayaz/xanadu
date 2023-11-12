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
                    <h2 class="section-title text-center"><span class="text-blue">Morska magia</span> każdego dnia.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-8">
                    <p>Serdecznie zachęcamy do zapoznania się z galerią zdjęć z naszego obiektu. <br>Dzięki nim lepiej poczują Państwo klimat, jaki u nas panuje.</p>
                </div>
            </div>
        </div>
    </section>

    @foreach($galeries as $key => $g)
        <section class="pt-0">
            <div class="container">
                <div class="@if($key % 2 == 0) row @else row flex-row-reverse @endif">
                    <div class="col-6">
                        <picture>
                            <source type="image/webp" srcset="{{ asset('/uploads/gallery/webp/'.$g->file_webp) }}">
                            <source type="image/jpeg" srcset="{{ asset('/uploads/gallery/'.$g->file) }}">
                            <img src="{{ asset('/uploads/gallery/'.$g->file) }}" alt="Galeria {{ $g->name }}" width="1120" height="780" class="w-100">
                        </picture>
                    </div>
                    <div class="col-6 align-items-center d-flex">
                        <div class="text-left pe-5 ps-5">
                            <h2 class="section-title mb-4">{{ $g->name }}</h2>
                            <p>{{ $g->text }}</p>
                            <a href="" class="btn btn-theme btn-icon mt-5">ZOBACZ ZDJĘCIA <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <section class="pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div id="virtual">
                        <h3 class="mb-0">[ Miejsce na wirtualny spacer ]</h3>
                    </div>
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