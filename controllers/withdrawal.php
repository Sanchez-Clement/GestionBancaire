<?php
require_once "../services/chargerClasse.php";
spl_autoload_register('chargerClasse');
require_once "../model/connexion_sql.php";
require_once "../model/AccountManager.php";

// connect to bbd GestionBancaire
$manager = new AccountManager($bdd);

// get all the accounts in bdd
$accounts = $manager->getAccounts();

// verify you have click on the button submit and if you give a sum

if (isset($_POST['remove']) && !empty($_POST['withdraw'])) {

  // verifify if the sum is a number

    if (is_numeric($_POST['withdraw'])) {
        $withdraw = abs(floatval($_POST['withdraw']));

        $account = new Account($_POST);
        $account = $manager->getThisAccount($account);

        // make the transaction in the object

        $error = $account->setSold($account->getSold() - $withdraw);

        // if there is no error update the account is updated in bdd

        if (!is_string($error)) {
            $manager->updateAccount($account);
            header('Location: home.php');
        }


    } else {
        $error = "transaction impossible !" ;
    }
}
require '../views/withdrawal.php';
