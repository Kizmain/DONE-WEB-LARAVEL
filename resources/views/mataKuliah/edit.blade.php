@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mata Kuliah</h1>
    <form action="{{ route('mata_kuliah.update', $mata_kuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mata_kuliah->nama }}" required>
        </div>
        <div class="form-group">
            <label>Kode</label>
            <input type="text" name="kode" class="form-control" value="{{ $mata_kuliah->kode }}" required>
        </div>
        <div class="form-group">
            <label>Dosen</label>
            <input type="text" name="dosen" class="form-control" value="{{ $mata_kuliah->dosen }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
