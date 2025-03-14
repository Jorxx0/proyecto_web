<div class="container mt-4">
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
            <tbody>
                <?php foreach ($data as $producto): ?>
                    <tr>
                        <td><?= htmlspecialchars($producto->nombre) ?></td>
                        <td><?= number_format($producto->precio, 2) ?>€</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="d-flex justify-content-start align-items-center mt-4">

            <a href="index.php" class="btn btn-info">Ver Productos</a>


            <div class="fw-bold ms-auto">
                <p>Total: 
                    <?php 
                        $total = 0;
                        foreach ($data as $producto) {
                            $total += $producto->precio;
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