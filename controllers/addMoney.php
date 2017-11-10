<?php
$error ="";
require_once "../services/chargerClasse.php";
spl_autoload_register('chargerClasse');
require_once "../model/connexion_sql.php";
require_once "../model/AccountManager.php";

// connect to bbd GestionBancaire
$manager = new AccountManager($bdd);

// get all the accounts in bdd
$accounts = $manager->getAccounts();

// verify you have click on the button submit and if you give a sum
if (isset($_POST['add']) && !empty($_POST['deposit'])) {


  // verifify if the sum is a number and positive
    if (is_numeric($_POST['deposit']) && $_POST['deposit'] >=0) {
        $deposit = abs(floatval($_POST['deposit'])) ;
        $account = new Account($_POST);




        $account = $manager->getThisAccount($account);

// make the transaction in the object
        $error =  $account->setSold($account->getSold() + $deposit);

// if there is no error update the account is updated in bdd
        if (!is_string($error)) {
            $manager->updateAccount($account);
            header('Location: home.php');
        }


      
    } else {
        $error = "Transaction impossible";
    }
}
require '../views/addMoney.php';
