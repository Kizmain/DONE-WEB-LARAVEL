@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('mataKuliah.create') }}" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kode</th>
                <th>Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mataKuliahs as $mk)
            <tr>
                <td>{{ $mk->nama }}</td>
                <td>{{ $mk->kode }}</td>
                <td>{{ $mk->dosen }}</td>
                <td>
                    <a href="{{ route('mata_kuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mata_kuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
