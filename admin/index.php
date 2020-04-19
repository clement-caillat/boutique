<?php
    require_once('libraries/Client.php');
    $c = new Client;
    $clients = $c->getClients();
    $c = null;
    if(isset($_POST['del_user'])){
        $idclient = $_POST['client_id'];
        $clienttodelete = new Client;
        $clienttodelete->remove($idclient);
        $clienttodelete = null;
        header('Location: /boutique/admin');
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
                <a href=""><li class="selected">Utilisateurs</li></a>
                <a href="categories"><li>Catégories</li></a>
                <a href="products"><li>Produits</li></a>
                <a href="commands"><li>Commandes</li></a>
                <a href="stock"><li>Stock</li></a>
            </ul>
        </nav>
        <div class="content">
            <div class="items">
                <div class="title"><h5>Clients</h5></div>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Numéro</th>
                        <th>Inscription</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                    foreach($clients as $client){ 
                        $date = strtotime($client->date);
                        $date = date('d-m-Y', $date);
                        $phone = $client->phone;
                        if($phone != NULL){
                            $arr = str_split($phone, 2);
                            $phone = implode(' ', $arr);
                        }
                        ?>

                    <tr>
                        <td><?php echo $client->id; ?></td>
                        <td><?php echo $client->firstname; ?></td>
                        <td><?php echo $client->lastname; ?></td>
                        <td><?php echo $client->mail; ?></td>
                        <td><?php if($client->phone == NULL){ echo "<span>Non renseigné</span>"; }else{ echo $phone; } ?></td>
                        <td><?php echo $date; ?></td>
                        <td><form method="post"><input type="hidden" value="<?php echo $client->id; ?>" name="client_id"><input type="submit" name="del_user" value="DELETE"></form></td>
                    </tr>

                    <?php } ?>
                </table>
            </div>
        </div>
    </main>
</body>
</html>