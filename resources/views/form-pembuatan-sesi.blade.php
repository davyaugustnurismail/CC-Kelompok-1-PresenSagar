<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Pembuatan Sesi</title>
  <style>
    body {
      background-color: #F5F5F5;
      font-family: sans-serif;
      color: #000;
      margin: 0;
      padding: 50px 20px;
    }

    h2 {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 40px;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
    }

    label {
      display: block;
      font-size: 14px;
      margin-bottom: 6px;
    }

    input[type="text"],
    input[type="date"] {
      width: 100%;
      height: 40px;
      background-color: #E6E6E6;
      border: 1px solid #999;
      border-radius: 6px;
      padding: 0 10px;
      font-size: 14px;
      margin-bottom: 20px;
    }

    button {
      width: 200px;
      height: 36px;
      background-color: #D9D9D9;
      color: #000;
      border: 1px solid #999;
      border-radius: 6px;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #c0c0c0;
    }
  </style>
</head>
<body>

  <h2>Form Pembuatan Sesi</h2>

  <form id="formSesi">
    <label for="nama">Nama Lengkap</label>
    <input type="text" id="nama" placeholder="Nama Lengkap" required />

    <label for="mapel">Mapel</label>
    <input type="text" id="mapel" placeholder="Mapel" required />

    <label for="kelas">Kelas</label>
    <input type="text" id="kelas" placeholder="Kelas" required />

    <label for="tanggal">Tanggal</label>
    <input type="date" id="tanggal" required />

    <button type="submit">Kirim Kehadiran</button>
  </form>

  <script>
    document.getElementById("formSesi").addEventListener("submit", function (e) {
      e.preventDefault();
      alert("Sesi berhasil dibuat!");
    });
  </script>

</body>
</html>