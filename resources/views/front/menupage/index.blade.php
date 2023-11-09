@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Kontakt', 'header_file' => 'pageheader.jpg'])
@stop

@section('content')
    <div id="page-content" class="page-text text-left">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! parse_text($page->content) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush