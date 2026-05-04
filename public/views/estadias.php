<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estadias • CãoTrilha</title>
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
      <a href="estadias.html" class="nav-link text-warning">🏡 Estadias</a>
      <a href="clientes.html" class="nav-link text-white">👤 Clientes</a>
      <a href="definicoes.html" class="nav-link text-white">⚙️ Definições</a>
    </nav>
  </div>
</div>

<!-- CONTEÚDO -->
<div class="container py-4">

  <!-- HEADER -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">🏡 Estadias</h2>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalEstadia">
      + Nova Estadia
    </button>
  </div>

  <!-- TABELA -->
  <div class="card shadow-sm">
    <div class="table-responsive">
      <table class="table table-hover mb-0">
        <thead class="table-dark">
          <tr>
            <th>ID Cão</th>
            <th>Entrada</th>
            <th>Saída</th>
            <th>Preço</th>
            <th>Estado</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <tr><td>1</td><td>2025-01-02</td><td>2025-01-05</td><td>€75</td><td><span class="badge bg-success">Pago</span></td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>2</td><td>2025-01-10</td><td>2025-01-15</td><td>€125</td><td><span class="badge bg-warning text-dark">Pendente</span></td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>3</td><td>2025-02-01</td><td>2025-02-03</td><td>€50</td><td><span class="badge bg-success">Pago</span></td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>4</td><td>2025-02-05</td><td>2025-02-10</td><td>€125</td><td><span class="badge bg-success">Pago</span></td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>5</td><td>2025-02-12</td><td>2025-02-14</td><td>€50</td><td><span class="badge bg-warning text-dark">Pendente</span></td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        </tbody>

      </table>
    </div>
  </div>

</div>

<!-- MODAL -->
<div class="modal fade" id="modalEstadia" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Nova Estadia</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body d-flex flex-column gap-2">
        <input class="form-control" placeholder="ID do Cão">
        <input type="date" class="form-control">
        <input type="date" class="form-control">
        <input class="form-control" placeholder="Preço (€)">
        <select class="form-select">
          <option>Pago</option>
          <option>Pendente</option>
        </select>
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