<?php
include 'header.php';
include 'registryClass.php';
?>
<div id="banner" class="stripe banner">
    <img src="images/bb-registry.jpg" alt=""/>
    <div class="bannerText">
      <div class="container">
        <div class="bantitle1 fontsize_34 cl_ffffff bold">Baby Registry</div>
        <h2 class="bantitle2 cl_ffffff uppercase bold"></h2>
        <div class="bantitle3 fontsize_27 cl_ffffff">Add items to registry for family and friends to help you acquire them</div><br>
        <a href="index.php" class="banner_borderbtn bc_ffffff">Add to registry</a>
      </div>
    </div>
  </div><!-- ( BANNER END ) -->

<!-- <div class="baby-registry-description">
        <div class="col-md-6">
          <div class="card">
                    <div class="card-content">
                      <div class="card-header-grey">
                           <h1 class="card-heading">What is Baby registry about ?</h1>
                        </div>
                        <div class="card-body">
                        <p class="card-p">
                          Baby registry is the cart in which you select items you need for your child
                          and ask family and friends
                          to pay for the items.
                          <p>Look through items on product listing page. </p>

                          <p>>> click on baby registry</p>
                          <p>It automatically adds item selected to baby registry</p>
                          <p>>> Check what is in the registry clicking on baby registry on at the top </p>

                            </p>
                      </div>
                    </div>
                </div>
        </div>
        </div> -->



<!DOCTYPE html>
<html lang="en">
<head>

  <title>Animated Vertical Carousel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>
<body>
    <section class="slide-wrapper">
        <div class="container">
            <div id="myCarousel" class="carousel slide">


                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <!-- <div class="item item1 active">
                        <div class="fill" style=" background-color:#48c3af;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    <img src="http://media.mumzworld.com/media/wysiwyg/UAE-Tab-EN.jpg" alt="sofa" class="img img-responsive" />
                                </div>
                                <div class="carousel-desc">
                                    <h3>Select Gifts</h3>
                                    <p style="color: #ffffff;">
                                    Get recommendations & build Gift Lists for your Kids birthdays
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="item item2 active">
                        <div class="fill" style="background-color:#b33f4a;">
                            <div class="inner-content">
                                <div class="carousel-img">
                                    <img src="images/bb-basket1.jpg" alt="white-sofa" class="img img-responsive" />
                                </div>
                                <div class="carousel-desc">

                                    <h3>BABY ON A BUDGET REGISTRY</h3>
                                    <p style="color: #ffffff;">Add items to your registry and  let you friends and family
                                    purchase for you!  Oooh yes! We know you found a baby-kicking deal on our website you love,
                                    but we know you can’t afford it…and you still  want it…No worries! Share it with your family
                                    and friends to buy it for you! Our Baby on a Budget helps you to share the cost of getting
                                    great deals and items for you, daddy, your big bump and toddler.  Place your items in your
                                    registry today, share now so you don’t miss out on baby-kicking deals!
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item3">
                        <div class="fill" style="background-color:#7fc2f4;">
                            <div class="inner-content">
                                <div class="col-md-6">

                                    <div class="carousel-img">
                                        <img src="images/bb-basket.jpg" alt="sofa" class="img img-responsive" />
                                    </div>
                                </div>

                                <div class="col-md-6 text-left">
                                    <div class="carousel-desc">

                                        <h3>JOIN AND ENJOY CLUB MEMBER PRICES</h3>
                                        <p style="color: #ffffff;">Your club membership allows you to  enjoy pink  tagged prices…up
                                        to 80% off discounts, coupons, freebies, and many more!  Always look out for our pink tagged
                                        prices, always lower, cool deals exclusive to bumpy shoppers club members.  Save lots of money
                                        on your pregnancy, baby and toddler products and services.  Its easy, just sign up for our yearly
                                        membership. Only Ghc 100 for a whole year! Feel  free to shop the” regular price”
                                        tags if you do not want to join the club. </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</body>
</html>





<div></div>
	<div id="content" class="productPage baby-registry-items">
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
									<td class="cl_e85200">GHS <?=$wishItem['price']?> </td>
									<td class="cl_e85200">
									<form action="<?PHP $_SERVER['PHP_SELF']?>" method="POST">
									<input type="hidden" name="add_to_cart" value="1">
                                              <input type="hidden" name="item_name" value="<?=$wishItem['name']?>">
                                              <input type="hidden" name="item_id" value="<?=$wishItem['id']?>">
                                              <input type="hidden" name="item_image" value="<?=$wishItem['image']?>">
                                              <input type="hidden" name="item_price" value="<?=$wishItem['origPrice']?>">
                                     <input type="hidden" name="item_quantity" value="1">
									<button type="submit" class="btn btn-info">add to cart</button>
									</form>
									<br>
									<form action="<?PHP $_SERVER['PHP_SELF']?>" method="POST">
									<input type="hidden" name="deleteRegistry" value="<?=$index?>">
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
											<input type="hidden" name="forgetAllRegistry">
										<button  type="submit" class="btn cart-btn bg_dfdfdf floatRight" >Forget Registry</button>
										</form>
									</td>

								</tr>
							</tbody>
						</table>
					</div><!-- ( MY TABLE END ) -->
					<a class="btn cart-btn bg_e85200 floatRight" href="/ask.php">Ask Family&Friends to pay</a>

				</div><!-- ( SHOPING CART END ) -->
			</div><!-- ( STRIPE END ) -->
		</div>


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

<script type="text/javascript">
$(document).ready(function(){
// invoke the carousel
    $('#myCarousel').carousel({
      interval:6000
    });

// scroll slides on mouse scroll
$('#myCarousel').bind('mousewheel DOMMouseScroll', function(e){

        if(e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
            $(this).carousel('prev');


        }
        else{
            $(this).carousel('next');

        }
    });

//scroll slides on swipe for touch enabled devices

  $("#myCarousel").on("touchstart", function(event){

        var yClick = event.originalEvent.touches[0].pageY;
      $(this).one("touchmove", function(event){

        var yMove = event.originalEvent.touches[0].pageY;
        if( Math.floor(yClick - yMove) > 1 ){
            $(".carousel").carousel('next');
        }
        else if( Math.floor(yClick - yMove) < -1 ){
            $(".carousel").carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});

});
//animated  carousel start
$(document).ready(function(){

//to add  start animation on load for first slide
$(function(){
    $.fn.extend({
      animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
          $(this).removeClass(animationName);
        });
      }
    });
       $('.item1.active img').animateCss('slideInDown');
       $('.item1.active h2').animateCss('zoomIn');
       $('.item1.active p').animateCss('fadeIn');

});

//to start animation on  mousescroll , click and swipe



     $("#myCarousel").on('slide.bs.carousel', function () {
    $.fn.extend({
      animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
          $(this).removeClass(animationName);
        });
      }
    });

// add animation type  from animate.css on the element which you want to animate

    $('.item1 img').animateCss('slideInDown');
    $('.item1 h2').animateCss('zoomIn');
    $('.item1 p').animateCss('fadeIn');

    $('.item2 img').animateCss('zoomIn');
    $('.item2 h2').animateCss('swing');
    $('.item2 p').animateCss('fadeIn');

    $('.item3 img').animateCss('fadeInLeft');
    $('.item3 h2').animateCss('fadeInDown');
    $('.item3 p').animateCss('fadeIn');
    });
});

</script>
</body>
</html>
