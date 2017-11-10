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

if (isset($_POST['transferMoney']) && !empty($_POST['transfer'])) {


  // verifify if the sum is a number

    if (is_numeric($_POST['transfer'])) {

        $transfer = abs(floatval($_POST['transfer'])) ;

        // create the account A where the sum is removed
        $accountA = new Account($_POST);
        $accountA = $manager->getThisAccount($accountA);

        // create the account B where the sum is added
        $_POST['idAccount'] = $_POST['idAccountB'];
        $accountB = new Account($_POST);
        $accountB = $manager->getThisAccount($accountB);

        // make the transaction in the accountA
        $error = $accountA->setSold($accountA->getSold() - $transfer);

        // if there is no error update the accountA in bdd and  make the transaction in the account B
        if (!is_string($error)) {
            $manager->updateAccount($accountA);
            $error = $accountB->setSold($accountB->getSold() + $transfer);

            // if there is no error update the account B in bdd
            if (!is_string($error)) {
                $manager->updateAccount($accountB);
                header('Location: home.php');
            }
        }


    } else {
        $error = "transaction impossible !";
    }
}
require "../views/transfer.php";
