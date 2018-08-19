<form action="{{ route('statuses.store') }}" method="POST">
    @include('share._errors')
    {{ csrf_field() }}
    <textarea class="form-control" rows="4" placeholder="輸入訊息...." name="content">{{ old('content') }}</textarea>
    <button type="submit" class="btn btn-primary">發布</button>
</form>
