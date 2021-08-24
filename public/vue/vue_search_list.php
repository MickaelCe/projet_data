<?php 

$loader = new Twig\Loader\FilesystemLoader('public/includes');
$twig = new Twig\Environment($loader, [
    'cache' =>  false
]);

echo $twig->render('search_list.twig', ['games' => $render]);

?>