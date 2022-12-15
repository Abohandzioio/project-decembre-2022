<?php

class Achat{
    private $id_user;
    private $id_rencontre;
    private $date_achat
    ;

    public function __construct($id_user=0, $id_rencontre, $date_achat)
    {
        $this->id_user = $id_user;
        $this->id_rencontre = $id_rencontre;
        $this->date_achat= $date_achat
        ;
    }

    

    

    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     */
    public function setIdUser($id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of id_rencontre
     */
    public function getIdRencontre()
    {
        return $this->id_rencontre;
    }

    /**
     * Set the value of id_rencontre
     */
    public function setIdRencontre($id_rencontre): self
    {
        $this->id_rencontre = $id_rencontre;

        return $this;
    }

    /**
     * Get the value of date_achat
     */
    public function getDateAchat()
    {
        return $this->date_achat;
    }

    /**
     * Set the value of date_achat
     */
    public function setDateAchat($date_achat): self
    {
        $this->date_achat = $date_achat;

        return $this;
    }
}

