@extends('layouts.two-columns')

@section('title') Главная страница @endsection

@section('content')

    <div class="card content-box">
        
        <div class="card-body">
            
            <div class="box-header">
                Some header
            </div>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur eos cupiditate 
                distinctio dolor accusamus architecto deleniti iure aspernatur aperiam, ex nobis excepturi 
                magni dolore quae ipsam repudiandae cumque neque?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur eos cupiditate 
                distinctio <a href="#">dolor accusamus architecto</a> deleniti iure aspernatur aperiam, ex nobis excepturi 
                magni dolore quae ipsam repudiandae cumque neque?
            </p>

            <button type="button" class="btn btn-main">Primary</button>
            <button type="button" class="btn lg btn-main">Primary</button>
            <button type="button" class="btn btn-add">Additional</button>
            <button type="button" class="btn lg btn-add">Additional</button>
            <button type="button" class="btn btn-def">Additional</button>
            <button type="button" class="btn lg btn-def">Additional</button>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur eos cupiditate 
                distinctio dolor accusamus architecto deleniti iure aspernatur aperiam, ex nobis excepturi 
                magni dolore quae ipsam repudiandae cumque neque?
            </p>

        </div>

    </div>

@endsection

@section('sidebar')
    
    <div class="card content-box">

        <div class="card-body">
            sidebar
        </div>

    </div>  

@endsection
