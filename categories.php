<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.crumina.net/html-olympus/02-ProfilePage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 01:25:13 GMT -->

<head>

    <title>Profile Page</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Theme Font -->
    <link rel="preload" type="text/css" href="./assets/css/theme-font.min.css" as="style">

    <!-- Bootstrap CSS -->
    <?php include('./cdn.php') ?>

    <!-- Main Styles CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/main.min.css">

    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="stylesheet" href="./assets/css/lib.css">

    <!-- Main RTL CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="css/rtl.min.css"> -->

    <!-- WebP Safari Support -->
    <script src="./assets/webp-hero/dist-cjs/polyfills.js"></script>
    <script src="./assets/webp-hero/dist-cjs/webp-hero.bundle.js"></script>

    <!-- <style>
        .active {
            background-color: white !important;
            color: white;
        }
    </style> -->

</head>

<body class="page-has-left-panels justify-content-center">


    <!-- Preloader -->

    <div id="hellopreloader">
        <div class="preloader">
            <svg width="45" height="45" stroke="#fff">
                <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22" />
                        <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22" />
                        <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="8">
                        <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6" />
                    </circle>
                </g>
            </svg>

            <div class="text">Loading ...</div>
        </div>
    </div>

    <!-- ... end Preloader -->


    <?php include('./components/sidebar.php') ?>



    <!-- Header-BP -->
    <?php include('./components/navbar.php') ?>
    <!-- ... end Responsive Header-BP -->
    <div class="header-spacer"></div>


    <!-- ... end Top Header-Profile -->
    <div class="container">
        <div class="row">


            <div class="container">
                <br>
                <div>
                    <?php include('./page/page2/list_title.php') ?>
                </div>
                <div class="mt-5">
                    <?php include('./page/page2/product.php') ?>
                </div>


            </div>



        </div>
    </div>


    <?php include('./components/footer.php'); ?>

    <!-- JS Scripts -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var webpMachine = new webpHero.WebpMachine()
            webpMachine.polyfillDocument()
        });
    </script>
    <script src="./assets/js/jQuery/jquery-3.5.1.min.js"></script>

    <script src="./assets/js/libs/jquery.mousewheel.min.js"></script>
    <script src="./assets/js/libs/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/libs/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/libs/material.min.js"></script>
    <script src="./assets/js/libs/selectize.min.js"></script>
    <script src="./assets/js/libs/isotope.pkgd.min.js"></script>
    <script src="./assets/js/libs/ajax-pagination.min.js"></script>
    <script src="./assets/js/libs/jquery.magnific-popup.min.js"></script>

    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/libs-init/libs-init.js"></script>

    <script src="./js/bootstrap.bundle.js"></script>

    <!-- SVG icons loader -->
    <script src="./assets/js/svg-loader.js"></script>
    <!-- /SVG icons loader -->

</body>

<!-- Mirrored from html.crumina.net/html-olympus/02-ProfilePage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 01:25:57 GMT -->

</html>