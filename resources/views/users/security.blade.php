@extends('head')

@section('content')
<main id="js-page-content" role="main" class="page-content mt-3">
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-lock'></i> Безопасность
        </h1>
    </div>
    @include ('message')
    {{ Form::open(['route' => ['users.update_security', 'id' => $user->id]]) }}
        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Обновление эл. адреса и пароля {{$user->info->name}}</h2>
                        </div>
                        <div class="panel-content">
                            <!-- email -->
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}">
                            </div>
                            <!-- password -->
                            <div class="form-group">
                                <label class="form-label" for="password">Пароль</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <!-- password confirmation-->
                            <div class="form-group">
                                <label class="form-label" for="password_confirm">Подтверждение пароля</label>
                                <input type="password" id="password_confirm" name="password_confirmation" class="form-control">
                            </div>
                            <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                <button class="btn btn-warning">Изменить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{ Form::close() }}
</main>
@endsection
