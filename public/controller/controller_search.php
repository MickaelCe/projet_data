<?php

require "public/model/class_model.php";

$value = "";
if(isset($_GET["search"]) && !empty($_GET["search"]))
{
    $value = $_GET["search"];
} else {
    $value = "error";
}

$search = "%$value%";

require "public/model/model_search.php";

$mod = "";

if(empty($_GET["search"]))
{
    $mod = new Model($sqlE,$exeE);
} else {
    $mod = new Model($sql,$exe);
}

$test = $mod->selectGame();




require "public/vue/vue_search.php";

?>