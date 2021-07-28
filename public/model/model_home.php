<?php 
$sql = "SELECT img_url, names FROM steam_game WHERE names LIKE :id";
$exe = ["id" => "%light%"];

$mod = new Model($sql,$exe);
$test = $mod->selectGame();

?>