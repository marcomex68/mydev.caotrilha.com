<?php include __DIR__ . "/../includes/header_admin.php"; ?>
<!-- CONTEÚDO -->
<div class="container py-4">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">👤 Clientes</h2>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalCliente">+ Novo Cliente</button>
  </div>

  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Pesquisar cliente..." oninput="
      const t = this.value.toLowerCase();
      document.querySelectorAll('tbody tr').forEach(tr => {
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
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Morada</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($users as $user): ?>
            <tr>
              <td><?= $user->getId() ?></td>
              <td><?= $user->getNome() ?></td>
              <td><?= $user->getEmail() ?></td>
              <td><?= $user->getTelefone() ?></td>
              <td><?= $user->getMorada() ?></td>
              <td><button class="btn btn-sm btn-outline-danger">🗑</button></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>

<!-- MODAL -->
<div class="modal fade" id="modalCliente" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Novo Cliente</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body d-flex flex-column gap-2">
        <input class="form-control" placeholder="Nome">
        <input class="form-control" placeholder="Email" type="email">
        <input class="form-control" placeholder="Telefone" type="tel">
        <input class="form-control" placeholder="Morada">
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button class="btn btn-dark" data-bs-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>