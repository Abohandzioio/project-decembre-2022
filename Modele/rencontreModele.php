<?php

class RencontreModele extends ModeleGenerique
{

    public function __construct()
    {
        parent::__construct();
    }

    public function listes()
    {
        $stmt = $this->pdo->query("SELECT* FROM rencontre");
        $tab = [];

        while ($rencontre = $stmt->fetch()) {
            extract($rencontre);
            $tab[] = new Rencontre($id_rencontre,$nom_equipe_a, $nom_equipe_b, $lieu, $date_match,$heure_match);
        }
        return $tab;
    }
    public function adjoindre($param) {
        extract($param);
        $pers = new Rencontre(0,$equipe_a, $equipe_b, $lieu, $date_match, $heure_match);    
        $query = "INSERT INTO rencontre VALUES(null, ?, ?, ?, ?, ?,)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            $pers->getNomEquipeA(),
            $pers->getNomEquipeB(),
            $pers->getLieu(),
            $pers->getDateMatch(),
            $pers->getHeureMatch(),
        ]);
        echo "Dans la boite";
               
        return $stmt ? true : false;
    
    }


}