<?php

require 'AltoRouter.php';

$router = new AltoRouter();

// setup routes
$router->map('GET','/', 'contenu_protege/controleur/controleur.php', 'home');

$match = $router->match();

// do we have a match?
if($match) {
  include $match[0];
} else {
  echo "c po bien";
}

?>
