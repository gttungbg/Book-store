@extends('frontend.master.master')
@section('title')
<title>{{ (__('Login')) }}</title>
@endsection
@section('content')
<div class="account-page">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <img src="{{ asset('frontend/images/header-pic.png') }}" alt="Header-Pic" width="50%">
        </div>
        <div class="col-2">
            <div class="form-container">
            {{-- <div class="form-btn"> --}}
                <span > Sign In </span>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                    <form method="POST" action="{{ route('auth.login-submit') }}">
                        @csrf
                        
                        <input type="email" class="form-control" name="email" placeholder="xyz@gmail.com" />

                        <input type="password" class="form-control"  name="password" id="" placeholder="******">
                       
                        <button type="submit" class="btn btn-outline-primary">Login </button>
                        <a href="{{ route ('auth.register')}}" class="text-center">Register a new membership</a>
                    </form>
                </div>
                <div class="">
                    
                </div>
            </div>
                    <!-- /.login-card-body -->
            </div>
        </div>
    </div>
</div>
@endsection

