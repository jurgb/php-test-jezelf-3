<?php 
	session_start();
	include("products.include.php");

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test jezelf 3</title>
</head>
<body>
	<!-- Het is niet proper om bv een "<li>" te echo'en. Joris Hens gaat hier punten voor aftrekken dus je kan het beter meteen juist doen :) -->
	<ul id='productenlijst'>
		<?php foreach ($producten as $product) { ?>
			<li>
				<img class='product' src='<?php echo $product['photo']; ?>'</img><br/>
				<a href='details.php?trui=<?php echo $product['name'];?>'>Meer info</a>
			</li>
		<?php } ?>
	</ul>
	
	<h1>Uw winkelwagentje</h1>

	<?php include("winkelwagen.include.php");

	?>

	<a href="logout.php">logout</a>

	<style type="text/css">
		#productenlijst{
			
			list-style: none;
			height: 250px;

		}
		#productenlijst li{
			float: left;
		}
		.product{
			width: 200px;
		}

	</style>
</body>
</html>