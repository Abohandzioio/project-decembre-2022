<?php

class Rencontre
{

    private $nom_equipe_a;
    private $nom_equipe_b;
    private $lieu;
    private $date_match;
    private $heure_match;

    private $id_rencontre;

    public function __construct($id_rencontre,$nom_equipe_a, $nom_equipe_b, $lieu, $date_match, $heure_match)
    {
        $this->nom_equipe_a = $nom_equipe_a;
        $this->nom_equipe_b = $nom_equipe_b;
        $this->lieu = $lieu;
        $this->date_match = $date_match;
        $this->heure_match = $heure_match;
        $this->id_rencontre = $id_rencontre;
    }




    /**
     * Get the value of nom_equipe_a
     */
    public function getNomEquipeA()
    {
        return $this->nom_equipe_a;
    }

    /**
     * Set the value of nom_equipe_a
     */
    public function setNomEquipeA($nom_equipe_a): self
    {
        $this->nom_equipe_a = $nom_equipe_a;

        return $this;
    }

    /**
     * Get the value of nom_equipe_b
     */
    public function getNomEquipeB()
    {
        return $this->nom_equipe_b;
    }

    /**
     * Set the value of nom_equipe_b
     */
    public function setNomEquipeB($nom_equipe_b): self
    {
        $this->nom_equipe_b = $nom_equipe_b;

        return $this;
    }

    /**
     * Get the value of lieu_match
     */
   

    /**
     * Get the value of date_match
     */
    public function getDateMatch()
    {
        return $this->date_match;
    }

    /**
     * Set the value of date_match
     */
    public function setDateMatch($date_match): self
    {
        $this->date_match = $date_match;

        return $this;
    }

    /**
     * Get the value of heure_match
     */
    public function getHeureMatch()
    {
        return $this->heure_match;
    }

    /**
     * Set the value of heure_match
     */
    public function setHeureMatch($heure_match): self
    {
        $this->heure_match = $heure_match;

        return $this;
    }

    /**
     * Get the value of lieu
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set the value of lieu
     */
    public function setLieu($lieu): self
    {
        $this->lieu = $lieu;

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
}
