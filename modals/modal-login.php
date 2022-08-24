<div class="modal fade" id="Login">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Iniciar sesion</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="controllers/controllerusers.php" method="post">
          <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Ingresar email">
          </div>
          <div class="mb-3 mt-3">
          <label for="pwd" class="form-label">Contraseña:</label>
          <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Ingresar contraseña">
          </div>
          <button type="submit" class="btn btn-dark">Iniciar sesion</button>

        </form>
      </div>

    </div>
  </div>
</div>