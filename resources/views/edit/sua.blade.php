<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dang Ky</title>
    <style>
      .form-container{
        width:50%;
        margin-top:30px;
        border:1px solid black;
        border-radius:5px;
        padding:20px 10px 20px 10px;
      }
      .head{
        text-align:center;
      }
    </style>
</head>
<body>
  <h1 class="head">Cập Nhật Tài Khoản </h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
<div class="container-fluid form-container">
<form action=" {{ route('Sua') }} " method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $edituser->email }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <input type="hidden" name="id" value="{{ $edituser->id }}">
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <label for="exampleInputPassword1">Nhap Lai Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>



</form>
</div>
</body>
</html>