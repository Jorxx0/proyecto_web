<!-- FOOTER INICIO -->

<footer class="text-center text-lg-start bg-dark text-muted">

  <!-- REDES SOCIALES INICIO -->

  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom border-top">
    <div class="me-5 d-none d-lg-block">
      <span>Conéctate con nostros en las redes sociales:</span>
    </div>

    <div>
      <a href="" class="me-4 link-secondary text-decoration-none">
        <i class="fab fa-facebook-f text-secondary"></i>
      </a>
      <a href="" class="me-4 link-secondary text-decoration-none">
        <i class="fab fa-twitter text-secondary"></i>
      </a>
      <a href="" class="me-4 link-secondary text-decoration-none">
        <i class="fab fa-google text-secondary"></i>
      </a>
      <a href="" class="me-4 link-secondary text-decoration-none">
        <i class="fab fa-instagram text-secondary"></i>
      </a>
      <a href="" class="me-4 link-secondary text-decoration-none">
        <i class="fab fa-linkedin text-secondary"></i>
      </a>
      <a href="" class="me-4 link-secondary text-decoration-none">
        <i class="fab fa-github text-secondary"></i>
      </a>
    </div>
  </section>
  <!-- REDES SOCIALES FIN -->


  <!-- NEWSLETTER INICIO -->

  <div class="container p-4 pb-0">
    <section class="">
      <form action="">
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2">
              <strong>Suscribete a nuestra newsletter:</strong>
            </p>
          </div>

          <div class="col-md-5 col-12">
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example29" class="form-control" placeholder="Dirección de correo" />
            </div>
          </div>

          <div class="col-auto">
            <button type="button" class="btn btn-outline-light mb-4" onclick="subscrito()">
              Suscribete
            </button>
          </div>
        </div>
      </form>
    </section>
  </div>
  <!-- NEWSLETTER FIN -->

  <!-- ATOPEEXTREMENO INICIO -->

  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">AtopeExtremeño</h6>
          <p>Envíos en 24/48 horas</p>
          <p>
            Productos de altísima calidad con los precios más competitivos
            del mercado
          </p>
          <p>Atención personalizada con personal cualificado</p>
          <p>Click and Go! en 2 horas</p>
        </div>
        <!-- ATOPEEXTREMENO FIN -->

        <!-- PRODUCTOS INICIO -->

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Productos destacados</h6>
          <p>
            <a href="#!" class="text-reset">Placas base</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Monitores</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Procesadores</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Memorias RAM</a>
          </p>
        </div>
        <!-- PRODUCTOS FIN -->

        <!-- INFORMACION INICIO -->

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Información</h6>
          <p>Lunes a Viernes: 8 a 19</p>
          <p>Metodos de pago:</p>
          <p>
            <i class="fab fa-cc-visa fa-3x"></i>
            <i class="fab fa-cc-paypal fa-3x"></i>
          </p>
          <p>
            <i class="fab fa-cc-mastercard fa-3x"></i>
            <i class="fab fa-cc-apple-pay fa-3x"></i>
          </p>
        </div>
        <!-- INFORMACION FIN -->

        <!-- CONTACTO INICIO -->

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p>
            <i class="fas fa-home me-3 text-secondary"></i> Av. Felipe Corchero, 37, 06800 Mérida (Badajoz)
          </p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i> info@computertecnology.com
          </p>
          <p>
            <i class="fas fa-phone me-3 text-secondary"></i> + 34 654 321 098
          </p>
          <p>
            <i class="fas fa-print me-3 text-secondary"></i> + 34 654 321 097
          </p>
        </div>
        <!-- CONTACTO FIN -->
      </div>
    </div>
  </section>

  <!-- COPYRIGHT -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025)">
    <p>© 2025 Copyright: Jorge López Benito</p>
  </div>
  <!-- COPYRIGHT -->
</footer>
<!-- FOOTER FIN -->

<script>
  /*
      Muestra una alerta de éxito cuando se añade un producto a la cesta
      Parámetros: no tiene
      Retorna: no tiene, muestra una alerta de éxito
  */
  function cesta() {
    Swal.fire({
      title: "¡Añadido!",
      text: "Producto añadido a la cesta.",
      icon: "success",
      timer: 1000,  // La alerta se cerrará en 1 segundo
      timerProgressBar: true,
      showConfirmButton: false,
      background: "#222",  // Fondo oscuro
      color: "#fff" // Texto en blanco para mejor contraste
    });
  }

  /*
      Muestra una alerta de éxito cuando se suscribe a la newsletter
      Parámetros: no tiene
      Retorna: no tiene, muestra una alerta de éxito
  */
  function subscrito() {
    Swal.fire({
      title: "¡Subscrito!",
      text: "Te has subscrito a nuestra newsletter.",
      icon: "success",
      timer: 1000,  // La alerta se cerrará en 1 segundo
      timerProgressBar: true,
      showConfirmButton: false,
      background: "#222",  // Fondo oscuro
      color: "#fff" // Texto en blanco para mejor contraste
    });
  }

  /*
      Muestra los detalles del producto en un modal
      Parámetros: 
          nombre, nombre del producto
          descripcion, descripción del producto
          stock, stock del producto
          img, imagen del producto
          precio, precio del producto
      Retorna: no tiene, muestra los detalles del producto en un modal
  */
  function showProductDetails(nombre, descripcion, stock, img, precio) {
    document.getElementById('modalProductName').innerText = nombre;
    document.getElementById('modalProductDescription').innerText = descripcion;
    document.getElementById('modalProductStock').innerText = stock;
    document.getElementById('modalProductImage').src = 'assets/img/' + img;
    document.getElementById('modalProductPrice').innerText = precio + ' €';
  }
</script>

<!-- MODAL INICIO -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" style="color: #24209d;" id="exampleModalLabel">Detalles del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="card mb-2">
          <div class="d-flex justify-content-center">
            <img id="modalProductImage" src="" class="card-img-top rounded" style="width: 80%; height: auto;" alt="Producto" />
          </div>
          <div class="card-body">
            <h5 class="card-title" id="modalProductName"></h5>
            <p class="card-text" id="modalProductDescription"></p>
            <p class="card-text"><strong>Stock: </strong><span id="modalProductStock"></span></p>
            <p class="card-text"><strong>Precio: </strong><span id="modalProductPrice"></span></p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="cesta()">Añadir al carrito</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL FIN -->

<!-- JAVASCRIPT BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
</body>

</html>
<!-- ;) -->