@extends('layouts.profile')

@section('content')
<div class="container">
    <h1>Edit Tugas</h1>

    <form action="{{ route('tugas.update', $tugas->id_tugas) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Tugas</label>
            <input type="text" name="name" class="form-control" value="{{ $tugas->name }}" required>
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $tugas->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="belum" {{ $tugas->status == 'belum' ? 'selected' : '' }}>Belum</option>
                <option value="selesai" {{ $tugas->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>

        <div class="form-group">
            <label>Reminder Time</label>
            <input type="datetime-local" name="reminder_time" class="form-control"
                value="{{ \Carbon\Carbon::parse($tugas->reminder_time)->format('Y-m-d\TH:i') }}">
        </div>

        <div class="form-group">
            <label>User ID</label>
            <input type="number" name="user_id" class="form-control" value="{{ $tugas->user_id }}" required>
        </div>

        <div class="form-group">
            <label>Mata Kuliah ID</label>
            <input type="number" name="mata_kuliah_id" class="form-control" value="{{ $tugas->mata_kuliah_id }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
