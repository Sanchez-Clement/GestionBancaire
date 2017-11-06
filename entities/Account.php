<?php
/**
 *
 */
class Account
{
protected $id_account ;
protected $name_user ;
protected $sold;
protected $date_modif;
  function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }
}

 ?>
