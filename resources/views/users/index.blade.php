<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
  <title>users managment</title>
</head>
<body >
  <div class="p-2 m-2 shadow rounded-2  ">
    <div class="w-100 d-flex justify-content-between align-items-center  mb-3"> 
      <h3 class="text-dark px-2">Users Management</h3>
      <div>
        <a href='/users/create' class="btn btn-primary py-1 ">
        Create User
      </a>
      <a href='/auth/logout' class="btn btn-outline-danger py-1" >
        Log Out
      </a>
      </div>
    </div>
    <table class="table table-hover w-100">
    <thead>
      <tr>
        <th>UserID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td><div class="d-flex gap-1">
              <form action="/users/{{$user->id}}/edit" method="get">
                <button class="btn btn-primary py-0 px-1">Update</button>  
              </form>
              <form action="/users/{{$user->id}}" method="post">
                @method("delete")
                @csrf
                <button href="/users" class="btn btn-danger py-0 px-1">Delete</button>  
              </form>
            </div></td>
          </tr>
      @endforeach

    </tbody>
  </table>
  {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
  
  </div>
</body>
</html>