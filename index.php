<?php
   class Mere{
      public $attribut="Bonjour.";
      public function methode1(){
         $str=$this->attribut;
         $str.=" Je suis la classe Mère.";
         return $str;
      }
   }
   class Fille extends Mere{
      public function methode2(){
         $str=$this->attribut;
         $str.=" Je suis la classe Fille.";
         return $str;
      }
   }
   $objet=new Fille();
   echo $objet->methode1();
   echo "<br />";
   echo $objet->methode2();
?> 