<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login</title>

  <style>
    form {
      width: fit-content;
      min-width: 350px;
      margin: auto
    }
    form h2{
      text-transform: uppercase;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: 700;
      letter-spacing: 4px
    }
    form label{
      text-transform: capitalize
    }
  </style>
</head>
<body>
  <form action="/auth/login" method="POST" class=" rounded-2 mt-3 bg-light flex-column gap-2 align-items-center d-flex shadow p-3 pb-4"> 
    @csrf
    <h2 class="text-primary mt-2">Login</h2>
    <label class="text w-100 mt-2">email</label>
    <input type="email" name="email" placeholder="email" class="form-control">
    <label class="text w-100 mt-3">password</label>
    <input type="password" name="password" placeholder="password" class="form-control">
    <input type="submit" value='Login' class="btn btn-primary mt-2 py-0 fs-4 w-100">

  </form>
</body>
</html>