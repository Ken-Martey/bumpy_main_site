<?php 

session_start();

class Registry 
{
	private $devless = null;
	function __construct($devless)
	{
		$this->devless = $devless;
		$_SESSION['registry'] =
		 (!$_SESSION['registry'])? [] : $_SESSION['registry'];
	}

	public function addAWish($productId)
	{
		foreach ($_SESSION['wishlist'] as $wishes) {
			if($productId == $wishes['id']){
				$_SESSION['notify_color'] ='#a6fb86';
				$_SESSION['notify_message'] = 'You already have this to registry';
				return true;
			}
		}
		$product = $this->devless->where('id', $productId)
			->getData('orders', 'stock')['payload']['results'][0];

		return array_push($_SESSION['registry'], $product);
	}

	public function getAllWishes()
	{
		return $_SESSION['registry'];
	}

	public function forgetAllWishes()
	{
		return $_SESSION['registry'] = [];
	}

	public function deleteWish($index)
	{
		array_splice($_SESSION['registry'], intval($index), 1);
	}

}

$registry = new Registry($devless);

if(isset($_POST['addAWish'])){
	
	$registry->addAWish($_POST['addAWish']);
	$_SESSION['notify_color'] ='#a6fb86';$_SESSION['notify_message'] = 'Added to Wish List';
}

if(isset($_POST['forgetAllWishes'])){
	$registry->forgetAllWishes();
	$_SESSION['notify_color'] ='#a6fb86';$_SESSION['notify_message'] = 'Your wishes have been cleared';
}

if(isset($_POST['deleteWish'])){
	$registry->deleteWish($_POST['deleteWish']);
	$_SESSION['notify_color'] ='#a6fb86';$_SESSION['notify_message'] = 'Wish deleted successfully';
}
