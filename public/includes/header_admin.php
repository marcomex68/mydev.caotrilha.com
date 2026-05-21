<!Doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Backoffice • CãoTrilha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">

  <!-- NAVBAR -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">☰</button>
      <span class="navbar-brand ms-2">CãoTrilha Backoffice</span>
      <div class="dropdown">
        <button class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown">
          <?php if(AuthMiddlewareWeb::isLogin()): ?>
              <a class="nav-link" href="/users/<?= $_SESSION['token']['id']; ?>">
                <?= $_SESSION['token']['email'] ?>
              </a>
            <?php endif; ?>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
  <form action="/logout" method="POST" style="display: inline;">
    <input type="submit" value="Terminar sessão" class="dropdown-item">
  </form>
</li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- MENU LATERAL -->
  <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="menuLateral">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menu</h5>
      <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <nav class="nav flex-column gap-1">
        <a href="/clientes" class="nav-link text-white">Clientes</a>
        <a href="/caes" class="nav-link text-white">Cães</a>
        <a href="/trilhas" class="nav-link text-white">Trilhas</a>
        <a href="/estadias" class="nav-link text-white">Estadias</a>
      </nav>
    </div>
  </div>