@extends('layouts.app')

@section('content')
<h2>Edit Data Siswa</h2>

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>Nama: <input type="text" name="nama" value="{{ $siswa->nama }}" required></p>
    <p>NIM: <input type="text" name="nim" value="{{ $siswa->nim }}" required></p>
    <p>Jenis Kelamin:
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>

    </p>
    <p>Agama: <input type="text" name="agama" value="{{ $siswa->agama }}" required></p>
    <p>Tanggal Lahir: <input type="date" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}" required></p>
    <p>Alamat: <textarea name="alamat" required>{{ $siswa->alamat }}</textarea></p>
    <p><button type="submit">Update</button></p>
</form>

<a href="{{ route('siswa.index') }}">Kembali</a>
@endsection