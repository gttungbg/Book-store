@extends('frontend.master.master')
@section('title')
    <title>{{ __('Home') }}</title>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
@endsection
@section('content')

<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book</th>
                    <th scope="col">Date</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Note</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($borrowDetail as $key => $borrow)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $borrow->books->title }}</td>
                        <td>
                            <ul>
                                <li>{{ __('Request Date') .': '. $borrow->borrows->request_date }}</li>
                                <li>{{ __('Borrow Date') .': '. $borrow->borrows->borrow_date }}</li>
                                <li>{{ __('Return Date') .': '. $borrow->borrows->return_date }}</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>{{__('Price') .': '. number_format($borrow->price) }} VND</li>
                                <li>{{__('quantity') .': '. number_format($borrow->quantity) }}</li>
                            </ul>
                        </td>
                        <td> {!! $borrow->borrows->status !!}</td>
                        <td> {{ $borrow->borrows->note }} </td>
                    </tr>
                    @endforeach
                
                </tbody>
              </table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta sunt atque possimus, inventore doloremque, laudantium distinctio quis mollitia eligendi assumenda fugit dolorum sapiente. Quam obcaecati ipsum velit explicabo aut iusto!</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet debitis aliquam atque, molestiae quasi numquam perferendis impedit blanditiis qui possimus sit a distinctio saepe! Dolorum qui voluptatibus accusamus quae quos!</div>
      </div>
</div>

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@endsection
