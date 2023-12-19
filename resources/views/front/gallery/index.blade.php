@extends('layouts.page', ['body_class' => 'gallery no-bottom'])

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
                    <h2 class="section-title text-center"><span class="text-blue">Morska magia</span> każdego dnia.</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12 col-xl-8">
                    <p>Serdecznie zachęcamy do zapoznania się z galerią zdjęć z naszego obiektu. <br>Dzięki nim lepiej poczują Państwo klimat, jaki u nas panuje.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mix-nav text-center">
                        <button type="button" class="btn btn-theme mt-0" data-filter="all">
                            <span><i class="las la-grip-horizontal"></i></span>
                            Wszystkie
                        </button>
                        @foreach($galeries as $key => $g)
                            <button type="button" class="btn btn-theme mt-0" data-filter=".category-{{ $g->id }}"><span>{!! $g->text !!}</span>{{ $g->name }}</button>
                        @endforeach
                    </div>
                    <div class="mix-container row mt-3 mt-xxl-5">
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
                        <div class="col-4 mix category-2"><img src="https://placehold.co/600x400/blue/white" alt=""></div>
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
                        <div class="col-4 mix category-2"><img src="https://placehold.co/600x400/blue/white" alt=""></div>
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
                        <div class="col-4 mix category-2"><img src="https://placehold.co/600x400/blue/white" alt=""></div>
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
                        <div class="col-4 mix category-2"><img src="https://placehold.co/600x400/blue/white" alt=""></div>
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>

                        @foreach($pool as $pi)
                            <div class="col-4 mix category-{{$pi->gallery_id}}">
                                <a href="/uploads/gallery/images/{{$pi->file}}" class="swipebox" rel="gallery-1" title="Basen">
                                    <picture>
                                        <source type="image/webp" srcset="{{asset('uploads/gallery/images/thumbs/webp/'.$pi->file_webp) }}">
                                        <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/thumbs/'.$pi->file) }}">
                                        <img src="{{asset('uploads/gallery/images/thumbs/'.$pi->file) }}" alt="{{ $pi->name }}">
                                    </picture>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ask-form" class="mb-0">
        @include('front.partials.askform')
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('/js/mixitup.js') }}" charset="utf-8"></script>
    <script>
        var mixer = mixitup('.mix-container')
    </script>
@endpush