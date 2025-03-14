<form action="index.php?controller=UserController&action=iniciarSesion" method="POST"></form>
    <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>