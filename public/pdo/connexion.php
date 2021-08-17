<?php


$host = "localhost";
$user = "mickael";
$password = "cocotier";
$dbname = "projet_data";
$charset = "utf8";


$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;


$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

?>

