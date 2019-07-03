<?php
class boursier extends etudiant{
    private $id_pension;
    public function __construct ($matricule="",$nom="", $prenom="", $date_de_naissance=0, $telephone="", $mail="", $id_pension=""){
    parent:: __construct($matricule,$nom,$prenom,$date_de_naissance,$telephone,$mail);
       
    
    }

    


    /**
     * Get the value of id_pension
     */ 
    public function getId_pension()
    {
        return $this->id_pension;
    }

    /**
     * Set the value of id_pension
     *
     * @return  self
     */ 
    public function setId_pension($id_pension)
    {
        $this->id_pension = $id_pension;

        return $this;
    }
}


