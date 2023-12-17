@extends('layouts.page', ['body_class' => 'homepage no-bottom'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)
@section('seo_robots', $page->meta_robots)

@section('pageheader')
    @include('layouts.partials.page-header', ['title' => $page->title, 'header_file' => $page->file])
@stop

@section('content')
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title text-center"><span class="text-blue">Atrakcje turystyczne</span> <br>rozrywka na każdą pogodę</h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12 col-xl-8">
                    <p>Zwiedzaj, poznawaj, odkrywaj...</p>
                    <p>Xanadu Resort to doskonała baza wypadowa do pobliskich atrakcji regionu.</p>
                    <p>Sprawdź, co warto zobaczyć będąc w okolicy:</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($attractions as $a)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="attraction-item">
                            <a href="#" data-id="{{ $a->id }}"><img src="{{ asset('/uploads/attractions/'.$a->file) }}" alt="{{ $a->name }}"></a>
                            <h3>{{ $a->name }}</h3>
                            <div class="attraction-item-desc">
                                <div class="attraction-item-short">
                                    <p>{{ $a->short }}</p>
                                    <a href="#" class="btn btn-theme" data-id="{{ $a->id }}">CZYTAJ WIĘCEJ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="modal" id="attractionModal">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                </div>
                <div class="modal-body" id="modalContent"></div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('.attraction-item a').click(function(event) {
            event.preventDefault();
            const attractionId = $(this).data('id');
            const modal = new bootstrap.Modal(document.getElementById('attractionModal'));
            $.ajax({
                url: '/pl/atrakcje-regionalne/'+attractionId,
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Content-Type': 'application/json'
                },
                success: function(data) {
                    $('#modalContent').html(data);
                    modal.show();
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        });
    });
</script>
@endpush