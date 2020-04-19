<?php
    require_once('libraries/Category.php');
    $c = new Category;
    $categories = $c->getCategories();
    $c = null;
    if(isset($_POST['del_category'])){
        $categorytodelete = new Category;
        $category_id = $_POST['category_id'];
        $categorytodelete->remove($category_id);
        header('Location: categories');
    }
    $msg = '';
    if(isset($_POST['add_category'])){
        $category = new Category;
        $msg = $category->add($_POST['category_title'], $_FILES['category_image']);
        header('Location: categories');
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
                <a href=""><li class="selected">Catégories</li></a>
                <a href="products"><li>Produits</li></a>
                <a href="commands"><li>Commandes</li></a>
                <a href="stock"><li>Stock</li></a>
            </ul>
        </nav>
        <div class="content">
            <div class="items">
                <div class="title"><h5>Categories</h5></div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Titre</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    foreach($categories as $category){
                        ?>

                    <tr>
                        <td><?php echo $category->id; ?></td>
                        <td><?php echo $category->title; ?></td>
                        <td><img src="<?php echo $category->image; ?>"></td>
                        <td><form method="post"><input type="hidden" value="<?php echo $category->id; ?>" name="category_id"><input type="submit" name="del_category" value="DELETE"></form></td>
                    </tr>

                    <?php } ?>
                </table>
            </div>              
            <div class="add">
                <div class="title"><h5>Ajouter une categorie</h5></div>
                <form method="post" enctype="multipart/form-data">
                    <input type="text" name="category_title" placeholder="Titre">
                    <input type="file" name="category_image">
                    <input type="submit" name="add_category" value="ADD">
                    <?php if($msg != ''){ ?> <p class="error"><?php echo $msg; ?></p><?php } ?>
                </form>
            </div>
        </div>
    </main>
</body>
</html>