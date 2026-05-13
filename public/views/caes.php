<?php include __DIR__ . "/../includes/header_admin.php"; ?>

<!-- CONTEÚDO -->
<div class="container py-4">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">🐶 Cães</h2>
    <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalCao">+ Novo Cão</button>
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
          <th>Ações</th>
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
            <td><button class="btn btn-sm btn-outline-danger">🗑</button></td>
          </tr>
        <?php endforeach; ?>
    </table>
  </div>
</div>

</div>

<!-- MODAL -->
<div class="modal fade" id="modalCao" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Novo Cão</h5>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body d-flex flex-column gap-2">
        <input class="form-control" placeholder="Nome">
        <input class="form-control" placeholder="Raça">
        <input class="form-control" placeholder="Idade" type="number">
        <select class="form-select">
          <option value="">Selecionar dono...</option>
          <option>João Silva</option>
          <option>Maria Santos</option>
          <option>Pedro Costa</option>
          <option>Ana Pereira</option>
          <option>Carlos Ferreira</option>
          <option>Sofia Oliveira</option>
          <option>Ricardo Sousa</option>
          <option>Inês Martins</option>
          <option>Miguel Rocha</option>
          <option>Beatriz Almeida</option>
          <option>Tiago Gomes</option>
          <option>Carla Ribeiro</option>
          <option>Bruno Carvalho</option>
          <option>Patrícia Mendes</option>
          <option>André Lopes</option>
        </select>
        <select class="form-select">
          <option>Creche</option>
          <option>Estadia</option>
        </select>
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