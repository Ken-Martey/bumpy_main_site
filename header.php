<?php
include 'datasource/devless_connect.php';
include 'datasource/get_categories.php';
include 'datasource/get_sub_categories.php';
include 'cart/get_all_cart_items.php';
include 'datasource/auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Bumpy Shoppers Club</title>
    <link rel="icon" href="images/favicon.jpg" type="image/png" />

	<!-- ( CSS LIBRARY LINKS ) -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/default.css@ver=2112.css" rel="stylesheet">

	<!-- ( RS5.0 MAIN STYLESHEET ) -->
	<link rel="stylesheet" href="revolution/css/settings.css">
	<!-- RS5.0 LAYERS AND NAVIGATION STYLES -->
	<link rel="stylesheet" href="revolution/css/layers.css">
	<link rel="stylesheet" href="revolution/css/navigation.css">

    <link href="css/mediaQueries.css@ver=2.9.2.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<div id="wrapper">
 <header class="header style1">
    <div class="top_bar">
      <div class="container">
        <div class="col-md-6 top_left">
          <ul class="list-inline sepraterLi">
            <i class="fa fa-clock-o"></i> Delivery within 48hours |
            <i class="fa fa-shopping-cart"></i> Easy to Order |
            <i class="fa fa-phone-square"></i> Call Us : +233 20 921 5154

          </ul>
        </div><!-- ( TOP LEFT END ) -->

        <div class="col-md-6 top_right">
          <ul class="list-inline">
          <?php if(isset($_SESSION['user_profile'])){ ?>
            <li><a href="/?logout=1">Logout (<?=$_SESSION['user_profile']['username']?>)</a></li>
          <?php } else { ?>
            <li><i class="fa fa-key fa-fw"></i> <a href="login-register.php">Register</a>
              <ul class="sepraterLi">
                <li><a href="login-register.php">Login</a></li>
              </ul>
            </li>
          <?php } ?>

            <li><a href="#"><i class="fa fa-facebook-square"></i>&nbsp;</a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i>&nbsp;</a></li>
            <li><a href="#"><i class="fa fa-instagram"></i>&nbsp;</a></li>
          </ul>
        </div><!-- ( TOP RIGHT END ) -->
      </div>
    </div><!-- ( TOP BAR END ) -->

    <div class="container">
      <div class="head_inner">
        <div class="logo">
          <a href="/">
            <img src="images/bumpy_logo.jpeg" alt="Bumpy shoppers club"/>
          </a>
        </div><!-- ( LOGO END ) -->

        <nav class="clearfix">
          <div class="mbmenu">
            <a href="index.html#">Menu
              <span class="lines"><span></span><span></span><span></span></span>
            </a>
          </div><!-- ( MBMENU END ) -->

          <div class="main_menu_cont">
            <ul class="main_menu">
              <!-- <li class="mobSearch">
                <div class="nav_search">
                  <form action="product-search.html" method="get" class="searchform">
                    <input type="text" placeholder="Type and hit enter ..." value="" name="s" class="field searchform-s">
                    <button type="submit" class="submit"><i class="fa fa-search fa-fw"></i></button>
                  </form>
                </div><!-- ( NAV SEARCH END ) -->
              </li>
              <li class="menu-item menu-item-has-children"><a href="/" class="active">Home</a>

              </li>
              <?php foreach($categories as $category){?>
              <li class="menu-item menu-item-has-children"><a href="product-list.php?cat_id=<?=$category['id']?>"><?=$category['name']?></a>
                <ul class="sub-menu">
                      <?php foreach($sub_categories as $sub_category) {?>
                      <?php if($sub_category['orders_category_id'] == $category['id']){?>
                      <li><a href="product-list.php?cat_id=<?=$category['id']?>"><?=$sub_category['name']?></a></li>
                      <?php } ?>
                      <?php } ?>

                </ul>
              </li>
              <?php } ?>
              <!-- <li class="menu-item"><a href="#">Event</a>

              </li>
              <li class="menu-item"><a href="#">News</a>

              </li> -->
              <li class="menu-item menu-item-has-children"><a href="contact_us.php">Contact</a>

              </li>
            </ul>
          </div><!-- ( MAIN MENU END ) -->

          <div class="nav_search mobile_none">
            <!-- <a href="index.html#" class="searchBTN fa fa-search fa-fw"></a> -->
            <!-- <div class="mini-search">
              <div class="dropBox">
                <form action="product-search.html" method="get" class="searchform">
                  <input type="text" placeholder="Type and hit enter ..." value="" name="s" class="field searchform-s">
                  <button type="submit" class="submit"><i class="fa fa-search fa-fw"></i></button>
                </form>
              </div>
            </div> -->
            <!-- ( MINI SEARCH END ) -->
          </div><!-- ( NAV SEARCH END ) -->

          <div class="mini-cart">
            <div class="cartHover">
              <span class="cartBTN">GHS <?=$_SESSION['cart_total_price']?:0?></span>
              <span class="cart-icon">
                <i class="itemCount"><?=$_SESSION['cart_total_quantity']?:0?></i>
                <i class="fa fa-shopping-cart"></i>
              </span><!-- ( CART ICON END ) -->
            </div><!-- ( CART HOVER END ) -->
            <div class="cartSummery">
              <div class="dropBox">
                <p class="fontsize_16">You have <?=$_SESSION['cart_total_quantity']?> items in your cart</p>
                <ul>
                 <?php foreach($cart_items as $cart_item){?>
                  <li>
                    <a href="index.html#">
                      <span class="cartThum">
                        <img src="<?=$cart_item['image']?>" alt="">
                      </span>
                      <div>
                        <p class="itemName clearfix"><?=$cart_item['name']?><span class="floatRight fontsize_18">GHS<?=$cart_item['price']?></span></p>
                        <p class="itemDes"><br>Qty: <?=$cart_item['quantity']?></p>
                      </div>
                    </a>
                    <form method="post" action="<?=$_SERVER['PHP_SELF']?>">
                      <input type="hidden" name="remove_from_cart" value="1">
                      <input type="hidden" name="item_id" value="<?=$cart_item['id']?>">
                      <button class="itemDelete"><i class="fa fa-times"></i></button>
                    </form>
                  </li>
                  <?php }?>
                </ul>
                <div class="totalPrice">
                  <a href="view-cart.php" class="btn cart-btn bg_61760d floatLeft">View Cart</a>
                  <a href="checkout.php" class="btn cart-btn bg_e85200 floatLeft">Checkout</a>
                  <span>Total</span>GHS <?=$_SESSION['cart_total_price']?>
                </div><!-- ( TOTAL PRICE END ) -->
                <div class="cartSummeryText">
                  Free Shipping On Orders Over $100 <br>Easy Returns To Bumpy Rack Stores Or By Mail
                </div>
              </div><!-- ( DROP BOX END ) -->
            </div><!-- ( CART SUMMERY END ) -->
          </div><!-- ( MINI CART END ) -->
        </nav>
      </div><!-- ( HEADER INNER END ) -->
    </div>
  </header><!-- ( HEADER END ) -->
