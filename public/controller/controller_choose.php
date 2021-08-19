<?php

$names = $_GET['names'];

require 'public/model/model_choose.php';

$mod = new Model($req, $exe);
$mod_two = new Model($req_two, $exe_two);

$render = $mod->selectGame();
$render_two = $mod_two->selectGame();

require 'public/vue/vue_choose.php';

?>