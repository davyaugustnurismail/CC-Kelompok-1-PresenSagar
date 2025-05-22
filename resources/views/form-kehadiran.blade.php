<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Kehadiran</title>
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

    input[type="text"] {
      width: 100%;
      height: 40px;
      background-color: #E6E6E6;
      border: 1px solid #999;
      border-radius: 6px;
      padding: 0 10px;
      font-size: 14px;
      margin-bottom: 20px;
    }

    .qr-box {
      width: 120px;
      height: 120px;
      background-color: #D9D9D9;
      border: 1px solid #999;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 32px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
      cursor: pointer;
    }

    .qr-box:hover {
      background-color: #cfcfcf;
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

  <h2>Form Kehadiran</h2>

  <form id="formKehadiran">
    <label for="nama">Nama Lengkap</label>
    <input type="text" id="nama" placeholder="Nama Lengkap" required />

    <label for="kelas">Kelas</label>
    <input type="text" id="kelas" placeholder="Kelas" required />

    <label>QR Kehadiran</label>
    <div class="qr-box" onclick="alert('Upload QR di sini')">+</div>

    <button type="submit">Kirim Kehadiran</button>
  </form>

  <script>
    document.getElementById("formKehadiran").addEventListener("submit", function (e) {
      e.preventDefault();
      alert("Kehadiran berhasil dikirim!");
    });
  </script>

</body>
</html>