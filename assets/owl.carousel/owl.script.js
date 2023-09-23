$(document).ready(function () {
  $("#mainSlider").owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1.1,
      },
      768: {
        items: 1.25,
      },
      1040: {
        items: 1.5,
      },
    },
  });

  let benefits_carousel = [];

  $(".slide-benefits").each(function (key) {
    benefits_carousel[key] = $(".owl-carousel", this);

    benefits_carousel[key].owlCarousel({
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      loop: true,
      margin: 16,
      nav: false,
      dots: false,
      center: true,
      responsive: {
        0: {
          items: 1.75,
        },
        768: {
          items: 2.5,
        },
        1040: {
          items: 3,
        },
      },
    });

    $(this)
      .find(".slide-benefits-prev")
      .bind("click", function () {
        product_carousel[key].trigger("prev.owl.carousel");
      });

    $(this)
      .find(".slide-benefits-next")
      .bind("click", function () {
        product_carousel[key].trigger("next.owl.carousel");
      });
  });

  let stories_carousel = [];

  $(".slide-stories").each(function (key) {
    stories_carousel[key] = $(".owl-carousel", this);

    stories_carousel[key].owlCarousel({
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      loop: true,
      margin: 16,
      nav: false,
      dots: false,
      center: true,
      responsive: {
        0: {
          items: 4,
        },
        768: {
          items: 4,
        },
        1040: {
          items: 7,
        },
      },
    });

    $(this)
      .find(".slide-stories-prev")
      .bind("click", function () {
        product_carousel[key].trigger("prev.owl.carousel");
      });

    $(this)
      .find(".slide-stories-next")
      .bind("click", function () {
        product_carousel[key].trigger("next.owl.carousel");
      });
  });

  let product_carousel = [];

  $(".slide-products").each(function (key) {
    product_carousel[key] = $(".owl-carousel", this);

    product_carousel[key].owlCarousel({
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      loop: true,
      margin: 16,
      nav: false,
      dots: false,
      responsive: {
        0: {
          items: 1.5,
          center: true,
        },
        768: {
          items: 4,
          center: false,
        },
        1040: {
          items: 5,
          center: false,
        },
      },
    });

    $(this)
      .find(".slide-products-prev")
      .bind("click", function () {
        product_carousel[key].trigger("prev.owl.carousel");
      });

    $(this)
      .find(".slide-products-next")
      .bind("click", function () {
        product_carousel[key].trigger("next.owl.carousel");
      });
  });
});
