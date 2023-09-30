@extends('layouts.app')
@section('title')
Login - PPW
@endsection

@section('navbar')
NoNavbar
@endsection

@section('content')
<!-- Body main wrapper start -->
<div class="body-wrapper" style="background-color: #0d803d33; min-height: 100vh">
  <!-- LOGIN AREA START -->
  <div class="ltn__login-area">
    <div class="container">
      <div class="row" style="padding-top: 4rem;">
        <div class="col-lg-12">
          <div class="section-title-area text-center">
            <h1 class="section-title">Sign In <br />To Your Account</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="account-login-inner">
            <form action="{{ route('login') }}" method="POST" class="ltn__form-box contact-form-box">
              @csrf
              <input id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
              @error('email')
              <h6 role="alert">
                <strong>{{ $message }}</strong>
              </h6>
              @enderror

              <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password"/>
              @error('password')
              <h6 role="alert">
                <strong>{{ $message }}</strong>
              </h6>
              @enderror

              <div class="btn-wrapper mt-0">
                <button class="theme-btn-1 btn btn-block" type="submit">SIGN IN</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="account-create text-center pt-50">
            <h4>DON'T HAVE AN ACCOUNT?</h4>
            <div class="btn-wrapper">
              <a href="{{ route('register') }}" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection