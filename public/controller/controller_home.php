<?php

require 'public/model/model_home.php';

$mod = new Model($sql,$exe);
$render = $mod->selectGame();

require 'public/vue/vue_home.php';

?>