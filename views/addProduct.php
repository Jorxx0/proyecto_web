<!--
    Vista para añadir nuevos productos. Contiene el código HTML con el formulario así como el código PHP para
    mostrar errores de validación, en caso de existir.
-->
<div class="container">
    <style>
        .form-label,
        h2,
        h5 {
            color: white;
        }
    </style>
    <div class="row">
        <div class="col-12 mt-5 mb-5">
        <div class="col-12">
            <h2>Añadir productos</h2>
        </div>
            <h5>Introduce los datos de los productos:</h2>

                <form class="form light" action="index.php?controller=ProductController&action=aniadirProduct"
                    method="post">
                    <div class="form-group">
                        <label class="form-label" for="nombre">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" maxlength="50" value=""
                            placeholder="Monitor"><br>
                        <?php
                        if (isset($data) && isset($data['nombre']))
                            echo "<div class='alert alert-danger'>"
                                . $data['nombre'] .
                                "</div>";
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="descripcion">Descripción:</label>
                        <input class="form-control" type="text" name="descripcion"
                            placeholder="Monitor OLED 4k 1080p"><br>
                        <?php
                        if (isset($data) && isset($data['descripcion']))
                            echo "<div class='alert alert-danger'>"
                                . $data['descripcion'] .
                                "</div>";
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="precio">Precio:</label>
                        <input class="form-control" type="text" name="precio" placeholder="150.00"><br>
                        <?php
                        if (isset($data) && isset($data['precio']))
                            echo "<div class='alert alert-danger'>"
                                . $data['precio'] .
                                "</div>";
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="stock">Stock:</label>
                        <input class="form-control" type="text" name="stock" maxlength="50" value=""
                            placeholder="3"><br>
                        <?php
                        if (isset($data) && isset($data['stock']))
                            echo "<div class='alert alert-danger'>"
                                . $data['stock'] .
                                "</div>";
                        ?>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="img">Imagen:</label>
                        <input class="form-control" type="text" name="img" maxlength="50" value=""
                            placeholder="monitoroled4k.png"><br>
                        <?php
                        if (isset($data) && isset($data['img']))
                            echo "<div class='alert alert-danger'>"
                                . $data['img'] .
                                "</div>";
                        ?>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="submit" name="insertar" value="Enviar">
                    </div>

                </form>
        </div>
    </div>