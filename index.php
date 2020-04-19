<?php

    require_once('libraries/config.php');
    $p = new Product;
    $bestseller = $p->getBestSeller();
    $mostvisited = $p->getMostVisited();
    $lasts = $p->getLastsArticles();
    $p = null;
?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Accueil - La pie Lazulie</title>
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
    
    <section class="sectionindex">
    <?php if(!empty($bestseller) && !empty($mostvisited) && !empty($lasts)){ ?>
      <h1 id="titreindex">Nouveautés</h1>
      <div class="products">
        <h4>Les plus visités</h4>
        <div class="row">
          <div class="product">
            <a href="produit.php?p=<?php echo $bestseller->id; ?>">
              <div class="status" id="first"><p>N°1 des ventes</p></div>
              <img src="<?php echo $bestseller->image; ?>" alt="Image du produit">
              <p><?php echo $bestseller->title; ?></p>
            </a>
          </div>
          <div class="product">
            <a href="produit.php?p=<?php echo $mostvisited[0]->id; ?>">
              <img src="<?php echo $mostvisited[0]->image; ?>" alt="Image du produit">
              <p><?php echo $mostvisited[0]->title; ?></p>
            </a>
          </div>
          <div class="product">
            <a href="produit.php?p=<?php echo $mostvisited[1]->id; ?>">
              <img src="<?php echo $mostvisited[1]->image; ?>" alt="Image du produit">
              <p><?php echo $mostvisited[1]->title; ?></p>
            </a>
          </div>
        </div>
        <h4>Derniers produits</h4>
        <div class="row">
        <?php foreach($lasts as $last){ 
          $last->image = str_replace('../', '', $last->image);
          ?>
          <div class="product">
            <a href="produit.php?p=<?php echo $last->id; ?>">
              <img src="<?php echo $last->image; ?>" alt="Image du produit">
              <p><?php echo $last->title; ?></p>
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
        <?php } ?>
    </section>
    

    <section class="sectionindextxt">
      
      <p class="txtindex">À cet instant, une tristesse panique m'envahissait. Elle était le don de l'anémone, une réalité absolue et aussi peu comestible que le cacao à 100% et que pourtant il me fallait avaler. J'ouvrais les yeux pour échapper à l'attraction, à la digestion. Si j'avais continué de la fermer, la réalité de l'attentat se serait refermée sur ce qui me restait de conscience : l'anémone née de la cervelle de Bernard aurait dévoré la mienne, et, si je n'en étais pas mort, peut-être serais-je devenu fou.</p>

      <a href="actu.php" style="text-decoration: none;"><button class="btnindex">Actu</button></a>
      
      <p class="txtindex"> J'aurais rejoint le cœur de l'événement et je me serais décomposé là-bas, en lui, sur ce parquet où nous restions allongés. C'est peut-être cela qui caractérise le fou : être prisonnier à perpétuité de l'événement cruel et impensable qui, croit-il, l'a fondé.</p>

    </section>
    
    

    <section class="sectionindextxt">
      
      <p class="txtindex">Ce fut l’été du marathon de la tartuferie : le spectre du terrorisme, qui avait remplacé celui du communisme comme menace majeure pour la sécurité du pays, laissait la place au spectre de la turlute ; un président des États-Unis, quadragénaire plein de verdeur, et une de ses employées, une drôlesse de vingt-et-un ans folle de lui, batifolant dans le bureau ovale comme deux ados dans un parking, avaient rallumé la plus vieille passion fédératrice de l’Amérique, son plaisir le plus dangereux peut-être, le plus subversif historiquement : le vertige de l’indignation hypocrite."</p>

      <a href="ensavoirplus.php" style="text-decoration: none;"><button class="btnindex">En savoir plus</button></a>

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
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.sectionindeximg{
  margin: 9% 0% 9% 26%;
  width: 50%;
}

.sectionindextxt{
  margin: 7% 0% 5% 27%;
  width: 50%;
}

/*imageeeee*/

#iconeind{
    width: 86%;
    border: 10px solid #F5EBDC;
    display: block;
    box-shadow: -1px 2px 4px -2px #846946;
}

.opacity1{
  margin:auto;
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
.products{
  width: 70%;
  height: 600px;
  /* background-color: red; */
}
.products h4{
  text-align: center;
  margin-bottom: 50px;
}
.products .row{
  width: 100%;
  height: 50%;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.products .row .product{
  width: 400px;
  height: 200px;
  /* background: red; */
}
.products .row .product a{
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  color: inherit;
}
.products .row .product a .status{
  position: relative;
  top: 12px;
  right: 32px;
  width: 40%;
  height: 20px;
  background: maroon;
  border-bottom-right-radius: 5px;
}
.products .row .product a .status p{
  margin: 0;
  color: white;
  font-size: 0.5vw;
}
.products .row .product a img{
  width: 60%;
  height: auto;
}
</style>