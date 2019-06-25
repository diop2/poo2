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
    <form  action="class/traitement.php"  method="POST">
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
<input id="" name="adresse" type="text" placeholder="adresse" /> <br>
<br> 
 
  <select name="bourse" id="">
    <optgroup name = "bourse">
        <option value="boursier"> boursier</option>
        <option value="non_boursier">non boursier</option>
    </optgroup>
  </select>
  <br>
  <br>
  <select name="typte" id="">
    <optgroup name = "type de bourse">
        <option value="entière"> bourse entière</option>
        <option value="demie">demie bourse</option>
    </optgroup>
  </select>
  <br>
  <br>
  <select name="logement" id="">
    <optgroup name = "logement">
        <option value="oui"> loger </option>
        <option value="non ">non loger</option>
    </optgroup>
  </select>
  <br>
  <br>  
<input id="" type="submit" value="Ajouter" name="Ajouter" />
</form>
<br>


</body>
</html>

