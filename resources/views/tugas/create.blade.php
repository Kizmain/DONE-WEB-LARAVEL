@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Tugas</h1>

    <form action="{{ route('tugas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Tugas</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="belum">Belum</option>
                <option value="selesai">Selesai</option>
            </select>
        </div>

        <div class="form-group">
            <label>Reminder Time</label>
            <input type="datetime-local" name="reminder_time" class="form-control">
        </div>

        <div class="form-group">
            <label>User ID</label>
            <input type="number" name="user_id" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Mata Kuliah ID</label>
            <input type="number" name="mata_kuliah_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection
