<?php

class PersonneModele extends ModeleGenerique{

    public function __construct(){
        parent::__construct();
    }

    // Fonction pour afficher la liste des clients


    public function listes(){
        $stmt = $this->pdo->query("SELECT* FROM personne");
        $tab=[];
        while($pers=$stmt->fetch()){
            extract($pers);
            $tab[] = new personne($id_user, $prenom, $nom, $sexe, $login, $mdp, $ville, $role);          
        }
        return $tab;
    }


    // Fonction Pour Afficher historique des reservation

    public function historique($param){   
        $query = "SELECT date_achat,nom_equipe_a, nom_equipe_b, lieu, date_match,heure_match FROM achat 
                INNER JOIN rencontre ON rencontre.id_rencontre=achat.id_rencontre WHERE id_user= ?";
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([$param]);
        $tab=[];

        try {
            if ($stmnt->rowCount() != 0) {
                while ($hist = $stmnt->fetch()) {
                    extract($hist);
                    $tab[] = new Historique($date_achat, $nom_equipe_a, $nom_equipe_b, $lieu, $date_match, $heure_match);
                }
                return $tab;

            }else{
                echo "Aucune historique";
            }
        }catch(Exception $e){
            echo 'Aucune historique'.$e->getMessage();         
        } 
    }
   
    // FOnction Pour s'inscrire

    public function inscription($param) {
        extract($param);
        $pers = new Personne(0, $prenom, $nom, $sexe, $login, $mdp, $ville, $role);
        
        $query = "INSERT INTO personne VALUES(NULL, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            $pers->getPrenom(),
            $pers->getNom(),
            $pers->getSexe(),
            $pers->getLogin(),
            $pers->getMdp(),
            $pers->getVille(),
            $pers->getRole(),
        ]);               
        return $stmt ? true : false;
    }

// Fonction Pour se Connecter

    public function connecting($param) {
        extract($param);
        $query = "SELECT * FROM personne WHERE login = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array($param['login']));

        if( $stmt->rowCount() != 0 ){
            $res = $stmt->fetch();
            extract($res); 

            if( $param['mdp']=== $mdp){              
                $personne = new Personne($id_user, $prenom, $nom, $sexe, $login, $mdp, $ville, $role);
                $role = $personne->getRole();

                $_SESSION['role'] = $role;
                $_SESSION['prenom'] = $personne->getPrenom();
                $_SESSION['id'] = $personne->getIdUser();
                $_SESSION['pers'] =serialize($personne);

                return true;
            }
            else 
                return false;
        }       
    }

    public function supprimer($param){

        $stmnt = $this->pdo->prepare("DELETE FROM personne WHERE id_user=?");
        $stmnt->execute([$param]);
      
        return $stmnt ? true : false;

    }
}