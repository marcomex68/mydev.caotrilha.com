<?php include __DIR__ . "/../includes/header_admin.php"; ?>

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