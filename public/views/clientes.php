<!doctype html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clientes • CãoTrilha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-body-tertiary">

<!-- NAVBAR -->
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">☰</button>
    <span class="navbar-brand ms-2">CãoTrilha Backoffice</span>
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
      <a href="index.html"      class="nav-link text-white">🏠 Dashboard</a>
      <a href="caes.html"       class="nav-link text-white">🐶 Cães</a>
      <a href="trilhas.html"    class="nav-link text-white">🌲 Trilhas</a>
      <a href="estadias.html"   class="nav-link text-white">🏡 Estadias</a>
      <a href="clientes.html"   class="nav-link text-warning">👤 Clientes</a>
      <a href="definicoes.html" class="nav-link text-white">⚙️ Definições</a>
    </nav>
  </div>
</div>

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
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Morada</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>1</td>  <td>João Silva</td>       <td>joao.silva@email.com</td>       <td>912 345 678</td> <td>Rua das Flores 10, Lisboa</td>          <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>2</td>  <td>Maria Santos</td>     <td>maria.santos@email.com</td>     <td>913 456 789</td> <td>Avenida da Liberdade 25, Lisboa</td>    <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>3</td>  <td>Pedro Costa</td>      <td>pedro.costa@email.com</td>      <td>914 567 890</td> <td>Rua do Sol 8, Porto</td>                <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>4</td>  <td>Ana Pereira</td>      <td>ana.pereira@email.com</td>      <td>915 678 901</td> <td>Rua Central 45, Braga</td>              <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>5</td>  <td>Carlos Ferreira</td>  <td>carlos.ferreira@email.com</td>  <td>916 789 012</td> <td>Rua Nova 12, Coimbra</td>               <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>6</td>  <td>Sofia Oliveira</td>   <td>sofia.oliveira@email.com</td>   <td>917 890 123</td> <td>Rua das Oliveiras 33, Faro</td>         <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>7</td>  <td>Ricardo Sousa</td>    <td>ricardo.sousa@email.com</td>    <td>918 901 234</td> <td>Rua do Mercado 5, Aveiro</td>           <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>8</td>  <td>Inês Martins</td>     <td>ines.martins@email.com</td>     <td>919 012 345</td> <td>Rua do Campo 17, Setúbal</td>           <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>9</td>  <td>Miguel Rocha</td>     <td>miguel.rocha@email.com</td>     <td>920 123 456</td> <td>Rua das Palmeiras 22, Sintra</td>       <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>10</td> <td>Beatriz Almeida</td>  <td>beatriz.almeida@email.com</td>  <td>921 234 567</td> <td>Rua da Praia 9, Cascais</td>            <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>11</td> <td>Tiago Gomes</td>      <td>tiago.gomes@email.com</td>      <td>922 345 678</td> <td>Rua do Parque 14, Leiria</td>           <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>12</td> <td>Carla Ribeiro</td>    <td>carla.ribeiro@email.com</td>    <td>923 456 789</td> <td>Rua do Comércio 3, Évora</td>           <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>13</td> <td>Bruno Carvalho</td>   <td>bruno.carvalho@email.com</td>   <td>924 567 890</td> <td>Rua do Norte 28, Viseu</td>             <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>14</td> <td>Patrícia Mendes</td>  <td>patricia.mendes@email.com</td>  <td>925 678 901</td> <td>Rua da Igreja 6, Santarém</td>          <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
          <tr><td>15</td> <td>André Lopes</td>      <td>andre.lopes@email.com</td>      <td>926 789 012</td> <td>Rua da Escola 19, Guimarães</td>        <td><button class="btn btn-sm btn-outline-danger">🗑</button></td></tr>
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