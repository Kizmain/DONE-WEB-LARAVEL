@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Tugas</h1>
    <a href="{{ route('tugas.create') }}" class="btn btn-primary mb-3">Tambah Tugas</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Reminder</th>
                <th>User</th>
                <th>Mata Kuliah</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tugas as $item)
            <tr>
                <td>{{ $item->id_tugas }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->reminder_time }}</td>
                <td>{{ $item->user->name ?? '-' }}</td>
                <td>{{ $item->mataKuliah->nama ?? '-' }}</td>
                <td>{{ $item->created_at }}</td>
                <td>
                    <a href="{{ route('tugas.edit', $item->id_tugas) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('tugas.destroy', $item->id_tugas) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus tugas ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
