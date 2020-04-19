<?php
class User{

    public $id = '';
    public $firstname = '';
    public $lastname = '';
    public $mail = '';
    public $phone = '';
    public $date = '';
    public $droits = '';
    public $cart = array();
    public $address = array();

    private function connectdb(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', 'root', '');
            return($db);
        }
        catch(PDOException $e){
            print "Erreur ! : " .$e->getMessage();
            die();
        }
    }

    public function register($firstname, $lastname, $mail, $password, $cpassword){
        $msg = '';
        if($password == $cpassword){
            $db = $this->connectdb();
            $requete = $db->prepare("SELECT id FROM users WHERE mail = '$mail'");
            $requete->execute();
            $checkmail = $requete->rowCount();
            if($checkmail == 0){
                $password = password_hash($password, PASSWORD_BCRYPT);
                $date = date("Y-m-d H:i:s");
                $requete = $db->prepare("INSERT INTO users (firstname, lastname, mail, password, date) VALUES ('$firstname', '$lastname', '$mail', '$password', '$date')");
                $requete->execute();
            }
            else{
                $msg = "Adresse mail déjà utilisée";
            }
        }
        else{
            $msg = "Les mots de passe ne sont pas identiques";
        }
        $db = null;
        return($msg);
    }

    public function login($mail, $password){
        $error = false;
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id FROM users WHERE mail = '$mail'");
        $query->execute();
        $checkuser = $query->rowCount();
        if($checkuser == 1){
            $query = $db->prepare("SELECT password FROM users WHERE mail = '$mail'");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            $cryptedpass = $result[0]->password;

            $checkpass = password_verify($password, $cryptedpass);

            if($checkpass == 1){
                $query = $db->prepare("SELECT id, firstname, lastname, mail, phone, date, droits FROM users WHERE mail = '$mail'");
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $this->id = $results[0]->id;
                $this->firstname = $results[0]->firstname;
                $this->lastname = $results[0]->lastname;
                $this->mail = $results[0]->mail;
                $this->phone = $results[0]->phone;
                $this->date = strtotime(date('d-m-Y', $results[0]->date));
                $this->droits = $results[0]->droits;
            }
            else{
                $error = true;
            }

        }else{
            $error = true;
        }
        $db = null;
        return($error);
    }

    public function disconnect(){
        session_destroy();
    }

    public function addToCart($idproduit, $quantity, $size){
        $db = $this->connectdb();
        $iduser = $this->id;
        $countchecker = 0;
        foreach($this->cart as $product){
            if($product['id_product'] == $idproduit && $size == $product['id_size']){
                $countchecker++;
            }
        }
        if($countchecker == 0){
            $query = $db->prepare("INSERT INTO cart (id_user, id_product, id_size, quantity) VALUES ('$iduser', '$idproduit', '$size', '$quantity')");
            $query->execute();
        }
        else{
            $query = $db->prepare("UPDATE cart SET quantity = quantity + '$quantity' WHERE id_user = '$iduser' AND id_product = '$idproduit' AND id_size = '$size' ");
            $query->execute(); 
        }
        $db = null;
    }

    public function getCart(){
        $this->cart = [];
        $db = $this->connectdb();
        $iduser = $this->id;
        $query = $db->prepare("SELECT id_product, id_size, quantity FROM cart WHERE id_user = '$iduser'");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        foreach($products as $product){
            if(!empty($this->cart)){
                foreach($this->cart as $unit){
                    if($product->id_product == $unit['id_product'] && $product->id_size == $unit['id_size']){
                        $unit['quantity'] = $product->quantity;
                    }
                    else{
                        $addtocart = array('id_product' => $product->id_product, 'id_size' => $product->id_size, 'quantity' => $product->quantity);
                        array_push($this->cart, $addtocart);
                        break;
                    }
                }
            }
            else{
                $addtocart = array('id_product' => $product->id_product, 'id_size' => $product->id_size, 'quantity' => $product->quantity);
                array_push($this->cart, $addtocart);
            }
        }
        $db = null;
    }

    public function modifyQuantity($idproduct, $quantity){
        $db = $this->connectdb();
        $iduser = $this->id;
        $query = $db->prepare("UPDATE cart SET quantity = '$quantity' WHERE id_user = '$iduser' AND id_product = '$idproduct'");
        $query->execute();
        $db = null;
    }


    public function modifyInformations($mail, $firstname, $lastname, $phone, $password, $newpassword, $cnewpassword){
        $msg = '';

        if($newpassword != '' && $cnewpassword != ''){
            if($newpassword == $cnewpassword){
                $db = $this->connectdb();
                $id = $this->id;
                $query = $db->prepare("SELECT password FROM users WHERE id = '$id'");
                $query->execute();
                $result = $query->fetch(PDO::FETCH_OBJ);
                $pass = $result->password;
                $checkpass = password_verify($password, $pass);
                if($checkpass == 1){
                    $newpass = password_hash($newpassword, PASSWORD_BCRYPT);
                    $query = $db->prepare("UPDATE users SET firstname = '$firstname', lastname = '$lastname', mail = '$mail', password = '$newpass', phone = '$phone' WHERE id = '$id'");
                    $query->execute();
                }
                else{
                    $msg = 'Mot de passe incorrect';
                }
            }
            else{
                $msg = 'Les nouveaux mots de passe ne se correspondent pas';
            }
        }
        else{
            $db = $this->connectdb();
            $id = $this->id;
            $query = $db->prepare("SELECT password FROM users WHERE id = '$id'");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            $pass = $result->password;
            $checkpass = password_verify($password, $pass);
            if($checkpass == 1){
                if($phone != ''){
                    $query = $db->prepare("UPDATE users SET firstname = '$firstname', lastname = '$lastname', mail = '$mail', phone = '$phone' WHERE id = '$id'");
                }
                else{
                    $query = $db->prepare("UPDATE users SET firstname = '$firstname', lastname = '$lastname', mail = '$mail' WHERE id = '$id'");
                }
                $query->execute();
            }
            else{
                $msg = 'Mot de passe incorrect';
            }
        }
        $db = null;
        return($msg);
    }

    public function getInfosofUser(){
        $id = $this->id;
        $db = $this->connectdb();
        $query = $db->prepare("SELECT firstname, lastname, mail, phone, date, droits FROM users WHERE id = '$id'");
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
        $this->firstname = $result->firstname;
        $this->lastname = $result->lastname;
        $this->mail = $result->mail;
        $this->phone = $result->phone;
        $this->date = $result->date;
        $this->droits = $result->droits;
        $query = $db->prepare("SELECT name, street, zip, city FROM address WHERE id_user = '$id'");
        $query->execute();
        $results = $query->fetch(PDO::FETCH_OBJ);
        if(!empty($results)){
            $address = array('name' => $results->name, 'street' => $results->street, 'zip' => $results->zip, 'city' => $results->city);
            $this->address = $address;
        }
        $db = null;
    }

    public function modifyAdress($name, $street, $zip, $city){
        $id = $this->id;
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id FROM address WHERE id_user = '$id'");
        $query->execute();
        $checkaddress = $query->rowCount();
        if($checkaddress == 1){
            $query = $db->prepare("UPDATE address SET name = '$name', street = '$street', zip = '$zip', city = '$city' WHERE id_user = '$id'");
            $query->execute();
        }
        else{
            $query = $db->prepare("INSERT INTO address (name, street, zip, city, id_user) VALUES ('$name', '$street', '$zip', '$city', '$id')");
            $query->execute();
        }
        $db = null;
    }

    public function getCommands(){
        $db = $this->connectdb();
        $id = $this->id;
        $query = $db->prepare("SELECT c.number, p.title, c.quantity, c.price, s.name, c.date FROM commands AS c INNER JOIN products AS p INNER JOIN sizes AS s ON p.id = c.id_produit AND s.id = c.id_size WHERE c.id_user = '$id'");
        $query->execute();
        $commands = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($commands);
    }

    public function validateCart(){
        $db = $this->connectdb();
        $id = $this->id;
        $query = $db->prepare("SELECT id FROM address WHERE id_user = '$id'");
        $query->execute();
        $check = $query->rowCount();
        if($check == 1){
            header('Location: paiement.php');
        }
        else{
            $response = 'Veuillez indiquez vos informations de livraison';
        }
        return($response);

    }


    public function checkout(){
        $commandnumber = hexdec(uniqid());
        $db = $this->connectdb();
        foreach($this->cart as $product){
            var_dump($product);
            $idproduct = $product['id_product'];
            $idsize = $product['id_size'];
            $quantity = $product['quantity'];
            $query = $db->prepare("SELECT price FROM stock WHERE id_product = '$idproduct' AND id_size = '$idsize'");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_OBJ);
            $price = $result->price;
            $userid = $this->id;
            $date = date("Y-m-d H:i:s");
            $query = $db->prepare("INSERT INTO commands (number, id_user, id_produit, id_size, quantity, price, date) VALUES ('$commandnumber', '$userid', '$idproduct', '$idsize', '$quantity', '$price', '$date')");
            $query->execute();
            $query = $db->prepare("UPDATE stock SET quantity = quantity - $quantity WHERE id_product = '$idproduct' AND id_size = '$idsize'");
            $query->execute();
            $query = $db->prepare("UPDATE products SET bought = bought + $quantity WHERE id = '$idproduct'");
            $query->execute();
        }
        $query = $db->prepare("DELETE FROM cart WHERE id_user = '$userid'");
        $query->execute();
        $db = null;
    }
}
?>