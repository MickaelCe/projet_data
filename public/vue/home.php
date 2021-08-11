<?php
// require 'public/pdo/connexion.php';
// include 'public/model/class_model.php';

// $games = new Model();
// // var_dump($games);
// $games->games();
// var_dump($games);

function games () {
require 'public/pdo/connexion.php';
$games = $pdo->query("SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 4");
return $games;
};

$loader = new Twig\Loader\FilesystemLoader('public/includes');
$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);

echo $twig->render('home.twig', ['games' => games()]);
?>