<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Kehadiran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .label-status {
      padding: 3px 10px;
      border-radius: 8px;
      color: white;
      font-weight: bold;
      font-size: 0.8rem;
      display: inline-block;
      min-width: 60px;
      text-align: center;
    }
    .hadir { background-color: #28a745; }
    .izin { background-color: #ffc107; color: black; }
    .sakit { background-color: #f0ad4e; color: black; }
    .alfa { background-color: #dc3545; }
  </style>
</head>
<body style="background-color: #f9f9f9;">

<div class="container my-4">
  <div class="row">
    <!-- Sisi Kiri: Profil -->
    <div class="col-md-4 text-center">
      <div style="width: 200px; height: 200px; background: #d9d9d9; border-radius: 50%; border: 3px solid #720000; margin: 0 auto;"></div>
      <h5 class="mt-3 fw-bold">Davy Augustnur Ismail</h5>
      <div class="mt-3 text-start ms-5">
        <p><i class="bi bi-house-door-fill"></i> XI PPL 2</p>
        <p><i class="bi bi-telephone-fill"></i> No HP Ortu</p>
        <p><i class="bi bi-layers-fill"></i> Jurusan</p>
        <p><i class="bi bi-mortarboard-fill"></i> Wali Kelas</p>
      </div>
    </div>

    <!-- Sisi Kanan: Kehadiran -->
    <div class="col-md-8">
      <div class="mb-3">
        <h6><i class="bi bi-rocket-takeoff-fill"></i> Kehadiran</h6>
        <hr style="margin-top: 0;">
      </div>

      <!-- Box Kehadiran -->
      <div class="card mb-4">
        <div class="card-header bg-light fw-bold">
          Kehadiran
        </div>
        <div class="card-body">
          <p><span class="label-status hadir">Hadir</span> Matematika</p>
          <p><span class="label-status izin">Izin</span> Bahasa Indonesia</p>
          <p><span class="label-status sakit">Sakit</span> Bahasa Inggris</p>
          <p><span class="label-status alfa">Alfa</span> Sejarah</p>
          <p><span class="label-status hadir">Hadir</span> Konsentrasi Keahlian</p>
          <p><span class="label-status hadir">Hadir</span> PJOK</p>
          <a href="#" class="text-decoration-underline mt-2 d-block">Show all</a>
        </div>
      </div>

      <!-- Box Persentase Kehadiran -->
      <div class="card">
        <div class="card-header bg-light fw-bold">
          Persentase Kehadiran
        </div>
        <div class="card-body">
          <p class="mb-2">Kamu menghadiri ... kelas dari ... kelas</p>
          <div class="progress" style="height: 24px;">
            <div class="progress-bar bg-success" role="progressbar" style="width: 87%;" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100">87%</div>
            <div class="progress-bar bg-danger" role="progressbar" style="width: 13%;" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</body>
</html>
