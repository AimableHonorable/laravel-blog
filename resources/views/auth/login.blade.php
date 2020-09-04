@extends('layouts.bootsrap')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5 p-2">
      <img src="{{asset('images/ig_login.png')}}">
    </div>
    <div class="col-md-4 py-4">
      <div class="card">
        <div class="p-3">
          <img class="mx-auto d-block w-full" src="{{asset('images/logo.png')}}">
        </div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
            </div>

            <div class="form-group mb-0">
              <button type="submit" class="btn btn-primary form-control">
                {{ __('Login') }}
              </button>
            </div>
            <div>
              @if (Route::has('password.request'))
                <a class="btn btn-link text-center w-full d-block" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
              @endif
            </div>
          </form>
        </div>
      </div>
      <div class="card py-4 mt-2 inline">
        <h5 class="text-center">Don't have account? <a class="" href="{{ route('register') }}">{{ __('Signup') }}</a></h5>
      </div>
    </div>
  </div>
</div>
@endsection
