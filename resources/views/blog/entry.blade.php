@extends('layouts.two-columns')

@section('title') {{ config('app.name') }} | {{ $entry->title }} @endsection

@section('content')

    <div class="card content-box">
        
        <div class="card-body">

            <div class="entry-img">
                <img src="{{ asset($entry->image) }}" alt="">
            </div>

            <h1 class="entry-title">{{ $entry->title }}</h1>

            <div class="entry-info row">
                
            </div>
            
            <div class="entry-content">
                {{ $entry->content }}
            </div>

        </div>

    </div>

@endsection

@section('sidebar')
    
    @include('partials.sidebar-main') 

@endsection
