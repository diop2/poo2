<?php 
 abstract class etudiant 
 {
     private $matricule;
     private $nom;
     private $prenom;
     private $mail;
     private $telephone;
     private $date_de_naissance;
      
     public function __construct($matricule, $nom="",$prenom="",$date_de_naissance=0, $telephone="", $mail=""){
         $this->matricule=$matricule;
         $this->nom = $nom;
         $this->prenom = $prenom;
         $this->date_de_naissance = $date_de_naissance;
         $this->telephone = $telephone;
         $this->mail = $mail;
         
         
    
 }
 

     /**
      * Get the value of nom
      */ 
     public function getNom()
     {
          return $this->nom;
     }

     /**
      * Set the value of nom
      *
      * @return  self
      */ 
     public function setNom($nom)
     {
          $this->nom = $nom;

          return $this;
     }

     /**
      * Get the value of prenom
      */ 
     public function getPrenom()
     {
          return $this->prenom;
     }

     /**
      * Set the value of prenom
      *
      * @return  self
      */ 
     public function setPrenom($prenom)
     {
          $this->prenom = $prenom;

          return $this;
     }

     /**
      * Get the value of mail
      */ 
     public function getMail()
     {
          return $this->mail;
     }

     /**
      * Set the value of mail
      *
      * @return  self
      */ 
     public function setMail($mail)
     {
          $this->mail = $mail;

          return $this;
     }

     /**
      * Get the value of telephone
      */ 
     public function getTelephone()
     {
          return $this->telephone;
     }

     /**
      * Set the value of telephone
      *
      * @return  self
      */ 
     public function setTelephone($telephone)
     {
          $this->telephone = $telephone;

          return $this;
     }

     /**
      * Get the value of date_de_naissance
      */ 
     public function getDate_de_naissance()
     {
          return $this->date_de_naissance;
     }

         /**
          * Get the value of matricule
          */ 
         public function getMatricule()
         {
                  return $this->matricule;
         }

         /**
          * Set the value of matricule
          *
          * @return  self
          */ 
         public function setMatricule($matricule)
         {
                  $this->matricule = $matricule;

                  return $this;
         }
 }
?>
