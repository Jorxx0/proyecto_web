<div class="container mb-5 mt-5">
    <style>
        .container {
            color: white;
        }
    </style>
    <h1 class="text-center">Iniciar Sesión</h1>
    <form action="index.php?controller=UserController&action=iniciarSesion" method="POST">
        <div class="mb-3">
            <label for="NOMBRE" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="NOMBRE" name="NOMBRE">
            <?php
                if (isset($data) && isset($data['NOMBRE']))
                    echo "<div class='alert alert-danger'>"
                        . $data['NOMBRE'] .
                        "</div>";
            ?>
        </div>
        <div class="mb-3">
            <label for="CONTRA" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="CONTRA" name="CONTRA">
            <?php
                if (isset($data) && isset($data["CONTRA"]))
                    echo "<div class='alert alert-danger'>"
                        . $data["CONTRA"] .
                        "</div>";
            ?>
        </div>
        <input class="form-control btn btn-primary" type="submit" name="iniciar" value="Iniciar">
    </form>
    <div class="mt-3">
        <?php

        if (isset($data) && isset($data["error"])) {
            echo "<div class='alert alert-danger'>"
                . $data["error"] .
                "</div>";
        }

        ?>
    </div>
</div>
