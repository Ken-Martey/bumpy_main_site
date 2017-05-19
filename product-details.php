<?php
include 'header.php';
include 'datasource/get_single_product.php';
$cat_id = $single_product['orders_category_id'];
include 'datasource/get_categories.php';
include 'datasource/get_category_products.php';
?>

	<div id="content" class="productDetail">
		<div class="container">
			<hr class="productTop">
			<div class="stripe">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<ul id="product-slider" class="product-item-slider product-image">
							<li class="item hoverStyle" data-thumb="images/caro-product-thum-1.jpg">
								<img src="<?=$single_product['image']?>">
								<div class="hoverBox">
									<div class="hoverIcons">
										<a href="images/caro-product-1-big.jpg" class="eye hovicon"><i class="fa fa-expand expand-pic"></i></a>
										<a href="##" class="heart hovicon"><i class="fa fa-cart-arrow-down"></i></a>
									</div><!-- ( HOVER ICONS END ) -->
								</div><!-- ( HOVER BOX END ) -->
							</li>
						</ul>
					</div>

					<div class="col-sm-6 col-xs-12">
						<div class="product-content">
            	<h3 class="text-inherit cl_000000"><?=$single_product['name']?></h3>
							<div class="breadcrumb">
								<h5>Category:<a href="#"> <?= $single_product['related']['category'][0]['name'];?></a></h4>
							</div><!-- ( BREAD CRUMB END ) -->
							<p><?=$single_product['long_desc']?></p>
							<br><br>
							<div class="productQuantity productFormOption">
								<form method="post" action="<?=$_SERVER['REQUEST_URI']?>" class="clearfix">
                <input type="hidden" name="item_name" value="<?=$single_product['name']?>">
                <input type="hidden" name="add_to_cart" value="1">
                <input type="hidden" name="item_price" value="<?=$single_product['origPrice']?>">
                <input type="hidden" name="item_id" value="<?=$single_product['id']?>">
                <input type="hidden" name="item_name" value="<?=$single_product['image']?>">
									<div class="sp-quantity proQunter clearfix">
										<div class="sp-minus qtyminus"><a class="qtyClick" href="##" data-multi="-1">-</a></div>
										<div class="sp-input qty">
											<input type="text" name="item_quantity" class="quntity-input" value="1" />
										</div>
										<div class="sp-plus qtyplus"><a class="qtyClick" href="##" data-multi="1">+</a></div>
									</div><!-- ( PRO QUNTER END ) -->
									<button class="btn-custom-3" type="submit">Add to cart</button>
								</form>
							</div><!-- ( PRODUCT QUANTITY END ) -->
							<br><br>
							<div class="smallCategories">
							<br><br>
							<!-- ( PRODUCT SHARE START ) -->
							<div class="product_share">
                                <p>Visit us on social media:</p>
                                <ul class="social_links">
                                    <li><a href="##"><i class="fa fa-facebook-square"></i>&nbsp;</a></li>
                                    <li><a href="##"><i class="fa fa-twitter-square"></i>&nbsp;</a></li>
                                     <li><a href="##"><i class="fa fa-instagram"></i>&nbsp;</a></li>
                                </ul>
                            </div>
                            <!-- ( PRODUCT SHARE END ) -->
						</div><!-- ( PRODUCT CONTENT END ) -->
					</div>
				</div><!-- ( ROW END ) -->
			</div><!-- ( STRIPE END ) -->

			<div class="stripe">
				<div class="product-details">
					<div class="tabs_container">
                        <ul class="nav nav-pills" role="tablist">

                            <li role="presentation">
								<a href="##add-info" aria-controls="add-info" role="tab" data-toggle="tab">Additional Information</a>
							</li>

                        </ul>

                            <div role="tabpanel" class="tab-pane active" id="add-info">
                            	<p><strong>Details: </strong></p>
                                <ul>
                                    <li>Crew neck</li>
                                    <li>Short sleeves</li>
                                    <li>Front text print</li>
                                    <li>Cropped</li>
                                    <li>Approx. 18&quot; length</li>
                                    <li>Made in USA</li>
                                </ul>
                                <p>&nbsp;</p>
                                <p><strong>Fiber Content:</strong></p>
                                <ul>
                                    <li>50% cotton, 50% polyester</li>
                                </ul>
                                <p>&nbsp;</p>
                                <p><strong>Care:</strong></p>
                                <ul>
                                    <li>Hand wash</li>
                                </ul>
                                <p>&nbsp;</p>
                                <p><strong>Additional Info: </strong></p>
                                <ul>
                                    <li>Fit: this style fits true  to size. </li>
                                </ul>
                                <p>&nbsp;</p>
                                <p><strong>Model's stats for sizing: </strong></p>
                                <ul>
                                    <li>Height: 5'10&quot;</li>
                                    <li>Bust: 32&quot;</li>
                                    <li>Waist: 24&quot;</li>
                                    <li>Hips: 34&quot;</li>
                                    <li>Model is wearing size S.</li>
                                </ul>
                            </div>

                        </div> <!-- ( TAB CONTENT END ) -->
                    </div><!-- ( TABS CONTAINER END ) -->
				</div><!-- ( PRODUCT DETAILS END ) -->
			</div><!-- ( STRIPE END ) -->
		</div>


		<div class="stripe">
			<div class="container">
				<h3 class="dashStyle">Related Products</h3>
				<div class="productsRow row">

        <?php foreach($category_products as $category_product){ ?>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="productBox">
							<div class="productImage hoverStyle">
								<img src="<?=$category_product['image']?>" alt="">
                <span class="new">New</span>
								<div class="hoverBox">
									<div class="hoverIcons">
										<a href="#" class="eye hovicon"><i class="fa fa-eye"></i></a>
									</div><!-- ( HOVER ICONS END ) -->
									<a href="view-cart.html" class="cartBTN2">Add to Cart</a>
								</div><!-- ( HOVER BOX END ) -->
							</div><!-- ( PRODUCT IMAGE END ) -->
							<div class="productDesc">
								<span class="product-title"><a href="#"><?=$category_product['name']?></a></span>
								<p><?=$category_product['short_desc']?></p>
								<div>
                          club price: <strong class="badge badge-success">GHS<?=$category_product['origPrice']?></strong>
                      </div><!-- ( STARS END ) -->
                      <div >Normal price: <strong>GHS<?=$category_product['clubPrice']?></strong></div>
							</div><!-- ( PRODUCT DESCRIPTION END ) -->
						</div><!-- ( PRODUCT BOX END ) -->
					</div>
          <?php } ?>
				</div><!-- ( PRODUCTS ROW END ) -->
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
              <li><a href="#">Blog</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="contactus.html">Contact us</a></li>
            </ul><!-- ( FOOTER NAV END ) -->
            <div class="copyright">&copy; 2017 Bumpy shoppers club
              <ul class="list-inline">
                <li><a href="##">All Rights Reserved</a></li>
              </ul>
            </div><!-- ( COPYRIGHT END ) -->
          </div>
          <div class="col-md-5">
            <div class="social_links">
              <ul class="list-inline">
                <li>Follow us</li>
                <li><a href="#"><i class="fa fa-facebook-square"></i>&nbsp;</a></li>
                <li><a href="#"><i class="fa fa-twitter-square"></i>&nbsp;</a></li>
                <li><a href="#"><i class="fa fa-instagram"></i>&nbsp;</a></li>
                <li><a href="#"><i class="fa fa-youtube-square"></i>&nbsp;</a></li>
              </ul>
            </div><!-- ( SOCIAL LINKS END ) -->
          </div>
        </div>
      </div>
    </div><!-- ( BOTTOM BAR END ) -->
  </footer><!-- ( FOOTER END ) -->

	<a href="##" class="scroll_top"><i class="fa fa-chevron-up fa-2x"></i></a><!-- ( SCROLL TOP END ) -->

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
<script type="text/javascript" src="js/lightslider.min.js"></script>
<script type="text/javascript" src="js/lightgallery.min.js"></script>
<script src="js/jquery.matchHeight-min.js"></script>
<!-- theme custom JS Files -->
<script src="js/configuration.js"></script>
<?php include('notify.php'); ?>

</body>
</html>
