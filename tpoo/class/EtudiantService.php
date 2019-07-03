<?php
class EtudiantService
{  
    private $serv;
    protected $pdo;
    private $login;
    private $pass;
    private $dbname;
    public function __construct($serv = "localhost",$login ="root",$pass = "020492", $dbname="universite"){
/* $this->isconnect= true;
$this->serv=$serv;
$this->login=$login;
$this->pass=$pass;
$this->dbname=$dbname; */
try
{
    $this->pdo = new PDO("mysql:host={$serv};dbname={$dbname}", $login,
     $pass);
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

            $pr= $this->pdo->query("SELECT MAX(id_etudiant) as id FROM etudiant");
             while ($rq = $pr->fetch()) {
                 $id = $rq = ["id"];
             }

             if (get_class($etudiant)== "nonboursier"){
                 $adresse=$etudiant->getAdresse();
                 $ajouter = $this->pdo->prepare("INSERT INTO non_boursier(id_etudiant,adresse)
                 VALUES(:id_etudiant, :adresse)");
                 $ajouter->bindParam(':id_etudiant', $id);
                 $ajouter->bindParam(':adresse', $adresse);
                 $ajouter->execute();
             }
             elseif (get_class($etudiant)== "boursier"||get_class($etudiant)== "loger") {
                 $type = $etudiant->getType();
                 $ajouter=$etudiant->pdo->prepare("INSERT INTO boursier(id_etudiant,type)
                 VALUES (:id_etudiant, :type)");
                 $ajouter->bindParam(':id_etudiant', $id);
                 $ajouter->bindParam(':type', $type);
                 $ajouter->execute();
             }
             if (get_class($etudiant)== "loger") {
                 $type = $etudiant->getNumero_chambre();
                 $ajouter=$etudiant->pdo->prepare("INSERT INTO loger(id_etudiant,numero_chambre)
                 VALUES (:id_etudiant, :numero_chambre)");
                 $ajouter->bindParam(':id_etudiant', $id);
                 $ajouter->bindParam(':numero_chambre', $numero_chambre);
                 $ajouter->execute();

                 
             }
    } 
public function findAll($table){
    try {
        $obj=$this->pdo->prepre("select * from $table");
        $obj->execute();
        return $obj->fetchAll(PDO::FETCH_obj);
    } 
    catch(PDOExeption $e)
            {
            echo 'echec :' .$e->getMessage();
            }
}
    
}
