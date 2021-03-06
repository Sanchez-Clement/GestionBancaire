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

    /** Return all the accounts in database
     *@param empty
     *@return array of objects
     */
    public function getAccounts()
    {
        $accounts = [];
        $reponse = $this->bdd->query('SELECT * FROM Accounts ORDER BY dateModif DESC');

        while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) {
            $accounts[] = new Account($donnees);
        }

        return $accounts;
    }

    /** get the account selectionned
     *@param object
     *@return object
     */
    public function getThisAccount(Account $account)
    {
        $reponse = $this->bdd->prepare('SELECT * FROM Accounts WHERE idAccount = :id');
        $reponse->execute(['id' => $account->getIdAccount()]);
        $donnees = $reponse->fetch(PDO::FETCH_ASSOC);
        $account->hydrate($donnees);
        return $account;
    }

    /** add an account in the database
     *@param Object
     *@return empty
     */
    public function addAccount(Account $account)
    {
        $reponse=$this->bdd->prepare('INSERT INTO Accounts(nameUser,sold,dateModif) VALUES(:nameUser,:sold,CURRENT_TIMESTAMP)');
        $reponse->execute(array(
'nameUser' => $account->getNameUser(),
'sold' => $account->getSold()

));
    }


    /** update an account in database
     *@param object
     *@return empty
     */
    public function updateAccount(Account $account)
    {
        $reponse=$this->bdd->prepare('UPDATE Accounts set nameUser=:nameUser,sold=:sold,dateModif=CURRENT_TIMESTAMP WHERE idAccount=:id');
        $reponse->execute(array(
    'id' => $account->getIdAccount(),
    'nameUser' => $account->getNameUser(),
    'sold' => $account->getSold(),


      ));
    }

    /** delete an account in database
     *@param int
     *@return empty
     */
    public function deleteAccount($id)
    {
        $reponse=$this->bdd->prepare('DELETE FROM Accounts WHERE idAccount = :id');
        $reponse->execute(array(
          'id' => $id
        ));
    }
}
