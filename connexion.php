<?php
	require('libraries/config.php');
	$msg = '';
	$error = false;
	if(isset($_POST['button_register'])){
		if($_POST['firstname'] != '' && $_POST['lastname'] != '' && $_POST['mail'] != '' && $_POST['password'] != '' && $_POST['cpassword'] != ''){
			if(strlen($_POST['password']) >= 4){
				$user = new User;
				$msg = $user->register($_POST['firstname'], $_POST['lastname'], $_POST['mail'], $_POST['password'], $_POST['cpassword']);
				$user = null;
				header('Location: connexion.php');
			}else{
				$msg = "Votre mot de passe doit contenir au moins 4 caractères";
			}
		}else{
			$msg = "Veuillez remplir tous les champs";
		}
	}

	if(isset($_POST['button_login'])){
		$user = new User;
		if($_POST['login_mail'] != '' && $_POST['login_password'] != ''){
			$error = $user->login($_POST['login_mail'], $_POST['login_password']);
			if($error == false){
				$_SESSION['user'] = $user;
				header('Location: profil.php');
			}
			else{
				$user = null;
			}
		}
		else{
			$msg = "Veuillez remplir tous les champs";
		}
	}



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
    <link rel="icon" type="image/png" href="images/favicon.png" />

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

				<form method="post">

					<div class="flexconfirmmdp">
						
						<label class="labelco" for="confirmation">Votre adresse de messagerie :</label>
						<input class="inputco2" type="text" name="login_mail" required><br>
					</div>

					<div>
						<label class="labelco" for="mdp">Mot de passe :</label>
						<input class="inputco2" type="password" name="login_password" required><br>
					</div>

					<input type="submit" class="connection" name="button_login" value="Se connecter">
					<?php if($error || $msg != ''){
						if($error){
						?>
						<p class="error">Identifiant ou mot de passe incorrect</p>
						<?php }elseif($msg != ''){ ?>
						<p class="error"><?php echo $msg; ?></p>
 				<?php } }?>
				</form>
			
				<br>

			</article>


			<hr id="hrco1">


			<article>

				<h1 class="titreco">S'inscrire</h1>
				<hr class="hrco2">

				<form method="POST">

					<div class="flexconfirmmdp">
						
						<label class="labelco" 	for="confirmation">Votre adresse de messagerie :</label>
						<input class="inputco2" type="text" name="mail" required><br>
					
					</div>
					
					<label class="labelco" for="confirmation">Votre prénom :</label>
					<input class="inputco2" type="text" name="firstname" required><br>
					
					<label class="labelco" for="confirmation">Votre nom :</label>
					<input class="inputco2" type="text" name="lastname" required><br>

					<label class="labelco" for="mdp">Mot de passe :</label>
					<input class="inputco2" type="password" name="password" required><br>
					
					<div class="flexconfirmmdp">

						<label class="labelco" for="confirmation">Confirmation du mot de passe :</label>
						<input class="inputco2" type="password" name="cpassword" required><br>

					</div>

					<input id="checkboxco" type="checkbox" name="#" value="newsletter">
					<label for="newsletter">S'inscrire à la newsletter</label>
					<?php if($msg != ''){ ?>
						<p class="error"><?php echo $msg; ?></p>
					<?php } ?>
					<input type="submit" class="connection" name="button_register" value="S'inscrire">
				</form>

				<br>

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

.inputco2{
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