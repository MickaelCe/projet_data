<?php 
$sql = "SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 5" ;
$exe = [];

$sql_two = "SELECT names, img_url FROM steam_game ORDER BY RAND ( ) LIMIT 2" ;
$exe_two = [];

$sql_three = "SELECT names, img_url FROM steam_game ORDER BY RAND ( ) LIMIT 2" ;
$exe_three = [];

?>