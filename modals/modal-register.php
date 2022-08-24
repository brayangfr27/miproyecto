<div class="modal fade" id="Register">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Registrarse</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="controllers/controllerusers.php" method="post">
          <div class="mb-3 mt-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingresar nombre">
          </div>
          <div class="mb-3">
          <label for="apellido" class="form-label">Contraseña:</label>
          <input type="text" name="apeliido" class="form-control" id="apellido" placeholder="Ingresar apellido">
          </div>
          <div class="mb-3">
          <label for="telefono" class="form-label">Telefono:</label>
          <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ingresar telefono">
          </div>
          <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Ingresar email">
          </div>
          <div class="mb-3 mt-3">
          <label for="pwd" class="form-label">Contraseña:</label>
          <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Ingresar contraseña">
          </div>
          <button type="submit" class="btn btn-dark">Registrarse</button>

        </form>
      </div>

    </div>
  </div>
</div>