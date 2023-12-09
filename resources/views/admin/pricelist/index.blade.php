@extends('admin.layout')
@section('meta_title', '- Cennik')

@section('content')
<form method="POST" action="{{route('admin.pricelist.update', $entry->id)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        @include('form-elements.html-input-text', ['label' => 'Majówka domki', 'name' => 'houses_may', 'value' => $entry->houses_may, 'required' => 1])
                        @include('form-elements.html-input-text', ['label' => 'Majówka pokoje', 'name' => 'rooms_may', 'value' => $entry->rooms_may, 'required' => 1])
                        @include('form-elements.textarea-fullwidth', ['label' => 'Domki cennik', 'name' => 'houses_prices', 'value' => $entry->houses_prices, 'rows' => 21, 'required' => 1])
                        @include('form-elements.textarea-fullwidth', ['label' => 'Pokoje cennik', 'name' => 'rooms_prices', 'value' => $entry->rooms_prices, 'rows' => 21, 'required' => 1])
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
</form>
@endsection
