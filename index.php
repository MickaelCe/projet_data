<?php

require 'vendor/autoload.php';
include 'public/model/class_model.php';

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
    echo $twig->render('next.twig');
    // var_dump($_SERVER);
}
else{
    echo '404';
}
?> 