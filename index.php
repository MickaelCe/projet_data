<?php


require 'vendor/autoload.php';


$page = 'next';

if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

function games () {
$host = "localhost";
$user = "";
$password = "";
$dbname = "";
$charset = "utf8";


$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;


$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$games = $pdo->query("SELECT * FROM steam_game LIMIT  1000");
return $games;
}



$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/public/includes');

$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);

if ($page === 'next'){
    echo $twig->render('next.twig', ['games' => games()]);
}