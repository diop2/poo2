<?php
require 'etudiant.php';

class nonboursier extends etudiant{
    private $adresse;
    public function __construct( $matricule="", $nom="",$prenom="", $mail="", $telephone="",$date_de_naissance=0,$adresse=""){
         
        parent:: __construct($matricule, $nom,$prenom,$date_de_naissance,$telephone,$mail);
        $this ->adresse=$adresse;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    /* public function nonboursier(){
        $inserer = $this->pdo -> prepare("INSERT INTO etudiant (id_etudiant,matricule,nom,prenom,date_de_naissance,telephone,mail)
    VALUES (NULL,'111','diop','kims','2019-04-02','778552255','mail@mail.com')
    INSERT INTO non_boursier(id_etudiant,adresse) VALUES(id_etudiant,LAST_INSERT_ID())");
    } */
}