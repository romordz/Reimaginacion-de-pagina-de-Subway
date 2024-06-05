<?php
session_start();

    include("config/db.php");
    include("config/functions.php");

    $user_data = check_login($conn);
    $user_connected = false;

    if($user_data != null){
        $user_connected = true;
    }
    else{
        header("location: index.php");
    }
?>

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
                  Realizar pedido
                </button>
                  <ul class="dropdown-menu subtab text-center">
                      <li><h6 class="dropdown-header subtab-item-disabled">Pedir Aqui</h6></li>
                      <li><a class="dropdown-item subtab-item" href="index.php" style="margin-right: 55px;">Pedir y Recoger</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><h6 class="dropdown-header subtab-item-disabled">Pedir en App</h6></li>
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
                      <li><a class="dropdown-item subtab-item" href="#">Sandwiches</a></li>
                      <li><a class="dropdown-item subtab-item" href="#">Ensaladas</a></li>
                      <li><a class="dropdown-item subtab-item" href="#">Bebidas</a></li>
                      <li><a class="dropdown-item subtab-item" href="#">Acompañamientos</a></li>
                  </ul>
              </div>
              <div>
                <a class="btn tabs" href="index.php#MENU">Ver Menú</a>
              </div>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php if ($user_connected) {?>
              <div class="dropdown me-2">
                  <button class="btn tabs username dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $user_data["Nombre"];?>
                  </button> 
                    <ul class="dropdown-menu subtab text-center">
                        <li><a class="dropdown-item subtab-item" href="user-info.php">Mi perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item subtab-item" href="config/log-out.php">Cerrar Sesión</a></li>
                    </ul>
              </div>
                <i class="bi bi-person-circle fs-1"></i>
                <?php 
                }
                else{
                ?>
                <a class="btn tabs" href="log-in.php">
                  Iniciar Sesión
                </a>
                <?php 
                }
                ?>
            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center align-items-center text-center fullpage">
        <div class="card login-card px-5 pb-3">
            <div class="py-2 border-bottom mb-0">
                <h1 class="fs-1 text-center m-0 title">Mi Perfil</h1>
            </div>
            <form>
                <div class="mb-1">
                    <p class="fs-4 fw-bold text-center">Usuario</p>
                    <input type="text" class="form-control custom-inputs" disabled value="<?php echo $user_data['Nombre'];?>">
                </div>
                <div class="mb-1">
                    <p class="fs-4 fw-bold text-center">Correo</p>
                    <input type="email" class="form-control custom-inputs" disabled value="<?php echo $user_data['Correo'];?>">
                </div>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
