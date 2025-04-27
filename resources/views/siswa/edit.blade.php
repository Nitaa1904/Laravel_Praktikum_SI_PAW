@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Data Siswa</h2>

    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" value="{{ $siswa->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" id="nim" name="nim" class="form-control" value="{{ $siswa->nim }}" required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                </option>
                <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" id="agama" name="agama" class="form-control" value="{{ $siswa->agama }}" required>
        </div>

        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="{{ $siswa->tgl_lahir }}"
                required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea id="alamat" name="alamat" class="form-control" rows="3" required>{{ $siswa->alamat }}</textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection