<?php

$req = "SELECT * FROM steam_game WHERE names LIKE :names limit 7 " ;
$exe = ["names"=> $name];

?>