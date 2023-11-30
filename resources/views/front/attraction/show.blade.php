<div class="container">
    <div class="row">
        <div class="col-5">
            <img src="{{ asset('/uploads/attractions/'.$attraction->file) }}" alt="{{ $attraction->name }}" class="w-100">
        </div>
        <div class="col-7 d-flex align-items-center">
            <div class="ps-4">
                <h2>{{ $attraction->name }}</h2>
                {!! $attraction->content !!}
            </div>
        </div>
    </div>
</div>