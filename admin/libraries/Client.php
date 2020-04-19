<?php
class Client{
    private function connectdb(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', 'root', '');
            return($db);
        }
        catch(PDOException $e){
            print "Erreur ! : ".$e->getMessage();
            die();
        }
    }

    public function remove($idclient){
        $db = $this->connectdb();
        $requete = $db->prepare("DELETE FROM users WHERE id = '$idclient'");
        $requete->execute();
        $db = null;
    }

    public function getClients(){
        $db = $this->connectdb();
        $requete = $db->prepare("SELECT id, firstname, lastname, mail, phone, date FROM users WHERE droits = '1'");
        $requete->execute();
        $clients = $requete->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($clients);
    }
}
?>