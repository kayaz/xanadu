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
                <div class="col-4">
                    <img src="/images/recepcja.jpg" alt="">
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
                <div class="col-8 ps-5">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h2 class="section-title section-title-border">Formularz wstępnej rezerwacji</h2>
                        </div>
                    </div>
                    <form action="" class="row">
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="dataStart" class="form-label">Data przyjazdu</label>
                                <input type="text" class="form-control datepicker" id="dataStart" name="form_data_start">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="dataEnd" class="form-label">Data wyjazdu</label>
                                <input type="text" class="form-control datepicker" id="dataEnd" name="form_data_end">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="roomType" class="form-label">Pokój / domek</label>
                                <select class="form-select" name="form_room_type" id="roomType">
                                    <option selected>Wybierz</option>
                                    <option value="1">Pokój</option>
                                    <option value="2">Domek</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-5">
                                <label for="foodType" class="form-label">Wyżywienie</label>
                                <select class="form-select" name="form_food" id="foodType">
                                    <option selected>Brak</option>
                                    <option value="1">Śniadanie</option>
                                    <option value="2">Śniadanie + obiadokolacja</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-5">
                                <label class="form-label w-100 text-center" for="adultCount">Dorośli</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center" value="1" id="adultCount" data-count="1">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-5">
                                <label class="form-label w-100 text-center" for="childCount">Dziecko 3-12 lat</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center" value="0" id="childCount" data-count="0">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-5">
                                <label class="form-label w-100 text-center" for="kidCount">Dziecko 0-3 lat</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center" value="0" id="kidCount" data-count="0">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-5">
                                <label for="formName" class="form-label" >Imię</label>
                                <input type="text" class="form-control" id="formName" name="form_name">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="formEmail" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="formEmail" name="form_email">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="formPhone" class="form-label">Telefon</label>
                                <input type="tel" class="form-control" id="formPhone" name="form_phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                <label for="formMessage" class="form-label">Treść wiadomości</label>
                                <textarea class="form-control" id="formMessage" rows="3" name="form_messgae"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <a href="" class="btn btn-theme btn-icon mt-5">WYŚLIJ ZAPYTANIE <i class="las la-envelope"></i></a>
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
            startDate: new Date(2024, 4, 1), // Use startDate instead of minDate
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