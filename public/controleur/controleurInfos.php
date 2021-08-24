<?php
if (isset($_GET['id'])) {
    $nom = $_GET['id'];
 
    $errorEmpty = false;
    $regexxx = "/^[^a_zA_Z]+$/";

     if($nom >=0 && $nom <= 75255 && preg_match($regexxx,$nom)):
            require 'public/model/modelInfos.php';
            require 'public/vue/infos.php';
         else :
            switch ($i=random_int(0,2)) {
                case 0:
                    require 'public/vue/vue_error_1.php';
                    break;
                case 1:
                    require 'public/vue/vue_error_2.php';
                    break;
                case 2:
                    require 'public/vue/vue_error_3.php';
                    break;
            }
         endif;
 } else {
     echo "Il y a une erreur";
 }




?>