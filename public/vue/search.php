<?php

function games () {
    $host = "localhost";
    $user = "mickael";
    $password = "cocotier";
    $dbname = "projet_data";
    $charset = "utf8";
    
    
    $dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;
    
    
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $games = $pdo->query("SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 4");
    return $games;
    };

    function games2 () {
        $host = "localhost";
        $user = "mickael";
        $password = "cocotier";
        $dbname = "projet_data";
        $charset = "utf8";
        
        
        $dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;
        
        
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $gamesearchs = $pdo->query("SELECT img_url , names FROM steam_game ORDER BY RAND ( ) LIMIT 2");
        return $gamesearchs;
        };

        function games3 () {
            $host = "localhost";
            $user = "mickael";
            $password = "cocotier";
            $dbname = "projet_data";
            $charset = "utf8";
            
            
            $dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";charset=" . $charset;
            
            
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $gamesearchs2 = $pdo->query("SELECT names, img_url FROM steam_game ORDER BY RAND ( ) LIMIT 2");
            return $gamesearchs2;
            };
        
$loader = new Twig\Loader\FilesystemLoader('public/includes');
$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);
echo $twig->render('search.twig', ['games' => games(), 'gamesearchs' => games2(), 'gamesearchs2' => games3()]);
