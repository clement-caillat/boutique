<footer>

	
<?php

//if (isset($_SESSION['login']))
 {
?>	

<nav id="lapiebas">

		<div id="divfooter1">
			<a href="https://www.instagram.com/lapielazulie/?hl=fr"><img id="insta" src="insta.png"></a>
		</div>

		<div id="divfooter2">
			<a href="https://www.facebook.com/lapielazulie/"><img id="fb" src="fb.png"></a>
		</div>

	<ul id="ulfooter">

        <li class="lifooter"><a href="ensavoirplus.php">En savoir plus</a></li>
        <li class="lifooter"><a href="faq.php">FAQ</a></li>
        <li class="lifooter"><a href="contact.php">Contact</a></li>
        
    </ul>

        <div id="divfooter3">
        	<button id="btnshare"><img class="share" src="share.png"></button>
        </div>

</nav>


<?php
 }
?>

</footer>


<style>
	
footer{
	width: 100%;
	height: 11vh;
	background-image: url(afri1.jpg);
	padding-top: 0.9%;
	box-shadow: 0px 2px 6px #422B0C;
	margin-top: 5%;
}

#divfooter1{
	width: 6%;
    padding-top: 1.4%;
    margin-left: 10%;
}

#divfooter2{
    width: 15%;
    padding-top: 1.4%;
}


#divfooter3{
    text-align: center;
    width: 30%;
    padding-top: 1.4%;
    padding-left: 6%;
}

#lapiebas{
	background-color: #faf4ec;
	display: flex;
}

#lapiebas #ulfooter{
	display: flex;
    list-style-type: none;
    padding-top: 1%;
    justify-content: space-between;
    padding-bottom: 1%;
    width: 33%;
}

.lifooter {
	display: inline-block;
	margin-left: 10%;
	text-decoration: none;
	color: black;
	font-family: 'Kreon', serif;

}

.lifooter a{
	text-decoration: none;
	color: black;
}

.lifooter a:hover{
	padding-bottom: 0.5;
	color: #422B0C;
	text-decoration: underline overline #422B0C;
}

#insta{
	width: 35px;
	margin-bottom: 2%;
}

#fb{
	width: 35px;
}

.share{
	width: 30px;
}

#btnshare{
	border: none;
	cursor: pointer;
	background:transparent;
}

</style>

<!-- #422B0C Marron foncé
#faf4ec Blanc cassé
 #D3A00D Ocre
Blanc
noir
#846946 Marron clair
#345897 bleu marine -->