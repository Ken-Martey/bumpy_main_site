<?php
include 'header.php';
include 'cart/get_all_cart_item.php';
?>
	<div class="innerHeading bg_f1f1f1 innerHeading-border stripeM">
		<div class="container text-center">
			<h1 class="marginBottomNone">Shopping Cart</h1>
			<div class="breadcrumb">
				<ul class="clearfix">
					<li><a href="index.html">Home</a></li>
					<li>Shopping Cart</li>
				</ul>
			</div><!-- ( BREAD CRUMB END ) -->
		</div>
	</div><!-- ( INNER HEADING END ) -->


	<div id="content" class="productPage">
		<div class="container">
			<div class="stripe stripeM">
				<h2 class="fontsize_30">Shopping Cart</h2>
				<div class="shopingCart">
					<div class="myTable">
						<table class="tableStyle">
							<thead>
								<tr>
									<th class="product-count text-center">No</th>
									<th class="product-thumbnail">Product Image</th>
									<th class="product-name">Name / Description</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-subtotal text-center">Total</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($cart_items as $cart_item) {?>
								<tr>
									<td><?=$cart_item['id']?></td>
									<td>
										<div class="cart-thumb">
											<img src="<?=$cart_item['image']?>" alt=""/>
										</div><!-- ( CART THUMB END ) -->
									</td>
									<td class="text-left">
										<?=$cart_item['name']?>
									</td>
									<td>
										<div class="productQuantity">
											<form method="post" action="view-cart.html#" class="clearfix">
											<?=$cart_item['quantity']?>
												</div><!-- ( PRO QUNTER END ) -->
											</form>
										</div><!-- ( PRODUCT QUANTITY END ) -->
									</td>
									<td class="cl_e85200">GHS <?=$cart_item['price']?></td>
									<?php } ?>
								</tr>
								<tr>
									<td colspan="8">
										<a class="btn cart-btn bg_e85200 floatLeft" href="/">Continue Shopping</a>
										<form method="post" action="<?=$_SERVER['REQUEST_URI']?>">
											<input type="hidden" name="empty_cart">
										<button  type="submit" class="btn cart-btn bg_dfdfdf floatRight" >Clear Shopping Cart</button>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div><!-- ( MY TABLE END ) -->

				
				</div><!-- ( SHOPING CART END ) -->
			</div><!-- ( STRIPE END ) -->
		</div>


		<div class="stripe">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="listingBox">
							<h4 class="dashStyle2">New Products</h4>
							<ul>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum1.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Denim Shirt</strong> Denim Shirt In Short Sleeve</p>
											<strong>$19.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum2.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">T-Shirt</strong> Joker Half Sleeves T-Shirt</p>
											<strong>$99.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum3.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Top</strong> Half Sleeves Orange Top</p>
											<strong>$78.00</strong>
										</div>
									</a>
								</li>
							</ul>
						</div><!-- ( LISTING BOX END ) -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="listingBox">
							<h4 class="dashStyle2">Top Rated Products</h4>
							<ul>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum4.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">T-Shirt</strong> Round Neck Half Sleeves</p>

											<strong>$19.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum5.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Women</strong> Print Half Sleeve Top</p>

											<strong>$15.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum6.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Women</strong> Please Stop Graphic Tee</p>

											<strong>$20.00</strong>
										</div>
									</a>
								</li>
							</ul>
						</div><!-- ( LISTING BOX END ) -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="listingBox">
							<h4 class="dashStyle2">Featured Products</h4>
							<ul>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum8.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Top</strong> Crew neck, Full sleeves</p>
											<strong>$12.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum9.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Top</strong> Crew neck, Full sleeves</p>
											<strong>$18.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum10.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Jeans</strong> Distressed Skinny Fit Jeans</p>
											<strong>$19.00</strong>
										</div>
									</a>
								</li>
							</ul>
						</div><!-- ( LISTING BOX END ) -->
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="listingBox">
							<h4 class="dashStyle2">On Sale</h4>
							<ul>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum11.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Jeans</strong> Calvin Klein Men's Jean</p>
											<strong class="cl_e85200"><del>$29.00</del>$19.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum12.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Short</strong> Banded drawstring waist</p>
											<strong class="cl_e85200"><del>$18.00</del>$15.00</strong>
										</div>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="listingFrame">
											<img src="images/listing-thum13.jpg" alt="">
										</span>
										<div>
											<p><strong class="listTitle">Bags</strong> Genuine leather exterior</p>
											<strong class="cl_e85200"><del>$36.00</del>$26.00</strong>
										</div>
									</a>
								</li>
							</ul>
						</div><!-- ( LISTING BOX END ) -->
					</div>
				</div>
			</div>
		</div><!-- ( STRIPE END ) -->
	</div><!-- ( CONTENT END ) -->


	<footer class="footer style1">

    <div class="bottom_bar">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <ul class="clearfix sepraterLi foterNav">
              <li><a href="aboutus.html">About us</a></li>
              <li><a href="blog-1_2-column.html">Blog</a></li>
              <li><a href="2-grid-layout-with-banner.html">Shop</a></li>
              <li><a href="contactus.html">Contact us</a></li>
            </ul><!-- ( FOOTER NAV END ) -->
            <div class="copyright">&copy; 2017 Bumpy shoppers club
              <ul class="list-inline">
                <li><a href="3-grid-masonry-layout-sidebar.html#">All Rights Reserved</a></li>
              </ul>
            </div><!-- ( COPYRIGHT END ) -->
          </div>
          <div class="col-md-5">
            <div class="social_links">
              <ul class="list-inline">
                <li>Follow us</li>
                <li><a href="3-grid-masonry-layout-sidebar.html#"><i class="fa fa-facebook-square"></i>&nbsp;</a></li>
                <li><a href="3-grid-masonry-layout-sidebar.html#"><i class="fa fa-twitter-square"></i>&nbsp;</a></li>
                <li><a href="3-grid-masonry-layout-sidebar.html#"><i class="fa fa-instagram"></i>&nbsp;</a></li>
                <li><a href="3-grid-masonry-layout-sidebar.html#"><i class="fa fa-youtube-square"></i>&nbsp;</a></li>
              </ul>
            </div><!-- ( SOCIAL LINKS END ) -->
          </div>
        </div>
      </div>
    </div><!-- ( BOTTOM BAR END ) -->
  </footer><!-- ( FOOTER END ) -->

	<a href="view-cart.html#" class="scroll_top"><i class="fa fa-chevron-up fa-2x"></i></a><!-- ( SCROLL TOP END ) -->

</div><!-- ( WRAPPER END ) -->

<div class="overlay"></div><!-- ( OVERLAY END ) -->

<!-- ( JQUERY LIBRARY LINKS ) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/colorbox-min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>

<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js@rev=5.0"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js@rev=5.0"></script>

<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- share this JS Files -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://ws.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "a7c8641b-6c3a-4b59-98ce-510413a4dab4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<script src="js/jquery.matchHeight-min.js"></script>
<!-- theme custom JS Files -->
<script src="js/configuration.js"></script>
</body>
</html>
