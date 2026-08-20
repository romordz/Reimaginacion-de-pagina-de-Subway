<?php
include('db.php');
header('Content-Type: application/json');

$sql = "SELECT * FROM locals";
$stmt = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $direccion = $row["Direccion"];
        $telefono = $row["Telefono"];
        ?>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-10 offset-md-1 sucursal">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Dirección:</h1>
                            <p><?php echo $direccion; ?></p>
                            <h1>Teléfono:</h1>
                            <p><?php echo $telefono; ?></p>
                            <a href="https://www.google.com/maps/search/<?php echo urlencode($direccion); ?>" target="_blank"
                                class="btn-google-maps">Buscar en Google Maps</a>
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
$stmt->close();
?>