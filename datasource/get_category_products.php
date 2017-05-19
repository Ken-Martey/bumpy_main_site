<?php
$category_products = null;
if(isset($_GET['cat_id']) || $cat_id) {
	$cat_id = ($cat_id)? $cat_id : $_GET['cat_id'];
	$category_products = $devless->where('orders_category_id', $cat_id)->getData('orders', 'stock')['payload']['results'];
}?>


