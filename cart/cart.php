<?php
session_start();

class Cart
{
	public function add_to_cart
	(
		$item_id,
	  $item_name,
		$item_image,
	  $item_price,
    $item_quantity=1
	)
	{
		$new_item = [
			'id' => $item_id,
			'name' => $item_name,
			'price' => $item_price,
			'image' => $item_image,
			'quantity' => $item_quantity
		];


		$index = $this->check_if_exist_in_cart($item_id);
		$_SESSION['cart_total_quantity'] += $item_quantity;
		$_SESSION['cart_total_price'] += $item_quantity * $item_price;
		$_SESSION['notify_message'] = 'Product successfully added to cart ';$_SESSION['notify_color'] ='#80D651';

    	$_SESSION['cart'] = $_SESSION['cart']?:[];


		if($index !== false){
			$_SESSION['cart'][$index]['quantity'] += $item_quantity;
			$_SESSION['cart'][$index]['price'] = intval($_SESSION['cart'][$index]['quantity']) * floatval($item_price);
			return $_SESSION['cart'];
		}
		array_push($_SESSION['cart'], $new_item);
		return $_SESSION['cart'];
	}

	public function remove_from_cart($id)
	{
		foreach($_SESSION['cart'] as $cart_key => $cart_item) {
			if($cart_item['id'] == $id){
				$_SESSION['cart_total_quantity'] =
				 $_SESSION['cart_total_quantity'] - $_SESSION['cart'][$cart_key]['quantity'];
				$_SESSION['cart_total_price'] =
				$_SESSION['cart_total_price'] - $_SESSION['cart'][$cart_key]['price'];
				unset($_SESSION['cart'][$cart_key]);
				$_SESSION['notify_message'] = 'Product removed from cart';$_SESSION['notify_color'] ='#a6fb86';

				return true;
			}
		}
		return false;
	}

	public function get_cart_item($id)
	{
		$count = 0;
		foreach($_SESSION['cart'] as $cart_item) {
			if($cart_item[$id] == $id){
				return $_SESSION['cart'][$count];
			}
			$count++;
		}
		return false;
	}

	public function get_all_cart_items()
	{
		return $_SESSION['cart'];
	}

	public function check_if_exist_in_cart($id)
	{
		foreach($_SESSION['cart'] as $cart_key => $cart_item) {
			if($cart_item['id'] == $id){
				return $cart_key;
			}
		}
		return false;
	}

	public function empty_cart()
	{
		$_SESSION['cart_total_quantity'] = 0;
		$_SESSION['cart_total_price'] = 0;
		return $_SESSION['cart'] = null;
	}
}

$cart = new Cart();

//cart handler
if(isset($_POST['add_to_cart'])){
	$product_id = $_POST['item_id'];
	$devless->setUserToken($_SESSION['user_token']);
	$product = $devless->where('id', $product_id)->getData('orders', 'stock')['payload']['results'][0];
  $price = (!isset($devless->call('devless', 'profile', [])['payload']['error']))? $product['clubPrice']:$product['origPrice'];
	$cart->add_to_cart($_POST['item_id'], $product['name'], $product['image'], $price, $_POST['item_quantity']);

	header("Location:".$_SERVER['REQUEST_URI']);

}

if(isset($_POST['remove_from_cart'])){
	$cart->remove_from_cart($_POST['item_id']);
	header("Location:".$_SERVER['REQUEST_URI']);
}

if(isset($_POST['empty_cart'])){
	$cart->empty_cart();
  $_SESSION['cart_total_price'] = 0;
  $_SESSION['cart_total_quantity'] = 0;
	header("Location:".$_SERVER['REQUEST_URI']);
}
