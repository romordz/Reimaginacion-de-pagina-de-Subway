function UpdateProductosPop() {
  $("#ProdPop").html("");
  $.ajax({
    url: "config/getProductosPopulares.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      var content = "";
      $.each(data, function (index, item) {
        content +=
          '<div class="col-sm-6 col-md-4 col-lg-3 mt-2 text-center Populares" data-id="' +
          item.id_product +
          '" style="display:none;">';
        content += '  <div class="card pub card-container h-100">';
        content +=
          '    <img src="' + item.Imagen + '" class="card-img-top" alt="...">';
        content +=
          '    <div class="card-body pb-2 d-flex justify-content-center align-items-center flex-column">';
        content += '      <p class="pub-title">' + item.Nombre + "</p>";
        content += "      <div>";
        content +=
          '        <p class="pub-desc m-0">' + item.Descripcion + "</p>";
        content += "      </div>";
        content += "      <div>";
        content += '        <p class="m-0 price">$' + item.Precio + ".00</p>";
        content += "      </div>";
        if (loggedIn) {
          content +=
            '      <button class="btn my-2 btn-agregar-prod"><i class="bi bi-cart-plus-fill fs-5 me-2"></i>Agregar a Carrito</button>';
        }
        content += "    </div>";
        content += "  </div>";
        content += "</div>";
      });
      $("#ProdPop").html(content);
      $(".Populares").fadeIn(100);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    },
  });
}
