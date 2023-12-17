<div class="container">
    <div class="row">
        <div class="col-12 col-md-5">
            <img src="{{ asset('/uploads/attractions/'.$attraction->file) }}" alt="{{ $attraction->name }}" class="w-100">
        </div>
        <div class="col-12 col-md-7 d-flex align-items-center">
            <div class="ps-0 ps-md-4">
                <h2>{{ $attraction->name }}</h2>
                {!! $attraction->content !!}
            </div>
        </div>
    </div>
</div>