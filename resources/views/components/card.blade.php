@props(['data', 'parent-container'])

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

                @if (isset($parentContainer) and $parentContainer === 'chapter')
                    <div class="col-12 chapter">
                        <a href="{{ route('entries-list-by-chapter', $data->chapter->slug) }}">
                            <i class="fas fa-book"></i>
                            {{ $data->chapter->name }}
                        </a>
                    </div>  
                @else 
                    <div class="col-12 category">
                        <a href="{{ route('entries-list-by-category', $data->category->slug) }}">
                            <i class="fas fa-folder"></i>
                            {{ $data->category->name }}
                        </a>
                    </div>
                @endif

                <div class="col-12 date">{{ $data->date }}</div>

                <x-entry-tags :tags-data="$data->tags" />

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