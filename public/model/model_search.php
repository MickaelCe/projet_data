<?php 

$sql = "SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 5" ;
$exe = [];

$sql_two = "SELECT id, names, img_url FROM steam_game ORDER BY RAND ( ) LIMIT 4" ;
$exe_two = [];

?>