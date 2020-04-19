<?php
class Command{

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

    public function getCommands(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT c.id, c.number, u.mail, p.title, s.name, c.quantity, c.price, c.date FROM commands AS c INNER JOIN users AS u INNER JOIN products AS p INNER JOIN sizes AS s ON p.id = c.id_produit AND s.id = c.id_size AND u.id = c.id_user ORDER BY c.date");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return($result);
        $db = null;
    }

}
?>