<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="text-light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fake subway</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/general.css ">
  <link rel="stylesheet" href="css/dashboard.css ">
  <link rel="stylesheet" href="css/sucursales.css ">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Roboto+Slab:wght@100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css">
  <script src="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/intro.min.js"></script>
  <script src="js/jquery.js"></script>
</head>

<body>
  <?php include 'Visual/navbar.php'; ?>

  <div class="container-content m-4 p-0">
    <div class="topcontainer mt-3">
      <p class="fs-1 m-0 pub-title text-center">Nuestras Sucursales</p>
    </div>
    <!--Contenido-->
    <?php include 'config/getSucursales.php'; ?>
    <br>
  </div>

  <!--Footer-->
  <?php include 'Visual/footer.php'; ?>
  <script src="js/bootstrap/bootstrap.bundle.js"></script>
  <script src="js/fetchUserInfo.js"></script>
  <script src="js/checkLoginStatus.js"></script>
  <script>
    var loggedIn;

    $(document).ready(function () {
      checkLoginStatus();
    });
  </script>
</body>

</html>