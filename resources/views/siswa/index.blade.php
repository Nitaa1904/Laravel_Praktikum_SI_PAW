@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Siswa</h2>

    <a href="{{ route('siswa.create') }}" class="btn btn-success mb-3">
        ➕ Tambah Siswa
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-primary text-center">
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->nim }}</td>
                    <td>{{ $siswa->jenis_kelamin }}</td>
                    <td>{{ $siswa->agama }}</td>
                    <td>{{ $siswa->tgl_lahir }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td class="text-center">
                        <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-info btn-sm mb-1">Lihat</a>
                        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning btn-sm mb-1">Edit</a>

                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin mau hapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mb-1">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection