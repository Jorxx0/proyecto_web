<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Computer Tecnology</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.min.css" />
  <!-- LIBRERIA BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <!-- Incluir SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <style>
    .sombra {
      box-shadow: 0 0 10px rgb(41, 41, 41);
    }
  </style>

  <body class="bg-dark">

    <!-- BARRA SUPERIOR INICIO -->

    <nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, #000,#24209d);">
      <div class="container-fluid">

        <!-- INFO EMPRESA INICIO -->
        <a class="navbar-brand text-light p-lg-3" href="index.php?controller=ProductController&action=getAllProducts#">
          <img src="assets/img/logo.png" alt="" width="auto" height="100vh" />
        </a>
        <a class="navbar-brand text-light p-lg-3 d-none d-xxl-block"
          href="index.php?controller=ProductController&action=getAllProducts#">Computer Tecnology</a>
        <!-- INFO EMPRESA FIN -->

        <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>

          <!-- BOTONES INICIO -->
          <div class="d-flex">
            <?php if (isset($_SESSION['usuario']) && isset($_SESSION['usuario']['NOMBRE'])): ?>
              <span class="navbar-text text-light me-2">
                Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']['NOMBRE']); ?>
              </span>
              <!-- <a href="index.php?controller=userController&action=cerrarSesion" class="btn btn-secondary me-2">
                Cerrar Sesión
              </a> -->
              <?php if (isset($_SESSION['usuario']['ROL']) && $_SESSION['usuario']['ROL'] == 'Admin'): ?>
                <a href="index.php?controller=ProductController&action=aniadirProduct" class="btn btn-secondary me-2">
                  Añadir productos
                </a>
              <?php endif; ?>
            <?php else: ?>
              <a href="index.php?controller=userController&action=iniciarSesion" class="btn btn-secondary me-2">
                Iniciar Sesión
              </a>
            <?php endif; ?>
            <a href="index.php?controller=ProductController&action=showCarrito" class="btn btn-secondary">
              🛒 Carrito
            </a>

          </div>
          <!-- BOTONES FIN -->

        </div>
      </div>
    </nav>

    <!-- BARRA SUPERIOR FIN -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
</body>
</html>