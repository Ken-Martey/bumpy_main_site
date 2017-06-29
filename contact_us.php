
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Bumpy</title>
    <link rel="icon" href="/images/favicon.jpg" type="image/png" />

  <!-- ( CSS LIBRARY LINKS ) -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/default.css@ver=2112.css" rel="stylesheet">

  <!-- ( RS5.0 MAIN STYLESHEET ) -->
  <link rel="stylesheet" href="/revolution/css/settings.css">
  <!-- RS5.0 LAYERS AND NAVIGATION STYLES -->
  <link rel="stylesheet" href="/revolution/css/layers.css">
  <link rel="stylesheet" href="/revolution/css/navigation.css">

    <link href="/css/mediaQueries.css@ver=2.9.2.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<span id="bumpy">
<div id="wrapper">
<?php
 include 'header.php';
 include 'datasource/get_products.php';
 include 'datasource/get_best_sellers.php';
 include 'datasource/offer_club_prices.php';
?>
  <div class="innerHeading bg_f1f1f1 innerHeading-border">
    <div class="container text-center">
      <h1 class="marginBottomNone">Lets Talk</h1>
    </div>
  </div><!-- ( INNER HEADING END ) -->

    <div id="content" class="contactPage">


    <div class="stripe">
      <div class="container">
        <div class="mapAddress">
        <br>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <br>
              <p>
              We want to help you with every thing your baby needs
               <strong class="cl_e85200">Talk soon!</strong></p>
              <div class="addressBox">
                <h4 class="text-inherit">Address</h4>
                <p>East Legon<br>Accra - Ghana</p>
                <h4 class="text-inherit">Phone number</h4>
                <p><a href="tel:561-962-1792">+233 20 921 5154 </a></p>
                <h4 class="text-inherit">Email</h4>
                <p><a href="mailto:support@imediathemes.com">bumpyshoppersclub@gmail.com</a></p>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="stripe-1 stripeM">
            <div class="contactForm text-center">
            <div class="alert alert-success dv-notify-success">Thank you for reaching out</div>
            <div class="alert alert-danger dv-notify-failed">For some reason we can't take your request :(. Please try again with valid inputs</div>
            <!-- <div class="alert alert-success dv-notify"></div> -->
              <form id="contact-form" name="contact-form" class="dv-add-oneto:misc:contacts clearfix">
                <div class="row">
                  <div class="col-sm-12 col-md-6 form-group">
                                    <input type="text" id="username" class="form-control" name="username" tabindex="1" value="" placeholder="Name *" required>
                  </div>
                  <div class="col-sm-12 col-md-6 form-group">
                                    <input type="text" id="email" class="form-control" name="email" tabindex="2" value="" placeholder="E-mail *" required>
                  </div>
                </div>
                <p class="form-group">
                                <textarea id="message" name="message" tabindex="3" rows="3" placeholder="Message *" required class="form-control"></textarea>
                </p>
                <p class="text-right">
                                <button type="submit" id="sending" class="btn-custom-3" data-send="Sending...">Send Message</button>
                </p>
              </form>
            </div><!-- ( CONTACT FORM END ) -->

    </div><!-- ( STRIPE END ) -->

            </div>
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

  <a href="index.html#" class="scroll_top"><i class="fa fa-chevron-up fa-2x"></i></a><!-- ( SCROLL TOP END ) -->
</span>
</div><!-- ( WRAPPER END ) -->

<script src="http://enterprise.devless.io:3030/js/devless-sdk.js" class="devless-connection" devless-con-token="5dafadfae64eb1b140d10975cc1d5790"></script>

<!-- ( JQUERY LIBRARY LINKS ) -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/colorbox-min.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>

<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="/revolution/js/jquery.themepunch.tools.min.js@rev=5.0"></script>
<script type="text/javascript" src="/revolution/js/jquery.themepunch.revolution.min.js@rev=5.0"></script>

<script type="text/javascript" src="/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- share this JS Files -->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://ws.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "a7c8641b-6c3a-4b59-98ce-510413a4dab4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script type="text/javascript" src="/js/lightslider.min.js"></script>
<script type="text/javascript" src="/js/lightgallery.min.js"></script>
<script src="/js/jquery.matchHeight-min.js"></script>
<!-- theme custom JS Files -->
<script src="/js/configuration.js"></script>
<script src="https://unpkg.com/vue"></script>
<script src="/js/app.js"></script>


</body>
</html>
