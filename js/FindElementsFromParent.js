function FindElementsFromParent(parentDiv) {
  var id_product = parentDiv.data("id");
  console.log("Product ID:", id_product);

  var Titulo = parentDiv.find(".pub-title").text();

  var Descripcion = parentDiv.find(".pub-desc").text();

  var PrecioTexto = parentDiv.find(".price").text();
  var Precio = parseFloat(PrecioTexto.replace("$", "").trim());

  var Imagen = parentDiv.find(".card-img-top").attr("src");

  var Product = {
    id_product: id_product,
    Titulo: Titulo,
    Descripcion: Descripcion,
    Precio: Precio,
    Imagen: Imagen,
  };
  return Product;
}