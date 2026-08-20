<!DOCTYPE html>
<html lang="en" data-bs-theme="dark" class="text-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake subway</title>
    <link rel="stylesheet" href="css/bootstrap.css">
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
   <?php include 'Visual/navbar.php'; ?>

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
    <?php include 'Visual/footer.php'; ?>
    <script src="js/bootstrap/bootstrap.bundle.js"></script>

    <script>
      var loggedIn;
      var isStarter = 0;
      var carrito = [];
      var precioTotal = 0;

      $(document).ready(function(){
        checkLoginStatus();

        if(localStorage.getItem('carrito')){
          carrito = JSON.parse(localStorage.getItem('carrito'));
          AgregarElementosDeCarritoHTML();
        }

        //Sandwiches
        $.ajax({
            url: 'config/getProductos.php?tipo=Sandwich',
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
            url: 'config/getProductos.php?tipo=Ensalada',
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
            url: 'config/getProductos.php?tipo=Bebida',
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
            url: 'config/getProductos.php?tipo=Extra',
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
    </script>
    <script src="js/UpdateProductosPop.js"></script>
    <script src="js/fetchUserInfo.js"></script>
    <script src="js/checkLoginStatus.js"></script>
    <script src="js/doOnboarding.js"></script>
    <script src="js/displayOrderContent.js"></script>
    <script src="js/RegisterOrder.js"></script>
    <script src="js/RegisterProductList.js"></script>
    <script src="js/FindElementsFromParent.js"></script>
    <script src="js/AgregarElementosDeCarritoHTML.js"></script>
    <script src="js/addToCart.js"></script>
    <script src="js/AgregarCarritoAMemoria.js"></script>
</body>
</html>