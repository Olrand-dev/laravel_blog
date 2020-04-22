@props(['data'])

<div {{ $attributes->merge(['class' => 'card']) }}>

    <a href="{{ route('entry', $data->slug) }}">
        <img src="{{ asset($data->image) }}" class="card-img-top" alt="">
    </a>

    <div class="card-body">

        <h5 class="card-title">
            <a href="{{ route('entry', $data->slug) }}">
                {{ $data->title }}
            </a>
        </h5>

        <div class="card-info">
            <div class="row">

                <div class="col-12 category">
                    <a href="{{ route('entries-list-by-category', $data->category->slug) }}">
                        {{ $data->category->name }}
                    </a>
                </div>

                <div class="col-12 date">{{ $data->date }}</div>

                <div class="col-12 d-flex justify-content-start">
                    <div class="tags d-flex flex-row">
                        <i class="fas fa-tags"></i>
                        @foreach ($data->tags as $tag)
                            <div class="tag">
                                <a href="{{ route('entries-list-by-tag', $tag->slug) }}">
                                    {{ $tag->name }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="statistics col-12 d-flex justify-content-end">
                    <div class="views">
                        <i class="fas fa-eye"></i>
                        <span>{{ $data->views }}</span>
                    </div>
                    <div class="comments">
                        <i class="fas fa-comments"></i>
                        <span>{{ $data->comments_count }}</span>
                    </div>
                </div>

            </div>
        </div>

        @if ($data->excerpt !== '')
            <p class="card-text">
                {{ $data->excerpt }}
            </p>
        @endif

    </div>
</div>