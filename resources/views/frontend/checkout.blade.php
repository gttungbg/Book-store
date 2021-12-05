@extends('frontend.master.master')
@section('title')
    <title>{{ __('Home') }}</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('frontend/css/comment.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/error.css') }}">

@endsection
@section('content')

<div class=" container-fluid my-5 ">
    <div class="row justify-content-center ">
        <div class="col-xl-10">
            <div class="card shadow-lg ">
                <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                    <div class="col">
                        <p class="text-muted space mb-0 shop"> Shop No.78618K</p>
                        <p class="text-muted space mb-0 shop">Store Locator</p>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success solid alert-square mt-3 notification">
                        <strong>Success</strong> {{ __(session('success')) }}
                    </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger solid alert-square">
                            <strong>Success</strong> {{ __(session('danger')) }}
                        </div>
                    @endif 
                </div>
            
               
                <div class="row justify-content-around">
                    <div class="col-md-5">
                        <div class="card border-0">
                            <div class="card-header pb-0">
                                <h2 class="card-title space ">Checkout</h2>
                                <p class="card-text text-muted mt-4 space">SHIPPING DETAILS</p>
                                <hr class="my-0">
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-auto mt-0">
                                        <p><b>BBBootstrap Team Vasant Vihar 110020 New Delhi India</b></p>
                                    </div>
                                    <div class="col-auto">
                                        <p><b>BBBootstrap@gmail.com</b> </p>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <p class="text-muted mb-2">PAYMENT DETAILS</p>
                                        <hr class="mt-0">
                                    </div>
                                </div>
                                <form action="{{ route('checkout.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group"> 
                                        <label for="borrow_date" class="small text-muted mb-1">{{ __('Borrow Date') }}</label> 
                                        <input type="date" class="form-control form-control-sm" name="borrow_date" id="borrow_date" aria-describedby="helpId" placeholder="BBBootstrap Team"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="return_date" class="small text-muted mb-1">{{ __('Return Date') }}</label> 
                                        <input type="date" class="form-control form-control-sm" name="return_date" id="return_date" aria-describedby="helpId" placeholder="4534 5555 5555 5555"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="deposit" class="small text-muted mb-1">{{ __('Deposit') }}</label> 
                                        <input type="number" class="form-control form-control-sm" name="deposit" id="deposit" aria-describedby="helpId" placeholder="4534 5555 5555 5555"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="note" class="small text-muted mb-1">{{ __('Note') }}</label> 
                                        <textarea name="note" id="note" cols="3" rows="3"></textarea>
                                    </div>
                                    <div class="row mb-md-5">
                                        <div class="col"> 
                                            <button type="sub,ot" name="" id="" class="btn btn-lg btn-block ">{{  __('Submit') }}</button> 
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    {{-- CART --}}
                    <div class="col-md-5">
                        <div class="card border-0 ">
                            <div class="card-header card-2">
                                <p class="card-text text-muted mt-md-4 mb-2 space">YOUR ORDER <span class=" small text-muted ml-2 cursor-pointer">EDIT SHOPPING BAG</span> </p>
                                <hr class="my-2">
                            </div>
                            <div class="card-body pt-0">
                                @foreach ($carts as $cart)
                                <div class="row justify-content-between">
                                    <div class="col-auto col-md-7">
                                        <div class="media flex-column flex-sm-row">
                                            <img class=" img-fluid " src="https://i.imgur.com/6oHix28.jpg" width="62" height="62">
                                            <div class="media-body my-auto">
                                                <div class="row ">
                                                    <div class="col">
                                                        <p class="mb-0"><b>{{ $cart['title'] }}</b></p>
                                                        <small class="text-muted">{{ number_format($cart['price']) }} VND</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto">
                                        <p class="boxed-1">{{ $cart['quantity'] }}</p>
                                    </div>
                                    <div class="pl-0 flex-sm-col col-auto my-auto">
                                        <p><b>{{ number_format($cart['quantity'] * $cart['price']) }} VND</b></p>
                                    </div>
                                </div>
                                <hr class="my-2">
                                @endforeach
                                <div class="row ">
                                    <div class="col">
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="mb-1"><b>Subtotal</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>179 SEK</b></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p><b>Total</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>537 SEK</b></p>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection

