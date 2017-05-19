<?php
$single_product = null;
if(isset($_GET['product_id']) || $product_id) {
	$product_id = ($product_id)? $product_id : $_GET['product_id'];
	$single_product = $devless->related('*')->where('id', $product_id)->getData('orders', 'stock')['payload']['results'][0];
}
?>

