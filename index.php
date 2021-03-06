<?php
 include 'header.php';
 include 'datasource/get_products.php';
 include 'datasource/get_best_sellers.php';
 include 'datasource/offer_club_prices.php';
 include 'wishClass.php';
 include 'registryClass.php';
?>
<div id="banner" class="stripe banner">
    <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div class="rev_slider_wrapper">
            <div id="slider1" class="rev_slider" data-version="5.0.7">
                <ul>
                    <li data-transition="fade" data-thumb="images/slider/bumpy-slider-test.png" data-title="Join the club">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider/bumpy-slider-test.png" alt="" width="1920" height="617">

            <!-- LAYER NR. 1 -->
            <!-- <div class="tp-caption tp-resizeme rs-parallaxlevel-0"
              id="slide-1-layer-1"
              data-x="['right','center','center','center']" data-hoffset="['-210','-161','-111','96']"
              data-y="['top','bottom','bottom','bottom']" data-voffset="['0','-10','-1','-39']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;"
              data-transform_out="opacity:0;s:300;s:300;"
              data-start="1000"
              data-responsive_offset="on"
              data-lasttriggerstate="reset"
              style="z-index:0;">
            </div> -->

              <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 slider_rightM"
               id="slide-4-layer-3"
               data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
               data-y="['top','top','top','top']" data-voffset="['150','130','110','80']"
               data-lineheight="['40','30','25','30']"
               data-width="710"
               data-height="90"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
               data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
               data-mask_in="x:0px;y:0px;"
               data-mask_out="x:inherit;y:inherit;"
               data-start="1000"
               data-responsive_offset="on"
               style="z-index: 5;background-color:rgba(189,141,191,1.00);"> <!-- FOR TEXT BACKGROUND -->
            </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_left"
              id="slide-1-layer-2"
              data-x="['left','center','center','center']" data-hoffset="['0','0','0','0']"
              data-y="['top','top','top','top']" data-voffset="['150','130','110','80']"
              data-fontsize="['25','33','33','28']"
                            data-lineheight="['40','30','25','30']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:50px;opacity:0;s:2000;e:Power3.easeOut;"
              data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1500"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index:5;white-space:nowrap;color:#fff;">"Every parent loves great deals and discounts so we have<br> no choice than to make it happen every week!"
                        </div>
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_left"
              id="slide-1-layer-4"
              data-x="['left','left','left','center']" data-hoffset="['0','651','563','434']"
              data-y="['top','top','top','top']" data-voffset="['245','483','377','180']"
              data-fontsize="['23','25','20','25']"
              data-lineheight="['20','30','25','30']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-visibility="['on','on','on','on']"
              data-transform_idle="o:1;"
              data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeInOut;"
              data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="2000"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              style="z-index:26;white-space:nowrap;color:#ffffff;font-style:italic;">By Esi Yankah
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption rs-parallaxlevel-0 slider_text slider_left"
              id="slide-1-layer-5"
              data-x="['left','right','right','center']" data-hoffset="['0','30','30','0']"
              data-y="['top','bottom','bottom','middle']" data-voffset="['370','30','30','-44']"
              data-fontsize="['40','25','20','25']"
              data-lineheight="['30','30','25','30']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
              data-transform_out="auto:auto;s:1000;"
              data-start="2500"
              data-splitin="none"
              data-splitout="none"
              data-responsive_offset="on"
              data-responsive="on"
              style="z-index:22;color:#fff;text-transform: uppercase;">Starts
                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_left"
              id="slide-1-layer-6"
              data-x="['left','left','left','left']" data-hoffset="['170','651','563','563']"
              data-y="['top','top','top','top']" data-voffset="['360','521','411','411']"
              data-fontsize="['55','25','20','25']"
              data-lineheight="['40','30','25','30']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-visibility="['on','on','on','on']"
              data-transform_idle="o:1;"
              data-transform_in="y:50px;opacity:0;s:1000;e:Power3.easeInOut;"
              data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
              data-mask_out="x:0;y:0;s:inherit;e:inherit;"
              data-start="3100"
              data-responsive_offset="on"
              data-lasttriggerstate="reset"
              style="z-index: 27;text-transform:uppercase;color:#bd8dbf;">
              <div class="rs-looped rs-slideloop" data-easing="Power2.easeInOut" data-speed="1" data-xs="0" data-xe="0" data-ys="2" data-ye="-2">Now!</div>
                        </div>

                        <!-- LAYER NR. 7 -->
                        <a href="#"
              class="white-to-orange">
                        <div class="tp-caption rs-parallaxlevel-0 slider_borderbtn1 slider_leftM"
              id="slide-1-layer-7"
              data-x="['left','right','right','center']" data-hoffset="['0','521','398','0']"
              data-y="['bottom','top','top','top']" data-voffset="['130','248','218','264']"
              data-fontsize="['20','25','20','25']"
              data-width="194"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
              data-style_hover="c:rgba(189,141,191,1.00);bg:rgba(255,255,255,1.00);cursor:pointer;bc:#fff;"
              data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
              data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
              data-start="3000"
              data-splitin="none"
              data-splitout="none"
              data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
              data-responsive_offset="on"
              data-responsive="on"
              style="z-index:9;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;text-transform:uppercase;">Get Bumpy
                        </div></a>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption rs-parallaxlevel-0 slider_borderbtn1 slider_leftM"
              id="slide-1-layer-8"
              data-x="['left','left','left','center']" data-hoffset="['220','522','399','0']"
              data-y="['bottom','top','top','top']" data-voffset="['130','248','218','188']"
              data-fontsize="['20','25','20','25']"
              data-width="194"
              data-height="none"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
              data-style_hover="c:rgba(189,141,191,1.00);bg:rgba(255,255,255,1.00);cursor:pointer;bc:#fff;"
              data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
              data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
              data-start="3000"
              data-splitin="none"
              data-splitout="none"
              data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
              data-responsive_offset="on"
              data-responsive="on"
              style="z-index:9;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;text-transform:uppercase;">Shop All
                        </div>
                    </li>

          <li data-transition="fade" data-thumb="images/slider/bumpy-slider-test-2.png" data-title="Bumpy shoppers club">
            <!-- MAIN IMAGE -->
            <img src="images/slider/bumpy-slider-test-2.png" alt="" width="1920" height="617">

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_right"
               id="slide-2-layer-1"
               data-x="['right','center','center','center']" data-hoffset="['315','0','0','0']"
               data-y="['top','top','top','top']" data-voffset="['190','130','110','80']"
               data-fontsize="['49','33','33','28']"
                             data-lineheight="['40','30','25','30']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_in="y:50px;opacity:0;s:2000;e:Power3.easeOut;"
               data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
               data-start="1000"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               style="z-index:5;white-space:nowrap;color:#000;">Up to
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 slider_rightM"
              id="slide-2-layer-2"
              data-x="['right','center','center','center']" data-hoffset="['236','0','0','0']"
              data-y="['top','middle','middle','middle']" data-voffset="['245','15','15','15']"
              data-width="200"
              data-height="100"
              data-whitespace="nowrap"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;"
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_in="x:0px;y:0px;"
              data-mask_out="x:inherit;y:inherit;"
              data-start="1500"
              data-responsive_offset="on"
              style="z-index: 5;background-color:rgba(189,141,191,1.00);">
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_right"
              id="slide-2-layer-3"
              data-x="['right','center','center','center']" data-hoffset="['238','0','0','0']"
              data-y="['top','middle','middle','middle']" data-voffset="['247','0','0','0']"
              data-fontsize="['106','70','70','45']"
              data-lineheight="['100','70','70','50']"
              data-width="none"
              data-height="none"
              data-whitespace="nowrap"
              data-letterspacing="-3"
              data-transform_idle="o:1;"
              data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
              data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
              data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
              data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
              data-start="1000"
              data-splitin="chars"
              data-splitout="none"
              data-responsive_offset="on"
              data-elementdelay="0.05"
              style="z-index:6;white-space:nowrap;color:#fff;">80%
            </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_right"
               id="slide-2-layer-4"
               data-x="['right','left','left','center']" data-hoffset="['0','651','563','434']"
               data-y="['top','top','top','top']" data-voffset="['305','483','377','180']"
               data-fontsize="['31','25','20','25']"
               data-lineheight="['25','30','25','30']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-visibility="['on','on','on','on']"
               data-transform_idle="o:1;"
               data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeInOut;"
               data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
               data-start="2000"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               style="z-index:26;white-space:nowrap;color:#000;">off on All ITEMS
            </div>

            <!-- LAYER NR. 5 -->
            <div class="tp-caption rs-parallaxlevel-0 slider_text1 slider_right"
               id="slide-2-layer-5"
               data-x="['right','right','right','center']" data-hoffset="['0','30','30','0']"
               data-y="['top','bottom','bottom','middle']" data-voffset="['365','30','30','-44']"
               data-fontsize="['50','25','20','25']"
               data-lineheight="['70','30','25','30']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
               data-transform_out="auto:auto;s:1000;"
               data-start="2500"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               data-responsive="on"
               style="z-index:22;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">BABY-KICKING DEALS!
            </div>

            <!-- LAYER NR. 6 -->
            <a href="#">
            <div class="tp-caption rs-parallaxlevel-0 slider_borderbtn1 slider_rightM"
               id="slide-2-layer-6"
               data-x="['right','right','right','center']" data-hoffset="['0','521','398','0']"
               data-y="['bottom','top','top','top']" data-voffset="['105','248','218','264']"
               data-fontsize="['20','25','20','25']"
               data-width="194"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
               data-style_hover="c:rgba(189,141,191,1.00);bc:rgba(189,141,191,1.00);cursor:pointer;"
               data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
               data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
               data-start="3000"
               data-splitin="none"
               data-splitout="none"
               data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
               data-responsive_offset="on"
               data-responsive="on"
               style="z-index:9;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Download Bumpy
            </div></a>

            <!-- LAYER NR. 7 -->
            <div class="tp-caption rs-parallaxlevel-0 slider_borderbtn1 slider_rightM"
               id="slide-2-layer-7"
               data-x="['right','left','left','center']" data-hoffset="['210','522','399','0']"
               data-y="['bottom','top','top','top']" data-voffset="['105','248','218','188']"
               data-fontsize="['20','25','20','25']"
               data-width="194"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
               data-style_hover="c:rgba(189,141,191,1.00);bg:rgba(255,255,255,1.00);cursor:pointer;"
               data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
               data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
               data-start="3500"
               data-splitin="none"
               data-splitout="none"
               data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
               data-responsive_offset="on"
               data-responsive="on"
               style="z-index:9;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;background-color:rgba(189,141,191,1.00);">Shop Now
            </div>
          </li>

          <li data-transition="fadeout" data-thumb="images/slider/bumpy-slider-test-3.png" data-title="Join Bumpy">
            <!-- MAIN IMAGE -->
            <img src="images/slider/bumpy-slider-test-3.png" alt="" width="1920" height="617">

            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-0"
               id="slide-3-layer-1"
               data-x="['right','center','center','center']" data-hoffset="['-220','-161','-111','96']"
               data-y="['top','bottom','bottom','bottom']" data-voffset="['0','-10','-1','-39']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:3000;e:Power4.easeOut;"
               data-transform_out="opacity:0;s:300;s:300;"
               data-start="1000"
               data-responsive_offset="on"
               data-lasttriggerstate="reset"
               style="z-index:0;"><alt="" width="772" height="617" data-ww="['772px','437px','393px','393px']" data-hh="['617px','270px','243px','243px']" data-lazyload="images/slider/banner1-2.png" data-no-retina class="rs-looped rs-slideloop" data-easing="Power2.easeInOut" data-speed="1" data-xs="0" data-xe="0" data-ys="2" data-ye="-2">
            </div>

            <!-- LAYER NR. 2 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_left"
               id="slide-3-layer-2"
               data-x="['left','left','left','left']" data-hoffset="['0','80','40','40']"
               data-y="['top','top','top','top']" data-voffset="['210','587','382','282']"
               data-fontsize="['30','25','20','25']"
               data-lineheight="['40','30','25','30']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2500;e:Power3.easeInOut;"
               data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
               data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
               data-start="1000"
               data-responsive_offset="on"
               style="z-index:6;color:#ffffff;">Friends and family can shop for you<br> on your Baby on a Budget registry.
            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_left"
               id="slide-3-layer-3"
               data-x="['left','left','left','left']" data-hoffset="['42','80','40','40']"
               data-y="['top','top','top','top']" data-voffset="['209','450','250','150']"
               data-fontsize="['33','25','20','25']"
               data-lineheight="['40','30','25','30']"
               data-width="364"
               data-height="133"
               data-whitespace="normal"
               data-transform_idle="o:1;"
               data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:2500;e:Power3.easeInOut;"
               data-transform_out="y:[100%];s:1000;s:1000;"
               data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
               data-start="2000"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               style="z-index:5;white-space:normal;color:#000;">
            </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-0 slider_text slider_left"
               id="slide-3-layer-4"
               data-x="['left','left','left','center']" data-hoffset="['10','651','563','434']"
               data-y="['top','top','top','top']" data-voffset="['345','483','377','180']"
               data-fontsize="['23','25','20','25']"
               data-lineheight="['20','30','25','30']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-visibility="['on','on','on','on']"
               data-transform_idle="o:1;"

               data-transform_in="x:50px;opacity:0;s:1500;e:Power3.easeInOut;"
               data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
               data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
               data-start="2500"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               style="z-index:26;white-space:nowrap;color:#ffffff;font-style:italic;">Esi Yankah
            </div>

            <!-- LAYER NR. 5 -->
            <div class="tp-caption rs-parallaxlevel-0 slider_text slider_left"
               id="slide-3-layer-5"
               data-x="['left','right','right','center']" data-hoffset="['0','30','30','0']"
               data-y="['top','bottom','bottom','middle']" data-voffset="['410','30','30','-44']"
               data-fontsize="['35','25','20','25']"
               data-lineheight="['30','30','25','30']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
               data-transform_out="auto:auto;s:1000;"
               data-start="2500"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               data-responsive="on"
               style="z-index:22;color:#ffffff;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Join
            </div>

            <!-- LAYER NR. 6 -->
            <div class="tp-caption rs-parallaxlevel-0 slider_text slider_left"
               id="slide-3-layer-6"
               data-x="['left','right','right','center']" data-hoffset="['80','30','30','0']"
               data-y="['top','bottom','bottom','middle']" data-voffset="['418','30','30','-44']"
               data-fontsize="['24','25','20','25']"
               data-lineheight="['20','30','25','30']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
               data-transform_out="auto:auto;s:1000;"
               data-start="3000"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               data-responsive="on"
               style="z-index:22;color:#ffffff;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Bumpy Shoppers Club
            </div>

            <!-- LAYER NR. 7 -->
            <div class="tp-caption rs-parallaxlevel-0 slider_text slider_left"
               id="slide-3-layer-7"
               data-x="['left','right','right','center']" data-hoffset="['495','30','30','0']"
               data-y="['top','bottom','bottom','middle']" data-voffset="['410','30','30','-44']"
               data-fontsize="['35','25','20','25']"
               data-lineheight="['30','30','25','30']"
               data-width="none"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
               data-transform_out="auto:auto;s:1000;"
               data-start="3500"
               data-splitin="none"
               data-splitout="none"
               data-responsive_offset="on"
               data-responsive="on"
               style="z-index:22;color:#bd8dbf;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
            </div>

            <!-- LAYER NR. 8 -->
            <a href="registry.php" class="white-to-black">
            <div class="tp-caption rs-parallaxlevel-0 slider_borderbtn1 slider_leftM"
               id="slide-3-layer-8"
               data-x="['left','right','right','center']" data-hoffset="['0','521','398','0']"
               data-y="['bottom','top','top','top']" data-voffset="['105','248','218','264']"
               data-fontsize="['20','25','20','25']"
               data-width="194"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
               data-style_hover="c:rgba(0,0,0,1.00);bc:rgba(255,255,255,1.00);bg:rgba(255,255,255,1.00);cursor:pointer;"
               data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
               data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
               data-start="3500"
               data-splitin="none"
               data-splitout="none"
               data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
               data-responsive_offset="on"
               data-responsive="on"
               style="z-index:9;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;background-color:#000;border-color:#000;">Registry
            </div></a>

            <!-- LAYER NR. 9 -->
            <div class="tp-caption rs-parallaxlevel-0 slider_borderbtn1 slider_leftM"
               id="slide-3-layer-9"
               data-x="['left','left','left','center']" data-hoffset="['210','522','399','0']"
               data-y="['bottom','top','top','top']" data-voffset="['105','248','218','188']"
               data-fontsize="['20','25','20','25']"
               data-width="194"
               data-height="none"
               data-whitespace="nowrap"
               data-transform_idle="o:1;"
               data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
               data-style_hover="c:rgba(189,141,191,1.00);bc:rgba(189,141,191,1.00);cursor:pointer;"
               data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;"
               data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;"
               data-start="4000"
               data-splitin="none"
               data-splitout="none"
               data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
               data-responsive_offset="on"
               data-responsive="on"
               style="z-index:10;white-space:nowrap;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;color:#000;border-color:#000;">View registry
            </div>
          </li>

          <!-- Layer for slider 4 -->
          <li data-transition="fade" data-thumb="images/slider/bumpy-slider-test-4.png" data-title="Shop Now">
            <!-- MAIN IMAGE -->
            <img src="images/slider/bumpy-slider-test-4.png" alt="" width="1920" height="617">

          </li>
          <!-- end of layer 4 -->
                </ul>
            </div><!-- END REVOLUTION SLIDER -->
        </div><!-- END OF SLIDER WRAPPER -->
  </div><!-- ( BANNER END ) -->


	<div id="content">
		<div class="stripe">
			<div class="container">
				<h3 class="dashStyle">As seen on the Esi Yankah Show</h3>
				<div class="productsRow row">
                	<ul class="clearfix prodCarousel">
    <?php foreach($products as $product){?>

            <li>
							<div class="col-xs-12">
                                <div class="productBox">
                                <div class="image_container">
                                    <div class="productImage hoverStyle">
                                        <img src="<?= $product['image'];?>" width="240" height="240" alt="">

                                        <div class="hoverBox">

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
                                        </div><!-- ( HOVER BOX END ) -->
                                    </div><!-- ( PRODUCT IMAGE END ) -->
                                    </div>
                                    <div class="productDesc">
                                        <span class="product-title truncate"><a href="product-details.php?product_id=<?=$product['id']?>"><?=$product['name']?></a></span>
                                        <!-- <p>Boatneck, Long sleeves, Approx. 24" length, Imported</p> -->
                                        <div>
                                        <span class="product-price">
                                           <a href="<?=($user_is_logged_in)?'#':'/login-register.php'?>">
                                        <strong>Club price:</strong>   <strong class="badge badge-success">GHS <?=$product['clubPrice']?></strong>
                                          </a>
                                        </div><!-- ( STARS END ) -->
                                        <div >Regular price: <strong>GHS <?=$product['origPrice']?></strong></div>
                                        <div class="wishlist-bb-registry">
                                        <div class="wishlist">
                                        <form action="/wishlist.php" method="POST">
                                          <input type="hidden" name="addAWish" value="<?=$product['id']?>">
                                          <button class="icon-as-btn" title="My wishlist" type="submit"><i class="fa fa-heart-o fa-2x"></i> </button>
                                          <div>wishlist</div>
                                          <!-- <a href=""></a> -->
                                        </form>
                                        </div>
                                        <div class="bb-registry">
                                        <form action="/registry.php" method="POST">
                                          <input type="hidden" name="addARegistry" value="<?=$product['id']?>">
                                          <button class="icon-as-btn" title="Baby registry" type="submit"><i class="fa fa-child fa-2x"></i> </button>
                                          <div>Baby registry</div>
                                        </form>
                                        </div>
                                        </div>

                                        </span>

                                    </div><!-- ( PRODUCT DESCRIPTION END ) -->
                                </div><!-- ( PRODUCT BOX END ) -->
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
				</div><!-- ( PRODUCTS ROW END ) -->
			</div>
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
									<a href="/product-list.php?cat_id=<?=$category['id']?>">
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


		<div class="stripe">
			<div class="container">
				<h3 class="dashStyle">Latest Products</h3>
				<div class="productsRow row">
					<ul class="clearfix prodCarousel">

<?php foreach($products as $product){?>
             <li>
							<div class="col-xs-12">
                                <div class="productBox">
                                    <div class="productImage hoverStyle">
                                        <img src="<?=$product['image']?>" alt="">
                                        <div class="hoverBox">
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
                                        </div><!-- ( HOVER BOX END ) -->
                                    </div><!-- ( PRODUCT IMAGE END ) -->
                                    <div class="productDesc">
                                        <span class="product-title truncate"><a href="product-details.html"><?=$product['name']?></a></span>
                                        <div>
                                            <a href="login-register.php">
                                      <strong>Club price:</strong> <strong class="badge badge-success">GHS <?=$product['clubPrice']?></strong>
                                      </a>
                                        </div><!-- ( STARS END ) -->
                                        <div >Regular price: <strong>GHS <?=$product['origPrice']?></strong></div>
                                         <div class="wishlist-bb-registry">
                                        <div class="wishlist">
                                        <form action="/wishlist.php" method="POST">
                                          <input type="hidden" name="addAWish" value="<?=$product['id']?>">
                                          <button class="icon-as-btn" title="My wishlist" type="submit"><i class="fa fa-heart-o fa-2x"></i> </button>
                                         <div>Wishlist</div>
                                        </form>
                                        </div>
                                        <div class="bb-registry">
                                        <form action="/registry.php" method="POST">
                                          <input type="hidden" name="addARegistry" value="<?=$product['id']?>">
                                          <button class="icon-as-btn" title="Baby registry" type="submit"><i class="fa fa-child fa-2x"></i> </button>
                                          <div>Baby registry</div>
                                        </form>
                                        </div>
                                        </div>
                                    </div><!-- ( PRODUCT DESCRIPTION END ) -->
                                </div><!-- ( PRODUCT BOX END ) -->
                            </div>


						</li>
<?php } ?>

					</ul>
				</div><!-- ( PRODUCTS ROW END ) -->
        <br>
        <div class="col-xs-6">
        <a href="contact_us.php" title="Sell your items">
        <img src="images/sell-items.jpeg">
        </a>
        </div>
        <div class="col-xs-6">
        <a href="registry.php" title="Add to baby registry">
        <img src="images/baby-registry-img.jpg">
        </a>
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

</div><!-- ( WRAPPER END ) -->


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
