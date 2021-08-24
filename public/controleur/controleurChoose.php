<?php

if (isset($_GET['id'])) {
    $nom = $_GET['id'];
 
    $errorEmpty = false;
    $regexnom = "/^[^<>]+$/";

     if(empty($nom)):
             require 'public/vue/vue_error_1.php';
         elseif (preg_match($regexnom,$nom)) :
             require 'public/model/modelChoose.php';
            require 'public/vue/choose.php';
         else :
            require 'public/vue/vue_error_1.php';
         endif;
 } else {
     echo "Il y a une erreur";
 }

?>