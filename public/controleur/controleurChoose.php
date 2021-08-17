<?php

if (isset($_GET['nom'])) {
    $nom = $_GET['nom'];
 
    $errorEmpty = false;
    $regexnom = "/^[^<>]+$/";

     if(empty($nom)):
             require 'public/vue/404.php';
         elseif (preg_match($regexnom,$nom)) :
             require 'public/model/modelChoose.php';
            require 'public/vue/choose.php';
         else :
            require 'public/vue/404.php';
         endif;
 } else {
     echo "Il y a une erreur";
 }
?>