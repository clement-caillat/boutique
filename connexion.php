<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Connexion/Inscription - La pie Lazulie</title>
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

		<section id="flexco">

			<article>

				<h1 class="titreco">Se connecter</h1>
				<hr class="hrco2">

				<form>

					<div class="flexconfirmmdp">
						
						<label class="labelco" for="confirmation">Votre adresse de messagerie :</label>
						<input id="inputco2" type="text" name="#" required><br>
					</div>

					<div>
						<label class="labelco" for="mdp">Mot de passe :</label>
						<input id="inputco2" type="password" name="#" required><br>
					</div>

				</form>
			
				<br>
				<button class="connection">Se connecter</button>

			</article>


			<hr id="hrco1">


			<article>

				<h1 class="titreco">S'inscrire</h1>
				<hr class="hrco2">

				<form>

					<div class="flexconfirmmdp">
						
						<label class="labelco" 	for="confirmation">Votre adresse de messagerie :</label>
						<input id="inputco2" type="text" name="#" required><br>
					
					</div>
					
					<label class="labelco" for="confirmation">Votre prénom :</label>
					<input id="inputco2" type="text" name="#" required><br>
					
					<label class="labelco" for="confirmation">Votre nom :</label>
					<input id="inputco2" type="text" name="#" required><br>

					<label class="labelco" for="mdp">Mot de passe :</label>
					<input id="inputco2" type="password" name="#" required><br>
					
					<div class="flexconfirmmdp">

						<label class="labelco" for="confirmation">Confirmation du mot de passe :</label>
						<input id="inputco2" type="password" name="#" required><br>

					</div>

					<input id="checkboxco" type="checkbox" name="#" value="newsletter">
					<label for="newsletter">S'inscrire à la newsletter</label>

				</form>

				<br>
				<button class="connection">S'inscrire</button>

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
}

#flexco{
	display: flex;
    margin: 9% 18% 0% 15%;
}

.titreco{
	font-size: 25px;
}

.hrco2{
	width: 60%;
    border: 0;
    height: 2px;
    margin-right: 56%;
    margin-bottom: 24%;
    background-image: -webkit-linear-gradient(left, #422B0C,#faf4ec);
}

#hrco1{
	margin-top: 9%;
    width: 2px;
    border: 0;
    height: 39em;
    background-image: -webkit-linear-gradient(top,#faf4ec, #422B0C, #faf4ec);
}

.connection{
 	box-shadow:inset 0px 1px 0px 0px #a6827e;
	background:linear-gradient(to bottom, #a8835e 5%, #7a6855 100%);
	background-color:#a8835e;
	border-radius:3px;
	 border:1px double #54381e;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:16px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #4d3534;
	margin-bottom: 3%;
	margin-top: 6%;
	display: block;
}

.connection:hover {
	background:linear-gradient(to bottom, #7a6855 5%, #a8835e 100%);
	background-color:#7a6855;
}

#inputco1{
	font-family: 'Kreon', serif;
	border: 2px solid #A99376;
	border-radius: 4px;
	padding: 1%;
	width: 112%;
	margin-bottom:14%;
	height: 23px;
}

#inputco2{
	font-family: 'Kreon', serif;
	border: 2px solid #A99376;
	border-radius: 4px;
	padding: 1%;
	width: 42%;
	margin-bottom:14%;
	height: 23px;
}

#checkboxco{
	padding: 1%;
	width: 10%;
	margin-bottom:10%;
}

.flexconfirmmdp{
	display: flex;
}

.labelco{
	min-width: 240px;
	margin-top: 2%;
	margin-right: 3%;
}

</style>

<!-- #422B0C Marron foncé
#faf4ec Blanc cassé
 #D3A00D Ocre
Blanc
noir
#846946 Marron clair
#345897 bleu marine -->