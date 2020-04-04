<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Acceuil - La pie Lazulie</title>
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
    
    <section class="sectionindex">

      <h1 id="titreindex">Nouveautés</h1>
      
      <article id="bordcarroussel">
        
        <div id="carroussel">

          <!-- Mettre Carroussel -->

        </div>

      </article>

    </section>
    

    <section class="sectionindextxt">
      
      <p class="txtindex">À cet instant, une tristesse panique m'envahissait. Elle était le don de l'anémone, une réalité absolue et aussi peu comestible que le cacao à 100% et que pourtant il me fallait avaler. J'ouvrais les yeux pour échapper à l'attraction, à la digestion. Si j'avais continué de la fermer, la réalité de l'attentat se serait refermée sur ce qui me restait de conscience : l'anémone née de la cervelle de Bernard aurait dévoré la mienne, et, si je n'en étais pas mort, peut-être serais-je devenu fou.</p>

      <button class="btnindex">Actu</button>
      
      <p class="txtindex"> J'aurais rejoint le cœur de l'événement et je me serais décomposé là-bas, en lui, sur ce parquet où nous restions allongés. C'est peut-être cela qui caractérise le fou : être prisonnier à perpétuité de l'événement cruel et impensable qui, croit-il, l'a fondé.</p>

    </section>
    

    <section class="sectionindeximg">
      
      <div class="ligneindex">
                                                                                                                                                                                                                                                                                                                                                                                              
        <div class="opacity1"><a href="#"><img id="iconeind" src="bracelet.jpg"></a></div>

        <div class="opacity1"><a href="#"><img id="iconeind" src="bracelet.jpg"></a></div>

        <div class="opacity1"><a href="#"><img id="iconeind" src="bracelet.jpg"></a></div>

      </div>


      <div class="ligneindex">

        <div class="opacity1"><a href="#"><img id="iconeind" src="bracelet.jpg"></a></div>

        <div class="opacity1"><a href="#"><img id="iconeind" src="bracelet.jpg"></a></div>

        <div class="opacity1"><a href="#"><img id="iconeind" src="bracelet.jpg"></a></div>

      </div>

    </section>
    

    <section class="sectionindextxt">
      
      <p class="txtindex">Ce fut l’été du marathon de la tartuferie : le spectre du terrorisme, qui avait remplacé celui du communisme comme menace majeure pour la sécurité du pays, laissait la place au spectre de la turlute ; un président des États-Unis, quadragénaire plein de verdeur, et une de ses employées, une drôlesse de vingt-et-un ans folle de lui, batifolant dans le bureau ovale comme deux ados dans un parking, avaient rallumé la plus vieille passion fédératrice de l’Amérique, son plaisir le plus dangereux peut-être, le plus subversif historiquement : le vertige de l’indignation hypocrite."</p>

      <button class="btnindex">En savoir plus</button>

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

.sectionindex{
  margin: 11% 0% 11% 16%;
  width: 70%;
}

.sectionindeximg{
  margin: 9% 0% 9% 26%;
  width: 50%;
}

.sectionindextxt{
  margin: 7% 0% 5% 26.5%;
  width: 50%;
}

/*imageeeee*/

#iconeind{
    width: 55%;
    margin: auto;
    border: 10px solid #F5EBDC;
    display: block;
    box-shadow: -1px 2px 4px -2px #846946;
}

.opacity1 #iconeind{
  opacity: 1;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.opacity1:hover #iconeind{
  opacity: .5;
}

.ligneindex{
  display: flex;
  margin-top: 6%;
}

#bordcarroussel{
  background: #345897;
  width: 70%;
  height: auto;
  margin: auto;
  padding-top: 1%;
  padding-bottom: 1%;
  box-shadow: 0px 0px 8px -2px #846946;
}

#carroussel{
  background-color: white;
  width: 94%;
  height: 90%;
  text-align: center;
  margin: auto;
  padding-top: 5%;
  padding-bottom: 5%;
}

#titreindex{
  text-align: center;
  font-size: 30px;
}

.txtindex{
  text-align: center;
  font-size: 20px;
  line-height: 2;
}

.btnindex{
  box-shadow:inset 0px 1px 0px 0px #ECB93A;
  background:linear-gradient(to bottom,#ECB93A 5%, #E6A116 100%);
  background-color:#E6A116;
  border-radius:3px;
  border:1px double #E6A116;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family: 'Sen', sans-serif;
  font-size: 30px;
  padding: 15px 59px;
  text-decoration:none;
  text-shadow:0px 1px 0px #4d3534;
  display: block;
  margin: auto;
  margin-top: 4%;
  margin-bottom: 2%;
  box-shadow: 6px 6px 8px -2px #846946;
}

.btnindex:hover {
  background:linear-gradient(to bottom,#E6A116 5%, #ECB93A 100%);
  background-color:#E6A116 ;
}

</style>