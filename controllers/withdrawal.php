<?php
require_once "../services/chargerClasse.php";
spl_autoload_register('chargerClasse');
require_once "../model/connexion_sql.php";
require_once "../model/AccountManager.php";

// connect to bbd GestionBancaire
$manager = new AccountManager ($bdd);

// get all the accounts in bdd
$accounts = $manager->getAccounts();

if (isset($_POST['remove']) && !empty($_POST['withdraw'])) {
$withdraw = abs(floatval($_POST['withdraw']));

  $account = new Account($_POST);
  $account = $manager->getThisAccount($account);

  $error = $account->setSold($account->getSold() - $withdraw);

if (!is_string($error)) {
  $manager->updateAccount($account);
  header('Location: home.php');
}

  // $manager = new AccountManager($bdd);

  // $manager->addAccount($account);


}
require '../views/withdrawal.php';
 ?>
