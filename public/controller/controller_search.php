<?php

require "public/model/model_search.php";

$mod = new Model($sql, $exe);
$mod_two = new Model($sql_two, $exe_two);

$render = $mod->selectGame();
$render_two = $mod_two->selectGame();

require "public/vue/vue_search.php";

?>