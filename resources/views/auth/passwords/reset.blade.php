@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-5 col-s-6">
                    <div class="background-image text-center">
                        <figure>
                            <img src="{{ asset('img/WebSecurity.svg') }}" alt="websecurity">
                        </figure>
                    </div>
                </div>
                <div class="col-5 col-s-6">
                    <div class="card border-0">
                        <div class="card-header-title mt-4">
                            <header class="header text-center">
                                <h3>Reset Password</h3>
                            </header>
                        </div>
                        <div class="card-body">
                            <div class="button d-grid">
                                <form class="form-group form-field" method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="my-1 row">
                                        <label for="email"
                                            class="col-sm-2 col-form-label">{{ __('Email Address') }}</label>
                                        <div class="col-sm-10">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $email ?? old('email') }}" required autocomplete="email"
                                                autofocus>

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
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password">
                                                <i class="i-eye-slash" id="tooglePassword"></i>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-1 row">
                                        <label for="password-confirm"
                                            class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>
                                        <div class="col-sm-10">
                                            <input id="password-confirm" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password_confirmation" autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="button d-grid my-4">
                                        <button type="submit" class="btn btn-field">Reset Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
