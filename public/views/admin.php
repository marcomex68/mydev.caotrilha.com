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
          admin@esjaloures.org
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><span class="dropdown-item-text">Sessão ativa</span></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><button class="dropdown-item text-danger" onclick="logout()">Sair</button></li>
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
        <a href="clientes.html" class="nav-link text-white">🐶 Clientes</a>
        <a href="caes.html" class="nav-link text-white">🐶 Cães</a>
        <a href="trilhas.html" class="nav-link text-white">🐶 Trilhas</a>
        <a href="estadias.html" class="nav-link text-white">🐶 Estadias</a>
        <a href="definicoes.html" class="nav-link text-white">🐶 Definições</a>
      </nav>
    </div>
  </div>

  <!-- CONTEÚDO -->
  <div class="container py-4">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="mb-0">Dashboard</h2>
      <div class="d-flex gap-2">
        <button class="btn btn-outline-secondary" onclick="location.reload()">Atualizar</button>
      </div>
    </div>

    <!-- CAROUSEL -->
    <div id="carouselAvisos" class="carousel slide mb-4 shadow-sm rounded overflow-hidden" data-bs-ride="carousel"
      style="height:220px">
      <div class="carousel-indicators">
        <button data-bs-target="#carouselAvisos" data-bs-slide-to="0" class="active"></button>
        <button data-bs-target="#carouselAvisos" data-bs-slide-to="1"></button>
        <button data-bs-target="#carouselAvisos" data-bs-slide-to="2"></button>
      </div>
      <div class="carousel-inner h-100 rounded">
        <div class="carousel-item active h-100">
          <div class="bg-warning h-100 p-4 d-flex align-items-center">
            <div>
              <h5 class="fw-bold">🐶 Cães</h5>
              <p class="mb-0">Todo o conforto, carinho e vigilância que o seu patudo pode ter.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item h-100">
          <div class="bg-warning h-100 p-4 d-flex align-items-center">
            <div>
              <h5 class="fw-bold">🥾 Trilhas</h5>
              <p class="mb-0">Espaços naturais, longos percursos com lagoas de água fresca.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item h-100">
          <div class="bg-warning h-100 p-4 d-flex align-items-center">
            <div>
              <h5 class="fw-bold">🏕️ Estadias</h5>
              <p class="mb-0">Check-in e check-out com noites tranquilas.</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" data-bs-target="#carouselAvisos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" data-bs-target="#carouselAvisos" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>

    <!-- CARDS KPI -->
    <div class="row g-3 mb-4">
      <div class="col-6 col-md-3">
        <div class="card shadow-sm text-center h-100">
          <div class="card-body">
            <div class="text-body-secondary small mb-1">Cães na creche</div>
            <h3 class="mb-0 fw-bold">12</h3>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card shadow-sm text-center h-100">
          <div class="card-body">
            <div class="text-body-secondary small mb-1">Trilhas hoje</div>
            <h3 class="mb-0 fw-bold">2</h3>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card shadow-sm text-center h-100">
          <div class="card-body">
            <div class="text-body-secondary small mb-1">Estadias ativas</div>
            <h3 class="mb-0 fw-bold">5</h3>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="card shadow-sm text-center h-100">
          <div class="card-body">
            <div class="text-body-secondary small mb-1">Receita hoje</div>
            <h3 class="mb-0 fw-bold">€120</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- OCUPAÇÃO -->
    <div class="card shadow-sm">
      <div class="card-header fw-semibold">Ocupação (hoje)</div>
      <div class="card-body d-flex flex-column gap-3">

        <div>
          <div class="d-flex justify-content-between mb-1">
            <span class="fw-semibold">Creche</span>
            <span class="text-body-secondary">12 / 18</span>
          </div>
          <div class="progress" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-warning text-dark" style="width:67%">67%</div>
          </div>
        </div>

        <div>
          <div class="d-flex justify-content-between mb-1">
            <span class="fw-semibold">Trilhas</span>
            <span class="text-body-secondary">2 / 3</span>
          </div>
          <div class="progress" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-dark" style="width:67%">67%</div>
          </div>
        </div>

        <div>
          <div class="d-flex justify-content-between mb-1">
            <span class="fw-semibold">Estadias</span>
            <span class="text-body-secondary">5 / 8</span>
          </div>
          <div class="progress" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success" style="width:63%">63%</div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>