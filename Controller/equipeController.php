<?php

class EquipeController
{
    public function __construct()
    {}
    public function urlEquipe()
    {
        $equipeModele = new EquipeModele();
        if (isset($_GET['actionEq'])) {
            $action = $_GET['actionEq'];
            switch ($action) {
                case "ajouter":
                    include "vues/equipe/ajouter.php";
                    if (isset($_POST['nom_equipe'])) {
                        if ($verifie=$equipeModele->ajouter($_POST)) {
                            // header("location: ?actionEq=listes");
                            echo "<h5> Equipe ajouter   </h5>";                         
                            return $verifie ? true : false;
                        }
                    }
                    break;
                case "listes":
                    $equipes = $equipeModele->listes();
                    include "vues/equipe/listes.php";
                    break;

                // case "sup":
                //     include "inc/control.php";
                //     if (isset($_GET['nomEq'])) {
                //         $nom = $_GET['nomEq'];

                //         $stmnt = $pdo->prepare('DELETE FROM equipe WHERE nom_equipe=" $nom " ');
                //         $stmnt->execute();
                //         // if($equipeModele->supprimer($nom)){
                //         header("location:?actionEq=listes");
                //         //     exit;
                //         // }
                //         break;
                //     }
            }
        }
    }
}
