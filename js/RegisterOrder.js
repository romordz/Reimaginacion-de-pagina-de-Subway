function RegisterOrder(selectedLocalValue, selectedCardValue) {
  var OrderData = {
    LocalID: selectedLocalValue,
    CardID: selectedCardValue,
    PrecioTotal: precioTotal,
  };

  formData = JSON.stringify(OrderData);

  $.ajax({
    type: "POST",
    url: "config/register-order.php",
    data: { OrderData: formData },
    dataType: "json",
    success: function (response) {
      if (response.success) {
        console.log("si jalo");
        RegisterProductList(response.OrderID);
      } else {
        //$('#Error').text(response.message);
      }
    },
    error: function (xhr, status, error) {
      console.error(xhr.responseText);
    },
  });
}
