<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=991db;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e) //CONFIGUERE MESAGE SI ERREUR DE CONNEXION
{
				die('Erreur : ' . $e->getMessage());
}

?>