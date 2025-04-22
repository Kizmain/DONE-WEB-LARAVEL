@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Mata Kuliah</h1>
    <form action="{{ route('mata_kuliah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Dosen</label>
            <input type="text" name="dosen" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
