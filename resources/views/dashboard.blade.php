@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Selamat Datang di Dashboard!</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Halo, {{ session('user')->name }} 👋</h5>
            <p class="card-text">Semangat berkarya hari ini!</p>

            <a href="{{ route('siswa.index') }}" class="btn btn-primary mt-3">
                ➕ Kelola Data Siswa
            </a>
        </div>
    </div>
</div>
@endsection