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
    <?php include 'Visual/navbar.php'; ?>

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
    <script src="js/bootstrap/bootstrap.bundle.js"></script>
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
