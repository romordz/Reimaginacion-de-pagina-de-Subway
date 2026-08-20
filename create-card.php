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
    <?php include 'Visual/navbar.php'; ?>

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
    <?php include 'Visual/footer.php'; ?>
    <script src="js/bootstrap/bootstrap.bundle.js"></script>
    <script src="js/fetchUserInfo.js"></script>
  <script src="js/checkLoginStatus.js"></script>
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
        checkLoginStatus();
    });
    </script>
</body>
</html>
