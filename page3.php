<!DOCTYPE html>
<html lang="en">

<head>

    <title>BrandProduct</title>

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
    <link rel="stylesheet" href="./assets/css/custom.css">

    <!-- Main RTL CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="css/rtl.min.css"> -->

    <!-- WebP Safari Support -->
    <script src="./assets/webp-hero/dist-cjs/polyfills.js"></script>
    <script src="./assets/webp-hero/dist-cjs/webp-hero.bundle.js"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



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

    <div class="container">
        <div>
            <?php include('./page/page3/Carousel.php') ?>
        </div>
        <div>
            <?php include('./page/page3/featured-products.php') ?>
        </div>
        <div>
            <?php include('./page/page3/topCollections.php') ?>
        </div>
        <div>
            <?php include('./page/page3/theBestProduct.php') ?>
        </div>
        <div>
            <?php include('./page/page3/ourLatestBlogs.php') ?>
        </div>
        <div>
            <?php include('./page/page3/partner.php') ?>
        </div>
    </div>


    <!-- Top Header-Profile -->



    <!-- ... end Top Header-Profile -->

    <!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

    <?php include('./components/footer.php') ?>

    <!-- JS Scripts -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var webpMachine = new webpHero.WebpMachine()
            webpMachine.polyfillDocument()
        });
    </script>
    <script src="./assets/js/jQuery/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

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
    <script src="./assets/js/banproduct.js"></script>
    <!-- /SVG icons loader -->

</body>

</html>