<?php
require'nonboursier.php';
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

    $nb = new nonboursier($matricule, $nom, $prenom, $date_de_naissance,$telephone,$mail,$adresse);
    $etudiant ->add($nb);
    
var_dump($date_de_naissance=25);
    
}
