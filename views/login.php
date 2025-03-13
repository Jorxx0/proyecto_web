    <div class="container mt-5">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)): ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '<?php echo htmlspecialchars($error); ?>'
                });
            </script>
        <?php endif; ?>
        <form action="index.php?controller=UserController&action=iniciarSesion" method="POST">
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
