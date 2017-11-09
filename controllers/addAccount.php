<?php
if (isset($_POST['submit']) && !empty($_POST['nameUser'])) {
  require "../services/chargerClasse.php";
  spl_autoload_register('chargerClasse');
  require "../model/connexion_sql.php";
  require "../model/AccountManager.php";
  $account = new Account($_POST);
  $manager = new AccountManager($bdd);
  var_dump($account);
  $manager->addAccount($account);


}
require '../views/addAccount.php';
 ?>
