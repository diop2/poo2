<?php

class loger extends boursier{
private $numero_chambre;
public function __conctruct ($matricule="", $nom="", $prenom="", $date_de_naissance=0, $telephone="", $mail="",$type="",$numero_chambre=""){
    parent::__construct($matricule,$nom, $prenom, $date_de_naissance, $telephone, $mail,$type);
    $this->numero_chambre=$numero_chambre;

}

/**
 * Get the value of numero_chambre
 */ 
public function getNumero_chambre()
{
return $this->numero_chambre;
}

/**
 * Set the value of numero_chambre
 *
 * @return  self
 */ 
public function setNumero_chambre($numero_chambre)
{
$this->numero_chambre = $numero_chambre;

return $this;
}
}