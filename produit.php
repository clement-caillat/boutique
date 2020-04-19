<?php
	require('libraries/config.php');
	$product = new Product;
	$product->productInfos($_GET['p']);
	$product->image = str_replace('../', '', $product->image);
	if(empty($_SESSION['user'])){
		$ip = gethostbyname($_SERVER['REMOTE_ADDR']);
		$id = $product->id;
		$o = new Product;
		$o->newVisit($id, $ip);
		$o = null;
	}else{
		$idproduct = $product->id;
		$o = new Product;
		$o->newVisit($idproduct, $_SESSION['user']->id);
		$o = null;
	}

	if(empty($product) || empty($_GET['p'])){
		header('Location: vitrine.php');
	}

	
	if(isset($_POST['add_to_cart'])){
		if(isset($_SESSION['user'])){
			foreach($product->stock as $size){
				if($_POST['product_size'] == $size->id){
					if($_POST['quantity'] <= $size->quantity){
						$_SESSION['user']->addToCart($product->id, $_POST['quantity'], $_POST['product_size']);
						header('Location: '.$_SERVER['REQUEST_URI']);
					}
				}
			}
		}else{
			header('Location: connexion.php');
		}
	}
?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Produit - La pie Lazulie</title>
    <!-- <link rel="stylesheet" href="#"> -->
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
			
		<section class="hautproduit">
			
			<article id="photoprod">

				<div id="backprod">
					<div id="backprodblanc">
						<img id="bracelet" src="<?php echo $product->image; ?>">
					</div>
				</div>
			</article>


			<article id="detailprod">

				<ul class="breadcrumb">
				  <li><a href="/boutique">Accueil</a></li>
				  <li><a href="vitrine.php">Tout</a></li>
				  <li><a href="vitrine.php?category=<?php echo $product->category[0]; ?>">Catégorie</a></li>
				  <li><?php echo $product->name; ?></li>
				</ul>
				<H2 id="titreprod"><?php echo $product->name; ?></H2>

				<div id="descriptionprod"><?php echo $product->description; ?></div>
				<hr id="hr1prod">
					<div class="espaceprod">
					
						<label>
						<?php if(!empty($product->stock)){ ?>
							<span class="optprod">Tailles : </span>
						</label>
						<?php foreach($product->stock as $pricepersize){ ?>
				<h2 id="prixprod"><?php echo $pricepersize->name;?> : <?php echo $pricepersize->price; ?> €</h2>
				<?php } ?>

				<?php foreach($product->stock as $quantitypersize){ ?> 
					<p class="<?php if($quantitypersize->quantity <= 5){ echo "infoe"; }else{ echo "info"; } ?>"><?php if($quantitypersize->quantity <= 5){ echo "Plus que "; } ?><?php echo $quantitypersize->quantity; ?> articles taille <?php echo $quantitypersize->name; ?> en stock</p> 
				<?php } ?>

					</div>

					<div class="espaceprod">
						<br>
						<a href="https://www.a-lafont.com/vetements-professionnels-cuisine-accueil-hotellerie/lafont/nos-services/guide-des-tailles/" id="guidetaille">Voir le guide des tailles</a>
						<br>
					</div>


					<form method="post" class="espaceprod">
					<label>Taille : </label><select name="product_size">
					<?php foreach($product->stock as $size){ ?>
						<option value="<?php echo $size->id;?>"><?php echo $size->name; ?></option>
					<?php } ?>		
					</select><br><br>
						<label>Quantité : </label><input type="number" name="quantity" id="nombreprod" onKeyDown="return false" value="1" min="1" name="#"> pièce(s)<br><br>
						<input type="submit" name="add_to_cart"  id="add_cart_button" value="Ajouter au panier">	
					</form>
					<?php }else{ ?>
							<p class="nostock">Cet article n'est pas disponible</p>
						<?php } ?>

				<button id="btnshare"><img class="share" id="shareespace" src="images/share.png"></button>

			</article>

		</section>

		<hr id="hr2prod">

		<section class="section2prod">

			<div id="descriptionprodplus">

				<h3>Description</h3>
				<p>
					<?php echo $product->description; ?>
				</p>

			</div>

			<div>

				<h3>Etiquettes</h3>
				<p><?php echo $product->tags; ?></p>

			</div>
			<div>

				<h3>Catégorie</h3>
				<p><a href="vitrine.php?category=<?php echo $product->category[0]; ?>"><?php echo $product->category[1]; ?></a></p>

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
    height: auto;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
	font-family: 'Sen', sans-serif;
}
a{
	color: inherit;
}
.info{
	color: green;
}
.infoe{
	color: red;
}
.nostock{
	color: red;
}
main {
    width: 100%;
    height: auto;
    margin-top: 3%;
}

.hautproduit{
	display: flex;
	width: 100%;
    margin-top: 6%;
}
#add_cart_button{
	cursor: pointer;
	border: 2px solid #422B0C;
	height: 50px;
	width: 200px;
	background-color: #fdc67f;
	color: #422B0C;
	font-size: 1vw;
	border-radius: 10px;
}
#detailprod{
	width: 53%;
}

#photoprod{
	width: 57%;
}

#bracelet{
	width: 85%;
	margin: auto;
}

#backprod{
	background: url(afri1.jpg);
    width: 50%;
    height: auto;
    margin-left: 45%;
    padding-top: 2%;
    padding-bottom: 2%;
}

#backprodblanc{
	background-color: white;
    width: 90%;
    height: 90%;
    text-align: center;
    margin: auto;
    padding-top: 5%;
    padding-bottom: 5%;
}

.petiteimgprod{
	margin-top: 5%;
    margin-left: 45%;
}

.imgplusprod{
    max-width: 128px;
    height: 128px;
    margin-right: 8%;
    border:3px solid #846946;
}

ul.breadcrumb {
  padding: 10px 7px;
  list-style: none;
}

ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}

ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}

ul.breadcrumb li a {
  color: #D3A00D;
  text-decoration: none;
}

ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}

#titreprod{
	border-bottom: 2px dashed #422B0C;
    border-top: 2px dashed #422B0C;
    margin-right: 74%;
    padding-top: 1%;
    margin-top: 6%;
    margin-bottom: 6%;
    padding-bottom: 1%;
    text-align: center;
}

#descriptionprod{
	margin-bottom: 3%;
}

#hr1prod{
    margin-right: 73%;
    margin-left: 6%;
}

#prixprod{
	margin-bottom: 3%;
    margin-top: 2%;
    font-size: 29px;
}

.optprod{
	font-size: 18px;
}

#guidetaille{
	color: #3B65AD;
}

#nombreprod{
	width: 30px;
}

.espaceprod{
	margin-bottom: 3%;
}

#shareespace{
	margin-top: 7%;
}

#hr2prod{
	margin-left: 16%;
    margin-right: 16%;
    margin-bottom: 2%;
    margin-top: 4%;
}

.section2prod{
	width: 54.5%;
	margin:auto;
	margin-bottom:4%;
	margin-top:4%;
}

#descriptionprodplus{
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