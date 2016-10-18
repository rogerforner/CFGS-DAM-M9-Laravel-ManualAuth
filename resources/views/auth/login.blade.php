<!doctype html>
<html lang="en">
<head>
    <meta name="csfr-token" content="{{ csrf_field() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
<form action="/login" method="POST">
    Usuari: <input type="text" name="user">
    Password: <input type="password" name="password">
    <input type="submit" value="Login" class="btn btn-danger">
</form>
</body>
</html>