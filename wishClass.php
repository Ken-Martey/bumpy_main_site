<?php 

session_start();

class WishList 
{
	private $devless = null;
	function __construct($devless)
	{
		$this->devless = $devless;
		$_SESSION['wishlist'] =
		 (!$_SESSION['wishlist'])? [] : $_SESSION['wishlist'];
	}

	public function addAWish($productId)
	{
		foreach ($_SESSION['wishlist'] as $wishes) {
			if($productId == $wishes['id']){
				$_SESSION['notify_color'] ='#a6fb86';
				$_SESSION['notify_message'] = 'You already have this as a wish';
				return true;
			}
		}
		$product = $this->devless->where('id', $productId)
			->getData('orders', 'stock')['payload']['results'][0];

		return array_push($_SESSION['wishlist'], $product);
	}

	public function getAllWishes()
	{
		return $_SESSION['wishlist'];
	}

	public function forgetAllWishes()
	{
		return $_SESSION['wishlist'] = [];
	}

	public function deleteWish($index)
	{
		array_splice($_SESSION['wishlist'], intval($index), 1);
	}

}

$wishlist = new WishList($devless);

if(isset($_POST['addAWish'])){
	//die($_POST['addAWish']);
	$wishlist->addAWish($_POST['addAWish']);
	$_SESSION['notify_color'] ='#a6fb86';$_SESSION['notify_message'] = 'Added to Wish List';
}

if(isset($_POST['forgetAllWishes'])){
	$wishlist->forgetAllWishes();
	$_SESSION['notify_color'] ='#a6fb86';$_SESSION['notify_message'] = 'Your wishes have been cleared';
}

if(isset($_POST['deleteWish'])){
	$wishlist->deleteWish($_POST['deleteWish']);
	$_SESSION['notify_color'] ='#a6fb86';$_SESSION['notify_message'] = 'Wish deleted successfully';
}
