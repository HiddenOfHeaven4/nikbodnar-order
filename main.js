jQuery(document).ready(function($) {
    "use strict";
    $('#customers-testimonials').owlCarousel({
          stagePadding: 150,
        loop: true,
        items: 3,
        margin: 0,
        autoplay: true,
        dots:false,
        autoplayTimeout: 8500,
        smartSpeed: 450,
          responsiveBaseElement: 'body',
         responsiveClass:true,
        responsive: {
          0: {
            items: 1,
            stagePadding: 50
          },
          768: {
            items: 1
          },
          1170: {
            items: 3
          }
        }
    });
});