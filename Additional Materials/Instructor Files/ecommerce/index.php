<?php

// Author: Kim Moser
// Date: 8/19/2019

$db = new PDO( 'mysql:host=localhost;dbname=ecommerce', 'root', 'root' );

$result = $db->query( 'SELECT * FROM inventory' );

?>
<table border="1">
<tr>
	<th>
		Item
	</th>
	<th>
		Price
	</th>
	<th>
		How Many In Stock
	</th>
</tr>
<?php
while ( $row = $result->fetch( PDO::FETCH_ASSOC ) ) {
?>
	<tr>
		<td>
			<a href="details.php?sku=<?= $row[ 'sku' ] ?>">
				<?= $row[ 'title' ] ?>
			</a>
		</td>
		<td>
			$ <?= number_format( $row[ 'unit_price' ], 2 ) ?>
		</td>
		<td>
			<?= $row[ 'in_stock' ] ?>
		</td>
	</tr>
<?php
}
?>
</table>
