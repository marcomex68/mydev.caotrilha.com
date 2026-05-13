<?php include __DIR__ . "/../includes/header_admin.php"; ?>

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
            <th>Id</th>
            <th>Nome</th>
            <th>Data</th>
            <th>Kms</th>
            <th>Localidade</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($trilhas as $trilha) : ?>
            <tr>
              <td><?= $trilha->getId() ?></td>
              <td><?= $trilha->getNome() ?></td>
              <td><?= $trilha->getData() ?></td>
              <td><?= $trilha->getKms() ?></td>
              <td><?= $trilha->getLocalidade() ?></td>
              <td class="text-end">
                <button class="btn btn-sm btn-outline-secondary">Editar</button>
                <button class="btn btn-sm btn-outline-danger">Eliminar</button>
              </td>
            </tr>
          <?php endforeach; ?>

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