<?php
require_once "../services/chargerClasse.php";
spl_autoload_register('chargerClasse');
require_once "../model/connexion_sql.php";
require_once "../model/AccountManager.php";

// connect to bbd GestionBancaire
$manager = new AccountManager ($bdd);

// get all the accounts in bdd
$accounts = $manager->getAccounts();

if (isset($_POST['transferMoney']) && !empty($_POST['transfer'])) {
  var_dump($_POST);
$transfer = floatval($_POST['transfer']) ;

  $accountA = new Account($_POST);
  $accountA = $manager->getThisAccount($accountA);
  $_POST['idAccount'] = $_POST['idAccountB'];
  $accountB = new Account($_POST);
  $accountB = $manager->getThisAccount($accountB);
$accountA->setSold($accountA->getSold() - $transfer);
$accountB->setSold($accountB->getSold() + $transfer);
$manager->updateAccount($accountA);
$manager->updateAccount($accountB);



//   $account->setSold($account->getSold() + $deposit);
//
// $manager->updateAccount($account);
  // $manager = new AccountManager($bdd);

  // $manager->addAccount($account);
header('Location: home.php');


}
require "../views/transfer.php" ?>
