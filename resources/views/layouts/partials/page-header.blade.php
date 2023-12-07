<div id="page-header">
    <div class="container" @if($page->file) style="background:url({{ asset('/uploads/headers/'.$page->file) }}) no-repeat center;background-size: cover" @endif>
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('/images/svg/section-title-icon.svg') }}" alt="{{ $page->title }}">
                <h1 class="mt-4">{{ $page->title }}</h1>
            </div>
        </div>
    </div>
</div>