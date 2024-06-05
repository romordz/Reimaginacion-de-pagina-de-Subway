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
                <div>
                  <button class="btn rounded-pill tabs fifth logged-user" type="button" data-bs-toggle="offcanvas" data-bs-target="#ShoppingCart" aria-controls="offcanvasWithBothOptions">
                    <span id="ElementosCarrito">0</span>
                    <i class="bi bi-cart2 fs-3"></i>
                  </button>
                </div>
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

    <!--Contenido-->
    <div class="p-0 m-0" style="height:91px; background-color:#015d34;">
      </div>
    <div class="container-fluid">
      <div class="offcanvas offcanvas-end subtab" tabindex="-1" id="ShoppingCart" aria-labelledby="ShoppingCartLabel">
        <div class="d-flex justify-content-end mt-3 me-3">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
          </button>
        </div>
        <div class="offcanvas-header d-flex justify-content-center text-center p-0" style="border-bottom: 1px solid gray;">
          <div class="titulo-carrito">
            <p class="offcanvas-title" id="ShoppingCartLabel">Carrito</p>
            <hr class="dropdown-divider">
          </div>
        </div>
        <div class="offcanvas-body p-0 pt-1">
          <form action="" id="Comprar-Productos-Form">
            <div class="mb-3 px-3 text-center">
              <h4>Selecciona una sucursal</h4>
              <select class="form-select border" id="select-local">
              </select>
            </div>
            <div class="mb-5 px-3 text-center">
              <h4 id="credit-title">Selecciona la tarjeta a utilizar</h4>
              <select class="form-select border" id="select-card">
              </select>
            </div>
            <div id="ProductList">
            </div>
            <div class="sticky-bottom w-100 d-flex flex-column text-center" style="background-color:#002213;  border-top: 1px solid gray;" id="Cont-TerminarPedido">
              <div class = "mb-2 mt-1 text-center"><e class="price">TOTAL: $</e><e class="price" id="total-price">0</e></div>
              <button class="btn other-tabs mb-4 mx-3" style="background-color:#ffbb00; color:black;" id="Pedir-btn">Realizar pedido</button>
              <p style="color: red; font-weight:bold; font-size: 20px; padding: 0px;" id="Error"></p>
            </div>
          </form>
        </div>
      </div>
      <div class="toast-container position-fixed bottom-0 start-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header NOTIFICACION-HEAD">
            <strong class="me-auto">Información de Orden</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body NOTIFICACION">
            ¡Orden completada con exito!
          </div>
        </div>
      </div>
      <div class="row slider-bg">
        <div class="col">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="justify-content: center; align-items: center;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                  <img src="content/Promos/Promo-1.png" class="mx-auto" style="min-width:280px; max-width: 1060px;" alt="...">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-center">
                  <img src="content/Promos/Promo-2.png" class="mx-auto" style="min-width:280px; max-width: 1060px;" alt="...">
                </div>
              </div>
              <div class="carousel-item">
                <div class="d-flex justify-content-center">
                  <img src="content/Promos/Promo-3.png" class="mx-auto" style="min-width:280px; max-width: 1060px;" alt="...">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="p-0 m-0">
          <div class="p-0 m-0">
            <div class="topcontainer">
              <p class="fs-1 m-0 pub-title text-center">¡Pide uno de nuestros productos más populares!</p>
            </div>
            <div class="row my-3 mx-4" id="ProdPop">
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="fourth" style="width:95%">
                <div class="topcontainer rounded-top" id="MENU">
                  <p class="fs-1 m-0 pub-title text-center">MENÚ</p>
                </div>
                <div class="tabcontainer" id="menutabs">
                  <div class="text-center">
                    <button class="btn other-tabs border border-white mx-2" id="Sandwiches-btn">Sandwiches</button>
                    <button class="btn other-tabs border border-white mx-2" id="Ensaladas-btn">Ensaladas</button>
                    <button class="btn other-tabs border border-white mx-2" id="Bebidas-btn">Bebidas</button>
                    <button class="btn other-tabs border border-white mx-2" id="Extras-btn">Extras</button>
                  </div>
                </div>
              </div>
              <div data-bs-spy="scroll" data-bs-target="#menutabs" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example p-0 rounded-bottom mb-5" tabindex="0" aria-controls="navbarScroll" style="background-color:black; width:95%;">
                <div class="sub-topcontainer">
                  <p class="fs-2 m-0 pub-title text-center" id="product-type">Sandwiches</p>
                </div>
                <div class="row my-2 mx-4" id="sandwich-container">
                </div>
                <div class="row my-3 mx-4" id="salad-container">
                </div>
                <div class="row my-3 mx-4" id="drink-container">
                </div>
                <div class="row my-3 mx-4" id="extra-container">
                </div>
              </div><!--
              <div class="d-flex flex-column justify-content-center align-items-center text-center mb-4">
                <div class="topcontainer rounded-top" style="width:1010px;">
                  <p class="fs-1 m-0 pub-title text-center">¡Checa nuestro video más reciente!</p>
                </div>
                <iframe class="rounded-bottom" width="1010px" height="570px" src="https://www.youtube.com/embed/d9z4fqvqJ6k?si=BjsFnZcqSW890ZtL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>-->
            </div>
          </div>
        </div>
      </div>
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
      var isStarter = 0;
      var carrito = [];
      var precioTotal = 0;

      function UpdateProductosPop(){
          $('#ProdPop').html('');
          $.ajax({
            url: 'config/getProductosPopulares.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var content = '';
                $.each(data, function(index, item) {
                    content += '<div class="col-sm-6 col-md-4 col-lg-3 mt-2 text-center Populares" data-id="' + item.id_product + '" style="display:none;">';
                    content += '  <div class="card pub card-container h-100">';
                    content += '    <img src="' + item.Imagen + '" class="card-img-top" alt="...">';
                    content += '    <div class="card-body pb-2 d-flex justify-content-center align-items-center flex-column">';
                    content += '      <p class="pub-title">' + item.Nombre + '</p>';
                    content += '      <div>';
                    content += '        <p class="pub-desc m-0">' + item.Descripcion + '</p>';
                    content += '      </div>';
                    content += '      <div>';
                    content += '        <p class="m-0 price">$' + item.Precio + '.00</p>';
                    content += '      </div>';
                    if (loggedIn){
                      content += '      <button class="btn my-2 btn-agregar-prod"><i class="bi bi-cart-plus-fill fs-5 me-2"></i>Agregar a Carrito</button>';
                    }
                    content += '    </div>';
                    content += '  </div>';
                    content += '</div>';
                });
                $('#ProdPop').html(content);
                $('.Populares').fadeIn(100);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
          });
        }

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
              },
              error: function(xhr, status, error) {
                  console.error('Error fetching user information:', status, error);
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
                      // User is logged in
                      loggedIn = true;
                      fetchUserInfo(doOnboarding);
                      
                      $(".logged-user").show();
                      $("#not-logged-user").hide();
                      console.log('User is logged in');
                  } else {
                      // User is not logged in
                      loggedIn = false;
                      doOnboarding();
                      $(".logged-user").hide();
                      $("#not-logged-user").show();
                      console.log('User is not logged in');
                  }
              },
              error: function(xhr, status, error) {
                  console.error('Error checking login status:', status, error);
              }
          });
        }

        function doOnboarding(){
          if (loggedIn) {
                if (isStarter) {
                    introJs().setOptions({
                        nextLabel: 'Siguiente',
                        prevLabel: 'Anterior',
                        doneLabel: 'Listo',
                        steps: [{
                                tooltipClass: 'customTooltip',
                                intro: '¡Bienvenido a la pagina de Subway México!'
                            },
                            {
                                element: document.querySelector('.first'),
                                tooltipClass: 'customTooltip',
                                title: 'Pedir a Domicilio',
                                intro: 'Aqui podras pedir a domicilio a través de la aplicación de tu elección'
                            },
                            {
                                element: document.querySelector('.second'),
                                tooltipClass: 'customTooltip',
                                title: 'Sucursales',
                                intro: 'Aqui podras ver todas nuestras sucursales en México'
                            },
                            {
                                element: document.querySelector('.third'),
                                tooltipClass: 'customTooltip',
                                title: 'Datos de Nutrición',
                                intro: 'Aqui podras pedir ver los datos de nutrición sobre nuestros productos'
                            },
                            {
                                tooltipClass: 'customTooltip',
                                title: 'Recoger pedido en sucursal',
                                intro: '¿Planeas comer en una sucursal, pero no quieres tener que esperar en grandes filas?<br><br>¡No hay problema!'
                            },
                            {
                                element: document.querySelector('.fourth'),
                                tooltipClass: 'customTooltip',
                                title: 'Menú',
                                intro: 'Puedes navegar nuestro menú dando click a las pestañas y agregar productos al carrito',
                                position: 'bottom'
                            },
                            {
                                element: document.querySelector('.fifth'),
                                tooltipClass: 'customTooltip',
                                title: 'Carrito y completar pedido',
                                intro: 'Todos los productos agregados al carrito seran preparados en la sucursal de tu elección'
                            },
                            {
                                element: document.querySelector('.sixth'),
                                tooltipClass: 'customTooltip',
                                title: 'Tu información',
                                intro: 'Podras checar tu información y agregar formas de pago aqui'
                            }
                        ]
                    }).start();

                    $.ajax({
                      url: 'config/updateStarter.php',
                      type: 'POST',
                      data: { Starter: 0},
                      dataType: 'json',
                      success: function(response) {
                        console.log(response.message);
                      },
                      error: function(xhr, status, error) {
                          console.error('Error updating variable:', status, error);
                      }
                  });
                }
                displayOrderContent();
            } else {
                introJs().setOptions({
                  doneLabel: 'Okay',
                  dontShowAgainLabel: "No mostrar de nuevo",
                    steps: [{
                        tooltipClass: 'customTooltip',
                        element: document.querySelector('.seventh'),
                        title: 'Iniciar Sesión',
                        intro: 'Inicia sesión o crea una cuenta para obtener acceso completo a la pagina',
                        position: 'left'
                    }]
                }).setOption("dontShowAgain", true).start();
            }
        }

        checkLoginStatus();

        if(localStorage.getItem('carrito')){
          carrito = JSON.parse(localStorage.getItem('carrito'));
          AgregarElementosDeCarritoHTML();
        }
        
        function displayOrderContent(){
          $.ajax({
            url: 'config/getUserCards.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var content = '';
                if(data.length <= 0){
                  content += '<div class = "mb-2 mt-1 text-center"><h5 style="color: red;">No has registrado una forma de pago</h5><h5 style="color: white;">Registrala aqui</h5></div>';
                  content += '<a href="create-card.php" class="btn other-tabs mb-4 mx-3" style="background-color:#ffffff; color:black; margin-bottom:0px !important;">Registrar tarjeta</a>';
                  content += '<div class = "mb-2 mt-1 text-center" style="color: white;"><p style="margin: 0px; padding: 0px;">No te preocupes, tu carrito se guardara :)</p></div>';
                  $('#credit-title').text('');
                  $('#select-card').hide();
                  $('#Cont-TerminarPedido').html(content);
                }
                else{
                  $.each(data, function(index, item) {
                      content += '<option value="' + item.id_card + '">' + item.Nombre + ' ' + item.Numero.substring(0, 4) + '-' + item.Numero.substring(4, 8) + '-' + item.Numero.substring(8, 12) + '-' + item.Numero.substring(12, 16) + '</option>';
                  });
                  $('#select-card').html(content);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
          });
          $.ajax({
            url: 'config/getLocals.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var content = '';
                $.each(data, function(index, item) {
                    content += '<option value="' + item.id_local + '">' + item.Direccion + '</option>';
                });
                $('#select-local').html(content);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
          });
        }

        //Sandwiches
        $.ajax({
            url: 'config/getSandwichesProductos.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var content = '';
                $.each(data, function(index, item) {
                    content += '<div class="col-sm-6 col-md-4 col-lg-3 my-2 text-center Sandwiches" data-id="' + item.id_product + '">';
                    content += '  <div class="card pub card-container h-100">';
                    content += '    <img src="' + item.Imagen + '" class="card-img-top" alt="...">';
                    content += '    <div class="card-body pb-2 d-flex justify-content-center align-items-center flex-column">';
                    content += '      <p class="pub-title">' + item.Nombre + '</p>';
                    content += '      <div>';
                    content += '        <p class="pub-desc m-0">' + item.Descripcion + '</p>';
                    content += '      </div>';
                    content += '      <div>';
                    content += '        <p class="m-0 price">$' + item.Precio + '.00</p>';
                    content += '      </div>';
                    if (loggedIn){
                      content += '      <button class="btn my-2 btn-agregar-prod"><i class="bi bi-cart-plus-fill fs-5 me-2"></i>Agregar a Carrito</button>';
                    }
                    content += '    </div>';
                    content += '  </div>';
                    content += '</div>';
                });
                $('#sandwich-container').html(content);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
        
        //Ensaladas
        $.ajax({
            url: 'config/getEnsaladasProductos.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var content = '';
                $.each(data, function(index, item) {
                    content += '<div class="col-sm-6 col-md-4 col-lg-3 my-2 text-center Ensaladas" data-id="' + item.id_product + '">';
                    content += '  <div class="card pub card-container h-100">';
                    content += '    <img src="' + item.Imagen + '" class="card-img-top" alt="...">';
                    content += '    <div class="card-body pb-2 d-flex justify-content-center align-items-center flex-column">';
                    content += '      <p class="pub-title">' + item.Nombre + '</p>';
                    content += '      <div>';
                    content += '        <p class="pub-desc m-0">' + item.Descripcion + '</p>';
                    content += '      </div>';
                    content += '      <div>';
                    content += '        <p class="m-0 price">$' + item.Precio + '.00</p>';
                    content += '      </div>';
                    if (loggedIn){
                      content += '      <button class="btn my-2 btn-agregar-prod"><i class="bi bi-cart-plus-fill fs-5 me-2"></i>Agregar a Carrito</button>';
                    }
                    content += '    </div>';
                    content += '  </div>';
                    content += '</div>';
                });
                $('#salad-container').html(content);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });

        //Bebidas
        $.ajax({
            url: 'config/getBebidasProductos.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var content = '';
                $.each(data, function(index, item) {
                    content += '<div class="col-sm-6 col-md-4 col-lg-3 my-2 text-center Bebidas" data-id="' + item.id_product + '">';
                    content += '  <div class="card pub card-container h-100">';
                    content += '    <img src="' + item.Imagen + '" class="card-img-top" alt="...">';
                    content += '    <div class="card-body pb-2 d-flex justify-content-center align-items-center flex-column">';
                    content += '      <p class="pub-title">' + item.Nombre + '</p>';
                    content += '      <div>';
                    content += '        <p class="pub-desc m-0">' + item.Descripcion + '</p>';
                    content += '      </div>';
                    content += '      <div>';
                    content += '        <p class="m-0 price">$' + item.Precio + '.00</p>';
                    content += '      </div>';
                    if (loggedIn){
                      content += '      <button class="btn my-2 btn-agregar-prod"><i class="bi bi-cart-plus-fill fs-5 me-2"></i>Agregar a Carrito</button>';
                    }
                    content += '    </div>';
                    content += '  </div>';
                    content += '</div>';
                });
                $('#drink-container').html(content);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });

        //Extras
        $.ajax({
            url: 'config/getExtrasProductos.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var content = '';
                $.each(data, function(index, item) {
                    content += '<div class="col-sm-6 col-md-4 col-lg-3 my-2 text-center Extras" data-id="' + item.id_product + '">';
                    content += '  <div class="card pub card-container h-100">';
                    content += '    <img src="' + item.Imagen + '" class="card-img-top" alt="...">';
                    content += '    <div class="card-body pb-2 d-flex justify-content-center align-items-center flex-column">';
                    content += '      <p class="pub-title">' + item.Nombre + '</p>';
                    content += '      <div>';
                    content += '        <p class="pub-desc m-0">' + item.Descripcion + '</p>';
                    content += '      </div>';
                    content += '      <div>';
                    content += '        <p class="m-0 price">$' + item.Precio + '.00</p>';
                    content += '      </div>';
                    if (loggedIn){
                      content += '      <button class="btn my-2 btn-agregar-prod"><i class="bi bi-cart-plus-fill fs-5 me-2"></i>Agregar a Carrito</button>';
                    }
                    content += '    </div>';
                    content += '  </div>';
                    content += '</div>';
                });
                $('#extra-container').html(content);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
        
        UpdateProductosPop();

        $(".Ensaladas, .Bebidas, .Extras").hide();
        $("#salad-container, #drink-container, #extra-container").hide();
      });

        $(document).on('click', '.Populares .btn-agregar-prod', function() {
          var parentDiv = $(this).closest('.Populares');
          var Product= FindElementsFromParent(parentDiv);
          addToCart(Product);
        });

        $(document).on('click', '.Sandwiches .btn-agregar-prod', function() {
          var parentDiv = $(this).closest('.Sandwiches');
          var Product= FindElementsFromParent(parentDiv);
          addToCart(Product);
        });

        $(document).on('click', '.Ensaladas .btn-agregar-prod', function() {
          var parentDiv = $(this).closest('.Ensaladas');
          var Product= FindElementsFromParent(parentDiv);
          addToCart(Product);
        });

        $(document).on('click', '.Bebidas .btn-agregar-prod', function() {
          var parentDiv = $(this).closest('.Bebidas');
          var Product= FindElementsFromParent(parentDiv);
          addToCart(Product);
        });

        $(document).on('click', '.Extras .btn-agregar-prod', function() {
          var parentDiv = $(this).closest('.Extras');
          var Product= FindElementsFromParent(parentDiv);
          addToCart(Product);
        });

        $(document).on('click', 'div [Title="agregar"]', function() {
          var parentDiv = $(this).closest('.Producto');
          var id_product = parentDiv.data('id');
          var IndiceDeProductoYaExistente = carrito.findIndex(function(value){
            return value.id_product == id_product;
          });
          carrito[IndiceDeProductoYaExistente].Cantidad += 1;
          AgregarElementosDeCarritoHTML()
          AgregarCarritoAMemoria();
        });

        $(document).on('click', 'div [Title="quitar"]', function() {
          var parentDiv = $(this).closest('.Producto');
          var id_product = parentDiv.data('id');
          var IndiceDeProductoYaExistente = carrito.findIndex(function(value){
            return value.id_product == id_product;
          });
          carrito[IndiceDeProductoYaExistente].Cantidad -= 1;

          if (carrito[IndiceDeProductoYaExistente].Cantidad <= 0){
            carrito.splice(IndiceDeProductoYaExistente,1);
          }

          AgregarElementosDeCarritoHTML()
          AgregarCarritoAMemoria();
        });

        $('#Comprar-Productos-Form').on('submit', function(event) {
          event.preventDefault();

          var selectedLocalValue = $('#select-local').val();

          var selectedCardValue = $('#select-card').val();

          RegisterOrder(selectedLocalValue, selectedCardValue);

        });

        function RegisterOrder(selectedLocalValue, selectedCardValue){
          var OrderData = {
            LocalID: selectedLocalValue, 
            CardID: selectedCardValue,
            PrecioTotal: precioTotal
          };

          formData = JSON.stringify(OrderData);

          $.ajax({
            type: 'POST',
            url: 'config/register-order.php',
            data: {OrderData: formData},
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                  console.log('si jalo');
                  RegisterProductList(response.OrderID);
                } else {
                  //$('#Error').text(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
          });
        }

        function RegisterProductList(OrderID){
          $.each(carrito, function(index, item) {
            //...item agrega los elementos del JSON item al JSON temporal para no tener que modificar el original
            var tempJSON = {
              ...item,
              OrderID: OrderID
            }
            var productoInfo = JSON.stringify(tempJSON);
            $.ajax({
              type: 'POST',
              url: 'config/register-productList.php',
              data: {ProductoInfo: productoInfo},
              dataType: 'json',
              success: function(response) {
                  if (response.success) {
                    $('#Error').text('');
                    const toastLiveExample = document.getElementById('liveToast')
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
                    toastBootstrap.show()
                  } else {
                    $('#Error').text(response.message);
                  }
              },
              error: function(xhr, status, error) {
                  console.error(xhr.responseText);
              }
            });
          });
          carrito = [];
          UpdateProductosPop();
          AgregarElementosDeCarritoHTML();
          AgregarCarritoAMemoria();
        }

        function FindElementsFromParent(parentDiv){
          var id_product = parentDiv.data('id');
          console.log('Product ID:', id_product);
          
          var Titulo = parentDiv.find('.pub-title').text();
          
          var Descripcion = parentDiv.find('.pub-desc').text();
          
          var PrecioTexto = parentDiv.find('.price').text();
          var Precio = parseFloat(PrecioTexto.replace('$', '').trim());

          var Imagen = parentDiv.find('.card-img-top').attr('src');

          var Product = 
          {
            id_product: id_product,
            Titulo: Titulo,
            Descripcion: Descripcion,
            Precio: Precio,
            Imagen: Imagen,
          }
          return Product;
        }

        $("#Sandwiches-btn").click(function() {
                $(".Ensaladas, .Bebidas, .Extras, #salad-container, #drink-container, #extra-container").hide();
                $(".Sandwiches, #sandwich-container").fadeIn(400);
                $('#product-type').text('Sandwiches');
        });
        $("#Ensaladas-btn").click(function() {
                $(".Sandwiches, .Bebidas, .Extras, #sandwich-container, #drink-container, #extra-container").hide();
                $(".Ensaladas, #salad-container").fadeIn(400);
                $('#product-type').text('Ensaladas');
        });
        $("#Bebidas-btn").click(function() {
                $(".Sandwiches, .Ensaladas, .Extras, #sandwich-container, #salad-container, #extra-container").hide();
                $(".Bebidas, #drink-container").fadeIn(400);
                $('#product-type').text('Bebidas');
        });
        $("#Extras-btn").click(function() {
                $(".Sandwiches, .Ensaladas, .Bebidas, #sandwich-container, #salad-container, #drink-container").hide();
                $(".Extras, #extra-container").fadeIn(400);
                $('#product-type').text('Extras');
        });

        function AgregarElementosDeCarritoHTML() {
            var content = '';
            var CantidadProductos = 0;
            var subTotal = 0;
            if(carrito.length <= 0){
              $('#Error').text('No hay productos en el carrito');
            }
            else{
              $('#Error').text('');
            }
            $.each(carrito, function(index, item) {
              CantidadProductos = CantidadProductos + item.Cantidad;
              subTotal = subTotal + (item.Precio * item.Cantidad);
              content += '<div class="card card-container text-center mb-2 Producto" data-id = "' + item.id_product + '">';
              content += '  <div class="card-body pb-1">';
              content += '    <img src="' + item.Imagen + '" class="card-img-top rounded-bottom" alt="...">';
              content += '    <h3 class="mb-1 mt-3 pub-title">' + item.Titulo + '</h3>';
              content += '    <div>';
              content += '      <p class="m-0 p-0 price">$' + item.Precio + '.00</p>';
              content += '    </div>';
              content += '      <p class="m-0" style="font-size:20px;">Cantidad</p>';
              content += '    <div class="d-flex flex-row justify-content-center align-items-center m-0">';
              content += '      <button class="btn me-1 agregar-quitar" Title="quitar"><i class="bi bi-dash-circle-fill"></i></button>';
              content += '        <p class="m-0 cantidad-producto">' + item.Cantidad + '</p>';
              content += '      <button class="btn ms-1 agregar-quitar" Title="agregar"><i class="bi bi-plus-circle-fill"></i></button>';
              content += '    </div>';
              content += '  </div>';
              content += '</div>';
            });
            var iva = (subTotal/100) * 16;
            precioTotal = subTotal + iva;
            console.log(carrito);
            console.log('subtotal: ' + subTotal + '\n' + 'IVA: ' + iva + '\n' + 'TOTAL: ' + precioTotal + '\n');
          $('#ElementosCarrito').text(CantidadProductos);
          $('#total-price').text(precioTotal);
          $('#ProductList').html(content);
        }

        function addToCart(Product){
          var IndiceDeProductoYaExistente = carrito.findIndex(function(value){
            return value.id_product == Product.id_product;
          });
          if(carrito.length <= 0){
            carrito = [{
              id_product: Product.id_product,
              Titulo: Product.Titulo,
              Descripcion: Product.Descripcion,
              Precio: Product.Precio,
              Imagen: Product.Imagen,
              Cantidad: 1
            }]
          }else if(IndiceDeProductoYaExistente < 0){
            carrito.push({
              id_product: Product.id_product,
              Titulo: Product.Titulo,
              Descripcion: Product.Descripcion,
              Precio: Product.Precio,
              Imagen: Product.Imagen,
              Cantidad: 1
            });
          }else{
            carrito[IndiceDeProductoYaExistente].Cantidad = carrito[IndiceDeProductoYaExistente].Cantidad + 1;
          }
          console.log(carrito);
          AgregarElementosDeCarritoHTML();
          AgregarCarritoAMemoria();
        }

        function AgregarCarritoAMemoria(){
          localStorage.setItem('carrito', JSON.stringify(carrito))
        }
    </script>
</body>
</html>