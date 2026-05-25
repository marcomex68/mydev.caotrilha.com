<?php include __DIR__ . "/../includes/header_admin.php"; ?>

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
        <div class="text-body-secondary small mb-1">Clientes</div>
        <h3 class="mb-0 fw-bold"><?= $userCount ?? 0 ?></h3>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="card shadow-sm text-center h-100">
      <div class="card-body">
        <div class="text-body-secondary small mb-1">Cães</div>
        <h3 class="mb-0 fw-bold"><?= $caesCount ?? 0 ?> </h3>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="card shadow-sm text-center h-100">
      <div class="card-body">
        <div class="text-body-secondary small mb-1">Trilhas</div>
        <h3 class="mb-0 fw-bold"><?= $trilhasCount ?? 0 ?></h3>
      </div>
    </div>
  </div>
  <div class="col-6 col-md-3">
    <div class="card shadow-sm text-center h-100">
      <div class="card-body">
        <div class="text-body-secondary small mb-1">Estadias</div>
        <h3 class="mb-0 fw-bold"><?= $estadiasCount ?? 0 ?></h3>
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

  <?php include __DIR__ . "/../includes/footer_admin.php"; ?>