<?php include __DIR__ . "/../includes/header_admin.php"; ?>

<div class="container py-4">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">🌲 Trilhas</h2>
    <a href="/createTrilha" class="btn btn-dark">
      + Nova Trilha
    </a>
  </div>

  <div class="card shadow-sm">
    <div class="table-responsive">
      <table class="table table-hover mb-0">
        <thead class="table-dark">
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Kms</th>
            <th>Localidade</th>
          </tr>
        </thead>

        <tbody>
        <?php foreach ($trilhas as $trilha) : ?>
          <tr>
            <td><?= $trilha->getId() ?></td>
            <td><?= $trilha->getNome() ?></td>
            <td><?= $trilha->getKms() ?></td>
            <td><?= $trilha->getLocalidade() ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>

      </table>
    </div>
  </div>

</div>

</body>
</html>