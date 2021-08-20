<?php 
function games () {
    require 'public/pdo/connexion.php';
    $games = $pdo->query("SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 5");
    return $games;
    };
function games2 () {
    require 'public/pdo/connexion.php';
        $nom = $_GET['id'];
        $gamesearchs = $pdo->query("SELECT * FROM steam_game WHERE id LIKE '$nom' LIMIT 1 ") ;
        return $gamesearchs;
    };
?>