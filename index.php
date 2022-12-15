<?php
session_start();


include "inc/control.php";
include "classes/achat.php";
include "classes/personne.php";
include "classes/equipe.php";
include "classes/historique.php";
include "classes/rencontre.php";


include "controller/achatController.php";
include "controller/personneController.php";
include "controller/equipeController.php";
include "controller/rencontreController.php";

include "Modele/modeleGenerique.php";
include "Modele/achatModele.php";
include "Modele/personneModele.php";
include "Modele/equipeModele.php";
include "Modele/rencontreModele.php";





try{

    $personneController = new PersonneController();
    $equipeController = new EquipeController();
    $rencontreController= new RencontreController();
    $achatController= new AchatController();

    if (isset($_GET['actionPers'])){
        $personneController->urlPersonne();

    }elseif(isset($_GET['actionEq'])){
        $equipeController->urlEquipe();
    }elseif(isset($_GET['actionR'])){
        $rencontreController->rencontreUrl(); 
    }elseif(isset($_GET['actionA'])){
        $achatController->achatUrl();      
    }else{
        header("location: ?actionPers=acceuil");
        exit;
    } 
}catch (Exception $e){
    $content = $e->getMessage();  
    include 'vues/template.php';
}



