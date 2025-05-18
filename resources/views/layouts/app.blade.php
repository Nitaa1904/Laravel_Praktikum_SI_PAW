<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        min-height: 100vh;
        background-color: #f8f9fa;
    }

    .sidebar {
        min-height: 100vh;
        background-color: #3775F1;
        padding: 20px;
        color: white;
    }

    .sidebar a {
        color: white;
        text-decoration: none;
        display: block;
        margin: 10px 0;
        padding: 8px 12px;
        border-radius: 5px;
    }

    .sidebar a:hover {
        background-color: #2c5ec4;
    }

    .content {
        padding: 20px;
    }

    .alert {
        margin-top: 20px;
    }
    </style>
</head>

<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h4 class="mb-4">Dashboard</h4>

            <a href="{{ route('dashboard') }}">🏠 Home</a>
            <a href="{{ route('siswa.index') }}">➕ Kelola Data Siswa</a>


        </div>

        <!-- Main Content -->
        <div class="content flex-grow-1">
            <div class="container">
                {{-- Flash Message --}}
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                {{-- Main Page Content --}}
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>