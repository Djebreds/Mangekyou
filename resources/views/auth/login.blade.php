@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-5 col-s-6">
                    <div class="background-image text-center">
                        <figure>
                            <img src="{{ asset('img/GrowingUp.svg') }}" alt="GrowingUp">
                            <figcaption>
                                <h4>Make your dream come true now</h4>
                                <p>Buyying and selling many product at Tohoku</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-5 col-s-6">
                    <div class="card border-0">
                        <div class="card-header-title mt-4">
                            <header class="header text-center">
                                <h3>Login</h3>
                                <p>Don't have a Tohoku account? <a href="{{ route('register') }}">Register</a></p>
                            </header>
                        </div>
                        <div class="card-body">
                            <form class="form-group form-field" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="my-1 row">
                                    <label for="email" class="col-sm-2 col-form-label">{{ __('Email Address') }}</label>
                                    <div class="col-sm-10">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="my-1 row">
                                    <label for="password" class="col-sm-2 col-form-label">{{ __('Password') }}</label>
                                    <div class="col-sm-10">
                                        <div class="inner-addon ">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                id="password" autocomplete="new-password">
                                            <i class="i-eye-slash" id="tooglePassword"></i>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <div class="field-check d-flex justify-content-between align-items-baseline">
                                        <div class="form-check ">
                                            <input class="form-check-input " type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <div class="forgot">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="button d-grid my-2">
                                    <button type="submit" class="btn btn-field">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="line my-2">
                                    <span>Or login with </span>
                                </div>
                                <div class="button d-grid">
                                    <button type="submit" class="btn btn-google d-flex justify-content-center">
                                        <i class="i-google mx-2"></i> Google
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
