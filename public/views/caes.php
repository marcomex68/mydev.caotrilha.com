<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cães • CãoTrilha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">☰</button>
    <span class="navbar-brand ms-2">CãoTrilha</span>
    <div class="dropdown">
      <button class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown">admin@esjaloures.org</button>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><span class="dropdown-item-text">Sessão ativa</span></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item text-danger" href="login.html">Sair</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- MENU LATERAL -->
<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="menuLateral">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu</h5>
    <button class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <nav class="nav flex-column gap-1">
      <a href="index.html"    class="nav-link text-white">🏠 Dashboard</a>
      <a href="caes.html"     class="nav-link text-warning">🐶 Cães</a>
      <a href="trilhas.html"  class="nav-link text-white">🌲 Trilhas</a>
      <a href="estadias.html" class="nav-link text-white">🏡 Estadias</a>
      <a href="clientes.html" class="nav-link text-white">👤 Clientes</a>
    </nav>
  </div>
</div>

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
          <th>Nome</th>
          <th>Raça</th>
          <th>Idade</th>
          <th>Dono</th>
          <th>Estado</th>
          <th>Peso</th>
          <th>Sexo</th>
          <th>Ações</th>
        </tr>
      </thead>

      <tbody id="tabelaCaes">
        <tr><td>Thor</td><td>Boiadeiro de Berna</td><td>3</td><td>João Silva</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>45 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Luna</td><td>Cão Islandês</td><td>2</td><td>Maria Santos</td><td><span class="badge bg-success">Estadia</span></td><td>18 kg</td><td>Fêmea</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Simba</td><td>Chow Chow</td><td>4</td><td>Pedro Costa</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>25 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Max</td><td>Golden Retriever</td><td>5</td><td>Ana Pereira</td><td><span class="badge bg-success">Estadia</span></td><td>30 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Nina</td><td>Husky Siberiano</td><td>3</td><td>Carlos Ferreira</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>22 kg</td><td>Fêmea</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Kira</td><td>Husky Siberiano</td><td>1</td><td>Sofia Oliveira</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>20 kg</td><td>Fêmea</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Bolt</td><td>Terra Nova</td><td>6</td><td>Ricardo Sousa</td><td><span class="badge bg-success">Estadia</span></td><td>60 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Pongo</td><td>Dálmata</td><td>2</td><td>Inês Martins</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>24 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Zeus</td><td>Cane Corso</td><td>4</td><td>Miguel Rocha</td><td><span class="badge bg-success">Estadia</span></td><td>50 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Mia</td><td>Border Collie</td><td>2</td><td>Beatriz Almeida</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>19 kg</td><td>Fêmea</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Bobby</td><td>Shih Tzu</td><td>5</td><td>Tiago Gomes</td><td><span class="badge bg-success">Estadia</span></td><td>7 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Rex</td><td>Rottweiler</td><td>6</td><td>Carla Ribeiro</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>55 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Toby</td><td>Pinscher</td><td>3</td><td>Bruno Carvalho</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>5 kg</td><td>Macho</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Perdita</td><td>Dálmata</td><td>2</td><td>Patrícia Mendes</td><td><span class="badge bg-success">Estadia</span></td><td>23 kg</td><td>Fêmea</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
        <tr><td>Snow</td><td>Bichon Frisé</td><td>1</td><td>André Lopes</td><td><span class="badge bg-warning text-dark">Creche</span></td><td>6 kg</td><td>Fêmea</td><td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
      </tbody>
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