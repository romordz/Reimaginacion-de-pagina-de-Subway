<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="text-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navbar.css ">
    <link rel="stylesheet" href="css/footer.css ">
    <link rel="stylesheet" href="css/general.css ">
    <link rel="stylesheet" href="css/dashboard.css ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css">
    <script src="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/intro.min.js"></script>
    <script src="js/jquery.js"></script>
    <style>
        body {
            background-color: #d3a142;
            font-family: 'Karla', 'Roboto Slab';
        }
        .container-content {
            padding-top: 20px;
            padding-bottom: 20px;
            margin-bottom: 10px;
            text-align: center;
        }
        .sucursal {
            background-color: #014d2a;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: 0 auto;
        }
        .sucursal:hover {
            transform: scale(1.05);
        }
        h1, p {
            color: #dadedf;
            font-weight: bold;
            text-align: center;
            font-family: 'Roboto Slab';
        }
        p{
          font-weight: 400;
          font-size: 25px;
        }
        .btn-google-maps {
            background-color: #ffbb00;
            font-weight: bold;
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }
        .btn-google-maps:hover {
            background-color: #ffca28;
        }
    </style>
</head>
<body>
    <!--Barra de navegación fijada arriba, color verde, texto blanco-->
    <nav class="navbar fixed-top navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <div class="mx-2">
              <a href="index.php">
                <img src="content/Logos/Subway-logo.png" alt="" style="width:200px;">
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-2"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
              <div class="dropdown first">
                <button class="btn tabs dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Pedir a Domicilio
                </button>
                  <ul class="dropdown-menu subtab text-center">
                      <li><a class="dropdown-item subtab-item" style="margin-right: 55px;" href="https://www.ubereats.com/mx/brand/subway"><img src="content/Logos/Uber.png" alt="" style="width:100px;"></a></li>
                      <li><a class="dropdown-item subtab-item" style="margin-right: 55px;" href="https://www.rappi.com.mx/monterrey/restaurantes/delivery/1017-subway"><img src="content/Logos/Rappi.png" alt="" style="width:60px;"></a></li>
                      <li><a class="dropdown-item subtab-item" style="margin-right: 55px;" href="https://www.didi-food.com/es-419/food/"><img src="content/Logos/DiDi.png" alt="" style="width:110px;"></a></li>
                  </ul>
              </div>
              <div>
              <a href="sucursales.php" class="btn tabs second">Restaurantes</a>

              </div>
              <div class="dropdown third">
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
              <div class="d-flex flex-row">
                <div class="dropdown logged-user sixth">
                    <button class="btn tabs username h-100 d-flex flex-row justify-content-center align-items-center text-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-caret-down-fill me-1" style="font-size:20px;"></i>
                      <e id="MyUser"></e>
                    </button> 
                      <ul class="dropdown-menu subtab text-center">
                          <li><a class="dropdown-item subtab-item text-wrap" href="create-card.php">Registrar tarjeta</a></li>
                          <li><a class="dropdown-item subtab-item" href="user-info.php">Mi perfil</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item subtab-item" href="config/log-out.php">Cerrar Sesión</a></li>
                      </ul>
                </div>
                <i class="bi bi-person-circle fs-1 logged-user"></i>
              </div>
                <a class="btn tabs seventh" href="log-in.php" style="margin: 7px 0px;" id="not-logged-user">
                  Iniciar Sesión
                </a>
            </div>
        </div>
    </nav>


    <div class="container-content m-0 p-0">
    <br>  <br> <br>
    <div class="topcontainer mt-3">
      <p class="fs-1 m-0 pub-title text-center">Nuestras Sucursales</p>
    </div>
    <!--Contenido-->
    <?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "abc123";
    $dbname = "login";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Consulta SQL para obtener los datos de los locales
    $sql = "SELECT * FROM locals";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Iterar sobre los resultados y mostrar los locales
        while($row = $result->fetch_assoc()) {
            $direccion = $row["Direccion"];
            $telefono = $row["Telefono"];
            ?>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-10 offset-md-1 sucursal">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Dirección:</h1>
                                <p><?php echo $direccion; ?></p>
                                <h1>Teléfono:</h1>
                                <p><?php echo $telefono; ?></p>
                                <a href="https://www.google.com/maps/search/<?php echo urlencode($direccion); ?>" target="_blank" class="btn-google-maps">Buscar en Google Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "No se encontraron resultados.";
    }

    $conn->close();
    ?>
    <br>
    </div>
    
    <!--Footer-->
    <div class="container-fluid position-absolute footer py-3">
      <div class="text-center">
        <div class="my-3">
          <a href="index.php"><img src="content/Logos/Subway-logo.png" alt="" style="width:200px;"></a>
        </div>
      </div>
      <div class="mb-3">
        <p class="mb-1 text-center"><strong>Pagina hecha por:</strong></p>
        <div class="d-flex flex-row justify-content-center text-center">
          <div class="info mx-3">
            <p class="m-0"><strong>Nombre: </strong>Carlos Isaí Vera Moreno</p>
            <p class="m-0"><strong>Matricula: </strong>1994070</p>
          </div>
          <div class="info mx-3">
            <p class="m-0"><strong>Nombre: </strong>Ricardo Romo Rodriguez</p>
            <p class="m-0"><strong>Matricula: </strong>2022931</p>
          </div>
        </div>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col">
            <p class="mb-1 desc-title">Sobre Subway</p>
            <p class="mb-1 info">Subway es una cadena internacional de restaurantes especializada en la elaboración de sándwiches y ensaladas personalizables</p>
            <a href="#" class="m-0 info little-link">Nuestra Historia</a>
            <br>
            <a href="#" class="m-0 info little-link">Preguntas Frecuentes</a>
          </div>
          <div class="col">
            <p class="mb-1 desc-title">Redes Sociales</p>
            <p class="mb-1 info">¡Siguenos en nuestras redes sociales!</p>
            <a href="https://www.facebook.com/SubwayMexico" class="info little-link">Facebook</a>
            <br>
            <a href="https://twitter.com/subwaymexico" class="info little-link">Twitter / X</a>
            <br>
            <a href="https://www.instagram.com/subwaymexico/" class="info little-link">Instagram</a>
            <br>
            <a href="https://www.youtube.com/channel/UC-R5RJKvdXaKQVdh-DuURZw" class="info little-link">Youtube</a>
            <br>
            <a href="https://www.tiktok.com/@subway" class="info little-link">TikTok</a>
          </div>
          <div class="col">
            <p class="mb-1 desc-title">Legal</p>
            <p class="m-0 info">SUBWAY® es una marca registrada de Subway IP LLC.</p>
            <p class="m-0 info">© 2023-2024 Subway IP LLC.</p>
            <p class="m-0 info">Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
      <div class="text-center">
        <br>
        <p class="m-0 littleinfo">Esta es una pagina conceptual, no nos demanden :(</p>
      </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>

    <script>
      var loggedIn;

      $(document).ready(function(){
        function fetchUserInfo(callback) {
          $.ajax({
              type: 'GET',
              url: 'config/getUserInfo.php',
              dataType: 'json',
              success: function(response) {
                  if (response.success) {
                      var userInfo = response.user_info;
                      content = userInfo.Nombre;
                      isStarter = parseInt(userInfo.Starter, 10);
                      $('#MyUser').html(content);

                      if(callback){
                        callback();
                      }
                  } else {
                  }
              }
          });
        }

        function checkLoginStatus() {
          $.ajax({
              type: 'GET',
              url: 'config/checkLogIn.php',
              dataType: 'json',
              success: function(response) {
                  if (response.logged_in) {
                      loggedIn = true;
                      fetchUserInfo();
                      
                      $(".logged-user").show();
                      $("#not-logged-user").hide();
                      console.log('User is logged in');
                  } else {
                      loggedIn = false;
                      $(".logged-user").hide();
                      $("#not-logged-user").show();
                      console.log('User is not logged in');
                  }
              }
          });
        }
        checkLoginStatus();
      });
    </script>
</body>
</html>