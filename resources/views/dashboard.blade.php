@extends('layouts.app')

@section('content')
<h2>Selamat Datang di Dashboard!</h2>
<p>Halo, {{ session('user')->name }} 👋</p>

<hr>

<a href="{{ route('siswa.index') }}"
    style="display: inline-block; margin-top: 20px; background: #3775F1; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">
    ➕ Kelola Data Siswa
</a>
@endsection