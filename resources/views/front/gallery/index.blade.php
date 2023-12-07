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
                <div class="col-8">
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
                    <div class="mix-container row mt-5">
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
                        <div class="col-4 mix category-2"><img src="https://placehold.co/600x400/blue/white" alt=""></div>
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
                        <div class="col-4 mix category-2"><img src="https://placehold.co/600x400/blue/white" alt=""></div>
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
                        <div class="col-4 mix category-2"><img src="https://placehold.co/600x400/blue/white" alt=""></div>
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
                        <div class="col-4 mix category-2"><img src="https://placehold.co/600x400/blue/white" alt=""></div>
                        <div class="col-4 mix category-1"><img src="https://placehold.co/600x400/orange/white" alt=""></div>
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
    <script src="{{ asset('/js/mixitup.js') }}" charset="utf-8"></script>
    <script>
        var mixer = mixitup('.mix-container')
    </script>
@endpush