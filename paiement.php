<?php session_start() ;


?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Paiement - La pie Lazulie</title>
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

    <section id="backmilieupay">

      <div id="milieupay">

        <div id="displaypay"> 

          <article class="milieudroitpay">
            
            <div>
              <img src="favicon.png">
            </div>
           
            <div>
              <p id="txtpay">Merci de votre confiance ! <br>
              j'espere que vous serais ravis de votre commande !</p>
            </div>
          
          </article>
        
          <article class="milieugauchepay">
          
            <div id="backgauchepay">

              <div id="divinputpay">

                <!-- mettre les placeholder avec les informations du moment -->
                  
                <label class="labelpro" for="confirmation">Titulaire de la carte :</label>
                <input id="inputpro2" type="text" name="#" required><br>
                
                <label class="labelpro" for="confirmation">Email :</label>
                <input id="inputpro2" type="text" name="#" required><br>

                <label class="labelpro" for="confirmation">Numéro de carte:</label>
                <input id="inputpro2" type="text" name="#" required><br>

                <label class="labelpro" for="confirmation">Date d'expiration :</label>
                <input type="date" id="inputpro2" name="trip-start"
                value="2010-01-01"
                min="2018-01-01" max="2040-12-31" required><br>
              
                <label class="labelpro" for="confirmation">CVV :</label>
                <input id="inputpro2" type="text" name="#" required><br>

                <button class="pay">Payer ></button>

              </div>
          
            </div>
          
          </article>
        
        </div>
      
      </div>
    
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

#displaypay{
  display: flex;
}

#backmilieupay{
    padding: 1% 1% 2% 0%;
    margin: 11% 8% 6% 8%;
}

/*#milieupay{
    margin: 1% 2% 0% 3%;
  text-align: center;
  border:2px solid #422B0C;
  border-radius: 8px;
  background-color: white;
}*/

#backgauchepay{
    width: 80%;
    margin: 9% 0% 3% 12%;
    background-color: #faf4ec;
    box-shadow: 0px 1px 17px 3px #E6D5BB;
    padding: 3% 0% 3% 0%;
}

.milieugauchepay{
  width: 50%;
}

.milieudroitpay{
  width: 50%;
  text-align: center;
}

#divinputpay{
  width: 90%;
  margin: auto;
  padding: 3% 0% 3% 0%;
  text-align: center;
  border: 2px dashed #422B0C;
  background-color: white;
  box-shadow: 0px 1px 17px 3px #E6D5BB;
}
}

#txtpay{
    font-size: 20px;
}

.labelpro{
  margin-left: 17%;
  margin-right: -6%;
  float: left;
  width: 31%;
  margin-top: 13px;
  font-size: 17px;
  text-align: initial;
}

#inputpro2{
  font-family: 'Kreon', serif;
  border: 2px solid #888581;
  border-radius: 4px;
  padding: 1%;
  width: 25%;
  margin-bottom: 2%;
  margin-top: 6px;
  height: 17px;
  margin-left: -5%;
}


.pay{
  box-shadow: inset 0px 1px 0px 0px #a6827e;
  background: linear-gradient(to bottom, #a8835e 5%, #7a6855 100%);
  background-color: #a8835e;
  border-radius: 3px;
  border: 1px double #54381e;
  cursor: pointer;
  color: #ffffff;
  font-family: 'Sen', sans-serif;
  font-size: 24px;
  padding: 9px 26%;
  text-decoration: none;
  text-shadow: 0px 1px 0px #4d3534;
  display: block;
  margin: 6% 0% 1% 17%;
  box-shadow: 4px 5px 8px -2px #846946;
}

.pay:hover{
  background:linear-gradient(to bottom, #7a6855 5%, #a8835e 100%);
  background-color:#7a6855;
}

</style>
