<?php
session_start();
// verify you have click on the button submit and if you give a namespace
//
if (isset($_POST['submit']) && !empty($_POST['nameUser'])) {
    require "../services/chargerClasse.php";
    spl_autoload_register('chargerClasse');
    require "../model/connexion_sql.php";
    require "../model/AccountManager.php";

// verifify if the sold is a number and positive
    if (is_numeric($_POST['sold']) && $_POST['sold'] >=0) {


        $account = new Account($_POST);
        $error = $account ;

        // if there are error the value error is a string else it's return the object . if there is no error the count is add in bdd
        if (!is_string($error)) {
            $manager = new AccountManager($bdd);
            $manager->addAccount($account);
            header('Location: home.php');
        }

    } else {
        $error ="transaction impossible !";
    }

}

require '../views/addAccount.php';
