<?php
	require('libraries/config.php');
	$c = new Product;
	$categories = $c->getCategories();
	$c = null;

	if(isset($_GET['category'])){
		$p = new Product;
		$products = $p->getProductInfos($_GET['category']);
		$p = null;
		$c = new Product;
		$categoryname = $c->getCategoryName($_GET['category']);
		$c = null;
	}
	else{
		$p = new Product;
		$products = $p->getProductInfos(null);
		$p = null;
	}


	
?>

<!DOCTYPE html>

<html>

  <head>

    <meta charset="UTF-8">
    <title>Vitrines - La pie Lazulie</title>
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
			
		<section id="sectionvitrine">

			<article id="cotecategorie">
				<a href="vitrine.php" class="categ"><button class="categoriebtn co"><div class="policebtn">Tout</div></button></a>
			<?php foreach($categories as $category){ ?>

				<a href="?category=<?php echo $category->id; ?>" class="categ"><button class="categoriebtn col"><div class="policebtn"><?php echo $category->title; ?></div></button></a>
				
			<?php } ?>
			</article>

			<article id="coteproduit">

				<h1 class="titrevitrine"><?php if(isset($_GET['category'])){ echo $categoryname; }else{ echo "Tout"; } ?></h1>

				<p class="titrevitrine"><?php if(empty($products)){ echo "Il n'y a aucun produit de cette catégorie"; } ?></p>

					<div class="lignevitrine">
						<?php foreach($products as $product){ 
							$product->image = str_replace('../', '', $product->image);	
							
						?>
						<div class="backvitrine">
							<div class="backvitrineblanc">
								<a class="opacity1" href="produit.php?p=<?php echo $product->id; ?>"><img id="bracelet" src="<?php echo $product->image; ?>"></a>
								<h4><?php echo $product->title; ?></h4>
							</div>
						</div>
						<?php } ?>
					</div>
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
    margin-top: 3%;
}

#sectionvitrine{
	display: flex;
}

#cotecategorie{
	width: 15%;
	display: grid;
	border-right: 1px solid;
	grid-template-columns: repeat(2fr); 
    grid-auto-rows: 100px; 
}

#coteproduit{
	width: 85%;
}
.categ{
	width: 100%;
}
.categ .categoriebtn{
    border: none;
    font-size: larger;
    background-color: white;
    cursor: pointer;
    height:120px;
	width: 100%;
}

.policebtn{
	font-family: 'Sen', sans-serif;
}

.co:hover{
	color: white;
	background-color:  #846946;
}

.col:hover{
	color: white;
	background-color:  #422B0C;
}

.colo:hover{
	color: white;
	background-color:  #D3A00D;
}

.color:hover{
	color: white;
	background-color:  #426FBE;
}

.colore:hover{
	color: white;
	background-color:  #2B487C;
}

.titrevitrine{
	text-align: center;
    margin-top: 3%;
}

.lignevitrine{
	display: grid;
	grid-template-columns: repeat(5, 1fr);
    grid-gap: 10px;
    grid-auto-rows: minmax(100px, auto);
	margin-top: 6%;
}

.backvitrine{
	background: url(afri1.jpg);
    width: 100%;
    height: 50%;
    padding-top: 1%;
    padding-bottom: 1%;
}

.backvitrineblanc{
	background-color: white;
    width: 90%;
    height: 90%;
    text-align: center;
    margin: auto;
    padding-top: 5%;
    padding-bottom: 5%;
}

#bracelet{
	width: 85%;
	margin: auto;
}

.opacity1{
  opacity: 1;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.opacity1:hover{
  opacity: .5;
}



</style>

<!-- #422B0C Marron foncé
#faf4ec Blanc cassé
 #D3A00D Ocre
Blanc
noir
#846946 Marron clair
#345897 bleu marine -->