<?php

require "public/model/model_search.php";

$mod = new Model($sql, $exe);
$mod_two = new Model($sql_two, $exe_two);
$mod_three = new Model($sql_three, $exe_three);

$render = $mod->selectGame();
$render_two = $mod_two->selectGame();
$render_three = $mod_three->selectGame();

require "public/vue/vue_search.php";

?>