<?php
class EtudiantService
{  
    private $serv;
    protected $pdo;
    private $login;
    private $pass;
    private $dbname;
    public function __construct($serv = "localhost",$login ="root",$pass = "020492", $dbname="universite"){
$this->isconnect= true;
$this->serv=$serv;
$this->login=$login;
$this->pass=$pass;
$this->dbname=$dbname;
try
{
    $this->pdo = new PDO("mysql:host={$this->serv};dbname={$this->dbname}", $this->login,
     $this->pass);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOExeption $e)
{
echo 'echec :' .$e->getMessage();
}
    }
    
    
    
    public function add(etudiant $etudiant)
    {
        $matricule=$etudiant->getMatricule();
        $nom=$etudiant->getNom();
        $prenom=$etudiant->getPrenom();
        $date_de_naissance=$etudiant->getDate_de_naissance();
        $telephone=$etudiant->getTelephone();
        $mail=$etudiant->getMail();
       try{
        $ajouter =  $this->pdo -> prepare("INSERT INTO etudiant (matricule,nom,prenom,date_de_naissance,telephone,mail)
        VALUES (:matricule,:nom,:prenom,:date_de_naissance,:telephone,:mail)");
        $ajouter ->bindParam(":matricule", $matricule);
        $ajouter ->bindParam(":nom", $nom);
        $ajouter ->bindParam(":prenom", $prenom);
        $ajouter ->bindParam(":date_de_naissance", $date_de_naissance);
        $ajouter ->bindParam(":telephone", $telephone);
        $ajouter ->bindParam(":mail", $mail);
        $ajouter->execute();
        
        
                }
                catch(PDOExeption $e)
            {
            echo 'echec :' .$e->getMessage();
            }
            
            
            if(get_class($etudiant)=='nonboursier'){
                $adresse=$etudiant ->getAdresse();

                try{
                    $rep = $this->pdo->prepare("SELECT MAX(id_etudiant) FROM etudiant"  ) ;
                    die($rep);
                if ($lastinsert = $rep->fetch()) {
                    die(var_dump($lastinsert));
                    $id=$lastinsert["id_etudiant"];
                
                }
                    $ajouter=$this->pdo->prepare("INSERT INTO non_boursier(id_etudiant, adresse)
                    VALUES(:id_etudiant,:adresse)");
                    $ajouter ->bindParam(':id_etudiant',$id);
                    $ajouter ->bindParam(':adresse', $adresse);
                    $ajouter->execute();

                }
                catch(PDOExeption $e)
            {
            echo 'echec :' .$e->getMessage();
            }
                  
            }
            
          /*    elseif(get_class($etudiant)=='boursier'){
                $type=$etudiant->getType();
                $ajouter=$this->pdo->prepare("INSERT INTO boursier(id_pension, id_etudiant)
                VALUES(:id_pension, :id_etudiant)");
                $ajouter ->bindParam(':id_pension', $id);
                $ajouter ->binParam(':id_etudiant',$id);
            }
            elseif (get_class($etudiant)==loger) {
                $type=$etudiant->getLoger();
                $ajouter=$this->pdo->prepare("INSERT INTO loge(numero_chambre, id_boursier)
                VALUES(:numero_chambre, :id_boursier)");
                $ajouter
            } */

    } 
}
