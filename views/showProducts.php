<?php

echo "<div class='container mt-4'>";
echo "<h1>Listado de productos</h1>";
echo "<div class='row'>";

foreach ($data as $producto) {
    echo "<div class='col-md-4 mb-4'>";
    echo "<div class='card sombra' style='background-color:rgb(217, 217, 217);'>";
    echo "<img style='margin: 2%; width:auto; height:auto' src='assets/img/" . htmlspecialchars($producto['IMG']) . "' class='card-img-top rounded' alt='" . htmlspecialchars($producto['NOMBRE']) . "'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>" . htmlspecialchars($producto['NOMBRE']) . "</h5>";
    echo "<p class='card-text'><strong>Precio: </strong>" . number_format($producto['PRECIO'], 2) . " €</p>";
    echo '<div class="d-grid">';
    echo '<a href="index.php?controller=ProductController&action=aniadirCesta&id=' . htmlspecialchars($producto['ID']) . '" class="btn btn-primary mb-4">Añadir al carrito</a>';
    echo '<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showProductDetails(\'' . htmlspecialchars($producto['NOMBRE']) . '\', \'' . htmlspecialchars($producto['DESCRIPCION']) . '\', \'' . htmlspecialchars($producto['STOCK']) . '\', \'' . htmlspecialchars($producto['IMG']) . '\', \'' . number_format($producto['PRECIO'], 2) . '\')">Ver producto</button>';
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

echo "</div>";
echo "</div>";

?>

<script>
    /*
        Mostrar la ventana modal si el parámetro 'added' está presente en la URL
        Parámetros: no tiene
        Retorna: no tiene, muestra una alerta de éxito si el producto ha sido añadido al carrito
    */
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('added')) {
        Swal.fire({
            title: '¡Producto añadido!',
            text: 'El producto ha sido añadido al carrito.',
            icon: 'success',
            timer: 2000,
            showConfirmButton: false
        });
    }
</script>