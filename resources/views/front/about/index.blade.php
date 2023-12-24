@extends('layouts.page', ['body_class' => 'homepage'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => 'O nas', 'header_file' => 'pageheader.jpg'])
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
                <div class="col-12 col-xxl-8">
                    <p>Ośrodek wczasowy Xanadu w Sianożętach (12 km od centrum Kołobrzegu) to nowoczesny i luksusowy kompleks wypoczynkowy zlokalizowany nad Morzem Bałtyckim, który został oddany do użytku w kwietniu 2016 roku. Ze względu na swoje położenie i przepiękną panoramę nadmorską jest doskonałym miejscem wypoczynku w sezonie letnim.</p>
                </div>
            </div>

            <div class="row mt-3 mt-lg-5 pt-3">
                <div class="col-12 d-flex justify-content-center icon-box-row">
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-houses.png') }}" alt="" width="70" height="70">
                            <h3>25 komfortowych <br>domków</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-rooms.png') }}" alt="" width="70" height="70">
                            <h3>24 przytulne <br>pokoje</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-food.png') }}" alt="" width="70" height="70">
                            <h3>150 miejsc <br>w restauracji</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-parking.png') }}" alt="" width="70" height="70">
                            <h3>60 miejsc <br>parkingowych</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-playground.png') }}" alt="" width="70" height="70">
                            <h3>Plac zabaw <br>dla dzieci</h3>
                        </div>
                    </div>
                    <div class="icon-box icon-box-blue">
                        <div>
                            <img src="{{ asset('/images/icons/icon-wifi.png') }}" alt="" width="70" height="70">
                            <h3>Wi-Fi na terenie <br>całego ośrodka</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="offer text-center">
                        <a href="{{ route('houses') }}"><img src="{{ asset('section/domki-nad-morzem.jpg') }}" alt="Domki nad morzem 6-osobowe" width="750" height="520"></a>
                        <h2 class="m-0 mt-4"><a href="{{ route('houses') }}"><span class="text-blue">Domki nad morzem</span> <br>6-osobowe</a></h2>
                        <a href="{{ route('houses') }}" class="btn btn-theme btn-icon mt-4">PEŁNA OFERTA <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-5 mt-md-0">
                    <div class="offer text-center">
                        <a href="{{ route('rooms') }}"><img src="{{ asset('section/pokoje-nad-morzem.jpg') }}" alt="Pokoje nad morzem 2 i 3 - osobowe" width="750" height="520"></a>
                        <h2 class="m-0 mt-4"><a href="{{ route('rooms') }}"><span class="text-blue">Pokoje nad morzem</span> <br>2 i 3 - osobowe</a></h2>
                        <a href="{{ route('rooms') }}" class="btn btn-theme btn-icon mt-4">PEŁNA OFERTA <i class="las la-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ask-form" class="rwd-section">
        @include('front.partials.askform')
    </section>

    <div class="section-rwd">
        <section>
            <div class="container container-lg-fluid p-0">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-12 col-lg-7">
                        <img src="{{ asset('/section/restauracja.jpg') }}" alt="" class="w-100" width="1120" height="780">
                    </div>
                    <div class="col-12 col-lg-5 d-flex align-items-center">
                        <div class="section-box text-left">
                            <h2 class="section-title"><span class="text-blue">Pełne wyżywienie</span> w naszej restauracji.</h2>
                            <div class="text-left">
                                <p>W naszej restauracji dla gości dostępne są śniadania oraz obiady. Obiady serwujemy w formie ciepłego bufetu (8 dań, do wyboru). Mamy też coś specjalnego dla smakoszy deserów i włoskiej pizzy na cienkim cieście.</p>
                                <a href="{{ route('restaurant') }}" class="btn btn-theme btn-icon mt-4 mt-xxl-5">ZOBACZ WIĘCEJ <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container container-lg-fluid p-0 mt-3 mt-lg-0">
                <div class="row g-0">
                    <div class="col-12 col-lg-7">
                        <img src="{{ asset('/section/plac-zabaw.jpg') }}" alt="" class="w-100" width="1120" height="780">
                    </div>
                    <div class="col-12 col-lg-5 d-flex align-items-center">
                        <div class="section-box text-left">
                            <h2 class="section-title"><span class="text-blue">Nasz plac zabaw czeka</span> <br>na małych odkrywców!</h2>
                            <div class="text-left">
                                <p>Nasz ośrodek wypoczynkowy to wyjątkowe miejsce, które stworzyliśmy z myślą o dzieciach i ich rodzicach. Tutaj każdy znajdzie coś dla siebie, a nuda nie ma u nas szans! Plac zabaw to miejsce, w którym dzieci mogą w pełni wyrazić swoją kreatywność i energię. Huśtawki, zjeżdżalnie, karuzele – u nas dzieci zawsze znajdą coś ciekawego do zrobienia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container container-lg-fluid p-0 mt-3 mt-lg-0">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-12 col-lg-7">
                        <img src="{{ asset('/section/basen.jpg') }}" alt="" class="w-100" width="1120" height="780">
                    </div>
                    <div class="col-12 col-lg-5 d-flex align-items-center">
                        <div class="section-box text-left">
                            <h2 class="section-title"><span class="text-blue">Basen w ośrodku</span> <br>wczasowym w Sianożętach.</h2>
                            <div class="text-left">
                                <p>Za dodatkową opłatą do dyspozycji naszych gości, na terenie zaprzyjaźnionego ośrodka wczasowego oddalonego od Xanadu o zaledwie 100 metrów, dostępny jest basen zewnętrzny z podgrzewaną wodą i atrakcjami dla dzieci i dorosłych. Znajdują się tu między innymi: zjeżdżalnia dwutorowa o długości ośmiu metrów, wylewnica do masażu, przeciwprąd. Na wielkość basenu 20 m x 10 m składa się basen rekreacyjny o głębokości 140 cm oraz brodzik o głębokości 50 cm. W obu częściach woda jest podgrzewana.
                                <p>&nbsp;</p>
                                <p>Basen czynny jest od 23 maja do 4 września.</p>
                                <a href="{{ route('pool') }}" class="btn btn-theme btn-icon mt-4 mt-xxl-5">ZOBACZ WIĘCEJ <i class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('front.partials.good-to-know')

    <section class="pb-0">
        <div class="container">
            <div id="tourDIV">
                <div id="panoDIV">
                    <noscript>
                        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="100%" height="100%" id="https://www.xanaduhotel.pl/spacer/indexdata/index">
                            <param name="movie" value="https://www.xanaduhotel.pl/spacer/indexdata/index.swf"/>
                            <param name="allowFullScreen" value="true"/>
                            <!--[if !IE]>-->
                            <object type="application/x-shockwave-flash" data="https://www.xanaduhotel.pl/spacer/indexdata/index.swf" width="100%" height="100%">
                                <param name="movie" value="https://www.xanaduhotel.pl/spacer/indexdata/index.swf"/>
                                <param name="allowFullScreen" value="true"/>
                                <!--<![endif]-->
                                <a href="http://www.adobe.com/go/getflash">
                                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player to visualize the Virtual Tour : Xanadu (Virtual tour generated by Panotour)"/>
                                </a>
                                <!--[if !IE]>-->
                            </object>
                            <!--<![endif]-->
                        </object>

                    </noscript>
                </div>

                <script type="text/javascript" src="https://www.xanaduhotel.pl/spacer/indexdata/index.js"></script>
                <script type="text/javascript">
                    if (isVRModeRequested()){
                        accessWebVr();
                    }else{
                        accessStdVr();
                    }
                </script>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<style>
    div#tourDIV {
        height:100%;
        position:relative;
        overflow:hidden;
    }
    div#panoDIV {
        height:100%;
        position:relative;
        overflow:hidden;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -o-user-select: none;
        user-select: none;
    }
    div#panoDIV.cursorMoveMode {
        cursor: move;
        cursor: url('https://www.xanaduhotel.pl/spacer/indexdata/graphics/cursors_move_html5.cur'), move;
    }
    div#panoDIV.cursorDragMode {
        cursor: grab;
        cursor: -moz-grab;
        cursor: -webkit-grab;
        cursor: url('https://www.xanaduhotel.pl/spacer/indexdata/graphics/cursors_drag_html5.cur'), default;
    }
</style>

<script type="text/javascript">

    function readDeviceOrientation() {
        // window.innerHeight is not supported by IE
        var winH = window.innerHeight ? window.innerHeight : jQuery(window).height();
        var winW = window.innerWidth ? window.innerWidth : jQuery(window).width();
        //force height for iframe usage
        if(!winH || winH === 0){
            winH = '100%';
        }
        // set the height of the document
        jQuery('html').css('height', winH);
        // scroll to top
        window.scrollTo(0,0);
    }
    jQuery( document ).ready(function() {
        if (/(iphone|ipod|ipad|android|iemobile|webos|fennec|blackberry|kindle|series60|playbook|opera\smini|opera\smobi|opera\stablet|symbianos|palmsource|palmos|blazer|windows\sce|windows\sphone|wp7|bolt|doris|dorothy|gobrowser|iris|maemo|minimo|netfront|semc-browser|skyfire|teashark|teleca|uzardweb|avantgo|docomo|kddi|ddipocket|polaris|eudoraweb|opwv|plink|plucker|pie|xiino|benq|playbook|bb|cricket|dell|bb10|nintendo|up.browser|playstation|tear|mib|obigo|midp|mobile|tablet)/.test(navigator.userAgent.toLowerCase())) {
            if(/iphone/.test(navigator.userAgent.toLowerCase()) && window.self === window.top){
                jQuery('body').css('height', '100.18%');
            }
            // add event listener on resize event (for orientation change)
            if (window.addEventListener) {
                window.addEventListener("load", readDeviceOrientation);
                window.addEventListener("resize", readDeviceOrientation);
                window.addEventListener("orientationchange", readDeviceOrientation);
            }
            //initial execution
            setTimeout(function(){readDeviceOrientation();},10);
        }
    });

    function accessWebVr(){
        unloadPlayer();

        setTimeout(function(){ loadPlayer(true); }, 100);
    }
    function accessStdVr(){
        unloadPlayer();

        setTimeout(function(){ loadPlayer(false); }, 100);
    }
    function loadPlayer(isWebVr) {
        if (isWebVr) {
            embedpano({
                id:"krpanoSWFObject"
                ,xml:"https://www.xanaduhotel.pl/spacer/indexdata/index_vr.xml"
                ,target:"panoDIV"
                ,passQueryParameters:true
                ,bgcolor:"#000000"
                ,html5:"only+webgl"
                ,focus: false
                ,vars:{skipintro:true,norotation:true}
            });
        } else {

            var isBot = /bot|googlebot|crawler|spider|robot|crawling/i.test(navigator.userAgent);
            embedpano({
                id:"krpanoSWFObject"

                ,swf:"https://www.xanaduhotel.pl/spacer/indexdata/index.swf"

                ,target:"panoDIV"
                ,passQueryParameters:true
                ,bgcolor:"#000000"
                ,focus: false
                ,html5:isBot ? "always" : "prefer"

            });
        }
        //apply focus on the visit if not embedded into an iframe
        if(top.location === self.location){
            kpanotour.Focus.applyFocus();
        }
    }
    function unloadPlayer(){
        if(jQuery('#krpanoSWFObject')){
            removepano('krpanoSWFObject');
        }
    }
    function isVRModeRequested() {
        var querystr = window.location.search.substring(1);
        var params = querystr.split('&');
        for (var i=0; i<params.length; i++){
            if (params[i].toLowerCase() === "vr"){
                return true;
            }
        }
        return false;
    }
</script>
@endpush