function displayOrderContent() {
  $.ajax({
    url: "config/getUserCards.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      var content = "";
      if (data.length <= 0) {
        content +=
          '<div class = "mb-2 mt-1 text-center"><h5 style="color: red;">No has registrado una forma de pago</h5><h5 style="color: white;">Registrala aqui</h5></div>';
        content +=
          '<a href="create-card.php" class="btn other-tabs mb-4 mx-3" style="background-color:#ffffff; color:black; margin-bottom:0px !important;">Registrar tarjeta</a>';
        content +=
          '<div class = "mb-2 mt-1 text-center" style="color: white;"><p style="margin: 0px; padding: 0px;">No te preocupes, tu carrito se guardara :)</p></div>';
        $("#credit-title").text("");
        $("#select-card").hide();
        $("#Cont-TerminarPedido").html(content);
      } else {
        $.each(data, function (index, item) {
          content +=
            '<option value="' +
            item.id_card +
            '">' +
            item.Nombre +
            " " +
            item.Numero.substring(0, 4) +
            "-" +
            item.Numero.substring(4, 8) +
            "-" +
            item.Numero.substring(8, 12) +
            "-" +
            item.Numero.substring(12, 16) +
            "</option>";
        });
        $("#select-card").html(content);
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    },
  });
  $.ajax({
    url: "config/getLocals.php",
    type: "GET",
    dataType: "json",
    success: function (data) {
      var content = "";
      $.each(data, function (index, item) {
        content +=
          '<option value="' +
          item.id_local +
          '">' +
          item.Direccion +
          "</option>";
      });
      $("#select-local").html(content);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
    },
  });
}
