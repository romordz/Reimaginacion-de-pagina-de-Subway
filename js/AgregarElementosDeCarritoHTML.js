function AgregarElementosDeCarritoHTML() {
  var content = "";
  var CantidadProductos = 0;
  var subTotal = 0;
  if (carrito.length <= 0) {
    $("#Error").text("No hay productos en el carrito");
  } else {
    $("#Error").text("");
  }
  $.each(carrito, function (index, item) {
    CantidadProductos = CantidadProductos + item.Cantidad;
    subTotal = subTotal + item.Precio * item.Cantidad;
    content +=
      '<div class="card card-container text-center mb-2 Producto" data-id = "' +
      item.id_product +
      '">';
    content += '  <div class="card-body pb-1">';
    content +=
      '    <img src="' +
      item.Imagen +
      '" class="card-img-top rounded-bottom" alt="...">';
    content += '    <h3 class="mb-1 mt-3 pub-title">' + item.Titulo + "</h3>";
    content += "    <div>";
    content += '      <p class="m-0 p-0 price">$' + item.Precio + ".00</p>";
    content += "    </div>";
    content += '      <p class="m-0" style="font-size:20px;">Cantidad</p>';
    content +=
      '    <div class="d-flex flex-row justify-content-center align-items-center m-0">';
    content +=
      '      <button class="btn me-1 agregar-quitar" Title="quitar"><i class="bi bi-dash-circle-fill"></i></button>';
    content +=
      '        <p class="m-0 cantidad-producto">' + item.Cantidad + "</p>";
    content +=
      '      <button class="btn ms-1 agregar-quitar" Title="agregar"><i class="bi bi-plus-circle-fill"></i></button>';
    content += "    </div>";
    content += "  </div>";
    content += "</div>";
  });
  var iva = (subTotal / 100) * 16;
  precioTotal = subTotal + iva;
  $("#ElementosCarrito").text(CantidadProductos);
  $("#total-price").text(precioTotal);
  $("#ProductList").html(content);
}
