<?php

// include "public/vue/header.html";

require 'vendor/autoload.php';
include 'public/model/class_model.php';

$router = new AltoRouter();
$router->setBasePath('projet_data/');

$router->map('GET', '/', function() {
   require 'public/controller/controller_home.php';
});
$router->map('GET', '/search', function() {
   require 'public/controleur/controleur_search.php';
});
$router->map('GET', '/infos', function() {
   require 'public/controleur/controleur_infos.php';
});
$router->map('GET', '/choose', function() {
   require 'public/controleur/controleur_choose.php';
});

$match = $router->match();
if(is_array($match)){
    $params = $match['target']();
}
else{
   require 'public/controller/controller_error.php';
}

// include "public/vue/footer.html";

?> 