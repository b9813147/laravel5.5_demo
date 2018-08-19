@extends('layouts.default')
@section('title','登入')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>登入</h5>
            </div>
            <div class="panel-body">
                {{--錯誤訊息--}}
                @include('share._errors')
                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">信箱：</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">密碼(<a href="{{ route('password.request') }}">忘記密碼</a>)</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                    </div>
                    <div class="checkbox">
                        <label for=""><input type="checkbox" name="remember">記住我</label>
                    </div>
                    <button type="submit" class="btn btn-primary">登入</button>
                </form>
                <hr>
                <p>還沒註冊帳號？<a href="{{ route('signUp') }}">現在註冊</a></p>
            </div>
        </div>
    </div>
@stop
