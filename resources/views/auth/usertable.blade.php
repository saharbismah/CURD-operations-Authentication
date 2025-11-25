<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h2{
            font-size: 30px;
            text-align: center;

        }
    </style>
</head>
<body>
    @if(session('success'))
    <p style="color:blueviolet">{{session('success')}}</p>
    @endif
   <h2><u>All Users</u></h2>
    <table border="1" cellspacing="5">
        <thead><tr>
         <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Current Role</th>
        <th>Change Roll</th>
        <th>Current Status</th>
        <th>Change Status</th>
        </tr>
        
        </thead>
        <tbody>
           
                  @foreach($user as $u)
                    <tr>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->password}}</td>
                    <td>
                     @if($u->role == 0)
                         Admin
                    @else
                        Student/User 
                     @endif
                    </td>
                    <td>
                    <form action="{{route('user.UpdateRole', $u->id)}}" method="POST">
                        @csrf
                    <select name="role">
                        <option value="0" {{$u->role == 0? 'selected' : ''}}>Admin</option>
                         <option value="1" {{$u->role == 1? 'selected' : ''}}>User</option>
                     </select>
                     <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>
                        @if($u->status == 'active')
                          Active 
                          @else
                          Inactive
                          @endif
                    </td>
                    <td>
                        <form action="{{route('user.UpdateStatus', $u->id)}}" method="POST">
                        @csrf
                    <select name="status">
                        <option value="active" {{$u->status == 'active'? 'selected' : ''}}>Active</option>
                         <option value="inactive" {{$u->status == 'inactive'? 'selected' : ''}}>Inactive</option>
                     </select>
                     <button type="submit">Update</button>
                        </form>
                    </td>
                 </tr>
                 @endforeach
              
               
           
        </tbody>
    </table>
</body>
</html>