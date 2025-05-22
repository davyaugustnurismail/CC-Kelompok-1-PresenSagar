<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Absen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: white;
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }
    input, select {
      background-color: #d9d9d9;
      border-radius: 8px;
      border: 1px solid #000;
      padding: 10px 15px;
    }
    button {
      background-color: #d9d9d9;
      border: 1px solid #000;
      padding: 6px 20px;
      font-weight: bold;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<!-- Judul Paling Atas -->
<div class="text-center mt-4">
  <h2 class="fw-bold">Form Absen</h2>
</div>

<!-- Form di Bawah Judul -->
<div class="container mt-4 mb-5" style="max-width: 500px;">
  <form>
    @csrf

    <div class="mb-3">
      <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" required>
    </div>

    <div class="mb-3">
      <label for="kelas" class="form-label">Kelas</label>
      <input type="text" id="kelas" name="kelas" class="form-control" value="XI PPL 2" required>
    </div>

    <div class="mb-4">
      <label for="keterangan" class="form-label">Keterangan</label>
      <select id="keterangan" name="keterangan" class="form-select" required>
        <option value="">-- Pilih Keterangan --</option>
        <option value="Izin">Izin</option>
        <option value="Sakit">Sakit</option>
      </select>
    </div>

    <div class="text-start">
      <button type="submit">Kirim Absen</button>
    </div>

  </form>
</div>

</body>
</html>
