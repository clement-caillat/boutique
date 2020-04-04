<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Vitrines - La pie Lazulie</title>
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
			
		<section id="sectionvitrine">

			<article id="cotecategorie">

				<button class="categoriebtn co"><div class="policebtn">Tout</div></button>

				<button class="categoriebtn col"><div class="policebtn">Adulte</div></button>
				
				<button class="categoriebtn colo"><div class="policebtn">Minots</div></button>
				
				<button class="categoriebtn color"><div class="policebtn">Accessoires</div></button>
				
				<button class="categoriebtn colore"><div class="policebtn">Coupons</div></button>
		
			</article>

			<article id="coteproduit">

				<h1 class="titrevitrine">Nom de la Catégorie</h1>

				<p class="titrevitrine">Ici vous pourrez trouvez tout les produits de cette catégorie</p>

					<div class="lignevitrine">
						
						<div class="backvitrine">
							<div class="backvitrineblanc">
								<a class="opacity1" href="produit.php"><img id="bracelet" src="bracelet.jpg"></a>
								<h4>dzeoiydqoiu</h4>
							</div>
						</div>
							
						<div class="backvitrine">
							<div class="backvitrineblanc">
								<a class="opacity1" href="produit.php"><img id="bracelet" src="bracelet.jpg"></a>
								<h4>dzeoiydqoiu</h4>
							</div>
						</div>

						<div class="backvitrine">
							<div class="backvitrineblanc">
								<a class="opacity1" href="produit.php"><img id="bracelet" src="bracelet.jpg"></a>
								<h4>dzeoiydqoiu</h4>
							</div>
						</div>

					</div>
			
					<div class="lignevitrine">
					
						<div class="backvitrine">
							<div class="backvitrineblanc">
								<a class="opacity1" href=""><img id="bracelet" src="bracelet.jpg"></a>
								<h4>dzeoiydqoiu</h4>
							</div>
						</div>
					
						<div class="backvitrine">
							<div class="backvitrineblanc">
								<a class="opacity1" href="#"><img id="bracelet" src="bracelet.jpg"></a>
								<h4>dzeoiydqoiu</h4>
							</div>
						</div>

						<div class="backvitrine">
							<div class="backvitrineblanc">
								<a class="opacity1" href="#"><img id="bracelet" src="bracelet.jpg"></a>
								<h4>dzeoiydqoiu</h4>
							</div>
						</div>
				
					</div>

				<div class="lignevitrine">

					<div class="backvitrine">
						<div class="backvitrineblanc">
							<button class="categoriebtn"><img width="50px" src="plus.png"></button>
							<h4>Ajouter article</h4>
							</div>
						</div>
					<div>
				
				</div>
		
			</article>

		</section>


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
    margin-top: 3%;
}

#sectionvitrine{
	display: flex;
}

#cotecategorie{
	width: 15%;
	display: grid;
	border-right: 1px solid;
	grid-template-columns: repeat(2fr); 
    grid-auto-rows: 100px; 
}

#coteproduit{
	width: 85%;
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

.titrevitrine{
	text-align: center;
    margin-top: 3%;
}

.lignevitrine{
	display: flex;
	margin-top: 6%;
}

.backvitrine{
	background: url(afri1.jpg);
    width: 20%;
    height: auto;
    margin: auto;
    padding-top: 1%;
    padding-bottom: 1%;
}

.backvitrineblanc{
	background-color: white;
    width: 90%;
    height: 90%;
    text-align: center;
    margin: auto;
    padding-top: 5%;
    padding-bottom: 5%;
}

#bracelet{
	width: 85%;
	margin: auto;
}

.opacity1{
  opacity: 1;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.opacity1:hover{
  opacity: .5;
}



</style>

<!-- #422B0C Marron foncé
#faf4ec Blanc cassé
 #D3A00D Ocre
Blanc
noir
#846946 Marron clair
#345897 bleu marine -->