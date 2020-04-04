<?php session_start() ;


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
    <link rel="icon" type="image/png" href="favicon.png" />

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
					
					<div class="flexconfirmmdp">
						
						<label class="labelpro" for="confirmation">Votre adresse de messagerie :</label>
						<input id="inputpro2" type="text" name="#" required><br>
					
					</div>
					
					<div class="flexconfirmmdp">
					<label class="labelpro" for="confirmation">Votre prénom :</label>
					<input id="inputpro2" type="text" name="#" required><br>
					</div>

					<div class="flexconfirmmdp">
					<label class="labelpro" for="confirmation">Votre nom :</label>
					<input id="inputpro2" type="text" name="#" required><br>
					</div>

					<div class="flexconfirmmdp">
					<label class="labelpro" for="confirmation">Votre numéro :</label>
					<input id="inputpro2" type="text" name="#" required><br>
					</div>

					<div class="flexconfirmmdp">
					<label class="labelpro" for="confirmation">Votre mot de passe :</label>
					<input id="inputpro2" type="text" name="#" required><br>
					</div>

					<div class="flexconfirmmdp">
					<label class="labelpro" for="mdp">Votre nouveau mot de passe :</label>
					<input id="inputpro2" type="password" name="#" required><br>
					</div>

					<div class="flexconfirmmdp">

						<label class="labelpro" for="confirmation">Confirmation du mot de passe :</label>
						<input id="inputpro2" type="password" name="#" required><br>

					</div>
				
					<button class="deco2">Modifier</button>

				</div>
			
			</article>

			<article class="hautdroitpro">

				<h2 class="titrepro2 underlinepro">Votre panier</h2>

				<div class="borderblock3">
					
					<div class="borderblock2">

						<div class="ajoutpanier">
						
							<div class="imgpanier">
								<a href="#"><img class="imgajoutpanier" src="bracelet.jpg"></a>
							</div>
							
							<div>
								<input type="number" id="nombreprod" name="#">
							</div>

							<div class="titrepanier">
								<h3>Titre</h3>
								<p>11€</p>
							</div>

							<div id="supp">
								<button id="btnsupp">
									<img id="croix" src="croix.png">
								</button>
							</div>
						
						</div>

						<hr class="hrpro1">

						<div id="totalpanierpro">
							<h2 id="totalpro">Total :</h2>
							<h3 id="prixpro"> 12 €</h3>
						</div>
					</div>

					<button class="deco2">Valider le panier</button>
				
				</div>
			
			</article>

		</section>


		<section id="backmilieupro">

			<div id="milieupro">

				<div id="displaypro">	
				
					<article class="milieugauchepro">
					
						<h3 class="titreadress">Adresse de facturation</h3>
					
						<div>

							<!-- mettre les placeholder avec les informations du moment -->
								
							<label class="labelpro" for="confirmation">Nom de l'entreprise :</label>
							<input id="inputpro2" type="text" name="#" required><br>
							
							<label class="labelpro" for="confirmation">Numéro et nom de rue :</label>
							<input id="inputpro2" type="text" name="#" required><br>

							<label class="labelpro" for="confirmation">Code postal :</label>
							<input id="inputpro2" type="text" name="#" required><br>

							<label class="labelpro" for="confirmation">Ville :</label>
							<input id="inputpro2" type="text" name="#" required><br>
						
						</div>
					
					</article>


					<hr class="hrpro">


					<article class="milieudroitpro">

						<h3 class="titreadress">Adresse de livraison</h3>

						<div>
							
							<label class="labelpro" for="confirmation">A quel nom:</label>
							<input id="inputpro2" type="text" name="#" required><br>

							<label class="labelpro" for="confirmation">Numéro et nom de rue :</label>
							<input id="inputpro2" type="text" name="#" required><br>

							<label class="labelpro" for="confirmation">Code postal :</label>
							<input id="inputpro2" type="text" name="#" required><br>

							<label class="labelpro" for="confirmation">Ville :</label>
							<input id="inputpro2" type="text" name="#" required><br>

						</div>

					</article>
				</div>

						<button class="deco2">Modifier</button>

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
			                <th>Quantite</th>
			             	<th>Prix</th>
			            </tr>
					
					</thead>
		            
		            <tbody>			 

			            <tr>

			            	<td><!-- <?php echo $idCommande; ?> --> 123</td>	 
			                 
			                <td><!-- <?php echo $date; ?> -->26/03/2020</td>
			            
			                <td><!-- <?php echo $idProduit; ?> -->bracelet</td>
			                 
			                <td><!-- <?php echo $Quantite; ?> -->2</td>

			                <td><!-- <?php echo $prix; ?> -->12 €</td>
			            </tr>
		            
		            </tbody>

		            <tfoot>
						
						<tr>
			                <th>N°Commande</th>
			                <th>Date</th>
			                <th>NomPiece</th>
			                <th>Quantite</th>
			             	<th>Prix</th>
			            </tr>
					
					</tfoot>

				</table>
		</section>


	<button class="deco1">Se déconnecter</button>
	
	</main>


</body>

	<?php
    	require_once('footer.php');
	?>


</html>






<style>

body, html {
	/* min-height: 1200px; */
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    font-family: 'Sen', sans-serif;
}

main {
    width: 100%;
    height: auto;
}

#displaypro{
	display: flex;
}

#hautpro{
	display: flex;
    margin: 6% 1% 0% 1%;
	text-align: center;
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
	width: 50%;
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