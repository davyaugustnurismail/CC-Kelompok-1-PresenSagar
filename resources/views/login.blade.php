<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SMKN 1 Garut</title>
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div class="login-container">
    <div class="login-card">
      <img src="{{ asset('images/logo.png') }}" alt="Logo SMKN 1 Garut" class="logo">
      <h2 class="login-title">Login</h2>

      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="nis" placeholder="Masukan NIS" required>
        <input type="password" name="password" placeholder="Masukan Password" required>
        <button type="submit">Log In</button>
      </form>
    </div>
  </div>
</body>
</html>
