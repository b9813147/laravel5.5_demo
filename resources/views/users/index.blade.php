@extends('layouts.default')
@section('title', 'laravel5.5_Demo-全部使用者')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h1>全部用戶</h1>
        <ul class="users">
            @foreach($users as $user)
                @include('share._user')
            @endforeach
        </ul>
        {{--顯示分頁語法--}}
        {!! $users->render() !!}
    </div>
@stop
