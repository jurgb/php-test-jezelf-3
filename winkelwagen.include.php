<div>
	<?php if (isset($_SESSION['cart'])) { ?>
		<ul id='winkelmand'>
			<?php foreach ($_SESSION['cart'] as $cart) { ?>
				<li><?php echo $cart; ?></li>
			<?php } ?>
		</ul>
	<?php } else { ?>
		Winkelmandje is leeg
	<?php } ?>
</div>
