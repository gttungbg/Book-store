@extends('frontend.master.master')
@section('title')
    <title>{{ __('Home') }}</title>
@endsection

@section('content')
@include('frontend.layouts.sidebar')
    <!----------------featured Books -------------------->
    <div class="small-container">
        <h2 class="title">Featured Titles</h2>
        <div class="row">
            <div class="col-4">
                <a href="">
                    <img src="{{ asset('frontend/images/Book 4.jpg') }}" alt="Book 4"
                    /></a>
                <a href="">
                    <h4>Anna Karenina</h4>
                </a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.500</p>
            </div>
        </div>
        <h2 class="title">Bestsellers</h2>
        <div class="row">
            @foreach ($book_view as $b_view )
                <div class="col-4">
                    <a href="{{ route ('book_details', $b_view->id )}}">
                        @foreach($b_view->images as $key => $bookImage)
                            @if($key == 0)
                                <img src="{{ asset($bookImage->url) }}" alt="{{ $bookImage->title }}"/>
                            @endif
                        @endforeach
                        </a>
                        <h3 style="text-align: center; margin: 10px 0 -10px 0 ">{{ $b_view->title }}</h3>
                        <div class="single-item-caption ">
                            <a href="#" class="btn btn-outline-danger add_to_cart" data-url="{{ route('cart.add',['id' => $b_view->id]) }}"><i class="fa fa-shopping-cart"></i></a>
                            {{-- <a href="#" class="btn add_to_cart" data-url="{{ route('cart.add',['id' => $bookDetail->id]) }}">Add To Cart</a> --}}
                            <a class=" pull-right" style="padding-top: 1cm">{{ number_format($b_view->price) }} VND</a>
                            <div class="clearfix "></div>
                        </div>
                </div>
            @endforeach
        </div>
        <div>{{ $book_view->links() }}</div>

    </div>
    <!------------------offer ------------>
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('frontend/images/offer-Book.jpg') }}" class="offer-img" alt=""/>
                </div>
                <div class="col-2">
                    <p>Available on EbookStore</p>
                    <br/>
                    <h2>I Don't Want To Die Poor</h2>
                    <br/>
                    <small>
                        Making Michael Arceneaux's I Don't Want to Die Poor required
                        reading in high schools across the country would help a lot of
                        young people think twice about the promise that going to college
                        at any cost is the only path to upward social mobility.
                    </small>
                    <a href="#" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------testimonial-------------------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure
                        debitis perferendis, necessitatibus ipsum quia ad sit amet.
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <img src="{{ asset('frontend/images/Book 15.jpg') }}" alt="zeeshansaeed"/>
                    <h3>Your Name</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------publishers------------------- -->
    <div class="publishers">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('frontend/images/publisher1.jpg') }}" alt=""/>
                </div>
                <div class="col-5">
                    <img src="{{ asset('frontend/images/publisher2.png') }}" alt=""/>
                </div>
                <div class="col-5">
                    <img src="{{ asset('frontend/images/publisher3.jpeg') }}" alt=""/>
                </div>
                <div class="col-5">
                    <img src="{{ asset('frontend/images/publisher4.jpg') }}" alt=""/>
                </div>
                <div class="col-5">
                    <img src="{{ asset('frontend/images/publisher5.jpg') }}" alt=""/>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('frontend/js/addtocart.js') }}"></script>
@endsection
