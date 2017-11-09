<?php
if (isset($_POST['submit']) && !empty($_POST['nameUser'])) {
  require "../services/chargerClasse.php";
  spl_autoload_register('chargerClasse');
  require "../model/connexion_sql.php";
  require "../model/AccountManager.php";
  $account = new Account($_POST);
  $manager = new AccountManager($bdd);
  $manager->addAccount($account);
// header('Location: home.php');


}
require '../views/addAccount.php';
 ?>
