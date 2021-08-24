<?php
require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('projet_data_v1/');

$router->map('GET', '/', function() {
    require 'public/controleur/controleurHome.php';
});
$router->map('GET', '/search', function() {
    require 'public/controleur/controleurSearch.php';
});
$router->map('GET', '/infos', function() {
    require 'public/controleur/controleurInfos.php';
});
$router->map('GET', '/choose', function() {
    require 'public/controleur/controleurChoose.php';
});
$router->map('GET', '/searchList', function() {
    require 'public/vue/searchList.php';
});
$router->map('GET', '/no_content', function() {
    require 'public/vue/no_content.php';
});

$router->map('GET', '/[*]', function() {
    switch ($i=random_int(0,2)) {
        case 0:
            require 'public/vue/vue_error_1.php';
            break;
        case 1:
            require 'public/vue/vue_error_2.php';
            break;
        case 2:
            require 'public/vue/vue_error_3.php';
            break;
    }
});


$match = $router->match();
if($match !== null){
    if (is_callable($match['target'])){
        call_user_func($match['target']);
    } 
    else {
        echo'bruh';
    }
} else {
echo'bruh';
}


