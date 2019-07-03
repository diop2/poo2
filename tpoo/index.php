<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    require 'class/Autoloader.php';
    Autoloader::register();
    $auto = new EtudiantService();
    ?>
    <form method="POST" action="class/traitement.php"  >
    <input id="" name="matricule" type="text" placeholder="matricule" /> <br>
<br> 
<input id="" name="nom" type="text" placeholder="nom" /> <br>
<br>
<input id="" name="prenom" type="text" placeholder="prenom" /> <br>
<br> 
<input id="" name="date_de_naissance" type="date" placeholder="date_de_naissance" /> <br>
<br>
<input id="" name="telephone" type="text" placeholder="telephone" /> <br>
<br> 
<input id="" name="mail" type="text" placeholder="mail" /> <br>
<br> 
<div>
<select name="boursier" id="">
    <?php
      $ob = new EtudiantService();
      $res = $pdo->prepare($requete);
				$ajouter = $res ->execute();
      foreach($ob->findAll('pension') as $type){
        echo '<option value=$type->id_pension> $type->type</option>';
      }
    ?>
  </select> 
  </div>
  <div>
  <br>
  <br>
  <select name="loger" id="">
    <optgroup name = "loger">
        <option value="demi"> demi</option>
        <option value="entière">entière</option>
    </optgroup>
      
  </select> 
  </div>
  <br>
  <br>
<input id="" name="adresse" type="text" placeholder="adresse" /> <br>
  <br>
  <br>  
<input id="" type="submit" value="Ajouter" name="Ajouter" />
</form>
<br>

</body>
</html>

