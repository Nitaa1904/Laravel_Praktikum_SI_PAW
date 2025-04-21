<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Halo, {{ session('user')->name }}!</h1>
    <p>Selamat datang di Dashboard.</p>
    <a href="{{ route('logout') }}">Logout</a>
</body>

</html>