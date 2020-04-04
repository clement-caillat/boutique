<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Contact - La pie lazulie</title>
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

		<section id="flexcont">

			<article id="contactleft">

				<h1 class="titrecont">Envoyez moi un message !</h1>

				<form>

					<div>

						<label class="labelcont" for="confirmation">Votre prénom :</label>
						<input id="inputcont2" type="text" name="#" required>
						
						<label class="labelcont" for="confirmation">Votre nom :</label>
						<input id="inputcont2" type="text" name="#" required><br>
					
					</div>

					<div class="flexconfirmmdp">

						<label class="labelcont" for="confirmation">Votre adresse mail :</label>
						<input id="inputcont1" type="text" name="#" required><br>

					</div>

					<textarea id="textareacontact">Laissez un message</textarea>

					<button class="envoyer">Envoyer</button>
				
				</form>

			</article>

			<hr id="hrcont2">

			<article id="contactright">

				<p id="infocontact">zulfyiy zioeu odizeupoiiy dyiel dicekicl xcuzypz ciuzeyo cpz_oypiut_pie uictiièrt dezioic iockd ziudheio  </p>

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

#flexcont{
	display: flex;
    margin: 10% 6% 7% 16%;
}

.titrecont{
	font-size: 25px;
	margin: 0% 0% 15% 0%;
}

#hrcont2{
	margin-right: -12%;
	margin-bottom: 28%;
}

.envoyer{
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
	display: block;
  	margin: auto;

}

.envoyer:hover {
	background:linear-gradient(to bottom, #7a6855 5%, #a8835e 100%);
	background-color:#7a6855;
}

#inputcont1{
	font-family: 'Kreon', serif;
    border: 2px solid #A99376;
    border-radius: 4px;
    padding: 1%;
    width: 40%;
    margin-bottom: 12%;
    height: 17px;
}

#inputcont2{
	font-family: 'Kreon', serif;
    border: 2px solid #A99376;
    border-radius: 4px;
    padding: 1%;
    width: 20%;
    margin-bottom: 12%;
    height: 17px;
}

#checkboxcont{
	padding: 1%;
	width: 10%;
	margin-bottom:10%;
}

.flexconfirmmdp{
	display: flex;
}

.labelcont{
    margin-left: 2%;
    margin-right: 2%;
}

#infocontact{
	width: 30%;
    margin: 3% 0% 0% 33%;
}

#textareacontact{
	margin: 0px;
    width: 576px;
    height: 212px;
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