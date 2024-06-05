<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="text-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="js/jquery.js"></script>
</head>
<body>
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
                <button class="btn tabs second">
                  Restaurantes
                </button>
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
                <div class="dropdown logged-user">
                    <button class="btn tabs username h-100 d-flex flex-row justify-content-center align-items-center text-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-caret-down-fill me-1" style="font-size:20px;"></i>
                      <e id="MyUser"></e>
                    </button> 
                      <ul class="dropdown-menu subtab text-center">
                          <li><a class="dropdown-item subtab-item" href="user-info.php">Mi perfil</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item subtab-item" href="config/log-out.php">Cerrar Sesión</a></li>
                      </ul>
                </div>
                <i class="bi bi-person-circle fs-1 logged-user"></i>
              </div>
                <a class="btn tabs sixth" href="log-in.php" style="margin: 7px 0px;" id="not-logged-user">
                  Iniciar Sesión
                </a>
            </div>
        </div>
    </nav>

    <div class="d-flex text-center p-0 h-100">
        <div class="card bigger-card px-5 pb-2 m-auto">
            <form method="post" id="cardForm">
                <div class="px-5 py-3 mb-3" style="border-bottom: solid 1px #e9cf3e;">
                    <h1 class="fs-1 text-center m-0 title">Registrar tarjeta de credito/debito</h1>
                </div>
                <div class="mb-4">
                    <p class="fs-2 fw-bold text-center">Nombre del dueño de la tarjeta</p>
                    <input type="text" class="form-control custom-inputs" name="Nombre">
                </div>
                <div class="mb-4">
                    <p class="fs-2 fw-bold text-center">Numero de tarjeta</p>
                    <input type="text" class="form-control custom-inputs text-center" style="font-size: 28px;" maxlength="16" pattern="\d{16}" name="Numero" required>
                </div>
                <div class="mb-4 row">
                    <div class="col d-flex flex-column align-items-center">
                        <p class="fs-2 fw-bold text-center">Fecha de expiración</p>
                        <input class="form-control custom-inputs" style="width:70%; font-size: 28px;" type="text" name="FechaExpiracion" pattern="^\d{2}/\d{2}$" maxlength="5" required>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <p class="fs-2 fw-bold text-center">CVV</p>
                        <input class="form-control custom-inputs" style="width:70%; font-size: 28px;" type="text" name="CVV" maxlength="3" pattern="\d{3}" required>
                    </div>
                </div>
                <p style="color: red; background-color: #004123; font-weight:bold; border-radius:5px; font-size: 20px;" id="Message"></p>
                <button type="submit" name="submit" class="btn btn-primary btn-lg mb-3" style="background-color: #e9cf3e; color: black; font-weight: bold; border: none; font-size: 28px;">
                    Continuar
                </button>
            </form>
        </div>
    </div>

    <!--Footer-->
    <script src="js/bootstrap.bundle.js"></script>
    <script>
      var loggedIn;
      var id = -1;

      $(document).ready(function(){

        $('#cardForm').submit(function(event) {
              event.preventDefault();
              
              var formData = $(this).serialize();

              formData = formData + "&id=" + id;
              
              $.ajax({
                  type: 'POST',
                  url: 'config/register-card.php',
                  data: formData,
                  dataType: 'json',
                  success: function(response) {
                      if (response.success) {
                          window.location.href = 'index.php';
                      } else {
                          $('#Message').text(response.message);
                      }
                  }
              });
          });
      
        function fetchUserInfo(callback) {
          $.ajax({
              type: 'GET',
              url: 'config/getUserInfo.php',
              dataType: 'json',
              success: function(response) {
                  if (response.success) {
                      var userInfo = response.user_info;
                      content = userInfo.Nombre;
                      id = userInfo.id;
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
