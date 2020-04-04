<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Produit - La pie Lazulie</title>
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
			
		<section class="hautproduit">
			
			<article id="photoprod">

				<div id="backprod">
					<div id="backprodblanc">
						<img id="bracelet" src="bracelet.jpg">
					</div>
				</div>
			
				<div class="petiteimgprod">
					<a href="#"><img class="imgplusprod" src="coquillage.jpg"></a>
					<a href="#"><img class="imgplusprod" src="bracelet1.jpg"></a>
					<a href="#"><img class="imgplusprod" src="coquillage.jpg"></a>
				</div>
			
			</article>


			<article id="detailprod">

				<ul class="breadcrumb">
				  <li><a href="#">Accueil</a></li>
				  <li><a href="#">Tout</a></li>
				  <li><a href="#">Catégorie</a></li>
				  <li>Titre produit</li>
				</ul>

				<H2 id="titreprod">Titre produit</H2>

				<div id="descriptionprod">Description du produit en quelques lignes</div>
				
				<hr id="hr1prod">

				<h2 id="prixprod">10€</h2>

					<div class="espaceprod">
					
						<label>
							<span class="optprod">Taille : </span>
						</label>
						<select name="#">
							<option value="xs">XS</option>
							<option value="s">S</option>
							<option value="m">M</option>
							<option value="l">L</option>
							<option value="xl">XL</option>
						</select>

					</div>

					<div class="espaceprod">
						<br>
						<a href="https://www.a-lafont.com/vetements-professionnels-cuisine-accueil-hotellerie/lafont/nos-services/guide-des-tailles/" id="guidetaille">Voir le guide des tailles</a>
						<br>
					</div>

					<div class="espaceprod">
						<label>
							<span class="optprod">Couleur:</span>
						</label>
						<select name="#" >
							<option>Rouge</option>
							<option>Ocre</option>
							<option>Vert Emeraude</option>
						</select>
					</div>

					<form class="espaceprod">
						<input type="number" id="nombreprod" name="#">*
						<button type="submit">Ajouter au panier</button>	
					</form>


				<button id="btnshare"><img class="share" id="shareespace" src="share.png"></button>

			</article>

		</section>

		<hr id="hr2prod">

		<section class="section2prod">

			<div id="descriptionprodplus">

				<h3>Description</h3>
				<p>
					Description plus ample du produit
				</p>

			</div>

			<div>

				<h3>Etiquette</h3>
				<p>Accessoire, Bracelet, Coquillage</p>

			</div>

		</section>

	</main>


</body>

	<?php
    	require_once('footer.php');
	?>


</html>






<style>

body, html {
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
    margin-top: 3%;
}

.hautproduit{
	display: flex;
	width: 100%;
    margin-top: 6%;
}

#detailprod{
	width: 53%;
}

#photoprod{
	width: 57%;
}

#bracelet{
	width: 85%;
	margin: auto;
}

#backprod{
	background: url(afri1.jpg);
    width: 50%;
    height: auto;
    margin-left: 45%;
    padding-top: 2%;
    padding-bottom: 2%;
}

#backprodblanc{
	background-color: white;
    width: 90%;
    height: 90%;
    text-align: center;
    margin: auto;
    padding-top: 5%;
    padding-bottom: 5%;
}

.petiteimgprod{
	margin-top: 5%;
    margin-left: 45%;
}

.imgplusprod{
    max-width: 128px;
    height: 128px;
    margin-right: 8%;
    border:3px solid #846946;
}

ul.breadcrumb {
  padding: 10px 7px;
  list-style: none;
}

ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}

ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}

ul.breadcrumb li a {
  color: #D3A00D;
  text-decoration: none;
}

ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}

#titreprod{
	border-bottom: 2px dashed #422B0C;
    border-top: 2px dashed #422B0C;
    margin-right: 74%;
    padding-top: 1%;
    margin-top: 6%;
    margin-bottom: 6%;
    padding-bottom: 1%;
    text-align: center;
}

#descriptionprod{
	margin-bottom: 3%;
}

#hr1prod{
    margin-right: 73%;
    margin-left: 6%;
}

#prixprod{
	margin-bottom: 3%;
    margin-top: 2%;
    font-size: 29px;
}

.optprod{
	font-size: 18px;
}

#guidetaille{
	color: #3B65AD;
}

#nombreprod{
	width: 30px;
}

.espaceprod{
	margin-bottom: 3%;
}

#shareespace{
	margin-top: 7%;
}

#hr2prod{
	margin-left: 16%;
    margin-right: 16%;
    margin-bottom: 2%;
    margin-top: 4%;
}

.section2prod{
	width: 54.5%;
	margin:auto;
	margin-bottom:4%;
	margin-top:4%;
}

#descriptionprodplus{
	margin-bottom: 6%;
}
</style>

<!-- #422B0C Marron foncé
#faf4ec Blanc cassé
 #D3A00D Ocre
Blanc
noir
#846946 Marron clair
#345897 bleu marine -->