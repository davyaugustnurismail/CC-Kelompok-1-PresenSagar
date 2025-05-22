<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Schedule</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
<div class="container py-4">
  <h2 class="mb-3 fw-bold">Your Schedule</h2>

  <div class="border-bottom mb-4">
    <span style="border-bottom: 2px solid black; padding-bottom: 4px;">My Schedule</span>
  </div>

  {{-- Jadwal 1 --}}
  <div class="card position-relative mb-4">
    <div class="card-body">
      <h5 class="card-title fw-bold">Matematika</h5>
      <div class="row">
        <div class="col-md-6">
          <p class="mb-1">Tanggal dan Waktu</p>
          <p><strong>Kamis, April 17, 2025 6:30 PM</strong></p>
        </div>
        <div class="col-md-3">
          <p class="mb-1">Kelas</p>
          <p><strong>XI PPL 2</strong></p>
        </div>
        <div class="col-md-3">
          <p class="mb-1">Guru</p>
          <p><strong>Nama Guru</strong></p>
        </div>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-primary">Isi Kehadiran</button>
        <button class="btn btn-danger">Isi Absen</button>
      </div>

      <span class="badge bg-warning text-dark position-absolute" style="top: 10px; right: 10px;">
        Tolong isi kehadiran
      </span>
    </div>
  </div>

  {{-- Jadwal 2 --}}
  <div class="card position-relative mb-4 border border-primary">
    <div class="card-body">
      <h5 class="card-title fw-bold">Matematika</h5>
      <div class="row">
        <div class="col-md-6">
          <p class="mb-1">Tanggal dan Waktu</p>
          <p><strong>Kamis, April 17, 2025 6:30 PM</strong></p>
        </div>
        <div class="col-md-3">
          <p class="mb-1">Kelas</p>
          <p><strong>XI PPL 2</strong></p>
        </div>
        <div class="col-md-3">
          <p class="mb-1">Guru</p>
          <p><strong>Nama Guru</strong></p>
        </div>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-primary">Isi Kehadiran</button>
        <button class="btn btn-danger">Isi Absen</button>
      </div>

      <span class="badge bg-success position-absolute" style="top: 10px; right: 10px;">
        Kehadiran selesai
      </span>
    </div>
  </div>

  {{-- Jadwal 3 --}}
  <div class="card position-relative mb-4 border border-primary">
    <div class="card-body">
      <h5 class="card-title fw-bold">Matematika</h5>
      <div class="row">
        <div class="col-md-6">
          <p class="mb-1">Tanggal dan Waktu</p>
          <p><strong>Kamis, April 17, 2025 6:30 PM</strong></p>
        </div>
        <div class="col-md-3">
          <p class="mb-1">Kelas</p>
          <p><strong>XI PPL 2</strong></p>
        </div>
        <div class="col-md-3">
          <p class="mb-1">Guru</p>
          <p><strong>Nama Guru</strong></p>
        </div>
      </div>
      <div class="d-flex gap-2">
        <button class="btn btn-primary">Isi Kehadiran</button>
        <button class="btn btn-danger">Isi Absen</button>
      </div>

      <span class="badge bg-danger position-absolute" style="top: 10px; right: 10px;">
        Kehadiran kosong
      </span>
    </div>
  </div>
</div>
</body>
</html>
