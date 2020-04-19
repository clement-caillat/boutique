<?php
    require_once('libraries/Command.php');
    $c = new Command;
    $commands = $c->getCommands();
    $c = null;

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
                <a href=""><li class="selected">Commandes</li></a>
                <a href="stock"><li>Stock</li></a>
            </ul>
        </nav>
        <div class="content">
            <div class="items" style="width: 80%;">
                <div class="title"><h5>Commandes</h5></div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Numéro</th>
                        <th>Utilisateur</th>
                        <th>Produit</th>
                        <th>Taille</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Date</th>
                    </tr>
                    <?php 
                    if(!empty($commands)){
                        foreach($commands as $command){ ?>
                        <tr>
                            <td><?php echo $command->id; ?></td>
                            <td><?php echo $command->number; ?></td>
                            <td><?php echo $command->mail; ?></td>
                            <td><?php echo $command->title; ?></td>
                            <td><?php echo $command->name; ?></td>
                            <td><?php echo $command->quantity; ?></td>
                            <td><?php echo $command->price; ?></td>
                            <td><?php echo $command->date; ?></td>
                        </tr>

                       <?php 
                       $command = null;
                        }
                    }
                    else{  ?>
                        <p>Il n'y aucune commandes</p>
                    <?php } ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>