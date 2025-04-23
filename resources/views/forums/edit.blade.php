@extends('layouts.profile')

@section('content')
<div class="container">
    <h1>Edit Forum</h1>
    <form action="{{ route('forums.update', $forum->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ $forum->judul }}"><br><br>

        <label>Isi:</label><br>
        <textarea name="isi">{{ $forum->isi }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
