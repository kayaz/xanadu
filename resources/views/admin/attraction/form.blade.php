@extends('admin.layout')
@section('meta_title', '- '.$cardTitle)

@section('content')
    @if(Route::is('admin.attraction.edit'))
        <form method="POST" action="{{route('admin.attraction.update', $entry->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @else
                <form method="POST" action="{{route('admin.attraction.store')}}" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="container">
                        <div class="card-head container">
                            <div class="row">
                                <div class="col-12 pl-0">
                                    <h4 class="page-title row"><i class="fe-grid"></i><a href="{{route('admin.attraction.index')}}" class="p-0">Atrakcje</a><span class="d-inline-flex ml-2 mr-2">/</span>{{ $cardTitle }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-3">
                            @include('form-elements.back-route-button')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        @include('form-elements.html-input-text', ['label' => 'Nazwa', 'name' => 'name', 'value' => $entry->name, 'required' => 1])
                                        @include('form-elements.html-input-text', ['label' => 'Krótki tekst', 'name' => 'short', 'value' => $entry->short, 'required' => 1])
                                        @include('form-elements.html-input-file', ['label' => 'Obrazek', 'sublabel' => '(wymiary: 490 px / 600 px)', 'name' => 'file'])
                                        @include('form-elements.textarea-fullwidth', ['label' => 'Treść', 'name' => 'content', 'value' => $entry->content, 'rows' => 21, 'class' => 'tinymce', 'required' => 1])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
                </form>
        @include('form-elements.tintmce')
        @endsection
