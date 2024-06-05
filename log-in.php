<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="text-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navbar.css ">
    <link rel="stylesheet" href="css/footer.css ">
    <link rel="stylesheet" href="css/general.css ">
    <link rel="stylesheet" href="css/forms.css ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="js/jquery.js"></script>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <div class="mx-2">
              <a href="index.php"><img src="content/Logos/Subway-logo.png" alt="" style="width:200px;"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-2"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
              <div class="dropdown">
                <button class="btn tabs dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pedir en App
                </button>
                  <ul class="dropdown-menu subtab text-center">
                      <li><a class="dropdown-item subtab-item" style="margin-right: 55px;" href="https://www.ubereats.com/mx/brand/subway"><img src="content/Logos/Uber.png" alt="" style="width:100px;"></a></li>
                      <li><a class="dropdown-item subtab-item" style="margin-right: 55px;" href="https://www.rappi.com.mx/monterrey/restaurantes/delivery/1017-subway"><img src="content/Logos/Rappi.png" alt="" style="width:60px;"></a></li>
                      <li><a class="dropdown-item subtab-item" style="margin-right: 55px;" href="https://www.didi-food.com/es-419/food/"><img src="content/Logos/DiDi.png" alt="" style="width:110px;"></a></li>
                  </ul>
              </div>
              <div>
                <button class="btn tabs">
                  Restaurantes
                </button>
              </div>
              <div class="dropdown">
                <button class="btn tabs dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nutrición
                </button>
                  <ul class="dropdown-menu subtab text-center">
                    <li><h6 class="dropdown-header subtab-item-disabled" href="#">Datos de Nutrición</a></li>
                      <li><a class="dropdown-item subtab-item" href="nutricionalSandwich.php">Sandwiches</a></li>
                      <li><a class="dropdown-item subtab-item" href="nutricionalEnsalada.php">Ensaladas</a></li>
                      <li><a class="dropdown-item subtab-item" href="nutricionalBebida.php">Bebidas</a></li>
                      <li><a class="dropdown-item subtab-item" href="nutricionalExtra.php">Extras</a></li>
                  </ul>
              </div>
              <div>
                <a class="btn tabs" href="index.php#MENU">Ver Menú</a>
              </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            </div>
        </div>
    </nav>

    <div class="d-flex text-center p-0 h-100">
        <div class="card login-card px-5 pb-2 m-auto">
            <form method="post" id="loginForm">
                <div class="px-5 py-3 mb-3" style="border-bottom: solid 1px #e9cf3e;">
                    <h1 class="fs-1 text-center m-0 title">Iniciar Sesión</h1>
                </div>
                <div class="mb-4">
                    <p class="fs-2 fw-bold text-center">Usuario</p>
                    <input type="text" class="form-control custom-inputs" name="Nombre">
                </div>
                <div class="mb-4">
                    <p class="fs-2 fw-bold text-center">Contraseña</p>
                    <input type="password" class="form-control custom-inputs" name="Contra">
                </div>
                <p style="color: red; background-color: #004123; font-weight:bold; border-radius:5px; font-size: 20px;" id="loginMessage"></p>
                <button type="submit" id="ContinuarBtn" name="submit" class="btn btn-primary btn-lg mb-2">
                    Continuar
                </button>
            </form>
            <p>No tienes una cuenta? <a href="register.php">Registrate</a></p>
        </div>
    </div>

    <!--Footer-->
    <script src="js/bootstrap.bundle.js"></script>
    <script>
      $(document).ready(function() {
          $('#loginForm').submit(function(event) {
              event.preventDefault();
              
              var formData = $(this).serialize();
              
              $.ajax({
                  type: 'POST',
                  url: 'config/log-in.php',
                  data: formData,
                  dataType: 'json',
                  success: function(response) {
                      if (response.success) {
                          window.location.href = 'index.php';
                      } else {
                          $('#loginMessage').text(response.message);
                      }
                  }
              });
          });
      });
    </script>
</body>
</html>
