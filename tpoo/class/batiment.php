<?php   

class batiment extends chambre{
    private $nom_batiment;
    public function __construct ( $nom="", $prenom="", $mail="", $telephone="", $date_de_naissance=0, $num_chambre=0){
        parent:: __construct($nom,$prenom,$mail,$telephone,$date_de_naissance, $num_chambre);
       $this->nom_batiment= $nom_batiment;
        
    }

    /**
     * Get the value of nom_batiment
     */ 
    public function getNom_batiment()
    {
        return $this->nom_batiment;
    }

    /**
     * Set the value of nom_batiment
     *
     * @return  self
     */ 
    public function setNom_batiment($nom_batiment)
    {
        $this->nom_batiment = $nom_batiment;

        return $this;
    }
}