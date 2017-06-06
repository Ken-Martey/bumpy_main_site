<?php
include 'header.php';
include 'registryClass.php';
?>
	<div class="innerHeading bg_f1f1f1 innerHeading-border stripeM">
		<div class="container text-center">
			<h1 class="marginBottomNone">Baby Registry</h1>
			<div class="breadcrumb">
				<ul class="clearfix">
					<li>Registry</li>
				</ul>
			</div><!-- ( BREAD CRUMB END ) -->
		</div>
	</div><!-- ( INNER HEADING END ) -->


	<div id="content" class="productPage">
		<div class="container">
			<div class="stripe stripeM">
				<div class="shopingCart">
					<div class="myTable">
						<table class="tableStyle">
							<thead>
								<tr>
									<th class="product-count text-center">No</th>
									<th class="product-thumbnail">Product Image</th>
									<th class="product-name">Name / Description</th>
									<th class="product-subtotal text-center">Price</th>
									<th class="product-actions text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php if($_SESSION['registry']) {?>
							
							<?php foreach($_SESSION['registry'] as $index => $wishItem) {?>
								<tr>
									<td><?=$index +1 ?></td>
									<td>
										<div class="cart-thumb">
											<img src="<?=$wishItem['image']?>" alt=""/>
										</div><!-- ( CART THUMB END ) -->
									</td>
									<td class="text-left">
										<?=$wishItem['name']?>
									</td>
									<td class="cl_e85200">GHS <?=$wishItem['origPrice']?> / <span class="badge"> GHS <a   href="/login-register.php"><?=$wishItem['clubPrice']?></a></span></td>
									<td class="cl_e85200">
									<form action="<?PHP $_SERVER['PHP_SELF']?>" method="POST">
									<button type="submit" class="btn btn-info">add to cart</button>
									</form>
									<br>
									<form action="<?PHP $_SERVER['PHP_SELF']?>" method="POST">
									<input type="hidden" name="deleteWish" value="<?=$index?>">
									<button class="btn btn-danger" type="submit">&nbsp &nbsp  Delete &nbsp &nbsp</button>
									</form>
									</td>
									<?php } ?>
									<?php } ?>
								</tr>
								<tr>
									<td colspan="8">
										<a class="btn cart-btn bg_e85200 floatLeft" href="/">Continue Shopping</a>
										<form method="post" action="<?=$_SERVER['REQUEST_URI']?>">
											<input type="hidden" name="forgetAllWishes">
										<button  type="submit" class="btn cart-btn bg_dfdfdf floatRight" >Forget Registry</button>
										</form>
									</td>
								</tr>
							</tbody>
						</table>
					</div><!-- ( MY TABLE END ) -->


				</div><!-- ( SHOPING CART END ) -->
			</div><!-- ( STRIPE END ) -->
		</div>


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
