@extends('layouts.app')

@section('content')
<h2>Detail Siswa</h2>

<p><strong>Nama:</strong> {{ $siswa->nama }}</p>
<p><strong>NIM:</strong> {{ $siswa->nim }}</p>
<p><strong>Jenis Kelamin:</strong> {{ $siswa->jenis_kelamin }}</p>
<p><strong>Agama:</strong> {{ $siswa->agama }}</p>
<p><strong>Tanggal Lahir:</strong> {{ $siswa->tgl_lahir }}</p>
<p><strong>Alamat:</strong> {{ $siswa->alamat }}</p>

<a href="{{ route('siswa.index') }}">Kembali</a>
@endsection