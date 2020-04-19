<?php
    require('libraries/Product.php');
    $msg = '';
    $p = new Product;
    $products = $p->getStockProducts();
    $p = null;
    $s = new Product;
    $stocks = $s->getStock();
    $s = null;
    $si = new Product;
    $sizes = $si->getSizes();
    $si = null;
    
    if(isset($_POST['add_stock'])){
        $producttostock = new Product;
        $producttostock->addStock($_POST['product_select'], $_POST['product_quantity'], $_POST['product_size'], $_POST['product_price']);
        $producttostock = null;
        header('Location: stock');
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
                <a href="products"><li>Produits</li></a>
                <a href="commands"><li>Commandes</li></a>
                <a href=""><li class="selected">Stock</li></a>
            </ul>
        </nav>
        <div class="content">
            <div class="items" style="width: 70%;">
                <div class="title"><h5>Stock</h5></div>
                <?php if(!empty($stocks)){ ?>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Taille</th>
                        <th>Prix/u</th>
                    </tr>
                    <?php 
                        foreach($stocks as $stock){ ?>
                    <tr>
                        <td><?php echo $stock->id; ?></td>
                        <td style="width: 30%;"><img src="<?php echo $stock->image; ?>"></td>
                        <td><?php echo $stock->name; ?></td>
                        <td><?php echo $stock->quantity; ?></td>
                        <td><?php echo $stock->size ?></td>
                        <td><?php echo $stock->price; ?> €</td>
                    </tr>
                    <?php } ?>
                </table>
                <?php } else{ echo "<p class='message'>Vous n'avez pas encore rentré de stock</p>"; } ?>
            </div>
            <div class="add" id="product">
                <div class="title"><h5>Ajouter du stock</h5></div>
                <form method="post">
                    <label for="product_select">Produit :</label>
                    <select name="product_select">
                        <?php
                            foreach($products as $product){ ?>
                            <option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
                          <?php  }
                        ?>
                    </select>
                    <label for="product_quantity">Quantité :</label>
                    <input type="number" name="product_quantity">
                    <label for="">Taille</label>
                    <select name="product_size">
                        <?php foreach($sizes as $size){ ?>
                            <option value="<?php echo $size->id; ?>"><?php echo $size->name; ?></option>
                       <?php } ?>
                    </select>
                    <input type="text" name="product_price" placeholder="Prix en €" required>
                    <input type="submit" name="add_stock" value="ADD">
                </form>
                    <?php if($msg != ''){ ?> <p class="error"><?php echo $msg; ?></p><?php } ?>
            </div>
        </div>
    </main>
</body>
</html>