<?php 
include("products.include.php");

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test jezelf 3</title>
</head>
<body>
	<?php
	echo "<ul id='productenlijst'>";
		foreach ($producten as $product) 
		{
			echo "<li>";
			echo "<img class='product' src='" . $product[photo] . "'</img><br/>";
			echo "<a href='details.php?trui=". $product[name]."'>Meer info</a>";
			echo "</li>";
		}
	echo "</ul>";

	?>
	
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