function doOnboarding() {
  if (loggedIn) {
    if (isStarter) {
      introJs()
        .setOptions({
          nextLabel: "Siguiente",
          prevLabel: "Anterior",
          doneLabel: "Listo",
          steps: [
            {
              tooltipClass: "customTooltip",
              intro: "¡Bienvenido a la pagina de Subway México!",
            },
            {
              element: document.querySelector(".first"),
              tooltipClass: "customTooltip",
              title: "Pedir a Domicilio",
              intro:
                "Aqui podras pedir a domicilio a través de la aplicación de tu elección",
            },
            {
              element: document.querySelector(".second"),
              tooltipClass: "customTooltip",
              title: "Sucursales",
              intro: "Aqui podras ver todas nuestras sucursales en México",
            },
            {
              element: document.querySelector(".third"),
              tooltipClass: "customTooltip",
              title: "Datos de Nutrición",
              intro:
                "Aqui podras pedir ver los datos de nutrición sobre nuestros productos",
            },
            {
              tooltipClass: "customTooltip",
              title: "Recoger pedido en sucursal",
              intro:
                "¿Planeas comer en una sucursal, pero no quieres tener que esperar en grandes filas?<br><br>¡No hay problema!",
            },
            {
              element: document.querySelector(".fourth"),
              tooltipClass: "customTooltip",
              title: "Menú",
              intro:
                "Puedes navegar nuestro menú dando click a las pestañas y agregar productos al carrito",
              position: "bottom",
            },
            {
              element: document.querySelector(".fifth"),
              tooltipClass: "customTooltip",
              title: "Carrito y completar pedido",
              intro:
                "Todos los productos agregados al carrito seran preparados en la sucursal de tu elección",
            },
            {
              element: document.querySelector(".sixth"),
              tooltipClass: "customTooltip",
              title: "Tu información",
              intro:
                "Podras checar tu información y agregar formas de pago aqui",
            },
          ],
        })
        .start();

      $.ajax({
        url: "config/updateStarter.php",
        type: "POST",
        data: { Starter: 0 },
        dataType: "json",
        success: function (response) {
          console.log(response.message);
        },
        error: function (xhr, status, error) {
          console.error("Error updating variable:", status, error);
        },
      });
    }
    displayOrderContent();
  } else {
    introJs()
      .setOptions({
        doneLabel: "Okay",
        dontShowAgainLabel: "No mostrar de nuevo",
        steps: [
          {
            tooltipClass: "customTooltip",
            element: document.querySelector(".seventh"),
            title: "Iniciar Sesión",
            intro:
              "Inicia sesión o crea una cuenta para obtener acceso completo a la pagina",
            position: "left",
          },
        ],
      })
      .setOption("dontShowAgain", true)
      .start();
  }
}
