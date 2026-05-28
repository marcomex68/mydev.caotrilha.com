<?php include __DIR__ . "/../includes/header_admin.php"; ?>

<form method="POST" action="/createTrilha">
  <div class="modal-body d-flex flex-column gap-2">

    <input class="form-control" name="nome" placeholder="Nome da trilha" required>

    <input type="date" class="form-control" name="data" required>

    <input class="form-control" name="kms" placeholder="Distância (km)" required>

    <input class="form-control" name="localidade" placeholder="Localidade" required>

  </div>

  <div class="modal-footer">
    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
    <button type="submit" class="btn btn-dark">Guardar</button>
  </div>
</form>

