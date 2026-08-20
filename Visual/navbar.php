<link rel="stylesheet" href="css/navbar.css ">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Madimi+One&family=Roboto+Slab:wght@100..900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css">
<script src="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/intro.min.js"></script>

<nav class="navbar fixed-top navbar-expand-lg custom-navbar">
    <div class="container-fluid">
        <div class="mx-2">
            <a href="index.php">
                <img src="content/Logos/Subway-logo.png" alt="" style="width:200px;">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-2"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
            <div class="dropdown first">
                <button class="btn tabs dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pedir a Domicilio
                </button>
                <ul class="dropdown-menu subtab text-center">
                    <li><a class="dropdown-item subtab-item" style="margin-right: 55px;"
                            href="https://www.ubereats.com/mx/brand/subway"><img src="content/Logos/Uber.png" alt=""
                                style="width:100px;"></a></li>
                    <li><a class="dropdown-item subtab-item" style="margin-right: 55px;"
                            href="https://www.rappi.com.mx/monterrey/restaurantes/delivery/1017-subway"><img
                                src="content/Logos/Rappi.png" alt="" style="width:60px;"></a></li>
                    <li><a class="dropdown-item subtab-item" style="margin-right: 55px;"
                            href="https://www.didi-food.com/es-419/food/"><img src="content/Logos/DiDi.png" alt=""
                                style="width:110px;"></a></li>
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
                    <li>
                        <h6 class="dropdown-header subtab-item-disabled" href="#">Datos de Nutrición</h6>
                    </li>
                    <li><a class="dropdown-item subtab-item" href="nutricional.php?tipo=Sandwich">Sandwiches</a></li>
                    <li><a class="dropdown-item subtab-item" href="nutricional.php?tipo=Ensalada">Ensaladas</a></li>
                    <li><a class="dropdown-item subtab-item" href="nutricional.php?tipo=Bebida">Bebidas</a></li>
                    <li><a class="dropdown-item subtab-item" href="nutricional.php?tipo=Extra">Extras</a></li>
                </ul>
            </div>
            <div>
                <a class="btn tabs" href="index.php#MENU">Ver Menú</a>
            </div>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex flex-row">
                <div class="dropdown logged-user sixth">
                    <button class="btn tabs logged-user" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#ShoppingCart" aria-controls="ShoppingCart">
                        <i class="bi bi-cart-fill fs-1"></i>
                        <span id="ElementosCarrito" class="badge">0</span>
                    </button>
                    <button
                        class="btn tabs username h-100 d-flex flex-row justify-content-center align-items-center text-center"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-caret-down-fill me-1" style="font-size:20px;"></i>
                        <e id="MyUser"></e>
                    </button>
                    <ul class="dropdown-menu subtab text-center">
                        <li><a class="dropdown-item subtab-item text-wrap" href="create-card.php">Registrar tarjeta</a>
                        </li>
                        <li><a class="dropdown-item subtab-item" href="user-info.php">Mi perfil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
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