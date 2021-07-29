<?php


require 'vendor/autoload.php';




$page = 'next';

if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

function games () {
$host = "localhost";
$user = "mickael";
$password = "cocotier";
$dbname = "projet_data";
$charset = "utf8";


$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;


$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$games = $pdo->query("SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 6");
return $games;
}



$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/public/includes');

$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);

// if ($page === 'next'){
//     echo $twig->render('next.twig', ['games' => games()]);
// }


$router = new AltoRouter();
$router->setBasePath('projet_data/');

$router->map('GET', '/', '/public/includes/next.twig');

$match = $router->match();
if(is_array($match)){
    $params = $match ['params'];
    echo $twig->render('next.twig', ['games' => games()]);
    // var_dump($_SERVER);
}
else{
    echo '404';
}
