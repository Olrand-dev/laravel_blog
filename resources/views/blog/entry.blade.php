@extends('layouts.two-columns')

@section('title') {{ config('app.name') }} | {{ $entry->title }} @endsection

@section('content')

    <div class="card content-box">
        
        <div class="card-body">

            <div class="row entry">

                <div class="col-md-9 entry-img">
                    <img src="{{ asset($entry->image) }}" alt="">
                </div>

                <div class="col-md-3 entry-info row">

                    <div class="date col-12">
                        <i class="fas fa-calendar-alt"></i>
                        {{ $entry->date }}
                    </div>
                    <div class="views col-12">
                        <i class="fas fa-eye"></i>
                        {{ $entry->views }}
                    </div>
                    <div class="comments col-12">
                        <i class="fas fa-comments"></i>
                        {{ $entry->comments_count }}
                    </div>
                    <div class="category col-12">
                        <i class="fas fa-folder"></i>
                        <a href="{{ route('entries-list-by-category', $entry->category->slug) }}">
                            {{ $entry->category->name }}
                        </a>
                    </div>
                    <div class="chapter col-12">
                        <i class="fas fa-book"></i>
                        <a href="{{ route('entries-list-by-chapter', $entry->chapter->slug) }}">
                            {{ $entry->chapter->name }}
                        </a>
                    </div>

                    <x-entry-tags :tags-data="$entry->tags" />

                </div>

                <h1 class="col-12 entry-title">{{ $entry->title }}</h1>
            
                <div class="col-12 entry-content">
                    {{ $entry->content }}
                </div>

                {{-- todo -> comments --}}

            </div>

        </div>

    </div>

@endsection

@section('sidebar')
    
    @include('partials.sidebar-main') 

@endsection
