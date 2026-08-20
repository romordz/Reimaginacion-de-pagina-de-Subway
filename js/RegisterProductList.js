function RegisterProductList(OrderID) {
  $.each(carrito, function (index, item) {
    var tempJSON = {
      ...item,
      OrderID: OrderID,
    };
    var productoInfo = JSON.stringify(tempJSON);
    $.ajax({
      type: "POST",
      url: "config/register-productList.php",
      data: { ProductoInfo: productoInfo },
      dataType: "json",
      success: function (response) {
        if (response.success) {
          $("#Error").text("");
          const toastLiveExample = document.getElementById("liveToast");
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
          toastBootstrap.show();
        } else {
          $("#Error").text(response.message);
        }
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
      },
    });
  });
  carrito = [];
  UpdateProductosPop();
  AgregarElementosDeCarritoHTML();
  AgregarCarritoAMemoria();
}
