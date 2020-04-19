<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>En savoir plus - La pie Lazulie</title>
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
		
		<section id="sectionplus">
			<h1 class="h1plus underlineplus">Artisan</h1>
			<article class="savoirplus">
				Elle gratte, elle creuse, elle racle cette terre sèche et dure qui la protégeait, faisant d'incroyables efforts pour grimper plus haut, toujours plus haut. Son unique obsession est de quitter ces tunnels sombres qu’elle parcoure depuis trois longues années à la recherche de quelques racines à sucer. C’est maintenant le temps de se rapprocher de la surface pour sentir si la chaleur est au rendez-vous. Elle sait qu'elle est  le symbole du soleil et des collines, mais elle sait aussi qu’il ne lui reste qu’une saison de vie. Alors il faut qu’elle se bouge notre amie la cigale. Qu’elle découvre enfin cette clarté qu’elle espère depuis tant de mois. Etourdie par la lumière éblouissante de l’astre de jour, elle grimpe maintenant sur l’écorce à l’odeur enivrante d’un pin, mais pas trop haut, elle doit garder des forces s’extirper de sa coquille.
			</article>

			<!-- ajouter droit php seulement admin -->
					<button class="ajouter">Modifier l'article</button>

			<hr id="hrsavoir">
		</section>


		<section id="sectionplus">
			<h1 class="h1plus underlineplus">Tissus</h1>
			<article class="savoirplus">
				 Encore un dernier effort et la voilà enfin libérée de son carcan. Abandonnant son exuvie éventrée comme une dernière relique de sa vie passée, la voilà enfin libre. En s’envolant, elle passe si près de ma joue que je suis obligé de l’écarter d’un geste de la main. je m’appelle Jeanne. Les évènements que je vais vous raconter se sont déroulés il y a longtemps, sur plusieurs générations. Quand je pense à toutes ces années et malgré certains côtés tragiques, je suis nostalgique. J’ai souvent l’esprit ailleurs, les yeux dans le vague et quand quelqu’un me tape sur l’épaule en me demandant à quoi je pense, je lui réponds tout simplement à rien…
			</article>

			<!-- ajouter droit php seulement admin -->
					<button class="ajouter">Modifier l'article</button>

			<hr id="hrsavoir">
		</section>


		<section id="sectionplus">
			<h1 class="underlineplus h1plus">Techniques</h1>
			<article class="savoirplus">
				à rien d’important. Mais en réalité, je suis tellement imprégnée par cette histoire que je ne passe pas un jour sans y penser. Je ne peux en parler à personne, peut-être plus tard à mon fils quand il sera en âge de comprendre, mais me croira-t-il ? Pour bien comprendre tous ces évènements, il faut remonter de quelques années dans le temps.
			</article>

			<!-- ajouter droit php seulement admin -->
					<button class="ajouter">Modifier l'article</button>

			<hr id="hrsavoir">
		</section>

			<!-- ajouter droit php seulement admin -->
		<button class="ajouter plus">Ajouter un article</button>


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
}


main {
    width: 100%;
    height: auto;
}

main #sectionplus {
    width: 100%;
    height: 500px;
    margin-top: 7%;
    padding-bottom: 6%;

}

.h1plus{
	text-align: center;
	font-size: 28px;
	font-family: 'Sen', sans-serif;
	margin-bottom: 30px;
	padding: 0.6%;
	color: #422B0C;
	letter-spacing: 0.7px;
	box-shadow: -1px 2px 9px 0px #422B0C;

}

.underlineplus {
	border-bottom: 2px solid #422B0C;
	border-top: 2px solid #422B0C;
    margin-left: 43%;
    margin-right: 43%;
	text-align: center;
	background: url(beige2.jpg);
}

.savoirplus {
	font-size: 18px;
    text-align: center;
    width: 45%;
    margin: auto;
    margin-top: 5%;
    margin-bottom: 5%;
    line-height: 2;
}


#hrsavoir {
 	width: 60%;
 	border: 0; 
	height: 2px; 
	margin-top: 3%;
  	background-image: -webkit-linear-gradient(left, #f0f0f0, #846946, #f0f0f0);
 }

 .ajouter{
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

.ajouter:hover {
	background:linear-gradient(to bottom, #7a6855 5%, #a8835e 100%);
	background-color:#7a6855;
 }

 .plus{
 	padding:16px 24px;
 }

</style>