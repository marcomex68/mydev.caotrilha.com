<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trilhas • CãoTrilha</title>
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
      <a href="trilhas.html" class="nav-link text-warning">🌲 Trilhas</a>
      <a href="estadias.html" class="nav-link text-white">🏡 Estadias</a>
      <a href="clientes.html" class="nav-link text-white">👤 Clientes</a>
      <a href="definicoes.html" class="nav-link text-white">⚙️ Definições</a>
    </nav>
  </div>
</div>

<!-- CONTEÚDO -->
<div class="container py-4">

  <!-- HEADER -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">🌲 Trilhas</h2>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalTrilha">
      + Nova Trilha
    </button>
  </div>

  <!-- TABELA -->
  <div class="card shadow-sm">
    <div class="table-responsive">
      <table class="table table-hover mb-0">
        <thead class="table-dark">
          <tr>
            <th>Nome</th>
            <th>Data</th>
            <th>Kms</th>
            <th>Localidade</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <tr><td>Parque Nacional Peneda Gerês</td><td>2025-06-01</td><td>10 km</td><td>Gerês</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>Pico do Areeiro</td><td>2025-06-05</td><td>7 km</td><td>Madeira</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>Sete Vales Suspensos</td><td>2025-06-15</td><td>12 km</td><td>Algarve</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>Vale do Rio Olo</td><td>2025-07-15</td><td>11 km</td><td>Mondim de Basto</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>Praia da Costa</td><td>2025-07-25</td><td>5 km</td><td>Costa da Caparica</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        </tbody>

      </table>
    </div>
  </div>

</div>

<!-- MODAL -->
<div class="modal fade" id="modalTrilha" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Nova Trilha</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-flex flex-column gap-2">
        <input class="form-control" placeholder="Nome da trilha">
        <input type="date" class="form-control">
        <input class="form-control" placeholder="Distância (km)">
        <input class="form-control" placeholder="Localidade">
        <input class="form-control" placeholder="País">
      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-dark" data-bs-dismiss="modal">Guardar</button>
      </div>

    </div>
  </div>
</div>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>