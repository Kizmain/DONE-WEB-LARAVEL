@extends('layouts.profile')

@section('content')
<style>
    body {
        background-color: #2d3664;
        font-family: 'Comic Sans MS', cursive;
        color: white;
        margin: 0;
        padding: 0;
    }

    .forum-header {
        text-align: center;
        background-color: #5556aa;
        padding: 30px 15px 50px 15px;
        border-radius: 30px 30px 30px 30px;
        margin-bottom: 25px;
    }

    .forum-title {
        background-color: #d1d5db;
        color: #333;
        font-size: 20px;
        padding: 10px 25px;
        border-radius: 15px;
        display: inline-block;
        margin-top: 10px;
    }

    .forum-content {
        background-color: #d1d5db;
        color: #444;
        margin: 25px;
        padding: 25px;
        border-radius: 20px;
        text-align: center;
        font-size: 18px;
    }

    .container {
        padding: 0 25px;
        padding-bottom: 160px; /* buat kasih ruang sebelum kolom komentar */
    }

    .comment-box {
        background-color: #a3a3a3;
        border-radius: 20px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .comment-meta {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 8px;
    }

    .profile-circle {
        background-color: #e5e7eb;
        color: black;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: inline-block;
    }

    .comment-inner {
        background-color: #7482be;
        border-radius: 15px;
        padding: 15px;
        color: #fff;
    }

    .comment-info {
        font-size: 14px;
        color: #111;
    }

    .view-icon {
        display: flex;
        align-items: center;
        gap: 5px;
        margin-top: 8px;
        color: #ffffff;
    }

    .comment-form {
        position: fixed;
        bottom: 0;
        left: 0;
        width: calc(100% - 65px);
        margin: 0 10px 10px 10px;
        background-color: #ffffff;
        padding: 15px 20px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
        z-index: 999;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .comment-form textarea {
        flex-grow: 1;
        border-radius: 15px;
        border: none;
        padding: 12px 15px;
        font-size: 16px;
        font-family: 'Comic Sans MS', cursive;
        resize: none;
    }

    .comment-form textarea::placeholder {
        color: #444;
    }

    .comment-form button {
        background-color: #4b5563;
        color: white;
        padding: 15px 20px;
        border: none;
        border-radius: 12px;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
    }

    .comment-form::before {
        position: absolute;
        left: 30px;
        bottom: 25px;
        z-index: 1000;
        font-size: 18px;
    }

    .back-btn {
        background-color: #d1d5db;
        color: #333;
        border-radius: 20px;
        padding: 7px 18px;
        display: inline-block;
        margin: 20px;
        text-decoration: none;
        font-weight: bold;
    }
</style>


<a href="{{ route('forums.index') }}" class="back-btn"> &lt; Kembali</a>

<div class="forum-header">
    <h1>FORUM DISCUSS</h1>
    <div class="forum-title">{{ $forum->judul }}</div>
</div>

<div class="forum-content">
    {{ $forum->isi }}
</div>

<div class="container">
    @foreach ($forum->comments as $comment)
        <div class="comment-box">
            <div class="comment-meta">
                <div class="profile-circle"></div>
                <div class="comment-info">
                    <strong>Nama User</strong><br>
                    {{ $comment->created_at->format('d M Y H:i') }}
                </div>
            </div>
            <div class="comment-inner">
                {{ $comment->isi }}
                <div class="view-icon">
                    👁️   0
                </div>
            </div>
        </div>
    @endforeach
</div>

<form action="{{ route('comments.store', $forum->id) }}" method="POST" class="comment-form">
    @csrf
    <textarea name="isi" rows="1" placeholder="Ketik Komentar Disini.."></textarea>
    <button type="submit">Kirim</button>
</form>
@endsection
