<?php include __DIR__ . "/../includes/header_admin.php"; ?>
<?php /** @var Estadia[] $estadias  */ ?>
<!-- CONTEÚDO -->
<div class="container py-4">

  <!-- HEADER -->
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">🏡 Estadias</h2>
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

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>