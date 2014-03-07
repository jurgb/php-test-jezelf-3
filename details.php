<?php
	session_start(); // Sessie altijd best bovenaan de pagina's starten. Dan hebt ge minder conflicten met includes :)
	
	include("products.include.php");
	$trui = $_GET['trui'];


	if(!empty($_POST))
	{
		$productcode = $_POST['trui'];
		
		 // Kijken of de sessie bestaat en of deze niet leeg is
		if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
		{
			// Item toevoegen aan de sessie
			array_push($_SESSION['cart'],$productcode);
		} else {
			// Als de sessie niet bestaat, hier een array met 1 product code inzetten
			$_SESSION['cart'] = array($productcode);
		}
		
		header("location: product.php");
	}


?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($producten as $product) {
		if ($product['name'] == $trui) { ?>
			<img class='product' src='<?php echo $product['photo']; ?>'</img><br/>
			<h1>Extra info over trui <?php echo $trui; ?></h1>
			<p class='info'><?php echo $product['info'] ?></p>
	<?php } } ?>

	<form action='' method='post'>
		<input type="hidden" name="trui" value="<?php echo $trui ?>">
		<input type='submit' value='Koop nu!'>
	</form>


	<h1>Uw winkelwagentje</h1>

	<?php include("winkelwagen.include.php");

	?>


	<style type="text/css">
		.product,
		.info{
			padding-left: 50px;
			width: 200px;
		}
		#productkey{
			display: none;
		}

	</style>
</body>
</html>
