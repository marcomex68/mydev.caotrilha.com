  <!-- FOOTER -->
  <footer class="bg-dark text-white mt-5 py-4">
    <div class="container">
      <div class="row align-items-center">

        <!-- INFO -->
        <div class="col-md-6 mb-3 mb-md-0">
          <h6 class="fw-bold mb-1">CãoTrilha Backoffice</h6>
          <small class="text-light-emphasis">
            Gestão de cães, trilhas e estadias.
          </small>
        </div>

        <!-- LINKS -->
        <div class="col-md-6">
          <div class="d-flex justify-content-md-end gap-3 flex-wrap">
            <a href="/clientes" class="text-decoration-none text-white">Clientes</a>
            <a href="/caes" class="text-decoration-none text-white">Cães</a>
            <a href="/trilhas" class="text-decoration-none text-white">Trilhas</a>
            <a href="/estadias" class="text-decoration-none text-white">Estadias</a>
          </div>
        </div>

      </div>

      <hr class="border-secondary my-3">

      <div class="text-center small text-light-emphasis">
        © <?= date('Y') ?> CãoTrilha • Todos os direitos reservados
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 
<script>
  const toast = <?= json_encode($_SESSION["toast"] ?? null) ?>;
 
  <?php unset($_SESSION['toast']); ?>
 
  if (toast) {
 
    toastr[toast.type](toast.message);
 
  }
</script>
 
 

</body>

</html>