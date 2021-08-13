<?php

$loader = new Twig\Loader\FilesystemLoader('public/includes');
$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);
$twig->addExtension(new Twig_Extensions_Extension_Text());
echo $twig->render('choose.twig', ['games' => games(),'gamesearchs' => games2()]);
