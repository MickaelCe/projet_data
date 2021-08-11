<?php

function games () {
    require 'public/pdo/connexion.php';
    $games = $pdo->query("SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 4");
    return $games;
    };

    function games2 () {
        require 'public/pdo/connexion.php';
        $gamesearchs = $pdo->prepare("SELECT names, img_url FROM steam_game ORDER BY RAND ( ) LIMIT 2");
        $gamesearchs ->execute(["search" => $search
        ]);
        return $gamesearchs;
        };

        function games3 () {
            require 'public/pdo/connexion.php';
            $gamesearchs2 = $pdo->query("SELECT names, img_url FROM steam_game ORDER BY RAND ( ) LIMIT 2");
            return $gamesearchs2;
            };
        
$loader = new Twig\Loader\FilesystemLoader('public/includes');
$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);
$twig->addExtension(new Twig_Extensions_Extension_Text());
echo $twig->render('search.twig', ['games' => games(), 'gamesearchs' => games2(), 'gamesearchs2' => games3()]);
