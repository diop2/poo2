<?php
class boursier extends etudiant{
    private $type;
    public function __construct ( $nom="", $prenom="", $mail="", $telephone="", $date_de_naissance=0,$type=""){
    parent:: __construct($nom,$prenom,$mail,$telephone,$date_de_naissance);
        $this ->type=$type;
    
    }

    
/*  */
        /**
         * Get the value of type
         */ 
        public function getType()
        {
                return $this->type;
        }

        /**
         * Set the value of type
         *
         * @return  self
         */ 
        public function setType($type)
        {
                $this->type = $type;

                return $this;
        }
}


