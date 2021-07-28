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

$router->map('GET', '/', function() {
   require 'public/controller/controller.php';
});
$router->map('GET', '/test', function() {
   require 'public/controller/controller_test.php';
});

$match = $router->match();
if($match !== null){
    $params = $match['target']();
   //  echo $twig->render('next.twig');
   // require 'public/controller/controller.php';
    // var_dump($_SERVER);
}
else{
    echo '404';
}
?> 