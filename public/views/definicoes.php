<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil • CãoTrilha</title>
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
        admin@esjaloures.org
      </button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><span class="dropdown-item-text">Sessão ativa</span></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="login.html">Sair</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- MENU -->
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="menuLateral">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu</h5>
    <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>

  <div class="offcanvas-body">
    <nav class="nav flex-column gap-1">
      <a href="index.html" class="nav-link text-white">🏠 Dashboard</a>
      <a href="caes.html" class="nav-link text-white">🐶 Cães</a>
      <a href="trilhas.html" class="nav-link text-white">🌲 Trilhas</a>
      <a href="estadias.html" class="nav-link text-white">🏡 Estadias</a>
      <a href="clientes.html" class="nav-link text-white">👤 Clientes</a>
      <a href="definicoes.html" class="nav-link text-warning">⚙️ Perfil</a>
    </nav>
  </div>
</div>

<!-- CONTEÚDO -->
<div class="container py-4">

  <!-- HEADER -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">⚙️ Perfil</h2>
  </div>

  <!-- CARD -->
  <div class="card shadow-sm">
    <div class="card-body">

      <div class="row g-3">

        <div class="col-md-6">
          <label class="form-label">Nome</label>
          <input class="form-control" value="João Silva">
        </div>

        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input class="form-control" value="joao.silva@email.com">
        </div>

        <div class="col-md-6">
          <label class="form-label">Telefone</label>
          <input class="form-control" value="912345678">
        </div>

        <div class="col-md-6">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" placeholder="••••••••">
        </div>

        <div class="col-12">
          <label class="form-label">Morada</label>
          <input class="form-control" value="Rua das Flores 10, Lisboa">
        </div>

      </div>

      <div class="mt-4 d-flex justify-content-end">
        <button class="btn btn-dark">Guardar Alterações</button>
      </div>

    </div>
  </div>

</div>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>