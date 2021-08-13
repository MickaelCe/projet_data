<?php
function games () {
    require 'public/pdo/connexion.php';
    $games = $pdo->query("SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 5");
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
?>