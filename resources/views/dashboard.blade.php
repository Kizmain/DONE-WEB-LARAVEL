@extends('layouts.app')

@section('content')
<!-- NAVBAR FIXED DENGAN MENU DI TENGAH -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top px-3">
    <!-- Branding -->
    <a class="navbar-brand" href="#">
        <div class="d-flex flex-column">
            <span class="fw-bold fs-4 text-uppercase text-light">DONE!</span>
            <small class="text-light" style="font-size: 0.75rem;">Manajemen Tugas Mahasiswa</small>
        </div>
    </a>

    <!-- Toggle Button untuk Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Tengah + Avatar -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarContent">
        <!-- Menu Tengah -->
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Diskusi</a>
            </li>
        </ul>

        <!-- Avatar Dropdown Kanan -->
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="30" class="rounded-circle">
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('profiles.index') }}">Lihat Profile</a></li>
                    <li><a class="dropdown-item" href="#">Keluar</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<!-- KONTEN UTAMA -->
<div class="container my-5" style="margin-top: 90px;">
    <h4 class="fw-bold">BERANDA</h4>
    <p class="text-muted">Selamat Datang!,</p>

    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <div class="bg-primary text-white rounded p-3">Tasks<br><h4>0</h4></div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="bg-success text-white rounded p-3">Completed<br><h4>0</h4></div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="bg-danger text-white rounded p-3">Late<br><h4>0</h4></div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="bg-warning text-white rounded p-3">Upcoming<br><h4>0</h4></div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <canvas id="lineChart"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="barChart"></canvas>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- CHART.JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const lineCtx = document.getElementById('lineChart');
    new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Activity',
                data: [10, 20, 15, 30, 25, 40],
                borderColor: '#0d6efd',
                fill: false
            }]
        }
    });

    const barCtx = document.getElementById('barChart');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Tasks',
                data: [5, 10, 7, 12, 15, 18],
                backgroundColor: '#0d6efd'
            }]
        }
    });
</script>
@endpush
