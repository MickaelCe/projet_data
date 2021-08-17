<?php 
$sql = "SELECT img_url, names, id FROM steam_game WHERE names LIKE :search1 OR categories LIKE :search2 OR dates LIKE :search3 OR developer LIKE :search4 OR price LIKE :search5 ORDER BY RAND( ) LIMIT 4" ;
$exe = ["search1"=> $search,
        "search2"=> $search,
        "search3"=> $search,
        "search4"=> $search,
        "search5"=> $search];

$sqlE = "SELECT img_url, names, id FROM steam_game ORDER BY RAND( ) LIMIT 4" ;
$exeE = [];

?>