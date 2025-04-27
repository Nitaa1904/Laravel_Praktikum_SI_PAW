@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Detail Siswa</h2>

    <div class="card p-4 shadow-sm">
        <div class="mb-3">
            <strong>Nama:</strong>
            <div>{{ $siswa->nama }}</div>
        </div>

        <div class="mb-3">
            <strong>NIM:</strong>
            <div>{{ $siswa->nim }}</div>
        </div>

        <div class="mb-3">
            <strong>Jenis Kelamin:</strong>
            <div>{{ $siswa->jenis_kelamin }}</div>
        </div>

        <div class="mb-3">
            <strong>Agama:</strong>
            <div>{{ $siswa->agama }}</div>
        </div>

        <div class="mb-3">
            <strong>Tanggal Lahir:</strong>
            <div>{{ $siswa->tgl_lahir }}</div>
        </div>

        <div class="mb-3">
            <strong>Alamat:</strong>
            <div>{{ $siswa->alamat }}</div>
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection