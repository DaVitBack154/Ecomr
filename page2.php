<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
    ============================================ -->
    <title>Emarket</title>
    <meta charset="utf-8">
    <meta name="keywords" content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description" content="eMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />

    <!-- Bootstap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" type="https://demo.smartaddons.com/templates/html/emarket/image/png" href="ico/favicon-16x16.png" />


    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://demo.smartaddons.com/templates/html/emarket/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="https://demo.smartaddons.com/templates/html/emarket/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="asset/css/lib.css" rel="stylesheet">
    <link href="https://demo.smartaddons.com/templates/html/emarket/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="https://demo.smartaddons.com/templates/html/emarket/js/minicolors/miniColors.css" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="asset/css/so_searchpro.css" rel="stylesheet">
    <link href="asset/css/so_megamenu.css" rel="stylesheet">
    <link href="asset/css/so-categories.css" rel="stylesheet">
    <link href="asset/css/so-listing-tabs.css" rel="stylesheet">
    <link href="asset/css/so-newletter-popup.css" rel="stylesheet">

    <link href="asset/css/footer4.css" rel="stylesheet">
    <link href="asset/css/header4.css" rel="stylesheet">
    <link id="color_scheme" href="asset/css/home4.css" rel="stylesheet">
    <link href="asset/css/responsive.css" rel="stylesheet">
    <link href="asset/css/custom.css?rand=<?php echo rand() ?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

</head>

<body class="common-home res layout-4">

    <div id="wrapper" class="wrapper-fluid banners-effect-10">

        <header id="header" class=" typeheader-4">
            <div class="header-middle">
            </div>
            <div class="container">
                <?php include('./component/navbar.php') ?>
            </div>
        </header>


        <?php include('./component/sidebar.php') ?>




        <!-- Main Container  -->
        <div class="main-container">
            <div id="content">
                <!--  start job here. -->
                <div class="container">
                    <br>
                    <div>
                        <?php include('./page2/list_title.php') ?>
                    </div>
                    <div class="mt-5">
                        <?php include('./page2/product.php') ?>
                    </div>
                </div>
                <!-- end job here. -->
            </div>
        </div>
        <!-- //Main Container -->



        <footer class="footer-container typefooter-4">
            <!-- Footer Top Container -->
            <section class="footer-top">
                <div class="container">
                    <div class="module newsletter-footer4">
                        <div class="newsletter" style="width:100%; background-color: #fff; ">
                            <div class="title-block">
                                <div class="page-heading font-title">Sign up for newsletter &amp; get 30% off</div>
                                <div class="promotext">Trade Alert - Delivering the latest product trends and industry news straight to your inbox.</div>
                            </div>

                            <div class="block_content">
                                <form method="post" id="signup" name="signup" class="form-group form-inline signup send-mail">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                        </div>
                                        <div class="subcribe">
                                            <button class="btn btn-primary btn-default font-title" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                                Subscribe
                                            </button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                            <!--/.modcontent-->

                        </div>

                    </div>
                </div>
            </section>
            <!-- /Footer Top Container -->

            <section class="footer-middle ">
                <div class="container">

                    <div class="row middle2 ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-style">
                            <div class="app-store module">
                                <h3 class="modtitle">Download APP:</h3>
                                <ul>
                                    <li>
                                        <a title="App Store" href="#">
                                            <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/payment/app-1.png" alt="App Store">
                                        </a>
                                    </li>
                                    <li>
                                        <a title="App Store" href="#">
                                            <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/payment/app-2.png" alt="App Store">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="socials-w module">
                                <h3 class="modtitle">Follow Us:</h3>
                                <ul class="socials">
                                    <li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li class="youtube"><a class="_blank" href="#" target="_blank"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="categories-footer">
                        <ul>
                            <li> <a href="#" title="Tom Lee">Tom Lee</a> | <a href="#" title="Honda SH">Honda SH</a> | <a href="#" title="Durex">Durex</a> | <a href="#" title="Apple Pen">Apple Pen</a> | <a href="#" title="Jacket Men">Jacket Men</a> | <a href="#" title="Kotex Style">Kotex Style</a> | <a href="#" title="LG TV">LG TV</a> | <a href="#" title="Dolce Gabbana">Dolce Gabbana</a> | <a href="#" title="Onida TV">Onida TV</a> | <a href="#" title="Toshiba TV">Toshiba TV</a> | <a href="#" title="Philips TV">Philips TV</a> | <a href="#" title="Micromax TV">Micromax TV</a> | <a href="#" title="LED TV">LED TV</a> | <a href="#" title="LCD TV">LCD TV</a> | <a href="#" title="Plasma TV">Plasma TV</a> | <a href="#" title="3D TV">3D TV</a> | <a href="#" title="Smart TV">Smart TV</a>
                            </li>
                            <li> <a href="#" title="Samsung Mobile">Samsung Mobile</a> | <a href="#" title="Asus Zenphone">Asus Zenphone</a> | <a href="#" title="Sony Camera">Sony Camera</a> | <a href="#" title="Jacket Men">Jacket Men</a> | <a href="#" title="Point shoot camera">Point shoot camera</a> | <a href="#" title="Camera Lens">Camera Lens</a> | <a href="#" title="Camera Tripod">Camera Tripod</a> | <a href="#" title="Camera Bag">Camera Bag</a> | <a href="#" title="Apple Laptop">Apple Laptop</a> | <a href="#" title="Acer Laptop">Acer Laptop</a> | <a href="#" title="Samsung Laptop">Samsung Laptop</a> | <a href="#" title="Lenovo Tablet">Lenovo Tablet</a> | <a href="#" title="Sony Laptop">Sony Laptop</a> | <a href="#" title="Accessories">Accessories</a> | <a href="#" title="Asus Laptop">Asus Laptop</a>
                            </li>
                            <li> <a href="#" title="Ipad">Ipad</a> | <a href="#" title="LG Tablet">LG Tablet</a> | <a href="#" title="Accessories">Accessories</a> | <a href="#" title="Notebook">Notebook</a> | <a href="#" title="Sony TV">Sony TV</a> | <a href="#" title="Hat">Hat</a> | <a href="#" title="LG TV">LG TV</a> | <a href="#" title="Panasonic TV">Panasonic TV</a> | <a href="#" title="Onida TV">Onida TV</a> | <a href="#" title="Tommy Hilfiger">Tommy Hilfiger</a> | <a href="#" title="Xiaomi">Xiaomi</a> | <a href="#" title="Dresses">Dresses</a> | <a href="#" title="Nokia 7610">Nokia 7610</a> | <a href="#" title="Honda SH">Honda SH</a> | <a href="#" title="Kotex">Kotex</a> | <a href="#" title="3D TV">3D TV</a> | <a href="#" title="Durex">Durex</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Footer Bottom Container -->
            <section class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 copyright-w">
                            <div class="copyright">eMarket © 2018 Demo Store. All Rights Reserved. Designed by <a href="http://www.opencartworks.com/" target="_blank">OpenCartWorks.Com</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 payment-w">
                            <img src="https://demo.smartaddons.com/templates/html/emarket/image/catalog/demo/payment/payment-4.png" alt="imgpayment">
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Footer Bottom Container -->


            <!--Back To Top-->
            <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        </footer>

    </div>


    <!-- End Color Scheme
============================================ -->



    <!-- Include Libs & Plugins
============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/themejs/libs.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/modernizr/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/minicolors/jquery.miniColors.min.js"></script>

    <!-- Theme files
============================================ -->

    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/themejs/application.js"></script>

    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/themejs/homepage.js"></script>

    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/themejs/toppanel.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="https://demo.smartaddons.com/templates/html/emarket/js/themejs/addtocart.js"></script>


    <script>
        // Sidebar Toggle
        window.addEventListener('DOMContentLoaded', function() {
            const sidebarToggle = document.body.querySelectorAll('.sidebar-toggle')

            const fixedSidebar = document.body.querySelector('.fixed-sidebar');
            const slideSidebar = document.body.querySelector('.slide-sidebar');

            if (sidebarToggle.length > 0 && slideSidebar && fixedSidebar) {
                sidebarToggle.forEach(function(toggle) {
                    toggle.addEventListener('click', function() {
                        fixedSidebar.classList.toggle('show');
                        slideSidebar.classList.toggle('show');
                    })
                })
            }
        });
    </script>


</body>

</html>