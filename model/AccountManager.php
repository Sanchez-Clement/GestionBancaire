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
        $reponse = $this->bdd->query('SELECT * FROM Accounts ORDER BY date_modif DESC');

        while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)) {
            $accounts[] = new Account($donnees);
        }

        return $accounts;
    }

    /** add an account in the database
     *@param Object
     *@return empty
     */
    public function addAccount($account)
    {
        $reponse=$this->bdd->prepare('INSERT INTO Accounts(nameUser,sold,dateModif) VALUES(:nameUser,:sold,NOW())');
        $reponse->execute(array(
'nameUser' => $account->getNameUser(),
'sold' => $account->getSold()

));
    }


        /** update an account in database
         *@param Object
         *@return empty
         */
        public function updateAccount($account)
        {
            $reponse=$this->bdd->prepare('UPDATE Accounts set nameUser=:nameUser,sold=:sold,dateModif=NOW() WHERE idAccount=:id');
            $reponse->execute(array(
    'id' => $account->getIdAccount(),
    'nameUser' => $account->getNameUser(),
    'sold' => $account->getSold(),


      ));
        }

        /** delete an accountin database
         *@param Object
         *@return empty
         */
        public function deleteAccount($account)
        {
            $reponse=$this->bdd->prepare('DELETE FROM Accounts WHERE idAccount = :id');
            $reponse->execute(array(
          'id' => $account->getIdAccount()
        ));
        }
}
