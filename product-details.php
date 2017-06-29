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
                                <!-- <div class="hoverBox">
                                    <div class="hoverIcons">
                                        <a href="images/caro-product-1-big.jpg" class="eye hovicon"><i class="fa fa-expand expand-pic"></i></a>
                                        <a href="##" class="heart hovicon"><i class="fa fa-cart-arrow-down"></i></a>
                                    </div>
                                </div> -->
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="product-content">
                <h3 class="text-inherit cl_000000"><?=$single_product['name']?></h3>
                            <div class="breadcrumb">
                <h5>Category:<a href="#"> <?= $single_product['related']['category'][0]['name'];?></a></h4>
                <h5>Normal Price: <strong>GHS <?=$single_product['origPrice']?></strong></div></h4>
                <div class="club-price-color">
                                <h5>Club Price: <strong>GHS <?=$single_product['clubPrice']?></strong></div></h4>
                </div>
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
                            <div class="productDesc">
                                <span class="product-title truncate"><a href="#"><?=$category_product['name']?></a></span>
                                <p><span class="truncate-body"><?=$category_product['short_desc']?></span></p>
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
