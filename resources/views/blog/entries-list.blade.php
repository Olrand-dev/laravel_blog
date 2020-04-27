@extends('layouts.two-columns')

@section('title') {{ config('app.name') }} | Блог @endsection

@section('content')

    <div class="card content-box">
        
        <div class="card-body">

            {{ Breadcrumbs::render('blog') }}

            @if (in_array($listType, ['category', 'chapter', 'tag']))

                <p>
                    @if ($listType === 'category')
                        Категория
                    @elseif ($listType === 'chapter')
                        Курс
                    @elseif ($listType === 'tag')
                        Тег
                    @endif
                    : <b>{{ $options['container_name'] }}</b>
                </p>

                <entries-list-tools update-url="{{ route($routeName, $options['container_slug']) }}"
                    sort-type="{{ $sortType }}" per-page="{{ $perPage }}"></entries-list-tools>

            @else 

                <entries-list-tools update-url="{{ route($routeName) }}"
                    sort-type="{{ $sortType }}" per-page="{{ $perPage }}"></entries-list-tools>

            @endif

            <x-cards-collection :items="$entries" type="simple" />

            {{ $entries->appends(['sort' => $sortType, 'per_page' => $perPage])
                ->onEachSide(2)
                ->links() }}

        </div>

    </div>

@endsection

@section('sidebar')
    
    @include('partials.sidebar-main')

@endsection
