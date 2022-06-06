@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-5 col-s-6">
                    <div class="background-image text-center">
                        <figure>
                            <img src="{{ asset('img/Balloon.svg') }}" alt="Ballon">
                            <figcaption>
                                <h4>Easy Buying and Selling Only at Tohoku</h4>
                                <p>join and feel the convenience of transacting at Tohoku</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-5 col-s-6">
                    <div class="card border-0">
                        <div class="card-header-title mt-4">
                            <header class="header text-center">
                                <h3>Register Now</h3>
                                <p>Already have a account Tohoku? <a href="#">Sign-in</a></p>
                            </header>
                        </div>
                        <div class="card-body">
                            <div class="button d-grid">
                                <button type="submit" class="btn btn-google d-flex justify-content-center">
                                    <i class="i-google mx-2"></i> Google
                                </button>
                            </div>
                            <div class="line my-2">
                                <span>or register with</span>
                            </div>
                            <form class="form-group form-field" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="my-1 row">
                                    <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" placeholder="username" value="{{ old('name') }}"
                                            autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="my-1 row">
                                    <label for="email" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" placeholder="example@tohoku.com"
                                            value="{{ old('email') }}" autocomplete="email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
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
                                <div class="my-1 row">
                                    <label for="password_confirm"
                                        class="col-sm-2 col-form-label">{{ __('Confirm Password') }}</label>
                                    <div class="col-sm-10">
                                        <input id="password_confirm" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="button d-grid my-4">
                                    <button type="submit" class="btn btn-field">Register</button>
                                </div>
                            </form>
                            <div class="policy mb-3">
                                <div class="row justify-content-center">
                                    <p class="text-center">
                                        By registering, you agree to our
                                    </p>
                                    <p class="text-center">
                                        <span><a href="#"> Terms of Service,</a></span>
                                        and
                                        <span><a href="#"> Privacy Policy </a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
