<?php
include 'header.php';
include 'datasource/get_category_products.php';
?>

	<div id="banner" class="stripe banner">
		<img src="images/3-grid-masonry-layout-sidebar-with-banner.jpg" alt=""/>
		<div class="bannerText">
			<div class="container">
				<div class="bantitle1 fontsize_34 cl_ffffff bold">It has Finally started...</div>
				<h2 class="bantitle2 cl_ffffff uppercase bold">Join Bumbers Club</h2>
				<div class="bantitle3 fontsize_27 cl_ffffff">UP TO 50% OFF</div><br>
				<a href="login-register.php" class="banner_borderbtn bc_ffffff">Join Now</a>
			</div>
		</div>
	</div><!-- ( BANNER END ) -->


	<div id="content" class="productPage">
		<div class="container">
			<div class="topSection">
				<div class="breadcrumbRow clearfix">
					<div class="row">
						<div class="col-xs-12 col-sm-5 text-xs-center">
							<h2>Shop</h2>
						</div>
						<div class="col-xs-12 col-sm-7">
							<div class="breadcrumb">
								<ul class="clearfix text-right text-xs-center">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Shop</a></li>
									<li>Bumpy listings</li>
								</ul>
							</div><!-- ( BREAD CRUMB END ) -->
						</div>
					</div>

				</div><!-- ( BREAD CRUMB ROW END ) -->
				<div class="sorting clearfix">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-6 text-xs-center">
							<span class="filterBTN"><a href="#_" class="toggleNav"><i class="fa fa-bars"></i><span>Category Filter</span></a></span>

							<aside class="slideNav closed">
								<a class="close-btn"><i class="fa fa-close"></i></a>
								<h4 class="dashStyle2">Categories</h4>
								<div class="sideNav">
									<ul class="li_accordion">
									<?php foreach( $categories as $category){?>
										<li><a href="#"><span><?=$category['name']?></span>(+)  </a>
			                            	<ul>
	                            		<?php foreach( $sub_categories as $sub_category){?>
	                            				<?php if($category['id']== $sub_category['orders_category_id']){?>
												<li><a href="#"><span><?=$sub_category['name']?></span> (-) </a></li>
												<?php }?>
									    <?php }?>
											</ul>
			                            </li>
			                          <?php }?>
									</ul>
								</div><!-- ( SIDE NAV END ) -->




							</aside><!-- ( SLIDE NAV END ) -->
						</div>
						<div class="col-xs-12 col-sm-8 col-md-6">
<!--
							<div id="selectDropdown" class="selectDropdown style1 floatRight" tabindex="1">
								<span>Latest</span>
								<ul class="dropdown">
									<li><a href="#">Popularity</a></li>
									<li><a href="#">Price High to Low</a></li>
									<li><a href="#">Price Low to High</a></li>
									<li><a href="#">Recommended</a></li>
								</ul>
							</div> -->
						</div>
					</div>
				</div><!-- ( SORTING END ) -->
			</div><!-- ( TOP SECTION END ) -->

			<div class="stripe">
				<div class="productsRow row">
					<?php foreach($category_products as $product){?>
							<div class="col-md-3 col-sm-6 col-xs-12 isotope-item">
								<div class="productBox">
                <div class="image_container">
									<div class="productImage hoverStyle">
										<img src="<?=$product['image']?>" alt="">
                                                <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                                            <button class="cartBTN2">Add to Cart</button>
                     <div class="hoverIcons">

                                                <a href="product-details.php?product_id=<?=$product['id']?>" class="eye hovicon"><i class="fa fa-eye"></i></a>
                                              <input type="hidden" name="add_to_cart" value="1">
                                              <input type="hidden" name="item_name" value="<?=$product['name']?>">
                                              <input type="hidden" name="item_id" value="<?=$product['id']?>">
                                              <input type="hidden" name="item_image" value="<?=$product['image']?>">
                                              <input type="hidden" name="item_price" value="<?=$product['origPrice']?>">
                                              <input type="hidden" name="item_quantity" value="1">
                                            </div><!-- ( HOVER ICONS END ) -->
                                            </form>
									</div><!-- ( PRODUCT IMAGE END ) -->
                  </div>
									<div class="productDesc">
										<span class="product-title truncate"><a href="product-details.php?product_id=<?=$product['id']?>"></a><?=$product['name']?></span>
										<div>
                        <a href="#">
                        <strong>Club price:</strong> <strong class="badge badge-success">GHS <?=$product['clubPrice']?></strong>
                        </a>
                    </div><!-- ( STARS END ) -->
                    <div >Regular price: <strong>GHS <?=$product['origPrice']?></strong></div>
									</div><!-- ( PRODUCT DESCRIPTION END ) -->
								</div><!-- ( PRODUCT BOX END ) -->
							</div>
						<?php } ?>
						<?php if(count($category_products) == 0){ ?>
						<center><h1>No Products Available Yet</h1></center>
						<?php } ?>
						</div><!-- ( ROW END ) -->

						<!-- <div class="text-center">
							<div class="pagination">
								<a href="#" class="prevPage"><i class="fa fa-angle-left"></i></a>
								<a href="#" class="pagActive">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="nextPage"><i class="fa fa-angle-right"></i></a>
							</div><!-- ( PAGINATION END ) -->
						<!-- </div> -->
					</div>



				</div><!-- ( PRODUCTS ROW END ) -->
			</div><!-- ( STRIPE END ) -->
		</div>

	</div><!-- ( CONTENT END ) -->


  <footer class="footer style1">
    <div class="bottom_bar">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <ul class="clearfix sepraterLi foterNav">
              <li><a href="about_us.php">About us</a></li>
              <li><a href="customer_service.php">Customer service</a></li>
              <li><a href="contact_us.php">Contact us</a></li>

              <p style="color: #b1b1b1">
              Need help? Looking for a particular product? Don’t hesitate, <br>
              call/whatsapp
              us with all your questions and enquiries. <br>
              We know you love great
              deals like we do. <br> Call 020 921 5154.
              </p>
            </ul><!-- ( FOOTER NAV END ) -->
            <div class="copyright">&copy; 2017 Bumpy
              <ul class="list-inline">
                <li><a href="index.html#">All Rights Reserved</a></li>
              </ul>
            </div><!-- ( COPYRIGHT END ) -->
          </div>
          <div class="col-md-5">
            <div class="social_links">
              <ul class="list-inline">
             <span style="font-size: 17px">We accept payment via</span>
                <a><img src="images/payment-image.png" alt="payment" width="190px"></a>
                <br>
                <span style="font-size: 17px">Visit us on social media</span>
                <li><a href="#"><i class="fa fa-facebook-square"></i>&nbsp;</a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i>&nbsp;</a></li>
                <li><a href="#"><i class="fa fa-instagram"></i>&nbsp;</a></li>
              </ul>
            </div><!-- ( SOCIAL LINKS END ) -->
          </div>
        </div>

      </div>
    </div><!-- ( BOTTOM BAR END ) -->
  </footer><!-- ( FOOTER END ) -->

	<a href="#" class="scroll_top"><i class="fa fa-chevron-up fa-2x"></i></a><!-- ( SCROLL TOP END ) -->

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
<?php include('notify.php'); ?>

</body>
</html>
