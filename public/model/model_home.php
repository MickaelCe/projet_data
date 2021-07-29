<?php 
$sql = "SELECT img_url, names, id FROM steam_game ORDER BY RAND( ) LIMIT 4" ;
$exe = [];

$mod = new Model($sql,$exe);
$test = $mod->selectGame();

?>