<?php

class PersonneController
{
    public function __construct()
    {
    }
    public function urlPersonne()
    {
        $personneModele = new PersonneModele();



        if (isset($_GET['actionPers'])) {
            $action = $_GET['actionPers'];

            switch ($action) {
                case 'inscription':
                    include 'vues/personne/inscription.php';
                    if (isset($_POST['prenom'])) {
                        if ($personneModele->inscription($_POST)) {
                            header("location:?actionPers=connexion");
                            exit;
                        }
                    }
                    break;

                case "connexion":
                    include "vues/personne/connexion.php";
                    if (isset($_POST['login'])) {

                        if ($personneModele->connecting($_POST)) {

                            header("location: ?actionPers=acceuil");
                            exit;
                        }
                    }
                    break;

                case "deconnexion":
                    session_destroy();
                    header("location: ?actionPers=connexion");
                    break;

                case "listes":
                    $pers = $personneModele->listes();
                    include "vues/personne/listes.php";
                    break;

                case "acceuil";
                    include "vues/Bienvenue/acceuil.php";
                    break;
                case "historique":
                    if ($historiques = $personneModele->historique($_SESSION['id'])) {
                        include "vues/rencontre/historique.php";
                        break;
                    }

                case "assiste":
                    $historiques = $personneModele->historique($_SESSION['id']);
                    include "vues/personne/assiste.php";
                    break;

                case "supprimer":

                    if (isset($_GET['ids'])) {
                        include "inc/control.php";
                        $id = intval($_GET['ids']);
                        if($personneModele->supprimer($id)){
                            header("location:?actionPers=listes");
                            exit;
                        }                    
                        break;
                    }

                case "modifier":
                    include "inc/control.php";
                    if (isset($_GET['is'])) {

                        $id = $_GET['is'];
                        $stmnt = $pdo->query("SELECT* FROM personne WHERE id_user=$id");
                        $stmnt->execute();
                        $res = $stmnt->fetch();
                        extract($res);

                        $personne = new Personne(intval($id_user), $prenom, $nom, $sexe, $login, $mdp, $ville, $role);
                        include "vues/personne/inscrit.php";

                        if (isset($_POST['prenom'])) {
                            include "inc/control.php";
                            extract($_POST);
                            var_dump($_POST);

                            $idP = $personne->getIdUser();
                            var_dump($idP);

                            $query = 'UPDATE `personne` SET id_user=$idP, prenom= "$prenom", nom="$nom",sexe="$sexe", login = "$login", mdp= "$mdp", ville="$ville",role="$role" ';
                            $str = $pdo->query($query);
                            header("location:?actionPers=listes");
                            exit;
                        }
                        break;
                    }
            }
        } else {
            include "vues/Bienvenue/acceuil.php";
        }
    }
}
