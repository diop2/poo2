<?php

class chambre extends loger{
    private $chambre;
    public function __construct ( $nom="", $prenom="", $mail="", $telephone="", $date_de_naissance=0, $chambre=0){
        parent:: __construct($nom,$prenom,$mail,$telephone,$date_de_naissance, $chambre);
       $this->chambre= $chambre;
        
    }

      

       /**
        * Get the value of chambre
        */ 
       public function getChambre()
       {
              return $this->chambre;
       }

       /**
        * Set the value of chambre
        *
        * @return  self
        */ 
       public function setChambre($chambre)
       {
              $this->chambre = $chambre;

              return $this;
       }
}