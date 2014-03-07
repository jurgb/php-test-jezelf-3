<?php
	include("products.include.php");
	$trui = $_GET['trui'];


	if(!empty($_POST))
	{
		
		$productcode = $_POST[trui];
		session_start(); // dit linkt uw sessie aan uzelf
		$_SESSION['cart'] = array();
		array_push($_SESSION['cart'],$productcode);
		header("location: product.php");
	}


?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		foreach ($producten as $product) 
		{
			if ($product[name] == $trui) {
				echo "<img class='product' src='" . $product[photo] . "'</img><br/>";
				echo "<h1>Extra info over trui ". $trui ."</h1>";
				echo "<p class='info'>" . $product[info] . "</p>";
			}
		}
	?>

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