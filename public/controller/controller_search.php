<?php

require "../model/class_model.php";

$value = "";
if(isset($_GET["search"]) && !empty($_GET["search"]))
{
    $value = $_GET["search"];
} else {
    $value = "error";
}
echo $value;
$search = "%$value%";

require "../model/model_search.php";

require "../vue/vue_search.php";

?>