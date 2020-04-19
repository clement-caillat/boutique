<?php
  require_once('libraries/config.php');
?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>FAQ - La pie Lazulie</title>
    <link rel="stylesheet" href="#">
    <link href="https://fonts.googleapis.com/css?family=Kreon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Charmonman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png"/>

  </head>

  <?php
      require_once('header.php');
  ?>


<body>

  <main>

    <section class="sectionfaq" id="sectionfaq1" >
      <h1 class="question">Pourquoi est-ce que je ne trouve soudainement plus un certain article?</h1>
      <article class="reponse">
        Dans notre boutique en ligne, vous voyez uniquement les articles que nous avons en stock. Street One produit douze collections par an. Afin d’avoir chaque mois de la place pour la dernière mode, nous ne recommandons normalement aucun article. Il est possible que des articles, des couleurs ou des tailles particulièrement prisés soient épuisés en peu de temps. Faites le tour de notre boutique – vous trouverez sûrement dans notre gamme un autre article qui vous plaît. Ou tentez votre chance dans un magasin Street One près de chez vous. Il est possible que l’article que vous souhaitez acheter y soit encore en stock. Vous trouverez le vendeur le plus proche dans notre "Recherche de magasin".
      </article>

      <!-- ajouter droit php seulement admin -->
          <button class="ajouter">Modifier l'article</button>

      <hr id="hrsavoir">
    </section>


    <section class="sectionfaq">
      <h1 class="question">Livrez-vous également à l’étranger?</h1>
      <article class="reponse">
      La livraison de nos colis s'effectue en France métropolitaine, y compris la Corse et Monaco, à l’exclusion des DOM-TOM.
      La conclusion du contrat s'effectue en français et vous recevrez tous les documents en français. Si vous résidez à l’étranger, utilisez notre Recherche de magasin, pour trouver un vendeur près de chez vous. Pour les commandes vers la Belgique ou la Suisse, veuillez vous rendre sur notre boutique en ligne via www.street-one.be/fr ou www.street-one.ch/fr.
      </article>

      <!-- ajouter droit php seulement admin -->
          <button class="ajouter">Modifier l'article</button>

      <hr id="hrsavoir">
    </section>


    <section class="sectionfaq">
      <h1 class="question">Le paiement en ligne est-il sécurisé?</h1>
      <article class="reponse">
        Nous attachons une grande importance à la sécurité lors des transactions. Vos données sont transmises uniquement sous forme cryptée, de sorte que des tiers ne puissent pas les lire. Votre paiement par carte de crédit est traité par un partenaire certifié en matière de sécurité.
      </article>

      <!-- ajouter droit php seulement admin -->
          <button class="ajouter">Modifier l'article</button>

      <hr id="hrsavoir">
    </section>

        <section class="sectionfaq">
      <h1 class="question">À combien s’élèvent les frais d’expédition?</h1>
      <article class="reponse">
        La livraison est gratuite. Toutefois, pour toute commande de moins de 24 €, nous facturons 3,95 € de frais d’envoi (TVA incl.), peu importe le nombre de colis.
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

.sectionfaq {
  width: 100%;
  height: auto;
}

#sectionfaq1{
  margin-top: 7%;
}

.question{
  font-size: 28px;
  font-family: 'Sen', sans-serif;
  margin-bottom: 30px;
  padding: 0.6%;
  margin-left: 20%;
  color: #422B0C;
  letter-spacing: 0.7px;
}

.reponse{
  font-size: 18px;
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
  margin-bottom: 2%;
  background-image: -webkit-linear-gradient(left, #846946, #f0f0f0);
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


</style>