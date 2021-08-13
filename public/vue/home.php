<?php

$loader = new Twig\Loader\FilesystemLoader('public/includes');
$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);

echo $twig->render('home.twig', ['games' => games()]);
?>