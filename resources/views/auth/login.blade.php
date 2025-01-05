@extends('back-end.layouts.app')

@section('content')


<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('templeate/src/assets/images/logos/dark-logo.svg') }}" width="180" alt="">
                </a>
                <p class="text-center">Selamat Datang</p>

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
                                    <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="container">
                            <div class="col-md-6 offset-md-4 d-flex align-items-center justify-content-between mb-4">
                                <button type="submit" class="btn btn-primary rounded-2 w-50 me-2">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn btn-success rounded-2 w-50 col-md-6 justify-content-between me-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                           
                            <div class="col-md-6 offset-md-4  d-flex align-items-center justify-content-between mb-4">
                                
                                @if (Route::has('password.request'))
                                    <a class="btn btn-outline-secondary rounded-2 w-100 col-md-6 justify-content-between" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            </div>
     
                        </div>
                        
                    </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
