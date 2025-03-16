<!--
    Vista para mostrar el carrito de compras. Contiene el código HTML para mostrar los productos en el carrito
    así como el código PHP para calcular el total y mostrar mensajes de error o éxito, en caso de existir.
-->
<div class="container mt-4" style="color: white;">
    <h2>Tu Carrito</h2>

    <?php if (empty($data)): ?>
        <div class="alert alert-warning" role="alert">
            Tu carrito está vacío. ¡Añade productos para empezar a comprar!
        </div>
    <?php else: ?>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody style="color: white;">
                <?php foreach ($data as $producto): ?>
                    <tr>
                        <td style="color:white;"><?= htmlspecialchars($producto['NOMBRE']) ?></td>
                        <td style="color:white;"><?= number_format($producto['PRECIO'], 2) ?>€</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="d-flex justify-content-start align-items-center mt-4 mb-5">

            <a href="index.php?controller=ProductController&action=getAllProducts" class="btn btn-info">Ver Productos</a>

            <div class="fw-bold ms-auto">
                <p>Total: 
                    <?php 
                        /*
                            Calcula el total de los productos en el carrito
                            Parámetros: no tiene
                            Retorna: no tiene, muestra el total calculado
                        */
                        $total = 0;
                        foreach ($data as $producto) {
                            $total += $producto['PRECIO'];
                        }
                        echo number_format($total, 2) . "€"; 
                    ?>
                    <?php if (isset($_SESSION['mensaje'])): ?>
                        <div class="alert alert-success">
                            <?php echo $_SESSION['mensaje']; ?>
                            <?php unset($_SESSION['mensaje']); ?>
                        </div>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    <?php endif; ?>
</div>