<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
    <p style="color:brown">{{session('success')}}</p>
    @endif
    <div style="text-align: center; margin-top:50px">
        <h2><b>Registration Form</b></h2>
        <form action="{{route('form.storeRegister')}}" method="POST">
            @csrf
            <input type="text" placeholder="Enter Name" name="name" required><br><br>
             <input type="email" placeholder="Enter Email" name="email" required><br><br>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account?
            <a href="{{route('form.formlogin')}}">Login</a></p>
    </div>
</body>
</html>