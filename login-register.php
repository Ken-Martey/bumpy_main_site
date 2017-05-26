
<?php
include 'header.php';
include 'datasource/auth.php';
include 'datasource/get_categories.php';
?>
	<div id="content">
		<div class="stripe-1">
			<div class="container">
				<div class="row loginRow">
				<div class="alert alert-danger dv-notify-failed" style="display:none">Sorry something went wrong</div>
					<div class="col-md-6 col-sm-6 col-xs-12 loginForm">
						<h2>Login</h2>
						<form action="<?= $_SERVER['PHP_SELF']?>" class="clearfix" method="POST">
							</p><input type="hidden"  name="login" value="login"></p>
							<p><input type="text" name="email" placeholder="email address *"/></p>
							<p><input type="password" name="password" placeholder="Password *"/></p>
						<!-- 	<div class="clearfix">
								<div class="col-md-6 col-sm-6 col-xs-12 text-right"><a href="login-register.html#">Lost Your Password?</a></div>
							</div>
						 -->		<button type="submit" class="btn-custom-3" >Login As Club Member</button>
						</form>
					</div><!-- ( LOGIN FORM END ) -->

					<div class="col-md-6 col-sm-6 col-xs-12 registrationForm">
						<h2>Register</h2>
						<form class="clearfix dv-signup">
							<p><input type="text" name="email" placeholder="Email address *"/></p>
							<p><input type="password" name="password" placeholder="Set a password *"/></p>
							<div class="clearfix"><button class="btn-custom-3" id="registration_clicked" type="submit">Pay to Register Now</button></div>
						</form>
					</div><!-- ( REGISTRATION FORM END ) -->
				</div><!-- ( ROW END ) -->
				<!-- <div class="text-center">
					<a href="login-register.html#" class="connectFacebook fb_bg"><span>Connect With</span> <i class="fa fa-facebook-square"></i></a>
					<a href="login-register.html#" class="connectFacebook twitter_bg"><span>Connect With</span> <i class="fa fa-twitter-square"></i></a>
				</div>
			</div> -->
		</div><!-- ( STRIPE END ) -->

			<div class="stripe">
			<div class="container">
				<h3 class="dashStyle">Browse by Categories</h3>
				<div class="categoryRow row">
					<ul id="catCarousel" class="clearfix">
           <?php foreach($categories as $category){?>
  					<li>
							<div class="col-xs-12">
								<div class="categoryBox">
									<a href="index.html#">
										<div class="categoryImage">
											<img src="<?=$category['image']?>" alt="">
											<div class="title"><?=$category['name']?></div>
										</div><!-- ( CATEGORY IMAGE END ) -->
									</a>
								</div><!-- ( CATEGORY BOX END ) -->
							</div>
						</li>
            <?php } ?>
					</ul>
				</div><!-- ( CATEGORY ROW END ) -->
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
                <li><a href="#">All Rights Reserved</a></li>
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

	<a href="login-register.html#" class="scroll_top"><i class="fa fa-chevron-up fa-2x"></i></a><!-- ( SCROLL TOP END ) -->

</div><!-- ( WRAPPER END ) -->

<script src="http://admin.bumpyshoppers.com/js/devless-sdk.js" class="devless-connection" devless-con-token="2d490ab1264453d3cb2718d699cdfd0a"></script>

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
function reference_code(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}
var reference_code = reference_code(12, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
	$('#registration_clicked').click(function(){
		devlessCallbacks(function(resp){
			profile = undefined;
			console.log(resp)
			profile = resp.payload.result.profile
			data = {
				'email': profile.email,
				'amount': 400,
				'status': 'not paid',
				'timestamp': Date.now(),
				'reference_code': 'mp'+reference_code
			}
			console.log("profile",profile);
			if(profile != undefined){
				SDK.addData('orders', 'membership_payments', data, function(res){
						console.log("membership_pay",res);
						if(res.status_code == 609){
							//SDK.call('orders', 'register_for_club', [profile.email], function(resp){
								window.location.href = 'http://admin.bumpyshoppers.com/service/slydepay/view/pay?batch_id=mp'+reference_code+'&pay_option=mtn';
							//})
						}
				});
			}
		})
	})
</script>
<?php include('notify.php'); ?>
</body>
</html>
