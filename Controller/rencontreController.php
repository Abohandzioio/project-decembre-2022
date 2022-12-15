<?php

class RencontreController
{
    public function __construct()
    {
    }
    public function rencontreUrl()
    {
        $rencontreModele = new RencontreModele();
        $achatModele = new AchatModele();
        if (isset($_GET['actionR'])) {
            $action = $_GET['actionR'];
            switch ($action) {

                // Ajouter une rencontre

                case "rencontre":
                    include "vues/rencontre/rencontre.php";
                    if (isset($_POST['equipe_a'])) {
                        $rencontreModele->adjoindre($_POST);
                        var_dump($rencontreModele);
                    }
                    break;

                // Afficher listes des rencontres
                
                case "listes":
                    $rencontres = $rencontreModele->listes();
                    include "vues/rencontre/listes.php";
                    break;

                // Effectuer des reservations

                case "reserver":
                    if (isset($_GET['idRe'])) {
                        $achatModele->reserver($_SESSION['id'], $_GET['idRe'], date('d-m-y h:i:s'));
                        include "vues/rencontre/confirmation.php";
                        exit;
                    }

                // Supprimer les reservations


                case "delete";
                if (isset($_GET['idD'])) {
                    include "inc/control.php";
                    $id = intval($_GET['idD']);                    
                    $stmnt = $pdo->prepare("DELETE FROM achat WHERE date_achat=?");
                    $stmnt->execute([$id]);
                    var_dump($id);
                    if ($stmnt) {
                            echo "c'est fait";
                        exit;
                    }
                    break;
            }
        }
    }

}
}
