<?php

class Model{
    public $dasda = 55;
    public $games;

    public function games(){
        require 'public/pdo/connexion.php';
        $sql = "SELECT img_url FROM steam_game ORDER BY RAND ( ) LIMIT 4" ;

        $games = $pdo->query($sql);
        $this->games = $games;

    }
}

?>