@extends('layouts.page', ['body_class' => 'contactpage no-bottom'])

@section('meta_title', 'Kontakt')
@section('seo_title', '')
@section('seo_description', '')

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'Kontakt', 'header_file' => 'pageheader.jpg'])
@stop

@section('content')
    <div id="page-content" class="page-text">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="contact-box">
                        <div class="contact-box-icon">
                            <img src="/images/icons/icon-envelope.png" alt="" width="70" height="70">
                        </div>
                        <a href="mailto:rezerwacje@xanaduhotel.pl">rezerwacje@xanaduhotel.pl</a></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="contact-box">
                        <div class="contact-box-icon">
                            <img src="/images/icons/icon-phone.png" alt="" width="70" height="70">
                        </div>
                        <a href="tel:+48502058200">502 058 200</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="contact-box">
                        <div class="contact-box-icon">
                            <img src="/images/icons/icon-phone.png" alt="" width="70" height="70">
                        </div>
                        <a href="tel:+48503094222">503 094 222</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-5 text-left">
                    <h2 class="section-title mb-3">Xanadu Resort</h2>
                    <h4>Lotnicza 17</h4>
                    <h4>78-111 Sianożęty</h4>
                    <p>&nbsp;</p>
                    <p>Już dziś zachęcamy Państwa do kontaktu z hotelem Xanadu. To kompleksowy <strong>ośrodek wypoczynkowy w Sianożętach</strong>, który oferuje wyżywienie, kameralną atmosferę i wiele atrakcji. Naszym niewątpliwym atutem jest również bliskość brzegu Bałtyku oraz możliwość skorzystania przez Gości z pobliskiego basenu. Zapraszamy do nas singli, pary, rodziny z dziećmi i wszystkich tych, którzy po prostu chcą przyjemnie i relaksująco spędzić urlop z dala od trosk i szarości dnia codziennego.</p>
                </div>
                <div class="col-7">
                    <div class="ps-5">
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
                        <form method="post" id="contact-form" action="{{ route("contact.form") }}" class="validateForm">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 col-md-4 form-input">
                                    <label for="form_name">Imię <span class="text-danger">*</span></label>
                                    <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                                    @error('form_name')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-4 form-input col-input-important">
                                    <label for="form_surname">Nazwisko <span class="text-danger">*</span></label>
                                    <input name="form_surname" id="form_surname" class="form-control" type="text" value="{{ old('form_surname') }}">
                                </div>
                                <div class="col-12 col-md-4 form-input">
                                    <label for="form_email">E-mail <span class="text-danger">*</span></label>
                                    <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                                    @error('form_email')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-4 form-input">
                                    <label for="form_phone">Telefon</label>
                                    <input name="form_phone" id="form_phone" class="form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                                    @error('form_phone')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 mt-1 form-input">
                                    <label for="form_message">Treść wiadomości <span class="text-danger">*</span></label>
                                    <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                                    @error('form_message')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <div class="form-input mb-0">
                                        <input name="form_page" type="hidden" value="homepage">
                                        <script type="text/javascript">
                                            document.write("<button class=\"btn btn-theme btn-icon\" type=\"submit\">WYŚLIJ WIADOMOŚĆ <i class=\"las la-envelope\"></i></button>");
                                        </script>
                                        <noscript><b>Do poprawnego działania, Java musi być włączona.</b></noscript>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9333.816923599206!2d15.723134!3d54.207447!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa6c9b12523eca568!2sXanadu!5e0!3m2!1spl!2spl!4v1560473084734!5m2!1spl!2spl" width="100%" height="420" frameborder="0" style="border:0;margin-top:30px" allowfullscreen></iframe>
                </div>
                <div class="col-12 text-center">
                    <div class="hr mt-5 mb-5"><img src="https://xanaduhotel.test/images/svg/section-title-icon.svg" alt=""></div>

                    <p>Przelew krajowy:</p>
                    <p>F.H.U "Fiszerija" s.c,</p>
                    <p>Ul. Bolesława Chrobrego 4A,</p>
                    <p>78-111 Ustronie Morskie</p>
                    <p>Bank Spółdzielczy Gryfice</p>
                    <p>Nr konta: 27 9376 0001 2006 00162463 0002</p>
                    <p><b>W tytule przelewu proszę podać: Imię i nazwisko</b></p>
                </div>
            </div>
        </div>
    </div>
    @include('front.partials.good-to-know')
@endsection

@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush