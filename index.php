<?php include 'components/nav.php' ?>
<!--Banner-->
<section id="banner">
    <div class="container-fluid">
        <div class="row">
            <!-- START REVOLUTION SLIDER 4.6.5 b1 fullwidth mode -->
            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:550px;">
                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:550px;height:550px;">
                    <ul>
                        <!-- SLIDE  1-->
                        <li data-transition="slideoverright" data-slotamount="7" data-masterspeed="300" data-thumb="images/home1-testi-bg.jpg" data-saveperformance="off" data-title="Slide">
                            <!-- MAIN IMAGE -->
                            <img src="images/home1-testi-bg.jpg" alt="portfolio-6-1140x760" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->


                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption smalltext sfr tp-resizeme" data-x="88" data-y="170" data-speed="300" data-start="500" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300"
                                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Термобилд 09
                            </div>

                        </li>


                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
                <script type="text/javascript">
                    var setREVStartSize = function() {
                        var tpopt = new Object();
                        tpopt.startwidth = 1200;
                        tpopt.startheight = 550;
                        tpopt.container = jQuery('#rev_slider_1_1');
                        tpopt.fullScreen = "off";
                        tpopt.forceFullWidth = "off";

                        tpopt.container.closest(".rev_slider_wrapper").css({
                            height: tpopt.container.height()
                        });
                        tpopt.width = parseInt(tpopt.container.width(), 0);
                        tpopt.height = parseInt(tpopt.container.height(), 0);
                        tpopt.bw = tpopt.width / tpopt.startwidth;
                        tpopt.bh = tpopt.height / tpopt.startheight;
                        if (tpopt.bh > tpopt.bw) tpopt.bh = tpopt.bw;
                        if (tpopt.bh < tpopt.bw) tpopt.bw = tpopt.bh;
                        if (tpopt.bw < tpopt.bh) tpopt.bh = tpopt.bw;
                        if (tpopt.bh > 1) {
                            tpopt.bw = 1;
                            tpopt.bh = 1
                        }
                        if (tpopt.bw > 1) {
                            tpopt.bw = 1;
                            tpopt.bh = 1
                        }
                        tpopt.height = Math.round(tpopt.startheight * (tpopt.width / tpopt.startwidth));
                        if (tpopt.height > tpopt.startheight && tpopt.autoHeight != "on") tpopt.height = tpopt.startheight;
                        if (tpopt.fullScreen == "on") {
                            tpopt.height = tpopt.bw * tpopt.startheight;
                            var cow = tpopt.container.parent().width();
                            var coh = jQuery(window).height();
                            if (tpopt.fullScreenOffsetContainer != undefined) {
                                try {
                                    var offcontainers = tpopt.fullScreenOffsetContainer.split(",");
                                    jQuery.each(offcontainers, function(e, t) {
                                        coh = coh - jQuery(t).outerHeight(true);
                                        if (coh < tpopt.minFullScreenHeight) coh = tpopt.minFullScreenHeight
                                    })
                                } catch (e) {}
                            }
                            tpopt.container.parent().height(coh);
                            tpopt.container.height(coh);
                            tpopt.container.closest(".rev_slider_wrapper").height(coh);
                            tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);
                            tpopt.container.css({
                                height: "100%"
                            });
                            tpopt.height = coh;
                        } else {
                            tpopt.container.height(tpopt.height);
                            tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);
                            tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);
                        }
                    };

                    /* CALL PLACEHOLDER */
                    setREVStartSize();


                    var tpj = jQuery;
                    tpj.noConflict();
                    var revapi1;



                    tpj(document).ready(function() {



                        if (tpj('#rev_slider_1_1').revolution == undefined) {
                            revslider_showDoubleJqueryError('#rev_slider_1_1');
                        } else {
                            revapi1 = tpj('#rev_slider_1_1').show().revolution({

                                dottedOverlay: "none",
                                delay: 9000,
                                startwidth: 1200,
                                startheight: 550,
                                hideThumbs: 200,

                                thumbWidth: 100,
                                thumbHeight: 50,
                                thumbAmount: 3,

                                simplifyAll: "off",
                                navigationType: "bullet",
                                navigationArrows: "solo",
                                navigationStyle: "preview1",
                                touchenabled: "on",
                                onHoverStop: "on",
                                nextSlideOnWindowFocus: "off",

                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                drag_block_vertical: false,


                                keyboardNavigation: "off",

                                navigationHAlign: "center",
                                navigationVAlign: "bottom",
                                navigationHOffset: 0,
                                navigationVOffset: 20,

                                soloArrowLeftHalign: "left",
                                soloArrowLeftValign: "center",
                                soloArrowLeftHOffset: 20,
                                soloArrowLeftVOffset: 0,

                                soloArrowRightHalign: "right",
                                soloArrowRightValign: "center",
                                soloArrowRightHOffset: 20,
                                soloArrowRightVOffset: 0,

                                shadow: 0,
                                fullWidth: "on",
                                fullScreen: "off",

                                spinner: "spinner0",

                                stopLoop: "off",
                                stopAfterLoops: -1,
                                stopAtSlide: -1,

                                shuffle: "off",

                                autoHeight: "off",
                                forceFullWidth: "off",



                                hideThumbsOnMobile: "off",
                                hideNavDelayOnMobile: 1500,
                                hideBulletsOnMobile: "off",
                                hideArrowsOnMobile: "off",
                                hideThumbsUnderResolution: 0,

                                hideSliderAtLimit: 0,
                                hideCaptionAtLimit: 0,
                                hideAllCaptionAtLilmit: 0,
                                startWithSlide: 0,
                                isJoomla: true
                            });



                        }
                    }); /*ready*/
                </script>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
    </div>
</section>
<!--Action-->


<!--about-->
<section id="about" class="space">
    <div class="container">
        <div class="row">
            <div class="about-block col-sm-12">
                <h2 class="title">За нас </h2>
                <p>Термобилд 09 е основана 2009г. в град Пловдив Фирмата ни разполага с квалифициран екип, висококачествено оборудване и гарантирано най-добрите материали на пазара. Целта ни се състой в това да изградим дълготрайни отношения с нашите клиенти
                    в резултат на добрата работа. Вече шест години предлагаме най-доброто качество на най -добрите цени с топлоизолационните системи на “CERESIT”, “MAPEI” и други водещи марки. Работим по стандарти на производителите, с което имаме възможност
                    за издаване на 10 годишна гаранция. Партньорските ни отношения с тях дават възможност и за нашите служители да бъдат обучавани ежегодно от най-добрите специалисти, с което се гарантира добрата квалификация. Термобилд 09 разполага с
                    ново собствено скеле сертифицирано по “ISO”9001 което отдаваме и под наем. Основната дейност на Термобилд 09 е монтаж на външна и вътрешна топлоизолация, ремонт на фуги, ремонт на фасади, боядисване и мазилки, довършителни работи и
                    вътрешни ремонти. Термо Билд е решението за Вашият дом, когато желаете да сложите край на високите разходи запазвайки топлината през зимата и спирате горещината през лятото.</p>
            </div>

        </div>
    </div>
</section>


<!--partner logo -->
<section class="partner-logo space">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <a target="_parent" href="#"><img class="img-responsive" src="images/140x95-1.png" alt="Client 1"></a>
            </div>
            <div class="col-sm-2">
                <a target="_parent" href="#"><img class="img-responsive" src="images/140x95-2.png" alt="Client 2"></a>
            </div>
            <div class="col-sm-2">
                <a target="_parent" href="#"><img class="img-responsive" src="images/140x95-3.png" alt="Client 3"></a>
            </div>
            <div class="col-sm-2">
                <a target="_parent" href="#"><img class="img-responsive" src="images/140x95-4.png" alt="Client 4"></a>
            </div>
            <div class="col-sm-2">
                <a target="_parent" href="#"><img class="img-responsive" src="images/140x95-5.png" alt="Client 5"></a>
            </div>
            <div class="col-sm-2">
                <a target="_parent" href="#"><img class="img-responsive" src="images/140x95-6.png" alt="Client 6"></a>
            </div>
        </div>
    </div>
</section>
<!--Footer upper-->

<!--footer copyrights-->
<footer id="sp-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>All rights reserved 2021 </p>
            </div>
        </div>
    </div>
</footer>
<!--Side Menu-->
<div class="offcanvas-menu">
    <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
    <div class="offcanvas-inner">
        <div class="sp-module ">
            <h3 class="sp-module-title">off canvas menu</h3>
            <div class="sp-module-content">
                <ul class="nav menu">
                    <li class="item-101 current active"><a href="index.html">Home</a></li>
                    <li class="item-165 deeper parent"><a href="services.html">services</a>
                        <ul class="nav-child unstyled small">
                            <li class="item-167"><a href="single-services.html">wooden work</a></li>
                            <li class="item-168"><a href="single-services.html">metal roofing</a></li>
                            <li class="item-169"><a href="single-services.html">architechture &amp; design</a></li>
                            <li class="item-170"><a href="single-services.html">general construction</a></li>
                            <li class="item-171"><a href="single-services.html">hardwood flooring</a></li>
                            <li class="item-172"><a href="single-services.html">house remodeling</a></li>
                        </ul>
                    </li>
                    <li class="item-166"><a href="about.html">about</a></li>
                    <li class="item-111"><a href="projects.html">projects</a></li>
                    <li class="item-109"><a href="blog.html">news</a></li>
                    <li class="item-110"><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<!--All Script-->
<script src="js/bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="js/appear.js"></script>
<script src="js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<!--portfolio-->
<script src="js/jquery.shuffle.modernizr.min.js" type="text/javascript"></script>
<script src="js/featherlight.min.js" type="text/javascript"></script>
<script src="js/spsimpleportfolio.js" type="text/javascript"></script>
<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="js/smoothscroll.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
<script src="js/sp-flickr-gallery.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>
</body>

</html>