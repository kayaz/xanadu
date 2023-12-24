@extends('layouts.page', ['body_class' => 'gallery no-bottom no-top'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->file])
@stop

@section('content')
    <div class="pt-3 pt-md-0 pb-3 pb-md-0">
        <div class="p-0 p-md-5">
            <div class="spacer-container">
                <iframe src="/spacer/" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
