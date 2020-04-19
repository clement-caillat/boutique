<?php
class Product{
    public $id = '';
    public $name = '';
    public $description = '';
    public $image = '';
    public $category = [];
    public $stock = [];
    public $tags = '';






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

    public function productInfos($pid){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT p.id, p.title, p.description, p.image, c.id AS cid, c.title AS cname FROM products AS p INNER JOIN categories AS c ON c.id = p.id_category WHERE p.id = '$pid'");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        $this->id = $results[0]->id;
        $this->name = $results[0]->title;
        $this->description = $results[0]->description;
        $this->image = $results[0]->image;
        array_push($this->category, $results[0]->cid, $results[0]->cname);

        $query = $db->prepare("SELECT t.tag_name FROM tag AS t INNER JOIN product_tag AS pt ON t.id = pt.tag_id WHERE pt.product_id = '$this->id'");
        $query->execute();
        $tagsclass = $query->fetchAll(PDO::FETCH_OBJ);
        $tags = [];
        foreach($tagsclass as $tagclass){
            array_push($tags, $tagclass->tag_name);
        }

        $tags = implode(',', $tags);
        $this->tags = $tags;

        $query = $db->prepare("SELECT s.id, s.name, st.quantity, st.price FROM stock AS st INNER JOIN sizes AS s ON s.id = st.id_size WHERE st.id_product = '$pid'");
        $query->execute();
        $stock = $query->fetchAll(PDO::FETCH_OBJ);
        $this->stock = $stock;


        $db = null;
    }




    public function getProducts(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT p.id, p.title, p.description, p.image, c.title AS name, t.tag_name FROM products AS p INNER JOIN categories AS c INNER JOIN tag AS t INNER JOIN product_tag AS pt ON pt.product_id = p.id AND pt.tag_id = t.id AND p.id_category = c.id GROUP BY p.id");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($products);
    }

    public function add($title, $description, $tags, $category_id, $image){
        $msg = '';
        $title = trim(htmlspecialchars($title));
        $description = trim(htmlspecialchars($description));
        $tags = trim(htmlspecialchars($tags));

        $tags = str_replace(' ', '', $tags);
        $TAGS = explode(',', $tags);
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id FROM products WHERE title = '$title'");
        $query->execute();
        $checkproduct = $query->rowCount();
        if($checkproduct == 0){
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
                    if($imageSize < 5000000)
                    {
                        $imageNameNew = uniqid('', true).'.'.$imageActualExt;
                        $imageDestination = "../images/products/$imageNameNew";
                        move_uploaded_file($imageTmpName, $imageDestination);
                        $db = $this->connectdb();
                        $query = $db->prepare("INSERT INTO products (title, description, id_category, image) VALUES ('$title', '$description', '$category_id', '$imageDestination')");
                        $query->execute();
                        $query = $db->prepare("SELECT id FROM products WHERE title = '$title'");
                        $query->execute();
                        $result = $query->fetchAll(PDO::FETCH_OBJ);
                        $idproduct = $result[0]->id;
                        foreach($TAGS as $tag){
                            $db = $this->connectdb();

                            $query = $db->prepare("SELECT id FROM tag WHERE tag_name = '$tag'");
                            $query->execute();
                            $checktag = $query->rowCount();
                            if($checktag == 0){
                                $query = $db->prepare("INSERT INTO tag (tag_name) VALUES ('$tag')");
                                $query->execute();
                            }
                            $query = $db->prepare("SELECT id FROM tag WHERE tag_name = '$tag'");
                            $query->execute();
                            $result = $query->fetchAll(PDO::FETCH_OBJ);
                            $idtag = $result[0]->id;
                            $query = $db->prepare("INSERT INTO product_tag (product_id, tag_id) VALUES ('$idproduct', '$idtag')");
                            $query->execute();
                            $db = null;
                        }
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
        }
        else{
            $msg = "Le produit existe déjà";
        }
        return($msg);
    }

    public function remove($product_id){
        $db = $this->connectdb();
        $query = $db->prepare("DELETE FROM product_tag WHERE product_id = '$product_id'");
        $query->execute();
        $query = $db->prepare("DELETE FROM products WHERE id = '$product_id'");
        $query->execute();
        $db = null;
    }

    public function getStock(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT st.id, p.image, p.title AS name, st.quantity, s.name AS size, st.price FROM stock AS st INNER JOIN products AS p INNER JOIN sizes AS s ON st.id_product = p.id AND s.id = st.id_size"); 
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($products);
    }

    public function getStockProducts(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id, title AS name FROM products");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($products);
    }

    public function getSizes(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT * FROM sizes");
        $query->execute();
        $sizes = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($sizes);
    }


    public function addStock($idproduct, $quantity, $size, $price){
        $db = $this->connectdb();

        $query = $db->prepare("SELECT id FROM stock WHERE id_product = '$idproduct' AND id_size = '$size'");
        $query->execute();
        $checkstock = $query->rowCount();
        if($checkstock == 0){
            $query = $db->prepare("INSERT INTO stock (id_product, id_size, quantity, price) VALUES ('$idproduct', '$size', '$quantity', '$price')");
            $query->execute();
        }
        else{
            $query = $db->prepare("UPDATE stock SET quantity = quantity + '$quantity', price = '$price' WHERE id_product = '$idproduct' AND id_size = '$size'");
            $query->execute();
        }
        $db = null;
    }

    public function getProductInfos($category){
        if($category != null){
            $db = $this->connectdb();
            $query = $db->prepare("SELECT products.id, products.title, products.image FROM products WHERE products.id_category = '$category'");
            $query->execute();
            $products = $query->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            return($products);
        }
        else{
            $db = $this->connectdb();
            $query = $db->prepare("SELECT id, title, image FROM products");
            $query->execute();
            $products = $query->fetchAll(PDO::FETCH_OBJ);
            $db = null;
            return($products);
        }
    }


    public function getCategories(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id, title FROM categories");
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($categories);
    }

    public function getCategoryName($id){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT title FROM categories WHERE id = '$id'");
        $query->execute();
        $categoryname = $query->fetchAll(PDO::FETCH_OBJ);
        $categoryname = $categoryname[0]->title;
        $db = null;
        return($categoryname);
    }


    public function search($q){
        $q = trim(htmlspecialchars($q));
        $db = $this->connectdb();
        $query = $db->prepare("SELECT DISTINCT p.id, c.id AS cid, c.title AS cname , p.title, p.description, p.image FROM products AS p INNER JOIN categories AS c INNER JOIN product_tag AS pt INNER JOIN tag AS t ON c.id = p.id_category AND pt.product_id = p.id AND pt.tag_id = t.id WHERE p.title LIKE '$q%' OR t.tag_name LIKE '$q%' OR c.title LIKE '$q%'");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($results);
    }

    public function getCartProducts($id_product, $id_size, $iduser){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT p.id AS product_id, p.title, p.image, cart.id AS id_productincart, s.name AS size, cart.quantity, st.price * cart.quantity AS price FROM products AS p INNER JOIN cart INNER JOIN sizes AS s INNER JOIN stock AS st ON p.id = cart.id_product AND s.id = cart.id_size AND st.id_size = s.id AND st.id_product = cart.id_product WHERE cart.id_user = '$iduser' AND cart.id_product = '$id_product' AND cart.id_size = '$id_size'");
        $query->execute();
        $infos = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($infos);

    }

    public function removeFromCart($id){
        $db = $this->connectdb();
        $query = $db->prepare("DELETE FROM cart WHERE id = '$id'");
        $query->execute();
        $db = null;
    }

    public function newVisit($idproduct, $iporid){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id FROM visits WHERE id_user = '$iporid' AND id_product = '$idproduct' ");
        $query->execute();
        $result = $query->rowCount();
        if($result == 0){
            $query = $db->prepare("INSERT INTO visits (id_user, id_product) VALUES ('$iporid', '$idproduct')");
            $query->execute();
        }
        $query = $db->prepare("SELECT id FROM visits WHERE id_product = '$idproduct'");
        $query->execute();
        $result = $query->rowCount();
        $query = $db->prepare("UPDATE products SET visits = '$result' WHERE id = '$idproduct'");
        $query->execute();
        $db = null;
    }


    public function getBestSeller(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id, title, image FROM products WHERE bought=(SELECT max(bought) FROM products)");
        $query->execute();
        $results = $query->fetch(PDO::FETCH_OBJ);
        if(!empty($results)){
            $results->image = str_replace('../', '', $results->image);
        }
        $db = null;
        return($results);
    }

    public function getMostVisited(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id, title, image FROM products ORDER BY visits DESC LIMIT 2");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if(!empty($results)){
            $results[0]->image = str_replace('../', '', $results[0]->image);
            $results[1]->image = str_replace('../', '', $results[1]->image);
            return($results);
        }
        $db = null;
    }

    public function getLastsArticles(){
        $db = $this->connectdb();
        $query = $db->prepare("SELECT id, title, image FROM products ORDER BY id DESC LIMIT 3");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        return($results);
    }
}
?>