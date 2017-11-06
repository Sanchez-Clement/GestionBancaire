<?php
/**
 *
 */
class AccountManager
{
  protected $bdd;

  public function __construct($bdd)
  {
      $this->setBdd($bdd);
  }

  /** Define bdd
   *@param (bdd) Object PDO
   *@return no return
   */
  public function setBdd($bdd)
  {
      $this->bdd=$bdd;
  }

  /** Return all the vehicules in database
   *@param empty
   *@return array of objects
   */
  public function getAccounts() {
    $accounts = [];
    $reponse = $this->bdd->query('SELECT * FROM Accounts ORDER BY date_modif DESC');

    while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) {
      $accounts[] = new Account($donnees);
    }

    return $accounts;
  }
}
 ?>
