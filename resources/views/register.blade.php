<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/register" method="post">
    {{csrf_field()}}
    <div class="navbar">
        <label>Username</label>
        <input type="text" name="username" placeholder="Nhap username cua ban">
        <br>
        <label>Email</label>
        <input type="text" name="email" placeholder="Nhap email cua ban">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Nhap password cua ban">

        <br>
        <label>Fullname</label>
        <input type="text" name="fullname" placeholder="Nhap ten cua ban">
    </div>
    <div>
        <button type="submit">Dang ky</button>
    </div>
</form>
</body>
</html>