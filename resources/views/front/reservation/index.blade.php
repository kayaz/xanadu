@extends('layouts.page', ['body_class' => 'reservation'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Rezerwacja', 'header_file' => 'pageheader.jpg'])
@stop

@section('content')
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="order-2 order-lg-1 col-12 col-lg-4">
                    <img src="/images/recepcja.jpg" alt="Recepcja Xanadu Restort" class="d-none d-lg-block">
                    <p>&nbsp;</p>
                    <p>Rezerwacja będzie dokonana po potwierdzeniu przyjęcia przez biuro rezerwacji i wpłaceniu w terminie 7 dni wymaganej zaliczki. Po tym terminie rezerwację uważamy za nieaktualną.</p>
                    <p>&nbsp;</p>
                    <p>F.H.U &quot;Fiszerija&quot; s.c,</p>
                    <p>Ul. Bolesława Chrobrego 4A,</p>
                    <p>78-111 Ustronie Morskie</p>
                    <p>Bank Spółdzielczy Gryfice</p>
                    <p>Nr konta: 27 9376 0001 2006 00162463 0002</p>
                    <p><b>W tytule przelewu proszę podać: Imię i nazwisko</b></p>
                </div>
                <div class="col-12 col-lg-8 ps-3 ps-lg-5 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h2 class="section-title section-title-border">Formularz wstępnej rezerwacji</h2>
                        </div>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success border-0">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning border-0">
                            {{ session('warning') }}
                        </div>
                    @endif

                    <form action="{{ route("reservation.form") }}" class="row" method="post" class="validateForm">
                    {{ csrf_field() }}
                        <div class="col-6 col-xl-4">
                            <div class="mb-3 mb-sm-4 mb-xl-5">
                                <label for="dataStart" class="form-label">Data przyjazdu <span>*</span></label>
                                <input type="text" class="form-control datepicker @error('form_data_start') is-invalid @enderror" id="dataStart" name="form_data_start" value="{{ request('form_data_start') }}">

                                @error('form_data_start')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-xl-4">
                            <div class="mb-3 mb-sm-4 mb-xl-5">
                                <label for="dataEnd" class="form-label">Data wyjazdu <span>*</span></label>
                                <input type="text" class="form-control datepicker @error('form_data_end') is-invalid @enderror" id="dataEnd" name="form_data_end" value="{{ request('form_data_end') }}">

                                @error('form_data_end')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4">
                            <div class="mb-3 mb-sm-4 mb-xl-5">
                                <label for="roomType" class="form-label">Pokój / domek <span>*</span></label>
                                <select class="form-select @error('form_room_type') is-invalid @enderror" name="form_room_type" id="roomType">
                                    <option selected>Wybierz</option>
                                    <option value="1" @if(request('form_room_type') == 1) selected @endif>Pokój</option>
                                    <option value="2" @if(request('form_room_type') == 2) selected @endif>Domek</option>
                                </select>

                                @error('form_room_type')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-3">
                            <div class="mb-3 mb-sm-4 mb-xl-5">
                                <label for="foodType" class="form-label">Wyżywienie <span>*</span></label>
                                <select class="form-select" name="form_food" id="foodType">
                                    <option selected>Brak</option>
                                    <option value="1">Śniadanie</option>
                                    <option value="2">Śniadanie + obiadokolacja</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xl-3">
                            <div class="mb-4 mb-xl-5">
                                <label class="form-label w-100 text-center" for="adultCount">Dorośli</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center @error('form_adult_count') is-invalid @enderror" value="1" id="adultCount" data-count="1" name="form_adult_count">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>

                                @error('form_adult_count')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-md-4 col-xl-3">
                            <div class="mb-4 mb-xl-5">
                                <label class="form-label w-100 text-center" for="childCount">Dziecko 3-12 lat</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center @error('form_child_count') is-invalid @enderror" value="0" id="childCount" data-count="0" name="form_child_count">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>

                                @error('form_child_count')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-xl-3">
                            <div class="mb-4 mb-xl-5">
                                <label class="form-label w-100 text-center" for="kidCount">Dziecko 0-3 lat</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center @error('form_kid_count') is-invalid @enderror" value="0" id="kidCount" data-count="0" name="form_kid_count">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>

                                @error('form_kid_count')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="mb-3 mb-sm-4 mb-xl-5">
                                <label for="formName" class="form-label" >Imię <span>*</span></label>
                                <input type="text" class="form-control @error('form_name') is-invalid @enderror" id="formName" name="form_name" value="{{ old('form_name') }}">

                                @error('form_name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <div class="mb-3 mb-sm-4 mb-xl-5">
                                <label for="formEmail" class="form-label">E-mail <span>*</span></label>
                                <input type="email" class="form-control @error('form_email') is-invalid @enderror" id="formEmail" name="form_email" value="{{ old('form_email') }}">

                                @error('form_email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="mb-3 mb-sm-4 mb-xl-5">
                                <label for="formPhone" class="form-label">Telefon <span>*</span></label>
                                <input type="tel" class="form-control @error('form_phone') is-invalid @enderror" id="formPhone" name="form_phone" value="{{ old('form_phone') }}">

                                @error('form_phone')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                <label for="formMessage" class="form-label">Treść wiadomości</label>
                                <textarea class="form-control @error('form_message') is-invalid @enderror" id="formMessage" rows="3" name="form_message"></textarea>

                                @error('form_message')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="required-info">
                                <span>*</span> - pola wymagane
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-theme btn-icon mt-3 mt-xl-5">WYŚLIJ ZAPYTANIE <i class="las la-envelope"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('/js/datepicker/bootstrap-datepicker.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/datepicker/bootstrap-datepicker.pl.min.js') }}" charset="utf-8"></script>
    <link href="{{ asset('/js/datepicker/bootstrap-datepicker3.css') }}" rel="stylesheet">
    <script>
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            language: 'pl',
            startDate: new Date(2024, 3, 26), // Use startDate instead of minDate
            endDate: new Date(2024, 8, 30)     // Use endDate instead of maxDate
        });

        $(document).on('click', '.number-spinner button', function () {
            let btn = $(this),
                oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                newVal = 0;
            let dataCount = btn.closest('.number-spinner').find('input').attr('data-count');

            console.log(dataCount);

            if (btn.attr('data-dir') === 'up') {
                newVal = parseInt(oldValue) + 1;
            } else {
                if (oldValue > 1) {
                    newVal = parseInt(oldValue) - 1;
                } else {
                    if(parseInt(dataCount) === 0){
                        newVal = 0;
                    } else {
                        newVal = 1;
                    }
                }
            }
            btn.closest('.number-spinner').find('input').val(newVal);
        });
    </script>
@endpush