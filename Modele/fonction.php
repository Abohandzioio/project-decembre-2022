<?php

class Fonction extends ModeleGenerique
{
    public function __construct()
    {
        parent::__construct();
    }
    public function delete($param)
    {
        $query = "DELETE FROM personne WHERE id_user=?";
        $stmnt = $this->pdo->prepare($query);
        $stmnt->execute([$param]);
        return true;
    }
}
