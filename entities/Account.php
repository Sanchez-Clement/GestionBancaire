<?php
/**
 *
 */
class Account
{
    protected $idAccount ;
    protected $nameUser ;
    protected $sold;
    protected $dateModif;
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * Set the value of all the attributes
     *
     * @param array donnees
     */

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = "set" . ucfirst($key) ;
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of Id Account
     *
     * @return int
     */
    public function getIdAccount()
    {
        return $this->idAccount;
    }

    /**
     * Set the value of Id Account
     *
     * @param int idAccount
     *
     * @return self
     */
    public function setIdAccount($idAccount)
    {
        $idAccount = (int) $idAccount;
        $this->idAccount = $idAccount;

        return $this;
    }

    /**
     * Get the value of Name User
     *
     * @return string
     */
    public function getNameUser()
    {
        return $this->nameUser;
    }

    /**
     * Set the value of Name User
     *
     * @param string nameUser
     *
     * @return self
     */
    public function setNameUser($nameUser)
    {
        if (is_string($nameUser) && strlen($nameUser) < 50) {
            $this->nameUser = $nameUser;

            return $this;
        }
    }

    /**
     * Get the value of Sold
     *
     * @return int
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * Set the value of Sold
     *
     * @param int sold
     *
     * @return self
     */
    public function setSold($sold)
    {
        if ($sold >= -200 && $sold <=100000) {
            $sold = str_replace(',', '.', $sold);
            $this->sold = floatval(number_format($sold, 2, '.', ''));

            return $this;
        } elseif ($sold <= -200) {
            $error ="Le plafond est limité à -200 €";
            return $error;
        } elseif ($sold >= 100000) {
            $error ="Le plafond est limité à 100 000 €";
            return $error;
        } else {
            $error ="La transaction n'a pas aboutie";
            return $error;
        }
    }

    /**
     * Get the value of Date Modif
     *
     * @return date
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set the value of Date Modif
     *
     * @param date dateModif
     *
     * @return self
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }
}
