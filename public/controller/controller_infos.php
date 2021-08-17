<?php

$names = $_GET["names"];

require 'public/model/model_infos.php';

$mod = new Model($req, $exe);
$mod_two = new Model($req_two, $exe_two);

$render = $mod->selectGame();
$render_two = $mod_two->selectGame();

if(empty($_GET["search"]))
{
    require 'public/vue/vue_infos.php';
} else {
    require 'public/controller/controller_error.php';
}



?>