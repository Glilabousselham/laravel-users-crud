<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
  <title>{{isset($update)?"update":"create"}} user</title>
</head>
<body>
  <form

    style="max-width:400px;"
    class="p-4 m-auto d-flex rounded-2 mt-5 flex-column shadow align-items-center gap-2"
    action="/users{{isset($update)?"/$user->id":""}}"
    method="POST" 
  >
  @csrf
  @if (isset($update))
    @method('PUT')
      
  @endif

  <h2 class="text-primary my-2">{{isset($update)?"Update":"Create New"}} User</h2>

  <label class="w-100 mt-2">Name</label>
  <input value="{{isset($user)?$user["name"]:""}}" class="form-control w-100" type="text" name="name">

  <label class="w-100 mt-2">Email</label>
  <input value="{{isset($user)?$user["email"]:""}}" class="form-control w-100" type="email" name="email">
  
  <label class="w-100 mt-2">Password</label>
  <input value="{{isset($user)?$user["password"]:""}}" class="form-control w-100" type="text" name="password">
  
  <input type="submit" value="{{isset($update)?"Update":"Create"}}" class="btn btn-primary p-1 px-4 align-self-end">

  </form>
</body>
</html>