<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "abc123";
$dbname = "login";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
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