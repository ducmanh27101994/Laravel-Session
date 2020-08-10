<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@if(\Illuminate\Support\Facades\Session::has('not-login'))
    {{\Illuminate\Support\Facades\Session::get('not-login')}}
@endif

@if(\Illuminate\Support\Facades\Session::has('login-fail'))
    {{\Illuminate\Support\Facades\Session::get('login-fail')}}
@endif
<form method="post" action="{{route('logins.store')}}">
    @csrf
    <input type="text" name="inputUsername">
    <input type="password" name="inputPassword">
    <button type="submit">Submit</button>
</form>


</body>
</html>
