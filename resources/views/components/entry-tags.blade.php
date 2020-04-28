@props(['tags-data'])

<div class="col-12 d-flex justify-content-start">
    <div class="tags d-flex flex-row">

        <i class="fas fa-tags"></i>

        @foreach ($tagsData as $tag)
            <div class="tag">
                <a href="{{ route('entries-list-by-tag', $tag->slug) }}">
                    {{ $tag->name }}
                </a>
            </div>
        @endforeach
    </div>
</div>