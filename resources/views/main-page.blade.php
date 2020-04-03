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
            <button type="button" class="btn md btn-main">Primary</button>
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


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
