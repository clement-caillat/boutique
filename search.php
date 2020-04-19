<?php
    require_once('libraries/config.php');
    $r = new Product;
    $results = $r->search($_GET['q']);
    $r = null;
?>


<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Recherche - <?php echo $_GET['q']; ?></title>
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

  <?php 
  
  if(!empty($results)){
  foreach($results as $result){ 
    $image = str_replace('../', '', $result->image);  
    ?>
    <div class="result">
        <div class="image">
            <a href="produit.php?p=<?php echo $result->id; ?>"><img src="<?php echo $image; ?>"></a>
        </div>
        <div class="infos">
            <h3><a href="produit.php?p=<?php echo $result->id; ?>"><?php echo $result->title; ?></a></h3>
            <h5><?php echo $result->description; ?></h5>
            <p><a href="vitrine.php?category=<?php echo $result->cid; ?>"><?php echo $result->cname; ?></a></p>
        </div>
    </div>
<?php } }else{ ?>
    <p>Aucun résultat pour <?php echo $_GET['q']; ?></p>
  <?php } ?>
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
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    font-family: 'Sen', sans-serif;
}

main {
    width: 100%;
    height: 100%;
    padding-top: 20px;
    box-sizing: border-box;
    overflow: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.result{
    height: 150px;
    width: 30%;
    display: flex;
    border: 2px solid #422B0C;
    margin-bottom: 50px;
}
.result .image{
    width: 20%;
    height: 100%;

    box-sizing: border-box;
}
.result a{
    width: 100%;;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.result .image img{
    width: 80%;
    height: auto;
}

.result .infos{
    width: 80%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
}
.result .infos a{
    color: inherit;
    text-decoration: none;
}

</style>