<?php include __DIR__ . "/../includes/header_admin.php"; ?>
<?php /** @var User[] $users */ ?>
<!-- CONTEÚDO -->
<div class="container py-4">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">👤 Clientes</h2>
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
            <th>Is Admin</th>
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
              <td><?php if ($user->getIsAdmin()): ?>
                  <i class="fa-solid fa-user"></i>
                <?php else: ?>
                  <i class="fa-regular fa-user"></i>
                <?php endif; ?>
              </td>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>