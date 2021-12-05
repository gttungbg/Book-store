@extends('frontend.master.master')
@section('title')
    <title>{{ __('Home') }}</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/comment.css') }}">
@endsection
@section('content')

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                @foreach($bookDetail->images as $key => $bookImage)
                    @if($key == 0)
                        <img src="{{ $bookImage->url }}" alt="{{ $bookImage->title }}" width="68%"/>
                    @endif
                @endforeach
            </div>
            <div class="col-2">
                <h1>{{ __($bookDetail->title)  }}</h1>
                <h4>{{ (__('ISBN')) }}: {{ $bookDetail->isbn }}</h4>
                <h4>{{ __('Price') }}: {{ number_format($bookDetail->price) }} {{ __('VNĐ') }}</h4>
                <p>
                    {{ (__('Author')) }}:
                    @foreach($bookDetail->author as $bookAuthor)
                        {{ $bookAuthor->name.',' }}
                    @endforeach
                </p>
                <p>{{ (__('Publisher')) }}: {{ $bookDetail->publisher->name }}</p>
                <p>{{ (__('Publish date')) }}: {{ $bookDetail->publish_date }}</p>
                <p>{{ (__('Page')) }}: {{ $bookDetail->number_of_page }}</p>
                <p>{{ (__('Size')) }}: {{ $bookDetail->size }}</p>
                <input type="number" value="1"/>
                <a href="#" class="btn add_to_cart" data-url="{{ route('cart.add',['id' => $bookDetail->id]) }}">Add To Cart</a>
                <h3>{{ __('Book Details') }} <i class="fa fa-indent"></i></h3>
                <br/>
                <p>
                    {{ $bookDetail->description }}
                </p>
            </div>
        </div>
    </div>
    <div class="container comment">
        <form action="{{ route('comment.post',['idBook' => $bookDetail->id]) }}" method="post">
            @csrf
           <label for="comment">{{ __('Chào'.' '.auth()->user()->name) }}</label>
            <textarea id="comment" name="comment" placeholder="Write something.." rows="3"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="container d-flex justify-content-center mb-100">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Comments</h4>
                        <h6 class="card-subtitle">Latest Comments section by users</h6>
                    </div>
                    <div class="comment-widgets m-b-20">
                        @foreach($comments as $comment)
                            @if($comment->book_id == $bookDetail->id)
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><span class="round"><img src="https://i.imgur.com/uIgDDDd.jpg"
                                                                              alt="user"
                                                                              width="50"></span></div>
                                    <div class="comment-text w-100">
                                        <h5>{{ $comment->users->name }}</h5>
                                        <div class="comment-footer"><span class="date">{{ $comment->created_at }}</span>
                                            <span
                                                class="label label-info">Pending</span> <span class="action-icons"> <a
                                                    href="#"
                                                    data-abc="true"><i
                                                        class="fa fa-pencil"></i></a> <a href="#" data-abc="true"><i
                                                        class="fa fa-rotate-right"></i></a> <a href="#" data-abc="true"><i
                                                        class="fa fa-heart"></i></a> </span></div>
                                        <p class="m-b-5 m-t-10" style="width: 1230px">{{ $comment->comment }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{ asset('frontend/js/addtocart.js') }}"></script>
@endsection
