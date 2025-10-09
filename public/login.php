<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Poppins', sans-serif; background-color: #0057ff; color: white; height: 100vh; }
    .login-box { background-color: white; border-radius: 30px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); overflow: hidden; max-width: 1000px; }
    .left-box { background-color: white; color: #000; padding: 40px; }
    .right-box { background-color: #0057ff; color: white; padding: 40px; }
    .form-control { border-radius: 10px; }
    .btn-primary { background-color: #0057ff; border: none; }
    .btn-outline-primary { border-color: white; color: #0057ff; background-color: white; }
    footer { text-align: center; padding: 20px; font-size: 14px; }
  </style>
</head>
<body>
  <div class="container d-flex flex-column justify-content-between min-vh-100">
    <div class="d-flex justify-content-center align-items-center flex-grow-1">
      <div class="login-box row w-100">
        <div class="col-md-6 left-box">
          <h1 class="text-primary">Portal de Compras</h1>
          <p class="mb-4">Acesse sua conta!</p>
          <form method="POST" action="../routes/web.php?route=login">
            <div class="mb-3">
              <label class="form-label">E-mail</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
          </form>
        </div>

        <div class="col-md-6 right-box">
          <h1 class="mb-4">Cadastre-se</h1>
          <form method="POST" action="../routes/web.php?route=register">
            <div class="mb-3">
              <label class="form-label">E-mail</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Senha</label>
              <input type="password" class="form-control" name="senha" required>
            </div>
            <button type="submit" class="btn btn-outline-primary w-100">Registrar</button>
          </form>
        </div>
      </div>
    </div>

    <footer>
      <a href="#">portaldecompras.com</a> © Todos os direitos reservados
    </footer>
  </div>
</body>
</html>
