<?php
    require('libraries/Product.php');
    require_once('libraries/Category.php');
    $msg = '';
    $p = new Product;
    $products = $p->getProducts();
    $p = null;
    $c = new Category;
    $categories = $c->getCategories();
    $c = null;

    if(isset($_POST['add_product'])){
        $product = new Product;
        $msg = $product->add($_POST['product_title'], $_POST['product_description'], $_POST['product_tags'], $_POST['product_category'], $_FILES['product_image']);
        $product = null;
        // header('Location: products');
    }

    if(isset($_POST['del_product'])){
        $producttodelete = new Product;
        $producttodelete->remove($_POST['product_id']);
        header('Location: products');
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Back office | La Pie Lazulie</title>
</head>
<body>
    <?php require_once('header.html'); ?>
    <main>
        <nav>
            <a href="/boutique/" id="back">Retour au site</a>
            <ul>
                <a href="/boutique/admin"><li>Utilisateurs</li></a>
                <a href="categories"><li>Catégories</li></a>
                <a href=""><li class="selected">Produits</li></a>
                <a href="commands"><li>Commandes</li></a>
                <a href="stock"><li>Stock</li></a>
            </ul>
        </nav>
        <div class="content">
            <div class="items">
                <div class="title"><h5>Produits</h5></div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Categorie</th>
                        <th>Premier tag</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    foreach($products as $product){
                        ?>

                    <tr>
                        <td><?php echo $product->id; ?></td>
                        <td><?php echo $product->title; ?></td>
                        <td><?php echo $product->description; ?></td>
                        <td><img src="<?php echo $product->image; ?>"></td>
                        <td><?php echo $product->name; ?></td>
                        <td><?php echo $product->tag_name; ?></td>
                        <td><form method="post"><input type="hidden" value="<?php echo $product->id; ?>" name="product_id"><input type="submit" name="del_product" value="DELETE"></form></td>
                    </tr>

                    <?php } ?>
                </table>
            </div>              
            <div class="add" id="product">
                <div class="title"><h5>Ajouter un produit</h5></div>
                <form method="post" enctype="multipart/form-data">
                    <input type="text" name="product_title" placeholder="Titre">
                    <input type="text" name="product_description" placeholder="Courte descritpion">
                    <input type="text" name="product_tags" placeholder="Tags (tag1,tag2,tag3,...)">
                    <select name="product_category">
                        <?php
                            foreach($categories as $categorie){ ?>
                        <option value="<?php echo $categorie->id; ?>"><?php echo $categorie->title; ?></option>
                          <?php  }
                        ?>
                    </select>
                    <input type="file" name="product_image">
                    <input type="submit" name="add_product" value="ADD">
                </form>
                    <?php if($msg != ''){ ?> <p class="error"><?php echo $msg; ?></p><?php } ?>
            </div>
        </div>
    </main>
</body>
</html>