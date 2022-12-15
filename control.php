<?php

if($pdo = new PDO("mysql:host=localhost;dbname=foot", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC])){
    echo "connexion etablie";
}

if(isset($_GET['supprimer'])){   

    $id = $_GET['supprimer'];

    $stmnt = $pdo->prepare('DELETE FROM `personne` WHERE id_user = "$id" ');  

    if($stmnt->execute()){
       echo $id;   
       header("location: vues/bienvenue/acceuil.php");  
    }
    

    
}

    
