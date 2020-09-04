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
                  <img class="mx-auto d-block" src="{{asset('images/logo.png')}}">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group ">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password confirmation">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary form-control">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card py-4 mt-2 inline">
                <h5 class="text-center">Already have account? <a class="" href="{{ route('login') }}">{{ __('Login') }}</a></h5>
            </div>
        </div>
    </div>
</div>
@endsection
