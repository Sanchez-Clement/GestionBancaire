<?php
$id = $_GET['id'];
require "../model/connexion_sql.php";
require "../model/AccountManager.php";
$manager = new AccountManager($bdd);

// delete the account in bdd
$manager->deleteAccount($id);
header('Location: home.php');

 ?>
