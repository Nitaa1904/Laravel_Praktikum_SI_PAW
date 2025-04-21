<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    @if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
    @endif
    <form method="POST" action="{{ route('login.submit') }}">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email"><br><br>


        <label>Password:</label><br>
        <input type="password" name="password"><br><br>


        <button type="submit">Login</button>
    </form>
</body>

</html>