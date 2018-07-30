@extends('layouts.default')
@section('title', 'laravel5.5_Demo-註冊')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>SignUp</h5>
            </div>
            <div class="panel-body">
                {{--錯誤訊息--}}
                @include('share._errors')
                <form action="{{ route('users.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>名稱：</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>信箱：</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
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
                    <button type="submit" class="btn btn-primary">註冊</button>
                </form>
            </div>
        </div>
    </div>

@stop
