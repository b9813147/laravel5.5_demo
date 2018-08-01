@extends('layouts.default')
@section('title', 'laravel5.5_Demo-主頁')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            CRUD TEST <a href="#">Laravel Demo</a> Demo。
        </p>
        <p>
            show DEMO。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signUp') }}" role="button">註冊</a>
            <a class="btn btn-lg btn-success" href="{{ route('signUp') }}" role="button">註冊</a>
        </p>
    </div>
@stop

