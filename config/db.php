<?php

$dbhost = getenv('MYSQLHOST') ?: 'localhost';
$dbuser = getenv('MYSQLUSER') ?: 'root';
$dbpass = getenv('MYSQLPASSWORD');
$dbname = getenv('MYSQLDATABASE') ?: 'login';
$dbport = getenv('MYSQLPORT') ?: 3306;

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
