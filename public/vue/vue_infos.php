<?php

$loader = new Twig\Loader\FilesystemLoader('public/includes');
$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);
$twig->addExtension(new Twig_Extensions_Extension_Text());
echo $twig->render('infos.twig', ['games' => $render,'gamesearchs' => $render_two]);

?>