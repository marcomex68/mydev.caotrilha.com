<?php include __DIR__ . "/../includes/header_admin.php"; ?>

<!-- CONTEÚDO -->
<div class="container py-4">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">🐶 Cães</h2>
  </div>

  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Pesquisar cão..." oninput="
      const t = this.value.toLowerCase();
      document.querySelectorAll('#tabelaCaes tr').forEach(tr => {
        tr.style.display = tr.innerText.toLowerCase().includes(t) ? '' : 'none';
      });
    ">
  </div>

  <div class="card shadow-sm">
    <div class="table-responsive">
      <table class="table table-hover mb-0">

        <thead class="table-dark">
          <tr>
            <th>Id</th>
            <th>Trilha</th>
            <th>Estadia</th>
            <th>Nome</th>
            <th>Raça</th>
            <th>Idade</th>
            <th>Dono</th>
            <th>Esterilizado</th>
            <th>Peso</th>
            <th>Sexo</th>
          </tr>
        </thead>

        <tbody id="tabelaCaes">
          <?php foreach ($caes as $cao): ?>
            <tr>
              <td><?= $cao->getId() ?></td>
              <td><?= $cao->getTrilhaNome() ?></td>
              <td><?= $cao->getEstadiaId() ?></td>
              <td><?= $cao->getNome() ?></td>
              <td><?= $cao->getRaca() ?></td>
              <td><?= $cao->getIdade() ?></td>
              <td><?= $cao->getDonoNome() ?></td>
              <td><?= $cao->getEsterilizado() ?></td>
              <td><?= $cao->getPeso() ?> kg</td>
              <td><?= $cao->getSexo() ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>