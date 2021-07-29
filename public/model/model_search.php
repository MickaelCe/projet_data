<?php 
$sql = "SELECT img_url, names, id FROM steam_game WHERE names = :search1 OR categories = :search2 OR dates = :search3 OR developer = :search4 OR price = :search5 ORDER BY RAND( ) LIMIT 4" ;
$exe = ["search1"=> $search,
        "search2"=> $search,
        "search3"=> $search,
        "search4"=> $search,
        "search5"=> $search];

$mod = new Model($sql,$exe);
$test = $mod->selectGame();

?>