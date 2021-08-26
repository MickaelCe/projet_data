<?php

$id = $_GET["id"];

require 'public/model/model_infos.php';

$mod = new Model($req, $exe);
$mod_two = new Model($req_two, $exe_two);

$render = $mod->selectGame();
$render_two = $mod_two->selectGame();

if(empty($_GET["search"]))
{
    if($id >=0 && $id <= 75255 && is_numeric($id))
        require 'public/vue/vue_infos.php';
     else {
        $random_error = rand(1, 3);

        require "public/vue/vue_error_$random_error.php";
     }
    
} else {
    require 'public/controller/controller_error.php';
}



?>