<?php

require 'AltoRouter.php';

$router = new AltoRouter();

// setup routes
$router->map('GET','/', 'contenu_protrgr/controleur/controleur.php', 'home');

$match = $router->match();

// do we have a match?
if($match) {
  include $match[0];
} else {
  header("HTTP/1.0 404 Not Found");
  echo "c po bien";
}

?>