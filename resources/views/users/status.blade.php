@extends('head')

@section('content')
<main id="js-page-content" role="main" class="page-content mt-3">
    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-sun'></i> Установить статус
        </h1>
    </div>
    {{ Form::open(['route' => ['users.update_status', 'id' => $user->id], 'method' => 'POST']) }}
        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-container">
                        <div class="panel-hdr">
                            <h2>Changing status for user {{ $user->info->name }}</h2>
                        </div>
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- status -->
                                    <div class="form-group">
                                        <label class="form-label" for="status_id">Выберите статус</label>
                                        <select class="form-control" id="status_id" name="status_id">
                                            @foreach($statuses as $status)
                                                <option value="{{ $status->id }}" {{ $status->id == $user->status_id ? 'selected' : '' }}>{{ $status->status }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3 d-flex flex-row-reverse">
                                    <button class="btn btn-warning">Set Status</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{ Form::close() }}
</main>
@endsection
