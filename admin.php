

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

		<section id="sectionadmin">

		<article id="cotecategorie">

				<button class="categoriebtn co"><div class="policebtn">Utilisateurs Références</div></button>

				<button class="categoriebtn col"><div class="policebtn">Edit Produits</div></button>
				
				<button class="categoriebtn colo"><div class="policebtn">Commandes à traiter</div></button>
				
				<button class="categoriebtn color"><div class="policebtn">Historique de commandes</div></button>

				<button class="categoriebtn colore"><div class="policebtn">Ajouter nouveau produit</div></button>				
		
		</article>
		
		<article id="coteedit">

						<!-- catégorie Client reference -->
				<h2 class="titrepro3">Référence des clients</h2>

				
				<table>

					<thead>
						
						<tr>
							<th class="thadmin">Prénom</th>
			                <th class="thadmin">Nom</th>
			                <th class="thadmin">Adresse messagerie</th>
			                <th class="thadmin">Newsletter</th>
			                <th class="thadmin">Numéro</th>
			                <th class="thadmin">Nom entreprise (facturation)</th>
			                <th class="thadmin">Adresse (facturation)</th>
			             	<th class="thadmin">Code postal (facturation)</th>
			             	<th class="thadmin">Ville (facturation)</th>
			            	<th class="thadmin">Adresse</th>
			             	<th class="thadmin">Code postal</th>
			             	<th class="thadmin">Ville</th>
			             	<!-- supprimer (peut etre ajouter pop up "etes vous sur de vouloir supprimer") -->
			             	<th class="thadmin">Supprimer</th>
			            </tr>
					
					</thead>
		            
		            <tbody>			 

			            <tr>
			            	<td><!-- <?php echo $prenom; ?> --> Clément</td>

			            	<td><!-- <?php echo $nom; ?> --> l'asticot</td>	 
			                 
			                <td><!-- <?php echo $mail; ?> -->lasticote@hotmail.fr</td>
			            
			                <td><!-- <?php echo $newsletter; ?> -->oui</td>
			                 
			                <td><!-- <?php echo $numero; ?> -->06 99 66 69 46</td>

			                <td><!-- <?php echo $prenom; ?> --> Clément</td>

			                <td><!-- <?php echo $adresseF; ?> -->12 rue de la poubelle qui tousse</td>

			                <td><!-- <?php echo $CodepF; ?> -->69000</td>
			                
			                <td><!-- <?php echo $villeF; ?> --> Lyon</td>

			                <td><!-- <?php echo $adresse; ?> -->16 rue de la poubelle qui mord</td>

			                <td><!-- <?php echo $codep; ?> -->69000</td>
			                
			                <td><!-- <?php echo $ville; ?> --> Lyon</td>

			                <td><button class="btnbascule"><img id="croix" src="croix.png"></button></td>

			            </tr>
		            
		            </tbody>

		            <tfoot>
						
						<tr>
							<th class="thadmin">Prénom</th>
			                <th class="thadmin">Nom</th>
			                <th class="thadmin">Adresse messagerie</th>
			                <th class="thadmin">Newsletter</th>
			                <th class="thadmin">Numéro</th>
			                <th class="thadmin">Nom entreprise (facturation)</th>
			                <th class="thadmin">Adresse (facturation)</th>
			             	<th class="thadmin">Code postal (facturation)</th>
			             	<th class="thadmin">Ville (facturation)</th>
			            	<th class="thadmin">Adresse</th>
			             	<th class="thadmin">Code postal</th>
			             	<th class="thadmin">Ville</th>
			             	<!-- supprimer (peut etre ajouter pop up "etes vous sur de vouloir supprimer") -->
			             	<th class="thadmin">Supprimer</th>
			            </tr>
					
					</tfoot>

				</table>

			<!-- FIN catégorie Clients Reference -->

						<!-- catégorie Edit produit -->

				<h2 class="titrepro3">Edit produits</h2>

				
				<table>

					<thead>
						
						<tr>
			                <th class="thadmin">NomPiece</th>
			                <th class="thadmin">Courte description</th>
			                <th class="thadmin">Quantite</th>
			             	<th class="thadmin">Prix</th>
			             	<th class="thadmin">Catégorie</th>			             
			             	<th class="thadmin">Taille </th>
			             	<th class="thadmin">Couleur </th>
			             	<th class="thadmin">Ample description</th>
			             	<th class="thadmin">Etiquette 1</th>
			             	<th class="thadmin">Modifier</th>			             	
			             	<!-- Faire basculer dans la catégorie "historique de commandes" et non supprimer -->
			             	<th class="thadmin">Supprimer</th>
			            </tr>
					
					</thead>
		            
		            <tbody>			 

			            <tr>
			            
			                <td><!-- <?php echo $nompiece; ?> -->bracelet</td>
			                 
			                <td><!-- <?php echo $courte; ?> -->Petit bracelet assez fin en laine certi de jolie coquillage</td>

			                <td><!-- <?php echo $quantité; ?> -->9</td>

			                <td><!-- <?php echo $prix; ?> -->12€</td>
			                
			                <td><!-- <?php echo $cat; ?> -->Accessoire</td>

			                <td><!-- <?php echo $taille; ?> -->XS, S, M, L</td>

			                <td><!-- <?php echo $couleur; ?> -->Ocre, Blanc, Rouge, Rose pâle</td>

			                <td><!-- <?php echo $Ample; ?> --> Petit bracelet assez fin en laine certi de jolie coquillagePetit bracelet assez fin en laine certi de jolie coquillagePetit bracelet assez fin en laine certi de jolie coquillagePetit bracelet assez fin en laine certi de jolie coquillagePetit bracelet assez fin en laine certi de jolie coquillagePetit bracelet assez fin en laine certi de jolie coquillagePetit bracelet assez fin en laine certi de jolie coquillage</td>
			               
			                <td><!-- <?php echo $etiquette; ?> -->Coquillage, Bracelet, Laine</td>


			                <td><button class="btnbascule"><img id="croix" src="edit.png"></button></td>

			                <td><button class="btnbascule"><img id="croix" src="croix.png"></button></td>
			            </tr>
		            
		            </tbody>

		            <tfoot>
						
						<tr>
			                <th class="thadmin">NomPiece</th>
			                <th class="thadmin">Courte description</th>
			                <th class="thadmin">Quantite</th>
			             	<th class="thadmin">Prix</th>
			             	<th class="thadmin">Catégorie</th>			             	
			             	<th class="thadmin">Taille </th>
			             	<th class="thadmin">Couleur </th>
			             	<th class="thadmin">Ample description</th>
			             	<th class="thadmin">Etiquette 1</th>
			             	<th class="thadmin">Modifier</th>			             
			             	<!-- Faire basculer dans la catégorie "historique de commandes" et non supprimer -->
			             	<th class="thadmin">Supprimer</th>
			            </tr>
					
					</tfoot>

				</table>

			<!-- FIN catégorie Edit produits -->

			<!-- Formulaire pour modifier produit -->
			<h2 class="titrepro3">Ajout/modification produit</h2>
			
			<form id="formulairead">

					<div id="divformad">

						<div class="divadminformu">
							<label class="labeladmin" for="">Nom :</label>
							<input id="inputadmin" type="text" name="#" required><br>

							<label class="labeladmin" for="">Prix :</label>
							<input id="inputadmin" type="text" name="#" required><br>

							<label>
								<span class="labeladmin">Cat : </span>
							</label>
							<select id="inputadmin" name="#">
								<option value="xs">Adultes</option>
								<option value="s">Minots</option>
								<option value="m">Accesoires</option>
								<option value="l">Coupons</option>
							</select>
							
							<label class="labeladmin" for="">Quantité :</label>
							<input type="number" id="nombreprodad" name="#" required><br>

						</div class="divadminformu">

						<div class="divadminformu">
						    <label class="labeladmin" for="photo"> Image principale :</label><br />
	   						<input type="file" name="icone" id="icone" /><br />
						    <label for="photo" class="labeladmin"> Image 1 :</label><br />
	    					<input type="file" name="icone" id="icone" /><br />
						    <label for="photo" class="labeladmin"> Image 2 :</label><br />
	    					<input type="file" name="icone" id="icone" /><br />
						    <label for="photo" class="labeladmin"> Image 3 :</label><br />
	    					<input type="file" name="icone" id="icone" /><br />    						    						  						
    					</div>
						
						<div class="divadminformu">
							<label class="labeladmin" for="">Taille :</label><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
						</div>
						
						<div class="divadminformu">
							<label class="labeladmin" for="">Couleur :</label><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
						</div>
						
						<div class="divadminformu">
							<label class="labeladmin" for="">Etiquette :</label><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
							<input id="inputadmin" type="text" name="#"><br>
						</div>
					</div>

					<div id="divformad1">
						<label class="labeladmin" for="">Courte description : </label><br>					
						<textarea id="textareaADMIN"></textarea>
						
						<label class="labeladmin" for="">Ample description :</label><br>					
						<textarea id="textareaADMIN"></textarea>
					</div>

					<button class="deco1">Envoyer</button>
				
			</form>

			<!-- FIN Formulaire pour modifier produit -->
				
							<!-- catégorie Commandes à Traiter -->

				<h2 class="titrepro3">Commandes à traiter</h2>

				
				<table>

					<thead>
						
						<tr>
							<th class="thadmin">Client</th>
			                <th class="thadmin">N°Commande</th>
			                <th class="thadmin">Date</th>
			                <th class="thadmin">NomPiece</th>
			                <th class="thadmin">Quantite</th>
			             	<th class="thadmin">Prix</th>
			            	<th class="thadmin">Adresse</th>
			             	<th class="thadmin">Code postal</th>
			             	<th class="thadmin">ville</th>
			             	<!-- Faire basculer dans la catégorie "historique de commandes" et non supprimer -->
			             	<th class="thadmin">Basculer</th>
			            </tr>
					
					</thead>
		            
		            <tbody>			 

			            <tr>
			            	<td><!-- <?php echo $idclient; ?> --> Clément l'asticot</td>

			            	<td><!-- <?php echo $idCommande; ?> --> 123</td>	 
			                 
			                <td><!-- <?php echo $date; ?> -->26/03/2020</td>
			            
			                <td><!-- <?php echo $idProduit; ?> -->bracelet</td>
			                 
			                <td><!-- <?php echo $Quantite; ?> -->2</td>

			                <td><!-- <?php echo $prix; ?> -->12 €</td>

			                <td><!-- <?php echo $adresse; ?> --> 2 rue de la poubelle qui tousse</td>
			                
			                <td><!-- <?php echo $codep; ?> --> 46900</td>

			                <td><!-- <?php echo $ville; ?> --> Carcassonne</td>

			                <td><button class="btnbascule"><img id="arrow" src="bascule.png"></button></td>
			            </tr>
		            
		            </tbody>

		            <tfoot>
						
						<tr>
							<th class="thadmin">Client</th>
			                <th class="thadmin">N°Commande</th>
			                <th class="thadmin">Date</th>
			                <th class="thadmin">NomPiece</th>
			                <th class="thadmin">Quantite</th>
			             	<th class="thadmin">Prix</th>
			            	<th class="thadmin">Adresse</th>
			             	<th class="thadmin">Code postal</th>
			             	<th class="thadmin">ville</th>
			             	<!-- Faire basculer dans la catégorie "historique de commandes" et non supprimer -->
			             	<th class="thadmin">Basculer</th>
			            </tr>
					
					</tfoot>

				</table>

			<!-- FIN catégorie Commandes A traiter -->

						<!-- catégorie Historique de commandes -->

				<h2 class="titrepro3">Historique de commandes</h2>

				
				<table>

					<thead>
						
						<tr>
							<th class="thadmin">Client</th>
			                <th class="thadmin">N°Commande</th>
			                <th class="thadmin">Date</th>
			                <th class="thadmin">NomPiece</th>
			                <th class="thadmin">Quantite</th>
			             	<th class="thadmin">Prix</th>
			            	<th class="thadmin">Adresse</th>
			             	<th class="thadmin">Code postal</th>
			             	<th class="thadmin">ville</th>
			             	<!-- supprimer (peut etre ajouter pop up "etes vous sur de vouloir supprimer") -->
			             	<th class="thadmin">Supprimer</th>
			            </tr>
					
					</thead>
		            
		            <tbody>			 

			            <tr>
			            	<td><!-- <?php echo $idclient; ?> --> Clément l'asticot</td>

			            	<td><!-- <?php echo $idCommande; ?> --> 123</td>	 
			                 
			                <td><!-- <?php echo $date; ?> -->26/03/2020</td>
			            
			                <td><!-- <?php echo $idProduit; ?> -->bracelet</td>
			                 
			                <td><!-- <?php echo $Quantite; ?> -->2</td>

			                <td><!-- <?php echo $prix; ?> -->12 €</td>

			                <td><!-- <?php echo $adresse; ?> --> 2 rue de la poubelle qui tousse</td>
			                
			                <td><!-- <?php echo $codep; ?> --> 46900</td>

			                <td><!-- <?php echo $ville; ?> --> Carcassonne</td>

			                <td><button class="btnbascule"><img id="croix" src="croix.png"></button></td>
			            </tr>
		            
		            </tbody>

		            <tfoot>
						
						<tr>
							<th class="thadmin">Client</th>
			                <th class="thadmin">N°Commande</th>
			                <th class="thadmin">Date</th>
			                <th class="thadmin">NomPiece</th>
			                <th class="thadmin">Quantite</th>
			             	<th class="thadmin">Prix</th>
			            	<th class="thadmin">Adresse</th>
			             	<th class="thadmin">Code postal</th>
			             	<th class="thadmin">ville</th>
			             	<!-- supprimer (peut etre ajouter pop up "etes vous sur de vouloir supprimer") -->
			             	<th class="thadmin">Supprimer</th>
			            </tr>
					
					</tfoot>

				</table>

			<!-- FIN catégorie Historique de commande-->
		
		</article>

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


#sectionadmin{
	display: flex;
	margin-top: 1%;
}

#cotecategorie{
    width: 18%;
    display: grid;
    border-right: 1px solid;
    grid-template-columns: repeat(2fr);
    grid-auto-rows: 100px;
}

#coteedit{
	width: 115%;
    margin: 6% 1% 0% 1%;
    text-align: center;
    border: 2px solid #422B0C;
    padding: 1%;
    border-radius: 8px;
    background-image: url(beige2.jpg);
}

.categoriebtn{
    border: none;
    font-size: larger;
    background-color: white;
    cursor: pointer;
    height:120px;
}

.policebtn{
	font-family: 'Sen', sans-serif;
}

.co:hover{
	color: white;
	background-color:  #846946;
}

.col:hover{
	color: white;
	background-color:  #422B0C;
}

.colo:hover{
	color: white;
	background-color:  #D3A00D;
}

.color:hover{
	color: white;
	background-color:  #426FBE;
}

.colore:hover{
	color: white;
	background-color:  #2B487C;
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

#btnsupp{
	border:none;
	background: transparent;
	cursor: pointer;
}

#croix{
	width: 25px;
	margin: 26% 5% 0% -26%;
}

#nombreprodad{
	width: 30px;
    margin-bottom: 6%;
}

.titrepro3{
	color: #422B0C;
	padding-bottom: 2%;
	font-size: 29px;
}

/*commandes passées*/
table {
	border: 3px solid #422B0C;
    border-collapse: collapse;
    margin: auto;
    box-shadow: -1px 2px 11px -2px #422B0C;
}

thead, tfoot {
	background-color:#EDE7DE;
	border:1px solid #846946;
}

tbody {
	background-color:#faf4ec;
	border:1px solid #846946;
}

.thadmin {
	border:1px dotted #846946;
	padding:5px;
	background-color:#EDE7DE;
	width:12%;
}

td {
	font-size: 97%;
    border: 1px solid #846946;
    padding: 5px;
    text-align: left;
}

.btnbascule{
	background: transparent;
	border:none;
	cursor: pointer;
}

.arrow{
	width: 25px;
}

/*Formulaire edit produit*/

#formulairead{
	border: 3px solid #422B0C;
    border-collapse: collapse;
    margin: auto;
    box-shadow: -1px 2px 11px -2px #422B0C;
    background-color:#faf4ec;
}

#divformad{
	display: flex;

}

#divformad1{
	display: flex;

}

.divadminformu{
	width: 30%;
	margin:2% 2% 0% 2%;
}

#inputadmin{
	font-family: 'Kreon', serif;
    border: 2px solid #A99376;
    border-radius: 4px;
    padding: 1%;
    width: 55%;
    margin-bottom: 10%;
    height: 27px;
}

.labeladmin{
    margin-left: 2%;
    margin-right: 2%;
    margin-top: 2%;
    font-size: 25px;
    font-family: 'Sen', sans-serif;
}

#icone{
	margin-bottom: 6%;
}

#textareaADMIN{
    width: 480px;
    height: 160px;
    margin: 4% 0% 0% 0%;
    border: 2px solid #A99376;
    border-radius: 4px;
    font-family: 'Sen', sans-serif;
}


</style>