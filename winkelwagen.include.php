<div>
	<?php
		session_start();
	
	if (isset($_SESSION[cart])) {
		
		echo "<ul id='winkelmand'>";

		foreach ($_SESSION['cart'] as $cart) {
			
			echo "<li>" . $cart . "</li>";

		}
		echo "</ul>";
	}
	else
	{
		echo "Winkelmandje is leeg";
	}
	
	?>
</div>
