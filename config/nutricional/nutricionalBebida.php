<?php
include('db.php');
header('Content-Type: application/json');

$sql = "SELECT * FROM products WHERE Tipo = 'Bebida'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre = $row["Nombre"];
        $precio = $row["Precio"];
        $imagen = $row["Imagen"];
        $descripcion = $row["Descripcion"];
        $calorias = $row["Calorias"];
        $grasas = $row["Grasas"];
        $grasas_saturadas = $row["GrasasSaturadas"];
        $sodio = $row["Sodio"];
        $carbohidratos = $row["Carbohidratos"];
        $fibra = $row["Fibra"];
        $proteinas = $row["Proteinas"];
        ?>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-8 offset-md-2 product">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo $imagen; ?>" alt="<?php echo $nombre; ?>" class="food-image img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h1><?php echo $nombre; ?></h1>
                            <ul class="nutrition-info">
                                <li><strong>Calorías (kcal):</strong> <?php echo $calorias; ?></li>
                                <li><strong>Grasas (gramos):</strong> <?php echo $grasas; ?></li>
                                <li><strong>Grasas saturadas (gramos):</strong> <?php echo $grasas_saturadas; ?></li>
                                <li><strong>Sodio (miligramos):</strong> <?php echo $sodio; ?></li>
                                <li><strong>Carbohidratos (gramos):</strong> <?php echo $carbohidratos; ?></li>
                                <li><strong>Fibra (gramos):</strong> <?php echo $fibra; ?></li>
                                <li><strong>Proteínas (gramos):</strong> <?php echo $proteinas; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No se encontraron resultados.";
}
?>