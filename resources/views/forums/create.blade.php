@extends('layouts.profile')

@section('content')
<div class="container">
    <h1>Buat Forum Baru</h1>
    <form action="{{ route('forums.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul"><br><br>

        <label>Isi:</label><br>
        <textarea name="isi"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
