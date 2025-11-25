<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
         }
         body {
    background: #f3f3f3;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
     }
     .container {
    background: #fff;
    border-radius: 10px;
    width: 850px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    display: flex;
    padding: 40px;
    }
    .signup-box {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    }
     .form-section {
    flex: 1;
    padding-right: 30px;
    }  
    .form-section h2 {
    margin-bottom: 20px;
    font-size: 28px;
    font-weight: 600;
    }
    .input-box {
    position: relative;
    margin-bottom: 20px;
    }
    .input-box i {
    color: #666;
    }
    .input-box input {
    /* width: 100%; */
    padding: 5px 5px 5px 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    font-size: 14px;
    }
    .input-box input:focus {
    border-color: #165597;
    }
    .terms {
    margin: 15px 0;
    font-size: 14px;
    }

    .terms a {
    color:#0655a9 ;
    text-decoration: none;
    }
    .terms a:hover {
    text-decoration: underline;
    }

    .btn {
    background: #0655a9;
    color: white;
    border: none;
     margin-left: 60px;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
     }
     .btn:hover {
    background: #0056b3;
     }

     .image-section {
    flex: 1;
    text-align: center;
     }

     .image-section img {
    width: 300px;
     }
    </style>
</head>
<body>

<div class="container">
    
    <div class="signup-box">
        <div class="form-section">
            <h2>Sign up</h2>
            <form action="{{route('signup.update', $signup->id)}}" method="POST">
                @csrf 
                <div class="input-box">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Your Name" required name="name" value="{{$signup->name}}">
                </div>
                <div class="input-box">
                    <i class="fa fa-envelope"></i>
                    <input type="email" placeholder="Your Email" required name="email" value="{{$signup->email}}">
                </div>
                <div class="input-box">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password" required name="password" value="{{$signup->password}}">
                </div>
                <div class="input-box">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Repeat your password" required name="repeatpassword" value="{{$signup->repeatpassword}}">
                </div>
                <div class="terms">
                    <input type="checkbox" required>
                    <label>I agree all statements in <a href="#">Terms of service</a></label>
                </div>
                <button type="submit" class="btn">REGISTER</button><br><br>
                <a href="{{route('signup.display')}}">Show Record</a>
                 @if(session('success'))
           <p style="color: #4a5203;">{{session('success')}}<p>
            @endif
            </form>
        </div>

        <div class="image-section">
          <img src="sign1.jpeg" alt="Signup Illustration">
        </div>
    </div>
</div>

</body>
</html>
