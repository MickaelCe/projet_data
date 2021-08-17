<?php

// $value = "";
// if(isset($_GET["search"]) && !empty($_GET["search"]))
// {
//     $value = $_GET["search"];
// } else {
//     $value = "error";
// }

// $search = "%$value%";

require "public/model/model_search.php";

$mod = new Model($sql, $exe);
$mod_two = new Model($sql_two, $exe_two);
$mod_three = new Model($sql_three, $exe_three);

$render = $mod->selectGame();
$render_two = $mod_two->selectGame();
$render_three = $mod_three->selectGame();

// $mod = "";

// if(empty($_GET["search"]))
// {
//     $mod = new Model($sqlE,$exeE);
// } else {
//     $mod = new Model($sql,$exe);
// }

// $test = $mod->selectGame();




require "public/vue/vue_search.php";

?>