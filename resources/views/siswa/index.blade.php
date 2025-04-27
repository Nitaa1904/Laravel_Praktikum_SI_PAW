@extends('layouts.app')


@section('content')
<h2>Data Siswa</h2>
<a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>
<table border="1" cellpadding="5">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>JK</th>
        <th>Agama</th>
        <th>Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($siswas as $siswa)
    <tr>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->nim }}</td>
        <td>{{ $siswa->jenis_kelamin }}</td>
        <td>{{ $siswa->agama }}</td>
        <td>{{ $siswa->tgl_lahir }}</td>
        <td>{{ $siswa->alamat }}</td>
        <td>
            <a href="{{ route('siswa.show', $siswa->id) }}">Lihat</a> |
            <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a> |
            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection