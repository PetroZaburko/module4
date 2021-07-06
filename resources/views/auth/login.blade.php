@extends('head')

@section('content')
    <body>
        <div class="blankpage-form-field">
            <div class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                    <img src="{{asset('img/logo.png')}}" alt="SmartAdmin WebApp" aria-roledescription="logo">
                    <span class="page-logo-text mr-1">Учебный проект</span>
                    <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                </a>
            </div>
            <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
                <div class="message-info">
                    @if(session('message'))
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @else
                            <div class="alert alert-danger">
                                {{session('message')}}
                            </div>
                        @endif
                    @endif
                </div>
                <form action="{{ route('login') }}" method="POST" aria-label="{{ __('Login') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
                        <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">{{ __('Password') }}</label>
                        <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group text-left">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default float-right">{{ __('Login') }}</button>
                </form>
            </div>
            <div class="blankpage-footer text-center">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
               <a class="btn btn-link" href="{{route('register')}}">
                   {{__('Register')}}
            </div>
        </div>
        <video poster="{{asset('img/backgrounds/clouds.png')}}" id="bgvid" playsinline autoplay muted loop>
            <source src="{{asset('media/video/cc.webm')}}" type="video/webm">
            <source src="{{asset('media/video/cc.mp4')}}" type="video/mp4">
        </video>
        <script src="{{asset('js/vendors.bundle.js')}}"></script>
    </body>
@endsection
