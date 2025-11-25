<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align: center; margin-top:50px">
     <h2>Welcome</h2>
    <p><b>{{session('user')}} </b> you have logged in successfully on UserDashboard</p>
    <a href="{{route('form.formlogin')}}">Logout</a>
</body>
</html>