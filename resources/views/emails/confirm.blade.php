<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>註冊確認連結</title>
</head>
<body>
<h1>感謝你在demo網站註冊</h1>
<p>
    請點擊下面網址完成註冊
    <a href="{{ route('confirmEmail',$user->activation_token) }}"></a>
    {{ route('confirmEmail',$user->activation_token) }}
</p>
<p>
    如果不是你本人操作，請忽略此信
</p>
</body>
</html>
