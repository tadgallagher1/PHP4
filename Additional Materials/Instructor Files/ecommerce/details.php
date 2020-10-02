<?php

// Author: Kim Moser
// Date: 8/19/2019

$db = new PDO( 'mysql:host=localhost;dbname=ecommerce', 'root', 'root' );

$result = $db->query( 'SELECT * FROM inventory WHERE sku="' . $_REQUEST[ 'sku' ] . '"' );

$row = $result->fetch( PDO::FETCH_ASSOC );
?>

<div style="width: 400px; float: right; border: 1px solid grey; padding: 10px;">
	<form>
		Price: $<?= number_format( $row[ 'unit_price' ], 2 ) ?><br />
		How Many: <input type="number" name="quantity">
		<br />
		<button type="submit">
			Add to Cart
		</button>
	</form>
</div>

<h2><?= $row[ 'title' ] ?></h2>
<h3><?= $row[ 'description' ] ?></h3>

