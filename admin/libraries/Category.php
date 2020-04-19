<?php
class Category{
    private function connectdb(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8', 'root', '');
            return($db);
        }
        catch(PDOException $e){
            print "Erreur : ".$e->getMessage();
            die();
        }
    }

    public function getCategories(){
        $db = $this->connectdb();
        $requete = $db->prepare("SELECT * FROM categories");
        $requete->execute();
        $categories = $requete->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($categories);
    }

    public function remove($category_id){
        $db = $this->connectdb();
        $requete = $db->prepare("DELETE FROM categories WHERE id = '$category_id'");
        $requete->execute();
        $query = $db->prepare("DELETE FROM products WHERE id_category = '$category_id'");
        $query->execute();
        $db = null;
    }

    public function add($title, $image){

            $imagename = $image['name'];
            $imageTmpName = $image['tmp_name'];
            $imageType = $image['type'];
            $imageError = $image['error'];
            $imageSize = $image['size'];
            $imageExt = explode(('.'), $imagename);
            $imageActualExt = strtolower(end($imageExt));
            $allowed = array('jpg', 'jpeg', 'png');
            if(in_array($imageActualExt, $allowed))
            {
                if($imageError === 0)
                {
                    if($imageSize < 2000000)
                    {
                        $imageNameNew = uniqid('', true).'.'.$imageActualExt;
                        $imageDestination = "../images/categories/$imageNameNew";
                        move_uploaded_file($imageTmpName, $imageDestination);
                        $db = $this->connectdb();
                        $title = trim(htmlspecialchars($title));
                        $query = $db->prepare("SELECT id FROM categories WHERE title = '$title'");
                        $query->execute();
                        $checkcategory = $query->rowCount();
                        if($checkcategory == 0){
                            $requete = $db->prepare("INSERT INTO categories (title, image) VALUES ('$title', '$imageDestination')");
                            $requete->execute();
                        }
                        else{
                            $msg = "La catégorie existe déjà";
                        }
                        $db = null;
                    }
                    else
                    {
                        $msg = "Le fichier est trop volumineux";
                    }
                }
                else
                {
                    $msg = "Une erreur est survenue avec votre fichier";
                }
            }
            else
            {
                $msg = "L'extension n'est pas gérée par le site";
            }
        
        return($msg);
    }
}
?>