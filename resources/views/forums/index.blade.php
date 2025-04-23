@extends('layouts.profile')

@section('content')
<style>
    .delete-btn {
        background-color: #e74c3c;
        border: none;
        color: white;
        padding: 6px 12px;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.2s ease;
        font-family: 'Comic Sans MS', cursive;
        font-size: 16px;
    }

    .delete-btn:hover {
        background-color: #c0392b;
    }

    body {
        background-color: #2d3664;
        font-family: 'Comic Sans MS', cursive;
        margin: 0;
        padding: 0;
        color: white;
    }

    .forum-list-header {
        background-color: #5556aa;
        text-align: center;
        padding: 30px;
        font-size: 30px;
        font-weight: bold;
        border-bottom: 5px solid #2e3f46;
    }

    .forum-container {
        padding: 30px;
        background-color: #2d3664;
    }

    .forum-card {
        background-color: #b8c9e0;
        padding: 20px;
        border-radius: 15px;
        margin-bottom: 20px;
        font-size: 18px;
        color: #111;
        transition: all 0.2s ease;
        text-decoration: none;
        display: block;
    }

    .forum-card:hover {
        background-color: #a4b6cc;
        transform: scale(1.02);
    }

    .add-btn {
        float: right;
        margin-right: 30px;
        margin-top: -75px;
        background-color: #d1d5db;
        color: #333;
        padding: 8px 18px;
        border-radius: 15px;
        text-decoration: none;
        font-weight: bold;
        cursor: pointer;
    }

    /* Modal style */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
    }

    .modal-content {
        background-color: white;
        margin: 10% auto;
        padding: 20px;
        border-radius: 20px;
        width: 90%;
        max-width: 500px;
        color: black;
        font-family: 'Comic Sans MS', cursive;
    }

    .close {
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .modal-content input, .modal-content textarea {
        width: 95%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 10px;
        border: 1px solid #ccc;
        font-family: 'Comic Sans MS', cursive;
    }

    .modal-content button {
        background-color: #4b5563;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 10px;
        font-weight: bold;
    }
    .modal-toggle:checked + .modal {
        display: flex;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(0,0,0,0.6);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        background-color: white;
        color: black;
        padding: 30px;
        border-radius: 20px;
        width: 90%;
        max-width: 400px;
        text-align: center;
        font-family: 'Comic Sans MS', cursive;
    }

    .modal-actions {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .yes-btn {
        background-color: #4b5563;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 12px;
        cursor: pointer;
    }

    .no-btn {
        background-color: #d1d5db;
        color: #333;
        padding: 10px 20px;
        border-radius: 12px;
        cursor: pointer;
    }

    .modal-overlay {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
    }

</style>

<div class="forum-list-header">
    Daftar Forum
</div>

<!-- Tombol trigger modal -->
<span class="add-btn" onclick="openModal()">Tambah Baru</span>

<div class="forum-container">
    @foreach ($forums as $forum)
    <div class="forum-card" style="display: flex; justify-content: space-between; align-items: center;">

        <a href="{{ route('forums.show', $forum->id) }}" style="color: #111; text-decoration: none;">
            {{ $forum->judul }}
        </a>

        <!-- Trigger buka modal -->
        <label for="modal-{{ $forum->id }}" class="delete-btn" style="cursor: pointer;">🗑️</label>

        <!-- Checkbox pemicu modal -->
        <input type="checkbox" id="modal-{{ $forum->id }}" class="modal-toggle" hidden>

        <!-- Modal -->
        <div class="modal">
            <label for="modal-{{ $forum->id }}" class="modal-overlay"></label>
            <div class="modal-content">
                <h3>Apakah Anda Yakin Mau Menghapus Forum Ini?</h3>
                <div class="modal-actions">
                    <form action="{{ route('forums.destroy', $forum->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="yes-btn">Iya</button>
                    </form>
                    <label for="modal-{{ $forum->id }}" class="no-btn">Tidak</label>
                </div>
            </div>
        </div>
    </div>
@endforeach



</div>

<!-- Modal -->
<div id="forumModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h3>Tambah Forum Baru</h3>
        <form action="{{ route('forums.store') }}" method="POST">
            @csrf
            <input type="text" name="judul" placeholder="Judul forum" required>
            <textarea name="isi" placeholder="Isi forum" rows="4" required></textarea>
            <button type="submit">Simpan</button>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById('forumModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('forumModal').style.display = 'none';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('forumModal');
        if (event.target == modal) {
            closeModal();
        }
    }
</script>
@endsection
