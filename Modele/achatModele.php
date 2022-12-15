<?php

class AchatModele extends ModeleGenerique
{

    public function __construct()
    {
        parent::__construct();
    }
    public function reserver($idU, $idR, $dateA)
    {
        $achat = new Achat($idU, $idR, $dateA);
        $query = "INSERT INTO achat VALUES(?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            $achat->getIdUser(),
            $achat->getIdRencontre(),
            $achat->getDateAchat()
        ]);

        return $stmt ? true : false;
    }
}
