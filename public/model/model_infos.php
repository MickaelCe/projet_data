<?php

$req = "SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 5";
$exe = [];

$req_two = "SELECT * FROM steam_game WHERE names LIKE :names LIMIT 1";
$exe_two = ["names"=> $names];

?>