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
    echo '<button type="button" class="btn btn-primary mb-4" onclick="cesta()">Añadir al carrito</button>';
    echo '<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showProductDetails(\'' . htmlspecialchars($producto['NOMBRE']) . '\', \'' . htmlspecialchars($producto['DESCRIPCION']) . '\', \'' . htmlspecialchars($producto['STOCK']) . '\', \'' . htmlspecialchars($producto['IMG']) . '\', \'' . number_format($producto['PRECIO'], 2) . '\')">Ver producto</button>';
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

echo "</div>";
echo "</div>";

?>