@extends('layouts.default')
@section('title', 'laravel5.5_Demo-個人資料')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>更新個人資料</h5>
            </div>
            <div class="panel-body">
                {{--錯誤訊息--}}
                @include('share._errors')
                <div class="gravatar_edit">
                    <a href=http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="gravatar">
                    </a>
                </div>

                <form action="{{ route('users.update',$user->id) }}" method="POST">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>名稱：</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label>信箱：</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>密碼：</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <label>確認密碼：</label>
                        <input type="password" class="form-control" name="password_confirmation"
                               value="{{ old('password_confirmation') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">更新</button>
                </form>
            </div>
        </div>
    </div>

@stop
