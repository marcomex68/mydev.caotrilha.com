<?php include __DIR__ . "/../includes/header_admin.php"; ?>

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
          <?php foreach ($estadias as $estadia): ?>
            <tr>
              <td><?= $estadia->getId() ?></td>
              <td><?= $estadia->getDataEntrada() ?></td>
              <td><?= $estadia->getDataSaida() ?></td>
              <td><?= $estadia->getPrecoTotal() ?></td>
              <td><?php if ($estadia->getPago() ===  true): ?>
                                <span class="badge bg-success">Pago</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Pendente</span>
                            <?php endif; ?></td>
              <td><button class="btn btn-sm btn-outline-danger">🗑</button></td>
            </tr>
          <?php endforeach; ?>
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