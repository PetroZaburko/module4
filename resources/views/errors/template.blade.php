@extends('head')

@section('content')
    <div class="page-wrap d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <span class="display-1 d-block">
                        @yield('code')
                    </span>
                    <div class="mb-4 lead">
                        @yield('message')
                    </div>
                    <a href="{{ URL::to('/') }}" class="btn btn-link">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
