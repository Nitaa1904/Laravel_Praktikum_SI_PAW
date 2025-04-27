<!DOCTYPE html>
<html>

<head>
    <title>Laravel Dashboard</title>
    <style>
    body {
        font-family: sans-serif;
        padding: 20px;
    }

    .container {
        max-width: 800px;
        margin: auto;
    }

    .alert {
        background: lightgreen;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid green;
    }
    </style>
</head>

<body>
    <div class="container">
        {{-- Flash Message --}}
        @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
        @endif

        {{-- Main Content --}}
        @yield('content')
    </div>
</body>

</html>