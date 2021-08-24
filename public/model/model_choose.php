<?php 

$req = "SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 5" ;
$exe = [];

$req_two = "SELECT * FROM steam_game WHERE names LIKE :names ORDER BY names ASC" ;
$exe_two = ["names"=> $names];

?>