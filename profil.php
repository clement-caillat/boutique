<?php
	require_once('libraries/config.php');
	if(isset($_POST['remove'])){
		$p = new Product;
		$p->removeFromCart($_POST['id']);
		$p = null;
		header('Location: profil.php');
	}
	$commands = $_SESSION['user']->getCommands();
	if(isset($_POST['modify_p_quantity'])){
		$_SESSION['user']->modifyQuantity($_POST['id_product'], $_POST['new_quantity']);
		header('Location: profil.php');
	}
	$msg = '';
	if(isset($_POST['modify_informations'])){
		$msg = $_SESSION['user']->modifyInformations($_POST['mail'], $_POST['firstname'], $_POST['lastname'], $_POST['phone'], $_POST['password'], $_POST['newpassword'], $_POST['cnewpassword']);
		header('Location: profil.php');
	}

	if(isset($_POST['modify_address'])){
		$_SESSION['user']->ModifyAdress($_POST['name'], $_POST['street'], $_POST['zip'], $_POST['city']);
		header('Location: profil.php');
	}
	$response = '';
	if(isset($_POST['validate_cart'])){
		$response = $_SESSION['user']->validateCart();
	}

?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Profil | Panier - La pie Lazulie</title>
    <link rel="stylesheet" href="#">
    <link href="https://fonts.googleapis.com/css?family=Kreon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon.png" />

  </head>

	<?php
  		require_once('header.php');
	?>


<body>

	<main>
		
		<section id="hautpro">

			<article class="hautgauchepro">
				
				<h2 class="titrepro2 underlinepro">Modifier votre profil</h2>

				<div class="borderblock1">
					<form method="post">
						<div class="flexconfirmmdp">
							
							<label class="labelpro" for="confirmation">Votre adresse de messagerie :</label>
							<input id="inputpro2" type="text" name="mail" value="<?php echo $_SESSION['user']->mail; ?>" required><br>
						
						</div>
						
						<div class="flexconfirmmdp">
						<label class="labelpro" for="confirmation">Votre prénom :</label>
						<input id="inputpro2" type="text" name="firstname" value="<?php echo $_SESSION['user']->firstname; ?>" required><br>
						</div>

						<div class="flexconfirmmdp">
						<label class="labelpro" for="confirmation">Votre nom :</label>
						<input id="inputpro2" type="text" name="lastname" value="<?php echo $_SESSION['user']->lastname; ?>" required><br>
						</div>

						<div class="flexconfirmmdp">
						<label class="labelpro" for="confirmation">Votre numéro :</label>
						<input id="inputpro2" type="text" name="phone" value="<?php echo $_SESSION['user']->phone; ?>" required><br>
						</div>

						<div class="flexconfirmmdp">
						<label class="labelpro" for="confirmation">Votre mot de passe :</label>
						<input id="inputpro2" type="password" name="password" required><br>
						</div>

						<div class="flexconfirmmdp">
						<label class="labelpro" for="mdp">Votre nouveau mot de passe :</label>
						<input id="inputpro2" type="password" name="newpassword" placeholder="Laisser vide si aucune modification"><br>
						</div>

						<div class="flexconfirmmdp">

							<label class="labelpro" for="confirmation">Confirmation du mot de passe :</label>
							<input id="inputpro2" type="password" name="cnewpassword" placeholder="Laisser vide si aucune modification"><br>

						</div>
						<?php if($msg != ''){ ?>
							<p class="error"><?php echo $msg; ?></p>
						<?php } ?>
						<input type="submit" name="modify_informations" class="deco2" value="Modifier">
					</form>
				</div>
			
			</article>

			<article class="hautdroitpro">
				<h2 class="titrepro2 underlinepro">Votre panier</h2>

				<div class="borderblock3">
					
					<div class="borderblock2">
					<?php
						$total = 0;
						foreach($_SESSION['user']->cart as $cartproduct){
							$quantity = $cartproduct['quantity'];
							$p = new Product;
							$current = $p->getCartProducts($cartproduct['id_product'], $cartproduct['id_size'], $_SESSION['user']->id);
							$p = null;
							$image = str_replace('../', '', $current[0]->image);
							$total += $current[0]->price;
					?>
						<div class="ajoutpanier">
						
							<div class="imgpanier">
								<a href="produit.php?p=<?php echo $current[0]->product_id; ?>"><img class="imgajoutpanier" src="<?php echo $image; ?>"></a>
							</div>
							
							<div class="quantity">
								<p>QT: </p>
								<form method="post" class="modify_quantity">
									<input type="hidden" name="id_product" value="<?php echo $cartproduct['id_product']; ?>">
									<input type="number" name="new_quantity" min="1" max="5" onKeyDown="return false" style="width: 30px;" value="<?php echo $quantity; ?>">
									<input type="submit" name="modify_p_quantity" value="V">
								</form>
							</div>

							<div class="titrepanier">
								<h3><?php echo $current[0]->title; ?></h3>
								<p><?php echo $current[0]->size; ?></p>
								<p><?php echo $current[0]->price; ?> €</p>
							</div>

							<div id="supp">
								<form method="post">
									<input type="hidden" value="<?php echo $current[0]->id_productincart; ?>" name="id">
									<input type="submit" name="remove" value="X">
								</form>
							</div>
						
						</div>

						<hr>
						<?php } ?>
						<hr class="hrpro1">

						<div id="totalpanierpro">
							<h2 id="totalpro">Total :</h2>
							<h3 id="prixpro"> <?php echo $total; ?> €</h3>
						</div>
					</div>
					<?php if(!empty($_SESSION['user']->cart)){ ?>
						<form method="post">
							<input class="deco2" type="submit" name="validate_cart" value="Valider le panier">
						</form>
					<?php } ?>
					<?php if($response != ''){ echo $response; } ?>
				
				</div>
			
			</article>

		</section>


		<section id="backmilieupro">

			<div id="milieupro">

				<div id="displaypro">	
					<form method="post">


						<article class="milieudroitpro">

							<h3 class="titreadress">Adresse de livraison</h3>

							<div>
								<label class="labelpro" for="confirmation">A quel nom:</label>
								<input id="inputpro2" type="text" value="<?php if(!empty($_SESSION['user']->address)){ echo $_SESSION['user']->address['name']; } ?>" name="name" required><br>

								<label class="labelpro" for="confirmation">Numéro et nom de rue :</label>
								<input id="inputpro2" type="text" value="<?php if(!empty($_SESSION['user']->address)){ echo $_SESSION['user']->address['street']; } ?>" name="street" required><br>

								<label class="labelpro" for="confirmation">Code postal :</label>
								<input id="inputpro2" type="text" name="zip" value="<?php if(!empty($_SESSION['user']->address)){ echo $_SESSION['user']->address['zip']; } ?>" required><br>

								<label class="labelpro" for="confirmation">Ville :</label>
								<input id="inputpro2" type="text" name="city" value="<?php if(!empty($_SESSION['user']->address)){ echo $_SESSION['user']->address['city']; } ?>" required><br>

							</div>

							<input type="submit" class="deco2" name="modify_address" value="Modifier">
						</article>
					</form>
					</div>

			</div>

		</section>


		<section id="baspro">
				
				<h2 class="titrepro3">Commandes Passées</h2>
				
				<table>

					<thead>
						
						<tr>
			                <th>N°Commande</th>
			                <th>Date</th>
			                <th>NomPiece</th>
			                <th>Taille</th>
			                <th>Quantite</th>
			             	<th>Prix</th>
			            </tr>
					
					</thead>
		            
		            <tbody>			 
						<?php if(!empty($commands)){ 
								foreach($commands as $command){
								$date = strtotime($command->date);
							?>
							<tr>
								<td><?php echo $command->number; ?></td>
								<td><?php echo date('d-m-Y', $date); ?></td>
								<td><?php echo $command->title; ?></td>
								<td><?php echo $command->name; ?></td>
								<td><?php echo $command->quantity; ?></td>
								<td><?php echo $command->price; ?>€</td>
							</tr>
						<?php } } else{?>
						<p>Vous n'avez pas encore passé de commande</p>
						<?php } ?>
		            </tbody>

		            <tfoot>
						
						<tr>
			                <th>N°Commande</th>
			                <th>Date</th>
			                <th>NomPiece</th>
			                <th>Taille</th>
			                <th>Quantite</th>
			             	<th>Prix</th>
			            </tr>
					
					</tfoot>

				</table>
		</section>


	<a href="?d"><button class="deco1">Se déconnecter</button></a>
	
	</main>


</body>

	<?php
    	require_once('footer.php');
	?>


</html>






<style>

html, body{
	margin: 0;
}

main {
    width: 100%;
    height: auto;
}
#supp form input[type="submit"]{
	border-radius: 100%;
	border: 2px solid red;
	color: red;
	height: 25px;
	width: 25px;
	background-color: transparent;
	font-weight: bold;
	cursor: pointer;
}
.quantity{
	display: flex;
	align-items: center;
	justify-content: center;
}
#displaypro form{
	width: 100%;
	height: 100%;
	justify-content: center;
	align-items: center;
}
a{
	color: inherit;
	text-decoration: none;
}
#hautpro{
	display: flex;
    margin: 6% 1% 0% 1%;
	text-align: center;
}
.modify_quantity{
	display: flex;
}
.modify_quantity input[type="submit"]{
	width: 30px;
}
#backmilieupro{
	background-image: url(afri1.jpg);
    padding: 1% 1% 2% 0%;
    margin: 7% 8% 7% 8%;
    box-shadow: -1px 2px 5px 1px #422B0C;
}

#milieupro{
    margin: 1% 2% 0% 3%;
	text-align: center;
	border:2px solid #422B0C;
	border-radius: 8px;
	background-color: white;
}

#baspro{
	margin: 6% 20% 0% 20%;
	text-align: center;
	border:2px solid #422B0C;
	padding: 2%;
	border-radius: 8px;
    background-image: url(beige2.jpg);
}

.hautdroitpro{
    width: 40%;
    text-align: center;
    margin: 0% 7% 0% 2%;
}

.hautgauchepro{
	width: 50%;
    margin: 0% 2% 0% 7%;
    text-align: center;
}

.milieudroitpro{
	width: 100%;
	text-align: center;
}

.milieugauchepro{
	width: 50%;
	margin: auto;
	text-align: center;
}

.borderblock1{
	border: 4px solid #422B0C;
	padding: 3%;
	border-radius: 8px;
    box-shadow: 0px 1px 17px 3px #E6D5BB;
	background-color: white;
}

.borderblock2{
	border: 2px solid #422B0C;
	margin: 3% 3% 4% 3%;
	border-radius: 2px;
	background-color: white;
}

.borderblock3{
	border: 2px solid #422B0C;
	padding: 3%;
	border-radius: 8px;
	margin-top: 63px;
    box-shadow: 0px 1px 15px -2px #422B0C;
    background-image: url(marron8.jpg);
}

/*bouton déconnexion*/

.deco1{
	box-shadow: inset 0px 1px 0px 0px #a6827e;
    background: linear-gradient(to bottom, #a8835e 5%, #7a6855 100%);
    background-color: #a8835e;
    border-radius: 3px;
    border: 1px double #54381e;
    cursor: pointer;
    color: #ffffff;
    font-family: 'Sen', sans-serif;
    font-size: 22px;
    padding: 6px 24px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #4d3534;
    margin-bottom: 3%;
    display: block;
    margin: auto;
    margin-top: 6%;
    margin-bottom: 1%;
    box-shadow: 4px 5px 8px -2px #846946;
}

.deco1:hover{
	background:linear-gradient(to bottom, #7a6855 5%, #a8835e 100%);
	background-color:#7a6855;
}

.deco2{
 	box-shadow:inset 0px 1px 0px 0px #a6827e;
	background:linear-gradient(to bottom, #a8835e 5%, #7a6855 100%);
	background-color:#a8835e;
	border-radius:3px;
	border:1px double #54381e;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family: 'Sen', sans-serif;
	font-size:16px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #4d3534;
	display: block;
  	margin: auto;
  	margin-top: 4%;
  	margin-bottom: 2%;
}

.deco2:hover {
	background:linear-gradient(to bottom, #7a6855 5%, #a8835e 100%);
	background-color:#7a6855;
}



.labelpro{
	margin-left: 15%;
    margin-right: -15%;
    float: left;
    width: 31%;
    margin-top: 6px;
    text-align: initial;
}

#inputpro2{
	font-family: 'Kreon', serif;
    border: 2px solid #888581;
    border-radius: 4px;
    padding: 1%;
    width: 20%;
    margin-bottom: 2%;
    margin-top: 6px;
    height: 17px;
}

/*Ajout au panier*/

.ajoutpanier{
	display: flex;
}

.imgajoutpanier{
	width: 27%;
	margin: auto;
	margin: 0% 0% 0% -57%;
}

.imgpanier{
    margin: 3% 0px 0% 0%;
    width: 65%;
}

.titrepanier{
	width: 24%;
    margin-top: 4%;
    font-size: 17px;
    color: #422B0C;
}

#btnsupp{
	border:none;
	background: transparent;
	cursor: pointer;

}

#croix{
	width: 20px;
	margin: 26% 5% 0% -26%;
}

#totalpro{
	margin: -1% 0% 0% 7%;
}

#prixpro{
    margin: -0.5% 0% 0% 64%;
    font-size: 21px;
}

#totalpanierpro{
	display: flex;
    padding: 2%;
}


#nombreprod{
	width: 30px;
	margin-top: 195%;
}

.titreadress{
	margin: 4% 1% 10% 1%;
    font-size: 23px;
    color: #422B0C;
}

.titrepro2{
	color: #422B0C;
}

.titrepro3{
	color: #422B0C;
	padding-bottom: 2%;
	font-size: 29px;
}

.underlinepro {
	border-bottom: 2px solid #422B0C;
	border-top: 2px solid #422B0C;
    margin: 7% 35% 6% 35%;
	text-align: center;
	background-color: #faf4ec;
	padding: 12px;
	box-shadow: -1px 2px 11px -2px #E6D5BB;
}


.hrpro{
	width: 2px;
 	border: 0; 
	margin-top: 4%;
  	background-image: -webkit-linear-gradient(top, #f0f0f0, #846946, #f0f0f0);
}

.hrpro1{
    width: 100%;
    border: 0;
    height: 2px;
    margin-top: 3%;
    background-color: #846946;
}

/*commandes passées*/
table {
	border: 3px solid #422B0C;
    border-collapse: collapse;
    width: 100%;
    margin: auto;
    box-shadow: -1px 2px 11px -2px #422B0C;
}

thead, tfoot {
	background-color:#faf4ec;
	border:1px solid #846946;
}

tbody {
	background-color:#faf4ec;
	border:1px solid #846946;
}

th {
	border:1px dotted #846946;
	padding:5px;
	background-color:#faf4ec;
	width:22%;
}

td {
	font-size: 97%;
    border: 1px solid #846946;
    padding: 5px;
    text-align: left;
}

</style>