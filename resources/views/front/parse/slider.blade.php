@if($list->count() > 0)
<div class="sliderWrapper m-2">
    <ul class="list-unstyled mb-0 slider-mini">
        @foreach ($list as $p)
            <li>
                <a href="{{asset('uploads/gallery/images/'.$p->file) }}" class="swipebox" rel="gallery-1">
                <picture>
                    <source type="image/webp" srcset="{{asset('uploads/gallery/images/webp/'.$p->file_webp) }}">
                    <source type="image/jpeg" srcset="{{asset('uploads/gallery/images/'.$p->file) }}">
                    <img src="{{asset('uploads/gallery/images/'.$p->file) }}" alt="{{ $p->name }}">
                </picture>
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endif
