<?php

$req = "SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 6";
$exe = [];

$req_two = "SELECT * FROM steam_game WHERE id LIKE :id LIMIT 1";
$exe_two = ["id"=> $id];

?>