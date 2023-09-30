@extends('layouts.app')
@section('title')
Register - PPW
@endsection
@section('content')
<!-- Body main wrapper start -->
<div class="body-wrapper" style="background-color: #0d803d33; min-height: 100vh">
  <!-- LOGIN AREA START (Register) -->
  <div class="ltn__login-area pb-110" style="padding-top: 4rem;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <h1 class="section-title">Register <br />Your Account</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="account-login-inner">
            <form action="{{ route('register') }}" method="POST" class="ltn__form-box contact-form-box">
              @csrf
              {{-- Name --}}
              <input id="name" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required
                autocomplete="name" autofocus />
              @error('name')
              <h6 role="alert">
                <strong>{{ $message }}</strong>
              </h6>
              @enderror

              {{-- Codename --}}
              <input id="codename" type="text" name="codename" placeholder="NIM/NIDN" value="{{ old('codename') }}"
                required autocomplete="codename" autofocus />
              @error('codename')
              <h6 role="alert">
                <strong>{{ $message }}</strong>
              </h6>
              @enderror

              {{-- Email --}}
              <input id="email" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required
                autocomplete="email" autofocus />
              @error('email')
              <h6 role="alert">
                <strong>{{ $message }}</strong>
              </h6>
              @enderror

              {{-- Password --}}
              <input id="password" type="password" name="password" placeholder="Password" required />
              @error('password')
              <h6 role="alert">
                <strong>{{ $message }}</strong>
              </h6>
              @enderror

              <input id="password_confirmation" type="password" name="password_confirmation"
                placeholder="Confirm Password*" required />

              <div class="btn-wrapper">
                <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREATE ACCOUNT</button>
              </div>
            </form>
            <div class="by-agree text-center">
              <div class="go-to-btn">
                <a href="{{ route('login') }}">ALREADY HAVE AN ACCOUNT ?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- LOGIN AREA END -->
</div>
@endsection