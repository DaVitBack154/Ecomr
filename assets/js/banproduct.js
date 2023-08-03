$(document).ready(function () {
  $("#owl-carousel-1").owlCarousel({
    loop: true,
    margin: 10,
    dots: false, // Hide the dots
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 1,
        nav: true,
      },
      1400: {
        items: 1,
        nav: true,
        loop: true,
      },
    },
  });

  $("#owl-carousel-2").owlCarousel({
    loop: true,
    margin: 10,
    dots: false, // Hide the dots
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 1,
        nav: true,
      },
      1400: {
        items: 1,
        nav: true,
        loop: true,
      },
    },
  });

  $("#owl-carousel-featured").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    dots: false, // Hide the dots
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 3,
        nav: true,
      },
      1400: {
        items: 4,
        nav: true,
        loop: true,
      },
      1024: {
        items: 4,
        nav: true,
        loop: true,
      },
    },
  });

  $("#owl-topCollections").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    dots: false, // Hide the dots
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 3,
        nav: true,
      },
      1400: {
        items: 5,
        nav: true,
        loop: true,
      },
      1024: {
        items: 4,
        nav: true,
        loop: true,
      },
    },
  });

  $("#owl-theBestProduct-1").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    dots: false, // Hide the dots
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1400: {
        items: 6,
        nav: true,
        loop: true,
      },
      1024: {
        items: 3,
        nav: true,
        loop: true,
      },
    },
  });

  $("#owl-theBestProduct-2").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    dots: false, // Hide the dots
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1400: {
        items: 6,
        nav: true,
        loop: true,
      },
      1024: {
        items: 3,
        nav: true,
        loop: true,
      },
    },
  });

  $("#owl-ourLatestBlogs").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    dots: false, // Hide the dots
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 3,
        nav: true,
      },
      1400: {
        items: 5,
        nav: true,
        loop: true,
      },
      1024: {
        items: 3,
        nav: true,
        loop: true,
      },
    },
  });

  $("#owl-partner").owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    dots: false, // Hide the dots
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 3,
        nav: true,
      },
      1400: {
        items: 7,
        nav: true,
        loop: true,
      },
      1024: {
        items: 5,
        nav: true,
        loop: true,
      },
    },
  });
});
