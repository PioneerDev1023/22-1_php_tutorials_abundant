@extends('layouts.app')

@section("style")
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<section class="register-section">
    <div class="reg-image col-md-6 col-sm-12">
        <img class="reg-img" src="{{ asset('images/large/Landing/landing-slide.png') }}" alt="main image">
    </div>
    <div class="reg-area col-md-6 col-sm-12">
        <div class="back-btn">
            <a class="back-tag" href="<?= url('/'); ?>">{{ __('Back') }}</a>
        </div>
        <div class="reg-content">
            <form method="POST" class="reg-form" action="{{ route('login') }}">
                @csrf

                <h1 class="form-title fredoka">Get’s started</h1>
                <p class="form-subtitle">Please login to continue with us</p>
                <div class="row reg-input">
                    <input id="email" type="email" class="reg-text form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row reg-input">
                    <input id="password" type="password" class="reg-text form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row my-3 mx-1">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="row mb-0">
                        <button type="submit" class="btn reg-btn">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                </div>
                <p>Don 't have an account? <a href="{{ route('register') }}" class="login-link">Register</a></p>
            </form>
        </div>
    </div>
    
</Section>
@endsection
