<?php

class Equipe{
    private $nom_equipe;

    public function __construct($nom_equipe)
    {
        $this->nom_equipe = $nom_equipe;
    }



    /**
     * Get the value of nom_equipe
     */
    public function getNomEquipe()
    {
        return $this->nom_equipe;
    }

    /**
     * Set the value of nom_equipe
     */
    public function setNomEquipe($nom_equipe): self
    {
        $this->nom_equipe = $nom_equipe;

        return $this;
    }
}