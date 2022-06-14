{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.auth.main')

@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card">
                        <div class="card-body row p-4 justify-content-center">
                            <img class="image-email" src="{{ asset('img/NewMessages.svg') }}" alt="">
                            <div class="text-center">
                                <h4 class="text-center">Select Verification Method</h4>
                            </div>
                            <div class="row g-2">
                                <button type="submit" class="btn btn-verification mx-auto text-start hstack gap-2 my-2">
                                    <i class="i-email ms-2"></i>
                                    <header class="email">
                                        <h6 class="m-0">Email</h6>
                                        <p><small>refi.ahmad.fauzan@gmail.com</small></p>
                                    </header>
                                </button>
                                <button type="submit" class="btn btn-verification mx-auto text-start hstack gap-2 my-2">
                                    <i class="i-phone ms-2"></i>
                                    <div class="email ">
                                        <h6 class="m-0">Phone Number</h6>
                                        <p><small>+62 895804199353</small></p>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="text-center">Pilih Metode Verifikasi</h3>
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <form class="form-field" method="POST" action="">
                            @csrf
                            <button type="submit" class="btn btn-field">Email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
