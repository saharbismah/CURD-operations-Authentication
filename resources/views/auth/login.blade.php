<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
       body{
            background-color: rgb(165, 248, 248);
            font-family: Arial, sans-serif;
            
        }
       .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 350px;
        }
        .container h2{
          font-size: 25px;
          text-align: center;
          text-transform: uppercase;
          margin: 40px;
          color: black;
        }
        .container label{
            font-size: 15px;
            margin: 15px 0;
           
        }
        .container input{
            font-size: 16px;
            padding: 10px 10px;
            width: 100%;
            border: 0;
            outline: none;
        }
        .container button{
            font-size: 15px;
            font-weight: bold;
            margin: 15px 0px;
        }
        a{
            color: rgb(67, 13, 228);
        }
    </style>
</head>
<body>
         @if(session('error'))
    <p style="color: red">{{session('error')}}</p>
    @endif

        <div class="container">
            <h2><u>Login Form</u></h2>
            <form action="{{route('auth.login')}}"method="POST">
            @csrf
             <label for="">password:</label><br>
            <input type="password" placeholder="Enter your password" required name="password"><br><br>
             <label for="">Email:</label><br>
            <input type="email" placeholder="Enter your Email" required name="email">
            <button class="btn">Log in</button>
        </form>
        </div>
      
    </body>
    </html>
