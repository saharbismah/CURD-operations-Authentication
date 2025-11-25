<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=t, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       *{
          background-color: #ccc;
       }
       table{
        background-color: #ccc;
        border: 2px solid black;
        margin-left: 230px;
        margin-top: 50px;
       }
       h2{
         font-size: 50px;
         font-weight: bolder;
         margin-left:420px;
        }
       th{
        color: beige;
        background-color: #666;
       }
       button{
        background-color: #8e8d8d;
          color: beige;
       }
       a{
        color:#666;
       }
    </style>
</head>
<body>
    <h2><u>Sign Up Table</u></h2>
    <table border="2" cellpadding="10">
        <thead>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Passowrd</th>
            <th>Repeat Passowrd</th>
            <th>Edit Record</th>
            <th>Delete Record</th>
          
          </tr>
            
        </thead>
        <tbody>
          <tr>
            @foreach($signup as $sign)
            <td>{{$sign->name}}</td>
            <td>{{$sign->email}}</td>
            <td>{{$sign->password}}</td>
            <td>{{$sign->repeatpassword}}</td>
            <td><a href="{{route('signup.edit',$sign->id)}}">EDIT</a></td>

            <td>
              <form action="{{route('signup.destroy',$sign->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button>DELETE</button>
              </form>
            </td>

          </tr>
          @endforeach
        </tbody>
    </table>
</body>
</html>