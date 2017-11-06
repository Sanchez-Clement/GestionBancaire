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
}
 ?>
