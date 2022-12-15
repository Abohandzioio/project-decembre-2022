<?php

class EquipeModele extends ModeleGenerique
{

    public function __construct()
    {
        parent::__construct();
    }

    public function ajouter($param)
    {
        extract($param);

        $equipe = new Equipe($nom_equipe);

        $query = "INSERT INTO equipe VALUES(?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$equipe->getNomEquipe()]);  

        return $stmt ? true : false;
    }
    public function listes(){
        $stmt = $this->pdo->query("SELECT* FROM equipe");
        $tab=[];

        while($eq=$stmt->fetch()){
            extract($eq);
            $tab[] = new equipe($nom_equipe);
            
        }
        return $tab;

    }

    public function supprimer($param){
        $stmnt = $this->pdo->prepare('DELETE FROM equipe WHERE nom_equipe="?"');
        $stmnt->execute([$param]);
        return $stmnt ? true : false;
              
        }
               

}