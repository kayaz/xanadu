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
                    <p>mBank Oddział Bankowości Detalicznej</p>
                    <p>Nr konta: 21 1140 2004 0000 3802 7603 2590</p>
                    <p>F.H.U "Fiszerija" s.c, Ul. B. Chrobrego 4A, 78-111 Ustronie Morskie</p>
                    <p>&nbsp;</p>
                    <p>kod BIC/SWIFT mBanku: BREXPLPWMBK</p>
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
                                <label for="exampleFormControlInput1" class="form-label">Data przyjazdu</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Data wyjazdu</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Pokój / domek</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Wybierz</option>
                                    <option value="1">Pokój</option>
                                    <option value="2">Domek</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Wyżywienie</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Brak
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Śniadanie
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Śniadanie + obiadokolacja
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-5">
                                <label class="form-label w-100 text-center">Dorośli</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center" value="1">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-5">
                                <label class="form-label w-100 text-center">Dziecko 3-12 lat</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center" value="1">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-5">
                                <label class="form-label w-100 text-center">Dziecko 0-3 lat</label>
                                <div class="input-group number-spinner">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="dwn" type="button"><i class="las la-minus"></i></button></span>
                                    <input type="text" class="form-control text-center" value="1">
                                    <span class="input-group-btn"><button class="btn-input" data-dir="up" type="button"><i class="las la-plus"></i></button></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Imię</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-5">
                                <label for="exampleFormControlInput1" class="form-label">Telefon</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                <label for="exampleFormControlTextarea1" class="form-label">Dodatkowe informacje</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
    <script>
        $(document).on('click', '.number-spinner button', function () {
            let btn = $(this),
                oldValue = btn.closest('.number-spinner').find('input').val().trim(),
                newVal = 0;

            if (btn.attr('data-dir') === 'up') {
                newVal = parseInt(oldValue) + 1;
            } else {
                if (oldValue > 1) {
                    newVal = parseInt(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            btn.closest('.number-spinner').find('input').val(newVal);
        });
    </script>
@endpush