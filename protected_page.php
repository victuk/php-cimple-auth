<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

session_start();

include_once 'backendLogic/connectDb.php';
include_once 'backendLogic/checkIfLoggedIn.php';
// include_once 'backendLogic/login.php';


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
        <link rel="stylesheet" href="phpSecureLogin/styles/main.css" />
        <!--Favicon add-->
    <link rel="shortcut icon" type="image/png" href="assets/images/logo/icon.png">
    <!--bootstrap Css-->
    <link href="assets/front/css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome Css-->
    <link href="assets/front/css/font-awesome.min.css" rel="stylesheet">
    <!-- Lightcase  Css-->
    <link href="assets/front/css/lightcase.css" rel="stylesheet">
    <!--WOW Css-->
     <link href="assets/front/css/animate.min.css" rel="stylesheet">
    <!--Slick Slider Css-->
    <link href="assets/front/css/slick.css" rel="stylesheet">
    <!--Slick Nav Css-->
    <link href="assets/front/css/slicknav.min.css" rel="stylesheet">
    <!--Swiper  Css-->
    <link href="assets/front/css/swiper.min.css" rel="stylesheet">
    <!--Style Css-->
    <link href="assets/front/css/style.css" rel="stylesheet">
    <!-- Theam Color Css-->
    <link href="assets/css/color6ba9.css?color=FFD700" rel="stylesheet">
    <!--Responsive Css-->
    <link href="assets/front/css/responsive.css" rel="stylesheet">
    
   <link rel="stylesheet" href="assets/css/ion.rangeSlider.css">
   <link rel="stylesheet" href="assets/css/ranger-style.css">
   <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css">
    <style>
       .price-table {
            margin-bottom: 45px;
   </style>
    <script src="assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/front/2/css/style.css">
    
    <script src="assets/front/2/js/modernizr.js"></script>

    <link rel="stylesheet" type="text/css" href="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

    <script src="../cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    </head>
    <?php if (login_check($connection) == true) : ?>
    <body data-spy="scroll">
        <!-- Start Pre-Loader-->

<div id="preloader">
    <div data-loader="circle-side"></div>

</div>
<!-- End Preload -->
<div class="animation-element">
<!-- End Pre-Loader -->
<!--support bar  top start-->
<div class="support-bar-top wow slideInLeft" data-wow-duration="2s" id="raindrops-green">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                   
                    <a href="#"> <i class="fa fa-phone" aria-hidden="true"></i> +1 (309) 466-6406 </a>
                </div>
            </div>
            <div class="col-md-6 text-right bounceIn">
                <div class="contact-admin">
                <span style="color: #fff;
                    padding: 10px;
                    font-size: 14px;
                    display: inline-block;
                    transition: .5s;">
                Welcome <span style="font-weight: bold;"><?php echo htmlentities(ucfirst($_SESSION['username'])); ?></span>
                </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--support bar  top end-->
<!--main menu section start-->
<nav class="main-menu wow slideInRight" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/logo/logo.png" style="max-height:60px;"></a>
                </div>
            </div>
            <div class="col-md-9 text-right">
                <ul id="header-menu" class="header-navigation">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                                        <li><a href="faqs.html">Faq</a></li>
                    <li><a href="contact.html">Contact</a></li>
                                            <li><a class="page-scroll" href="#">Account <i class="fa fa-angle-down"></i></a>
                            <ul class="mega-menu mega-menu1 mega-menu2 menu-postion-4">
                                <li class="mega-list mega-list1">
                                    <span class="page-scroll"></span>
                                </li>
                            </ul>
                        </li>
                                    </ul>
            </div>
        </div>
    </div>
</nav>
<!--main menu section end-->

    <!--Header section start-->
    <section id="particles-js" class="header-area header-bg" style="background-image: url('assets/images/slider/5a25219022749.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="header-section-wrapper">
                        <div class="header-section-top-part">
                            <div class="text-first wow slideInLeft" data-wow-duration="2s"><h1 style="margin-top: 0px; margin-bottom: 15px; font-size: 38px; font-family: Montserrat, sans-serif; text-align: center;"><br></h1><h1 style="margin-top: 0px; margin-bottom: 15px; font-size: 38px; font-family: Montserrat, sans-serif; text-align: center;">Revolutionary Money Making Platform<span style="color: rgb(255, 255, 255);"><div><font color="#FF0000"><span style="font-size: 40px; font-weight: 800;">Forex Trade King</span></font><span style="font-size: 40px; font-weight: 800;"> is Growing Money <br><br></span></div></span></h1></div>
                            <p style="font-size: 1.5em;" class=" wow slideInDown" data-wow-duration="2s"><br>Grow Your Cryptocurrency With Forex Trade King<br><br></p>
                        </div>
                        <div class="header-section-bottom-part">
                            <div class="domain-search-from">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Header section end-->
    <div class="clearfix"></div>
        
        <p style="margin:20px; padding:20px;">Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p style="margin:20px; padding:20px;">
                This is an example protected page.  To access this page, users
                must be logged in.  At some stage, we'll also check the role of
                the user, so pages will be able to determine the type of user
                authorised to access the page.
            </p>

            <p style="margin:20px; padding:20px;">Return to <a href="index.php">login page</a></p>
            <p><form style="margin:20px; padding:20px;" method="POST" action="backendLogic/logOut.php">
            <input type=text name="logOut" value="logout" hidden>
            <input type="Submit" value="Log Out"></form></p>
        <?php else : ?>
            <p style="margin:20px; padding:20px;">
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>


        <!--Google Map APi Key-->
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--jquery script load-->
<script src="assets/front/js/jquery.js"></script> 

<script src="assets/front/js/bootstrap.min.js"></script>
<!-- Gmap Load Here -->
<script src="assets/front/js/gmaps.js"></script>
<!-- Map Js File Load -->
<script src="assets/front/js/map-script6ba9.php?color=FFD700"></script>
<!-- Highlight script load-->
<script src="assets/front/js/highlight.min.js"></script>
<!--Jquery Ui Slider script load-->
<script src="assets/front/js/jquery-ui-slider.min.js"></script>
<!--Circleful Js File Load-->
<script src="assets/front/js/jquery.circliful.js"></script>
<!--CounterUp script load-->
<script src="assets/front/js/jquery.counterup.min.js"></script>
<!-- Ripples  script load-->
<script src="assets/front/js/jquery.ripples-min.js"></script>
<!--Slick Nav Js File Load-->
<script src="assets/front/js/jquery.slicknav.min.js"></script>
<!--Lightcase Js File Load-->
<script src="assets/front/js/lightcase.js"></script>
<!--particle Js File Load-->
<script src="assets/front/js/particles.min.js"></script>
<!--particle custom Js File Load-->
<script src="assets/front/js/particles-custom.js"></script>
<!--RainDrops script load-->
<script src="assets/front/js/raindrops.js"></script>
<!--Easing script load-->
<script src="assets/front/js/easing-min.js"></script>
<!--Slick Slider Js File Load-->
<script src="assets/front/js/slick.min.js"></script>
<!--Swiper script load-->
<script src="assets/front/js/swiper.min.js"></script>
<!--WOW script load-->
<script src="assets/front/js/wow.min.js"></script>
<!--WayPoints script load-->
<script src="assets/front/js/waypoints.min.js"></script>
        <script type="text/javascript" src="assets/js/ion.rangeSlider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: true,
                live: true
            });
            wow.init();
        });
    </script>
    <script>
        $.each($('.slider-input'), function() {
            var $t = $(this),

                    from = $t.data('from'),
                    to = $t.data('to'),

                    $dailyProfit = $($t.data('dailyprofit')),
                    $totalProfit = $($t.data('totalprofit')),

                    $val = $($t.data('valuetag')),

                    perDay = $t.data('perday'),
                    perYear = $t.data('peryear');


            $t.ionRangeSlider({
                input_values_separator: ";",
                prefix: '$ ',
                hide_min_max: true,
                force_edges: true,
                onChange: function(val) {
                    $val.val( '$ ' + val.from);

                    var profit = (val.from * perDay / 100).toFixed(1);
                    profit  = '$ ' + profit.replace('.', '.') ;
                    $dailyProfit.text(profit) ;

                    profit = ( (val.from * perDay / 100)* perYear ).toFixed(1);
                    profit  =  '$ ' + profit.replace('.', '.');
                    $totalProfit.text(profit);

                }
            });
        });
        $('.invest-type__profit--val').on('change', function(e) {

            var slider = $($(this).data('slider')).data("ionRangeSlider");

            slider.update({
                from: $(this).val().replace('$ ', "")
            });
        })
    </script>
<!--Main js file load-->
<script src="assets/front/js/main.js"></script>

<script src="assets/front/2/js/main.js"></script>
<!-- <script src="https://theforextradeking.com/assets/js/main.js"></script> -->
<!--swal alert message-->

<!--end swal alert message-->
<script>
var mobile = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));

hljs.initHighlightingOnLoad();
hljs.configure({useBR: true});
jQuery('#raindrops').raindrops({color:'#fff',canvasHeight:5});
jQuery('#raindrops-green').raindrops({color:'#FFD700 ',canvasHeight:5});

</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fc4abbc920fc91564cbeb00/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script async data-id="67776" src="../cdn.widgetwhats.com/script.min.js"></script>


    </body>
</html>
