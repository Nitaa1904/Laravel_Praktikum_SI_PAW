@extends('layouts.app')

@section('content')
<h2>Tambah Siswa</h2>

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama:</label>
        <input type="text" name="nama" required>
    </div>
    <div>
        <label>NIM:</label>
        <input type="text" name="nim" required>
    </div>
    <div>
        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>
    <div>
        <label>Agama:</label>
        <input type="text" name="agama" required>
    </div>
    <div>
        <label>Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" required>
    </div>
    <div>
        <label>Alamat:</label>
        <textarea name="alamat" required></textarea>
    </div>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('siswa.index') }}">Kembali</a>
</div>

@endsection