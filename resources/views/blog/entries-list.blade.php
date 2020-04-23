@extends('layouts.two-columns')

@section('title') {{ config('app.name') }} | Блог @endsection

@section('content')

    <div class="card content-box">
        
        <div class="card-body">

            {{ Breadcrumbs::render('blog') }}

            <ul>
                @foreach ($entries as $entry)
                    <li>
                        {{ $entry->title }}
                    </li>
                @endforeach
            </ul>

            {{ $entries->appends(['sort' => $sortType, 'per_page' => $perPage])
                    ->onEachSide(2)
                    ->links() }}

        </div>

    </div>

@endsection

@section('sidebar')
    
    @include('partials.sidebar-main')

@endsection
