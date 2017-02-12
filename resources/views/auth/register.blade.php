<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="/register" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                Name: <input type="text" name="name">
            </div>

            <div class="form-group">
                Email: <input type="text" name="email">
            </div>

            <div class="form-group">
                Password: <input type="password" name="password">
            </div>

            <div class="form-group">
                Repeat Password: <input type="password" name="password_confirmation">
            </div>

            <div class="center-block">
                <input type="submit" value="Register" class="btn btn-primary" name="register">
            </div>
        </form>
            <a class="btn btn-danger" href="/login">Login</a>
            <a class="btn btn-warning" href="/">Welcome</a>
    </div>
</div>
</body>
</html>