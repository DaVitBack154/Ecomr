<!DOCTYPE html>
<html lang="en">

<head>

    <title>Funiture</title>

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



    

</head>

<body class="page-has-left-panels justify-content-center bg-white">


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

    <div class="container-fluid">
        <!-- รอทำ================================================ -->

        <div class="row row-content">
            <div class="content-left">
                <?php include('page/page5/left_menu.php') ?>
            </div>
            <div class="content-right">
                <?php include('page/page5/product-views.php') ?>
                <?php include('page/page5/tab_menu.php') ?>
                <?php include('page/page5/related-products.php') ?>
            </div>
        </div>

    </div>


    <!-- Top Header-Profile -->



    <!-- ... end Top Header-Profile -->

    <!-- ... end Window-popup-CHAT for responsive min-width: 768px -->

    <?php include('./components/footer.php') ?>

    <!-- JS Scripts -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let webpMachine = new webpHero.WebpMachine()
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

    <script>
        $("body").on("click", "[data-id]", async function (e) {
            const dataID = $(this).data("id");
            $(".active-product").removeClass("active-product");
            $(`#thumbnail${dataID}`).addClass("active-product");
        });

        $("body").on("click", "[data-button-view]", async function (e) {
            const dataID = $(this).data("button-view");
            const $customParent = $(`.cutom-parent-${dataID}`);
            const $buttonView = $(`#button-view-${dataID}`);

            // Check if the element has the class "active"
            if ($customParent.hasClass("active")) {
                // If the element is already active, deactivate it and hide it
                $customParent.removeClass("active");
                $buttonView.fadeOut("slow");
            } else {
                // If the element is not active, deactivate other elements and activate it
                $("[data-button-view]").not(this).each(function () {
                    const otherDataID = $(this).data("button-view");
                    const $otherCustomParent = $(`.cutom-parent-${otherDataID}`);
                    const $otherButtonView = $(`#button-view-${otherDataID}`);
                    $otherCustomParent.removeClass("active");
                    $otherButtonView.fadeOut("slow");
                });

                $customParent.addClass("active");
                $buttonView.fadeIn("slow");
            }
        });




        // let active = false;
        // let hover = false;
        // let itemver =  11 ;
        // let show_itemver = itemver-1 ;

        // $(".vertical .button-view .megamenu .loadmore").click(function(){
        //     if($(this).hasClass('open')){
        //         $('ul.megamenu li.item-vertical').each(function(i){
        //                 if(i>show_itemver){
        //                         $(this).slideUp(200);
        //                         $(this).css('display', 'none');
        //                 }
        //         });
        //         $(this).removeClass('open');
        //         $('.vertical .megamenu .loadmore').html('<i class="fa fa-plus-square"></i><span class="more-view">Open Categories</span>');
        //     }else{
        //         $('.vertical ul.megamenu li.item-vertical').each(function(i){
        //             if(i>show_itemver){
        //                     $(this).slideDown(200);
        //             }
        //         });
        //         $(this).addClass('open');
        //         $('.vertical .megamenu .loadmore').html('<i class="fa fa-minus-square"></i><span class="more-view">Close Categories</span>');
        //     }
        // });


    </script>

    
    <script>
      $(document).ready(function () {
        let sync1 = $("#sync1");
        let sync2 = $("#sync2");
        let slidesPerPage = 4; //globaly define number of elements per page
        let syncedSecondary = true;

        sync1
          .owlCarousel({
            items: 1,
            slideSpeed: 2000,
            nav: false,
            dots: false,
            responsiveRefreshRate: 200,
            navText: [
              '<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>',
              '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>',
            ],
          })
          .on("changed.owl.carousel", syncPosition);

        sync2
          .on("initialized.owl.carousel", function () {
            sync2.find(".owl-item").eq(0).addClass("current");
          })

          .owlCarousel({
            items: slidesPerPage,
            dots: false,
            nav: false,
            // center:true,
            smartSpeed: 200,
            slideSpeed: 500,
            URLhashListener: true,
            startPosition: "URLHash",
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100,
            responsive: {
              320: {
                items: 2,
                nav: true,
              },
              425: {
                items: 3,
                nav: true,
              },
              600: {
                items: 2,
                nav: true,
              },
              768: {
                items: 3,
                nav: true,
              },
              1024: {
                items: 2,
              },
              1440: {
                items: 4,
              },
              
            },
          })
          .on("changed.owl.carousel", syncPosition2);

        function syncPosition(el) {
          //if you set loop to false, you have to restore this next line
          let current = el.item.index;

          sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");

          let onscreen = sync2.find(".owl-item.active").length - 1;
          let start = sync2.find(".owl-item.active").first().index();
          let end = sync2.find(".owl-item.active").last().index();

          if (current > end) {
            sync2.data("owl.carousel").to(current, 100, true);
          }

          if (current < start) {
            sync2.data("owl.carousel").to(current - onscreen, 100, true);
          }
        }

        function syncPosition2(el) {
          if (syncedSecondary) {
            let number = el.item.index;

            sync1.data("owl.carousel").to(number, 100, true);
          }
        }

        sync2.on("click", ".owl-item", function (e) {
          e.preventDefault();
          let number = $(this).index();
          sync1.data("owl.carousel").to(number, 300, true);
        });
      });
    </script>

</body>

</html>