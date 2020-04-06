<header>
	
<?php

if (isset($_SESSION['id']))
 {
?>

<div id="lapiehaut">
	<h1 id="titrehead">La pie Lazulie</h1>
</div>

<nav id="lapiebashead">

	<ul id="ulheader">

		<form id="searchbox" method="get" action="search">
		<input id="inputrecherche" name="q" type="text" size="15" placeholder="Recherche.." />
		<button id="button-submit" type="submit"><img id="loupe" src="loupe.png"></button>
		</form>

        <li class="liheader"><a href="index.php">Accueil</a></li>
        <li class="liheader"><a href="vitrine.php">Nos produits</a></li>
        <li class="liheader"><a href="actu.php">Actu</a></li>
        <li class="liheader"><a href="profil.php">Profil</a></li>
		<li class="liheader" id="paniericon"><a href="#"><img id="panier" src="panier.png"></a></li>
        
    </ul>


</nav>


<?php 

}
elseif (isset($_SESSION['id']) == "admin") {
?>

<div id="lapiehaut">
	<h1 id="titrehead">La pie Lazulie</h1>
</div>

<nav id="lapiebashead">

	<ul id="ulheader">

		<form id="searchbox" method="get" action="search">
		<input id="inputrecherche" name="q" type="text" size="15" placeholder="Recherche.." />
		<button id="button-submit" type="submit"><img id="loupe" src="loupe.png"></button>
		</form>

        <li class="liheader"><a href="index.php">Accueil</a></li>
        <li class="liheader"><a href="vitrine.php">Nos produits</a></li>
        <li class="liheader"><a href="actu.php">Actu</a></li>
        <li class="liheader"><a href="#">Admin</a></li>
		<li class="liheader" id="paniericon"><a href="#"><img id="panier" src="panier.png"></a></li>
        
    </ul>


</nav>







<?php 

}
else{
?>


<div id="lapiehaut">
	<h1 id="titrehead">La pie Lazulie</h1>
</div>

<nav id="lapiebashead">

	<ul id="ulheader">

		<form id="searchbox" method="get" action="search">
		<input id="inputrecherche" name="q" type="text" size="15" placeholder="Recherche.." />
		<button id="button-submit" type="submit"><img id="loupe" src="loupe.png"></button>
		</form>

        <li class="liheader"><a href="index.php">Accueil</a></li>
        <li class="liheader"><a href="vitrine.php">Nos produits</a></li>
        <li class="liheader"><a href="actu.php">Actu</a></li>
        <li class="liheader"><a href="connexion.php">Se connecter/ S'inscrire</a></li>
		<li class="liheader" id="paniericon"><a href="#"><img id="panier" src="panier.png"></a></li>
        
    </ul>


</nav>


<?php
 }
?>

</header>


<style>
	
header{
	position: static;
	width: 100%;
	height: 25vh;
	background-image: url(afri1.jpg);
	box-shadow: 0px 2px 6px #422B0C;
}

#lapiehaut{
	background-color: #faf4ec;
	margin-top: 0.5%;
}

#lapiebashead{
	background-color: #faf4ec;
}

#lapiebashead #ulheader{
	display: flex;
	list-style-type: none;
	padding-top: 1%;
}

#titrehead{
	text-align: center;
	font-family: 'Charmonman', cursive;
	color: #422B0C;
	padding: 1.6%;
}

.liheader{
	display: inline-block;
	margin-left: 10%;
	text-decoration: none;
	color: black;
	font-family: 'Kreon', serif;
	margin-top: 0.4%;
}

.liheader a{
	text-decoration: none;
	color: black;
}

.liheader a:hover{
	padding-bottom: 0.5;
	color: #422B0C;
	text-decoration: underline overline #422B0C;
}

#searchbox{
	display: flex;
}

#button-submit{
	background: transparent;
	font-family: 'Kreon', serif;
	font-weight: bold;
	border: 2px solid transparent;
	border-radius: 4px;
	color: #422B0C;
	cursor: pointer;
	width: 8%;
    margin-bottom: 3%;

}

#inputrecherche{
	font-family: 'Kreon', serif;
	font-weight: bold;
	border: 2px solid #D3A00D;
	border-radius: 4px;
	padding: 1%;
	width: 50%;
	margin-bottom:4%;
}

#loupe{
	width: 170%;
	margin-bottom: 2%;
}

#panier{
	width: 39px;
    margin-left: 400%;
    margin-top: -11px;
}

</style>
