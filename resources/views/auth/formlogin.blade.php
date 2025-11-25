<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('error'))
    <p style="color:blueviolet">{{session('error')}}</p>
    @endif
    <div style="text-align: center; margin-top:50px">
        <h2><b>Login Form</b></h2>
        <form action="{{route('form.logincheck')}}" method="post">
            @csrf
               <input type="email" placeholder="Enter Email" name="email" required><br><br>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
         <p>Don't you have an account?
                <a href="{{route('form.formregister')}}">Register</a>
            </p>

    </div>
</body>
</html>