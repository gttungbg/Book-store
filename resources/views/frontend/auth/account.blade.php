@extends('frontend.master.master')
@section('title')
<title>{{ (__('Account')) }}</title>
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
            <div class="form-btn">
              <span onclick="signIn()"> Sign In </span>
              <span onclick="signUp()"> Sign Up </span>
              <hr id="indicator" style="transform: translateX(100px);">
              <form method="POST" action="{{ route('auth.login-submit') }}" id="signInForm" name="myform" style="transform: translateX(0px);">
                @csrf
                <input type="email" placeholder="Email" name="email">
                <span id="email"></span>
                <input type="password" name="password" placeholder="*******">
                <button type="submit" class="btn">Sign In</button>
                <a href="">Forgot password</a>
              </form>

              <form action="{{route('auth.register-submit')}}" method="post" id="signUpForm" style="transform: translateX(0px);">
                @csrf
                <input type="text" placeholder="Username" name="name">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="email" placeholder="Email" name="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="text" placeholder="Address" name="address">
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password" placeholder="******" name="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input type="password" placeholder="******" name="comfirm_password">
                @error('comfirm_password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('js')
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px";
        }
        }
    </script>
    <!-- -----------js for toggle form------------------ -->
    <script>
        var signInForm = document.getElementById("signInForm");
        var signUpForm = document.getElementById("signUpForm");
        var indicator = document.getElementById("indicator");

        function signIn() {
        signUpForm.style.transform = "translateX(300px)";
        signInForm.style.transform = "translateX(300px)";
        indicator.style.transform = "translateX(0px)";
        }
        function signUp() {
        signUpForm.style.transform = "translateX(0px)";
        signInForm.style.transform = "translateX(0px)";
        indicator.style.transform = "translateX(100px)";
        }
    </script>
  <!-- -----------------js for form validation ------------------ -->
    <script>
        function formvalidate() {
        var ptrn = /^([^0-9\W]*)$/;
        if (ptrn.test(document.myform.uname.value)) {
            document.getElementById("name").textContent = "User Name is Valid";
            document.getElementById("name").style.background = "#72EF57";
            document.getElementById("name").style.fontSize = "12px";
        } else {
            document.getElementById("name").textContent = "User Name is Invalid";
            document.getElementById("name").style.background = "#EF6257";
            document.getElementById("name").style.fontSize = "12px";
        }
        }

        document.myform.uname.addEventListener("blur", formvalidate);
    </script>
@endsection
