@extends('frontend.master.master')
@section('title')
<title>{{ __('All Books') }}</title>
@endsection
@section('content')
<div class="small-container">
    <div class="row row-2">
        <h2>All Ebooks</h2>
        <select>
            <option>Default sorting</option>
            <option>Sort by price</option>
            <option>Sort by popularity</option>
            <option>Sort by rating</option>
            <option>Sort by sale</option>
        </select>
    </div>

    <div class="row">
        @foreach ($books as $book )
            <div class="col-4">
                <a href="{{ route ('book_details', $book->id )}}">
                @foreach ($book->images as $bImg )
                    <img src="{{ $bImg->url }}" alt="{{ $bImg->title }}">
                @endforeach
                </a>
                <h3 style="text-align: center; margin: 10px 0 -10px 0 ">{{ $book->title }}</h3>
                <div class="single-item-caption ">
                    <a class=" btn btn-outline-danger " href=" "><i class="fa fa-shopping-cart"></i></a>
                    <a class=" pull-right" style="padding-top: 1cm">{{ $book->price }}đ</a>
                    <div class="clearfix "></div>
                </div>
            </div>
        @endforeach

    </div>
    <!-- ---------------------Youtube Video------------------- -->
    <div class="youtube-container">
        <div class="youtube-row">
        <div class="col-2">
            <h2>5 Books You Must Read If You're Serious About Success</h2>
        </div>
        <div class="col-2">
            <iframe id="youtubevideo" width="560" height="315" src="https://www.youtube.com/embed/LqJBXtG9xxk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
        </div>
    </div>

        <!-- -->
        <div class="page-btn">
        {!! $books->links() !!}
        </div>
    </div>
@endsection
