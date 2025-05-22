<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Guru - SMKN 1 Garut</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <style>
    body {
      background-color: #ffffff;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    .container {
      padding: 40px;
      text-align: center;
    }

    .grid-guru {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .card-guru {
      border: 1px solid #ccc;
      padding: 30px;
      display: flex;
      align-items: center;
      gap: 30px;
      width: 500px;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .foto-guru {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background-color: #D9D9D9;
      border: 1px solid #6a0000;
    }

    .info-guru {
      text-align: left;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 style="font-size: 32px; font-weight: bold; margin-bottom: 40px;">Daftar Guru</h1>

    <div class="grid-guru">
      @foreach ($guruList as $guru)
        <div class="card-guru">
          <div class="foto-guru"></div>
          <div class="info-guru">
            <p style="font-weight: bold; font-size: 18px;">{{ $guru['nama'] }}</p>
            <p style="margin: 4px 0;">Mata Pelajaran</p>
            <p style="margin: 0; font-weight: bold;">{{ $guru['mapel'] }}</p>
            <p style="margin: 8px 0 0;">Wali Kelas</p>
            <p style="margin: 0; font-weight: bold;">{{ $guru['wali_kelas'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>
