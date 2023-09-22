@extends('layouts.guest')

@section('content')
    {{-- <div class="col-lg-6">
        <div class="auth-cover-wrapper bg-primary-100">
            <div class="auth-cover">
                <div class="title text-center">
                    <h1 class="text-primary">Bicol University<br>Center for Technology Commercialization & <br> Enterprise Development</h1>
                </div>
                <div class="cover-image">
                    <img src="{{ asset('images/auth/signin-image.svg') }}" alt="">
                </div>
                <div class="shape-image">
                    <img src="{{ asset('images/auth/shape.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="container-fluid login-container">
        <div class="row d-flex justify-content-center align-items-center vh-100">
            <div class="card col-4 mt-5 p-5 pt-4">
                <h3 class="mb-3 text-center">Login</h3>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-16 login-form mb-3">
                            <div class="input-style-1">
                                <label for="email">{{ __('Email') }}</label>
                                <input @error('email') class="form-control is-invalid" @enderror type="email" name="email" id="email" placeholder="{{ __('Email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-style-1">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="password" @error('password') class="form-control is-invalid" @enderror name="password" id="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <div class="form-check checkbox-style mb-30">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" value="" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}</label>
                            </div>
                            @if (Route::has('password.request'))
                            <div class="">
                                <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                </div>
                            </div>
                        @endif
                        </div>            
                        <div class="col-12">
                            <div class="button-group d-flex justify-content-center flex-wrap">
                                <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

    <div class="container-fluid login-container vh-100 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="form-container p-5 border">
                    <h3 class="text-center mb-5 fw-bold">Login</h3>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-style-1 mb-4">
                            <input @error('email') class="form-control is-invalid" @enderror type="email" name="email" id="email" required autocomplete="email" placeholder="Email" autofocus style="height:3rem !important;">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-style-1 mb-4">
                            <input type="password" @error('password') class="form-control is-invalid" @enderror name="password" id="password" placeholder="Password" required autocomplete="current-password" style="height:3rem !important;">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-check checkbox-style mb-5">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" value="" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <div class="button-group d-flex justify-content-center flex-wrap">
                            <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center d-flex justify-content-center align-items-center" style="height:3rem !important;">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="container-fluid g-0 d-flex justify-content-center align-items-center login-container">
        <div class="row">
            <div class="col-12">
                <div class="card form-container d-flex flex-column">
                    <div class="card-body p-5 pt-4">
                        <h3 class="text-center">Login</h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mt-3">
                                <div class="input-style-1">
                                    <label for="email">Email</label>
                                    <input @error('email') class="form-control is-invalid" @enderror type="email" name="email" id="email" required autocomplete="email" autofocus style="height: 3rem !important;">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>   

                                <div class="input-style-1">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input type="password" @error('password') class="form-control is-invalid" @enderror name="password" id="password" required autocomplete="current-password" style="height: 3rem !important;">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>   
                            <div class="mb-5 d-flex justify-content-between">
                                <div class="form-check checkbox-style">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value="" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label me-5" for="remember">
                                        remember me</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <div class="" style="margin-top:7px !important">
                                        <div class="text-start d-flex align-items-center">
                                            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="">
                                <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">Login</button>
                            </div>   
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection