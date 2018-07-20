<!DOCTYPE html>
<html>

<?php 
$bdd = new PDO('mysql:host=localhost;dbname=amine;charset=utf8', 'root', '');
if (isset($_POST["submit"]))
{
     $name=$_POST["name"];
     $age=$_POST["age"];
     $adresse=$_POST["adresse"];
     $score=$_POST["score"];
     $Domaine=$_POST["Domaine"];
    if (!empty($_POST["name"]) AND !empty($_POST["age"]) AND !empty($_POST["adresse"])AND !empty($_POST["score"]) AND !empty($_POST["Domaine"])) 
    {
      $insert=$bdd->prepare("INSERT INTO orientation(name,age,adresse,score,domaine) VALUES(?,?,?,?,?)");
      $insert->execute(array($name,$age,$adresse,$score,$Domaine));
    }
    else
    {
      $eror="tout les cases doit etre remplis";
    }
}
?>





<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>
<body>
<form method="post" action="">
<div class="form-group-inline">
  <label for="usr">Name:</label>
  <input name="name" type="text" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd">age:</label>
  <input name="age" type="number" class="form-control" id="pwd">
</div>
<div class="form-group">
  <label for="pwd">Adresse</label>
  <input name="adresse" type="text"  class="form-control" id="pwd">
</div>
<div class="form-group">
  <label for="pwd">score</label>
  <input name="score" type="number"  class="form-control" id="pwd">
</div>

<label for="sel1">Domaine:</label>
  <select name="Domaine" class="form-control" id="sel1">
    <option>Informatique</option>
    <option>Science</option>
    <option>Economie</option>
    <option>Technique</option>
  </select>
  <div class="form-group">
  <br>
  <input type="submit" name="submit" class="form-control" id="pwd">
</div>
</form>
<div align="center" class="recherche">
<?php if (isset($eror)){echo "<p align='center'>".$eror."</p>";}
   if (isset($_POST["submit"])) {
      $fac=$bdd->prepare("SELECT * FROM faculte WHERE domaine=? AND score<=?");
   $fac->execute(array($Domaine,$score));
   
   while($faculte=$fac->fetch())
   {
      echo "<h1>".$faculte["name"] . '</h1><pre><br><img height="100%" width="100%" src ="'.$faculte["img"].'">
      </pre> <br> <h4> '. $faculte["description"]."<br><a href='".$faculte["link"]."'>".
      $faculte["link"]."</a></h4><br> <br> <br>";

   }
 }
   
  


 ?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>

