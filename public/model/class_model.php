<?php

class Model{

    public $req;
    public $params;
   
    public function __construct($a,$b)
    {

        $this->req = $a;
        $this->params = $b;
        
    }

    function selectGame()
    {
        include "access.php";

        try
        {
	        $bdd = new PDO($dsn, $username, $password);
        }
        catch(Exception $e)
        {
	        die('Erreur : '.$e->getMessage());
        }

        $mdl = $bdd->prepare($this->req);
        $mdl->execute($this->params);
        $bbb = $mdl->fetchAll(PDO::FETCH_ASSOC);

        return $bbb;
    }

}

?>