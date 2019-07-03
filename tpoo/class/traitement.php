
<?php
require'nonboursier.php';
require'boursier.php';
include_once 'EtudiantService.php';
$etudiant = new EtudiantService();
if (isset($_POST['Ajouter'])){
    $matricule=($_POST['matricule']);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $telephone = $_POST['telephone'];
    $mail = $_POST['mail'];
    $adresse = $_POST['adresse'];

    //$nb = new nonboursier($matricule, $nom, $prenom, $date_de_naissance,$telephone,$mail,$adresse);
    //$etudiant ->add($nb);
    if ($_POST["non_boursier"]=="non_boursier") {
        $nb = new nonboursier($matricule, $nom, $prenom, $date_de_naissance,$telephone,$mail,$adresse);
        $etudiant ->add_non_boursier($nb);
        //$nb1 = new nonboursier($matricule, $adresse);
        //$non_boursier->add($nb1);
    }
    
}
