<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Wyślij zapytanie o dostępność</h2>
        </div>
    </div>
    <form class="row mt-4 mt-lg-5 justify-content-center" method="get" action="{{ route('reservation') }}">
        <div class="col-12 col-md-4 col-lg-3 col-xxl-2">
            <div class="position-relative">
                <label for="dataStart"><i class="las la-calendar"></i></label>
                <input type="text" name="form_data_start" value="" id="dataStart" placeholder="Data przyjazdu" class="datepicker">
            </div>
        </div>
        <div class="mt-3 mt-md-0 col-12 col-md-4 col-lg-3 col-xxl-2">
            <div class="position-relative">
                <label for="dataEnd"><i class="las la-calendar"></i></label>
                <input type="text" name="form_data_end" value="" id="dataEnd" placeholder="Data odjazdu" class="datepicker">
            </div>
        </div>
        <div class="mt-3 mt-md-0 col-12 col-md-4 col-lg-3 col-xxl-2">
            <div class="position-relative">
                <label for="roomType"><i class="las la-key"></i></label>
                <select class="form-select" name="form_room_type" id="roomType">
                    <option value="" selected>Domek lub pokój</option>
                    <option value="1">Pokój</option>
                    <option value="2">Domek</option>
                </select>
            </div>
        </div>
        <div class="mt-3 mt-lg-0 col-12 col-lg-3 col-xxl-2">
            <button>WYŚLIJ ZAPYTANIE</button>
        </div>
    </form>
</div>
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
    </script>
@endpush