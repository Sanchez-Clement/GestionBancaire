<?php
require "../services/chargerClasse.php";
spl_autoload_register('chargerClasse');
require "../model/connexion_sql.php";
require "../model/AccountManager.php";

// connect to bbd GestionBancaire
$manager = new AccountManager ($bdd);

// get all the accounts in bdd
$accounts = $manager->getAccounts();
var_dump($accounts);

include "../views/home.php";
 ?>
