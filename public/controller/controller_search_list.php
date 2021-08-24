<?php

if (isset($_GET['name'])) {
    $names = $_GET['name'];

    $name = "%$names%";

    require "public/model/model_search_list.php";

    $mod = new Model($req, $exe);

    $render = $mod->selectGame();

    require "public/vue/vue_search_list.php";

} else {
 echo "Heloooo";
}

?>