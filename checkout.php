<?php
 include 'header.php';
?>

    <div class="innerHeading bg_f1f1f1 innerHeading-border stripeM">
        <div class="container text-center">
            <h1 class="marginBottomNone">Checkout</h1>
            <div class="breadcrumb">
                <ul class="clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div><!-- ( BREAD CRUMB END ) -->
        </div>
    </div><!-- ( INNER HEADING END ) -->

    <div id="content" class="productPage">
        <div class="container">
            <div class="stripe stripeM">
                <div class="shopingCart">

                <div class="alert alert-danger dv-notify-failed" style="display:none">For some reason we can't process your order :( Please try again</div>
                  <form class="row dv-add-oneto:orders:order_list">
                    <input type="hidden" name="amount_paid" value="0">
                    <input type="hidden" name="due_date" value="0">
                    <input type="hidden" name="reference_code" value="0">
                    <input type="hidden" name="users_id" value="1">
                    <input type="hidden" name="description" value="NA">
                    <input type="hidden" name="payment_option" value="NA">
                    <?php $item_list = [];foreach($_SESSION['cart'] as $item_in_cart){ array_push($item_list, $item_in_cart);
                      }
                    ?>
                    <input type="hidden" id="item_list" name="item_list" value="<?=htmlspecialchars(json_encode($item_list, true))?>">
                    <div class="col-lg-6">
                         <label>Full Name*</label>
                            <input type="text" class="form-control" placeholder="Please enter your Full Name" name="customer_name">
                        <br>
                            <div class="row">
                            <div class="col-lg-12">
                            <label>Phone Number*</label>
                            <input type="number" class="form-control" placeholder="Please enter your Phone Number" name="customer_contact">
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-lg-12">
                            <label>Country*</label>
                            <input type="text" readonly value="Ghana" name="country" class="form-control"  name="">
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-lg-12">
                            <label>Town/City/Location</label>
                            <input type="text" class="form-control" placeholder="Eg. Accra" name="location">
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-lg-12">
                            <label>Special Land Mark</label>
                            <input type="text" class="form-control" placeholder="Ghana Dubai Circle" name="landmark">
                            </div>
                            </div>

                            </div><br>
                    <div class="col-lg-6">
                        <label>Order Notes</label>
                        <textarea class="form-control" name="order_note" rows="6"></textarea>
                    </div>



                    <div class="col-lg-6"></div>

                  </div>
                  <br>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="cartTotle">
                                <p class="visible-xs">&nbsp;</p>
                                <table class="tableStyle">
                                    <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th>Quantity</th>
                                            <th>Total GHS</th>
                                        </tr>
                                    </thead>
                                    <tbody id="final-cart">
                                    <?php $total_price = 0; $total_quantity = 0; ?>
                                    <?php foreach($_SESSION['cart'] as $item_in_cart){?>
                                    <?php $total_quantity += $item_in_cart['quantity'];
                                          $total_price += $item_in_cart['price'];?>
                                        <tr>
                                            <td class="text-left"><?=$item_in_cart['name']?></td>
                                            <td class="text-center"><?=$item_in_cart['quantity']?></td>
                                          <td class="text-right"><?=$item_in_cart['price']?></td>
                                        </tr>
                                    <?php }?>
                                        <tr>
                                            <td class="cl_e85200 text-left"><strong>Total</strong></td>
                                            <td class="cl_e85200 text-center" v-html="total_quantity"><strong><?=$total_quantity?></strong></td>
                                            <td class="cl_e85200 text-right"><strong>GHS <?=$total_price?><span v-html="total_price"></span></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <button  class="btn cart-btn bg_e85200 pull-right ">Make Payments</button>
                                </form>


                            </div>
                        </div><!-- ( CART TOTLE END ) -->
                    </div>
                </div><!-- ( SHOPING CART END ) -->
            </div><!-- ( STRIPE END ) -->
        </div>

    </div><!-- ( CONTENT END ) -->

<script>
    function addXMLRequestCallback(callback){
            var oldSend, i;
            if( XMLHttpRequest.callbacks ) {
                // we've already overridden send() so just add the callback
                XMLHttpRequest.callbacks.push( callback );
            } else {
                // create a callback queue
                XMLHttpRequest.callbacks = [callback];
                // store the native send()
                oldSend = XMLHttpRequest.prototype.send;
                // override the native send()
                XMLHttpRequest.prototype.send = function(){
                    // process the callback queue
                    // the xhr instance is passed into each callback but seems pretty useless
                    // you can't tell what its destination is or call abort() without an error
                    // so only really good for logging that a request has happened
                    // I could be wrong, I hope so...
                    // EDIT: I suppose you could override the onreadystatechange handler though
                    for( i = 0; i < XMLHttpRequest.callbacks.length; i++ ) {
                        XMLHttpRequest.callbacks[i]( this );
                    }
                    // call the native send()
                    oldSend.apply(this, arguments);
                }
            }
        }




        devlessCallbacks = function(callback) {
            addXMLRequestCallback( function( xhr ) {
                xhr.onreadystatechange=function(){
                    if ( xhr.readyState == 4 && xhr.status == 200 ) {
                        callback(JSON.parse(xhr.responseText));
                    }
                }

            });
        }
        devlessCallbacks(function(response){
        if(response.status_code == 1000) {
            localStorage.setItem('cart', null);
            window.location.href = response.message;
        }
    })
</script>
<footer class="footer style1">
    <div class="bottom_bar">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <ul class="clearfix sepraterLi foterNav">
              <li><a href="#">Shoppers Club</a></li>
              <li><a href="2-grid-layout-with-banner.html">Shop</a></li>
              <li><a href="contactus.html">Contact us</a></li>
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
                <a><img src="images/payment-image.png" alt="payment" width="190px"></a>
                <li><a href="index.html#"><i class="fa fa-facebook-square"></i>&nbsp;</a></li>
                <li><a href="index.html#"><i class="fa fa-twitter-square"></i>&nbsp;</a></li>
                <li><a href="index.html#"><i class="fa fa-instagram"></i>&nbsp;</a></li>
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

<script src="http://admin.bumpyshoppers.com/js/devless-sdk.js" class="devless-connection" devless-con-token="2d490ab1264453d3cb2718d699cdfd0a"></script>

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
