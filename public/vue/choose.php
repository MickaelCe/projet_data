<?php

function games () {
    require 'public/pdo/connexion.php';
    $games = $pdo->query("SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 5");
    return $games;
    };
function games2 () {
    require 'public/pdo/connexion.php';
        $nom = $_GET['nom'];
        $gamesearchs = $pdo->query("SELECT * FROM steam_game WHERE names LIKE '%$nom%' AND names NOT LIKE '%dlc%' AND names NOT LIKE '%Season Pass%' ORDER BY RAND( ) LIMIT 3");
        return $gamesearchs;
    };


$loader = new Twig\Loader\FilesystemLoader('public/includes');
$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);
$twig->addExtension(new Twig_Extensions_Extension_Text());
echo $twig->render('choose.twig', ['games' => games(),'gamesearchs' => games2()]);
