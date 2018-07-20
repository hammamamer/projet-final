<?php
$bdd= new PDO('mysql:host=localhost;dbname=hamma;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

echo "bonjour";


header('location:incrip.php')
?>