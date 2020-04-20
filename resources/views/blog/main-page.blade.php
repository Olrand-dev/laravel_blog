@extends('layouts.two-columns')

@section('title') Главная страница @endsection

@section('content')

    <div class="card content-box">
        
        <div class="card-body">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <i class="fas fa-home home-icon"></i>
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
            
            <div class="box-header">
                Some header
            </div>

            <h1>Header 1</h1>
            <h2>Header 2</h2>
            <h3>Header 3</h3>
            <h4>Header 4</h4>

            <p>
                Lorem <b>ipsum dolor sit amet</b> consectetur <i>adipisicing elit</i>. Officiis tenetur eos cupiditate 
                distinctio <b>dolor accusamus</b> architecto deleniti iure aspernatur aperiam, ex nobis excepturi 
                magni dolore quae ipsam repudiandae cumque neque?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur eos cupiditate 
                distinctio <a href="#">dolor accusamus architecto</a> deleniti iure aspernatur aperiam, ex nobis excepturi 
                magni dolore quae ipsam repudiandae cumque neque?
            </p>

            <div class="helper-box danger">

                <i class="box-icon fas fa-exclamation-circle"></i>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic adipisci soluta non doloribus quos 
                    suscipit minima voluptatibus a excepturi temporibus pariatur, enim repellat praesentium tempore 
                    laudantium necessitatibus iure aliquid similique.
                </p>
            </div>

            <div class="helper-box warning color-border">

                <i class="box-icon fas fa-exclamation-circle"></i>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic adipisci soluta non doloribus quos 
                    suscipit minima voluptatibus a excepturi temporibus pariatur, enim repellat praesentium tempore 
                    laudantium necessitatibus iure aliquid similique.
                </p>
            </div>

            <div class="helper-box info">

                <i class="box-icon fas fa-question-circle"></i>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic adipisci soluta non doloribus quos 
                    suscipit minima voluptatibus a excepturi temporibus pariatur, enim repellat praesentium tempore 
                    laudantium necessitatibus iure aliquid similique.
                </p>
            </div>


            <pre class="line-numbers"><code class="language-sass">
// Fonts
@import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700");

// Variables
@import 'variables';

// CSS
@import url('../css/drop-down-menu.css');


@mixin all-transition($duration, $type: linear) {
    transition: all $duration $type;
}
@mixin base-link-style {
    a {
        color: $brand-orange;
        font-weight: 400;

        &:hover {
            color: $brand-red;
        }
    }
}


body {
    color: $dark;
    background-color: #f2f4f5;
}

body,
h1,
h2,
h3,
h4,
h5,
h6,
p,
a {
    font-family: $font-family-sans-serif;
}

a:hover {
    text-decoration: none;
}

b {
    font-weight: 500;
}

i {
    font-weight: 200;
}
            </code></pre>

            <pre class="line-numbers"><code class="language-php">
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
            </code></pre>


            <button type="button" class="btn btn-main">
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Primary
            </button>
            <button type="button" class="btn md btn-main">
                <span class="spinner-border spinner-border-md" role="status" aria-hidden="true"></span>
                Primary
            </button>
            <button type="button" class="btn lg btn-main">
                <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
                Primary
            </button>
            <button type="button" class="btn btn-add">Additional</button>
            <button type="button" class="btn lg btn-add">Additional</button>
            <button type="button" class="btn btn-def">Additional</button>
            <button type="button" class="btn lg btn-def">Additional</button>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis tenetur eos cupiditate 
                distinctio dolor accusamus architecto deleniti iure aspernatur aperiam, ex nobis excepturi 
                magni dolore quae ipsam repudiandae cumque neque?
            </p>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                    <small id="emailHelpBlock" class="form-text text-green">
                        Good email!
                    </small>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                    <small id="passwordHelpBlock" class="form-text text-grey">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </small>
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                <small id="emailHelpBlock" class="form-text text-red">
                    Validation error!
                </small>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" readonly>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                      </div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert—check it out!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-success" role="alert">
                        A simple success <a href="#" class="alert-link">an example link</a> alert—check it out!
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-danger" role="alert">
                        A simple danger <a href="#" class="alert-link">an example link</a> alert—check it out!
                    </div>
                </div>
            </div>



            <div class="content-collection d-flex justify-content-between">

                <div class="card col-md-3">

                    <a href="#">
                        <img src="{{ asset('img/card_img.jpg') }}" class="card-img-top" alt="">
                    </a>

                    <div class="card-body">

                        <h5 class="card-title">
                            <a href="#">Card title header text</a>
                        </h5>

                        <div class="card-info">
                            <div class="row">

                                <div class="col-12 d-flex justify-content-between">
                                    <div class="category">
                                        <a href="#">category</a>
                                    </div>
                                    <div class="date">30.03.20</div>
                                </div>

                                <div class="col-12 d-flex justify-content-start">
                                    <div class="tags d-flex flex-row">
                                        <i class="fas fa-tags"></i>
                                        <div class="tag"><a href="#">tag1</a></div>
                                        <div class="tag"><a href="#">tag2</a></div>
                                        <div class="tag"><a href="#">tag3</a></div>
                                    </div>
                                </div>

                                <div class="statistics col-12 d-flex justify-content-end">
                                    <div class="views">
                                        <i class="fas fa-eye"></i>
                                        <span>1200</span>
                                    </div>
                                    <div class="comments">
                                        <i class="fas fa-comments"></i>
                                        <span>24</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>

                    </div>
                </div>
            </div>


            <nav class="d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link inactive" href="#"><i class="fas fa-angle-right"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></a></i></li>
                </ul>
            </nav>

        </div>

    </div>

@endsection

@section('sidebar')
    
    <div class="card content-box">

        <div class="card-body">
            
            <div class="box-header">
                Разделы
            </div>
            
            <nav class="vertical-menu collapse show d-flex">
                <ul class="nav flex-column flex-nowrap overflow-hidden">

                    <li class="nav-item">

                        <div class="nav-link marker-blue collapsed d-flex justify-content-between" 
                            data-toggle="collapse" data-target="#submenu1">
                            Reports
                            <i class="icon open fas fa-angle-down"></i>
                            <i class="icon closed fas fa-angle-up"></i>
                        </div>

                        <div class="collapse" id="submenu1" aria-expanded="false">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link flat" href="#">Orders</a>
                                </li>

                                <li class="nav-item">

                                    <div class="nav-link collapsed inner d-flex justify-content-between" 
                                        data-toggle="collapse" data-target="#submenu1sub1">
                                        Customers
                                        <i class="icon open fas fa-angle-down"></i>
                                        <i class="icon closed fas fa-angle-up"></i>
                                    </div>

                                    <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                        <ul class="nav flex-column">

                                            <li class="nav-item">
                                                <a class="nav-link flat" href="#">Daily</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link flat" href="#">Dashboard</a>
                                            </li>

                                        </ul>
                                    </div>

                                </li>

                            </ul>
                        </div>

                    </li>
                    
                </ul>
            </nav>

            <div class="box-header">
                Теги
            </div>

            <div class="tags-box">
                <a href="#" class="tag">tag 1 (5)</a>
                <a href="#" class="tag">tag 2 (5)</a>
                <a href="#" class="tag">tag 3 (5)</a>
                <a href="#" class="tag">tag 4 (5)</a>
                <a href="#" class="tag">tag 5 (5)</a>
                <a href="#" class="tag">tag 6 (5)</a>
                <a href="#" class="tag">ndjndf jdfnkjd (5)</a>
                <a href="#" class="tag">djgndgjdj (5)</a>
                <a href="#" class="tag">jhbdgbdfj jfbd dfjnj (5)</a>
            </div>

        </div>

    </div>  

@endsection
