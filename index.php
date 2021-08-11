<?php
require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('projet_data/');

$router->map('GET', '/', function() {
    require 'public/vue/home.php';
});
$router->map('GET', '/search', function() {
    require 'public/vue/search.php';
});
$router->map('GET', '/infos', function() {
    require 'public/vue/infos.php';
});

$match = $router->match();
if($match !== null){
    if (is_callable($match['target'])){
        call_user_func($match['target']);
    } 
    else {
        switch ($i=random_int(0,2)) {
            case 0:
                require 'public/vue/4042.php';
                break;
            case 1:
                require 'public/vue/4043.php';
                break;
            case 2:
                require 'public/vue/404.php';
                break;
        }
    }
} else {
echo'bruh';
}
