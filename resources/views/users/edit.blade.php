@extends('head')

@section('content')
<main id="js-page-content" role="main" class="page-content mt-3">
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-plus-circle'></i> Редактировать
        </h1>
    </div>
    @include('message')
    {{ Form::open(['route' => ['users.update_info', 'id' => $user->id], 'method' => 'POST']) }}
        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Changing info about user {{ $user->info->name }}</h2>
                        </div>
                        <div class="panel-content">
                            <!-- username -->
                            <div class="form-group">
                                <label class="form-label" for="name">Имя</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{ $user->info->name }}">
                            </div>
                            <!-- title -->
                            <div class="form-group">
                                <label class="form-label" for="comapny">Место работы</label>
                                <input type="text" id="comapny" name="company" class="form-control" value="{{ $user->info->company }}">
                            </div>
                            <!-- tel -->
                            <div class="form-group">
                                <label class="form-label" for="telephone">Номер телефона</label>
                                <input type="text" id="telephone" name="telephone" class="form-control" value="{{ $user->info->telephone }}">
                            </div>
                            <!-- address -->
                            <div class="form-group">
                                <label class="form-label" for="address">Адрес</label>
                                <input type="text" id="address" name="address" class="form-control" value="{{ $user->info->address }}">
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                <button class="btn btn-warning">Редактировать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{ Form::close() }}
</main>
@endsection
