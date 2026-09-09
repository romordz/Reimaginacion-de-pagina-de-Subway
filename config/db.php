<?php

$dbhost = getenv('DB_HOST') ?: 'localhost';
$dbuser = getenv('DB_USER') ?: 'root';
$dbpass = getenv('DB_PASSWORD');
$dbname = getenv('DB_NAME') ?: 'login';
$dbport = getenv('DB_PORT') ?: 3306;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname, $dbport);
if($conn->connect_error)
{
    die("connection error");
}

register_shutdown_function(function() use ($conn) {
    if ($conn && !$conn->connect_error) {
        $conn->close();
    }
});
?>
