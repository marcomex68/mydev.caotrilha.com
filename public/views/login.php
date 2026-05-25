<?php include __DIR__ . "/../includes/header_login.php"; ?>
 
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-6 col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h4 class="mb-3">Login</h4>
 
          <form method="POST" action="/login">
            <input name="email" class="form-control mb-2" placeholder="Email">
            <input name="password" type="password" class="form-control mb-3" placeholder="Password">
 
            <button class="btn btn-primary w-100">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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