<?php
// connexion to bdd gestionBancaire
$bdd = new PDO('mysql:host=localhost;dbname=GestionBancaire', 'root', 'root');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
?>
