$(function() {
  //owl-carousel

  $(".useful-articles-items").owlCarousel({
    items: 3,

    responsive: {
      0: {
        items: 1,
        dots: true
      },
      768: {
        items: 2,
        dots: false
      },

      1200: {
        items: 3
      }
    }
  });

  $(".menu-btn").on("click", function(e) {
    e.preventDefault();
    $(this).toggleClass("menu-btn--active");

    if ($(this).hasClass("menu-btn--active")) {
      $(".mobile-navigation").slideDown();
      $(this)
        .children("p")
        .html("Закрыть");
    } else {
      $(".mobile-navigation").slideUp();
      $(this)
        .children("p")
        .html("Навигация");
    }
  });

  //SVG Fallback
  if (!Modernizr.svg) {
    $("img[src*='svg']").attr("src", function() {
      return $(this)
        .attr("src")
        .replace(".svg", ".png");
    });
  }

  //function for match max height
  $.fn.itemheight = function() {
    var $blocks = $(this);
    var maxH = $(this).height();
    $($blocks).each(function() {
      if ($(this).height() > maxH) {
        maxH = $(this).height();
      }
    });
    $blocks.height(maxH);
  };

  $(".useful-articles__item").itemheight();

  //slider main-section

  if ($(window).width() <= 992) {
    $(".main-services").addClass("owl-carousel");
    $(".main-services").owlCarousel({
      items: 1,
      dots: true
    });

    $(".counter-items").addClass("owl-carousel");
    $(".counter-items").owlCarousel({
      items: 1,
      dots: true
    });
  }

  if ($(window).width() <= 768) {
    $(".advantages-items").addClass("owl-carousel");
    $(".advantages-items").owlCarousel({
      items: 1,
      dots: true
    });

    $(".link-block__items").addClass("owl-carousel");
    $(".link-block__items").owlCarousel({
      items: 1,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        992: {
          items: 2
        }
      }
    });
  }

  if ($(window).width() <= 992) {
    $(".tile-items").addClass("owl-carousel");
    $(".tile-items").owlCarousel({
      items: 1,
      dots: true
    });

    $(".team__items").addClass("owl-carousel");
    $(".team__items").owlCarousel({
      items: 2,
      dots: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        992: {
          items: 3.5
        }
      }
    });
  }

  $(".show-advantages").on("click", function() {
    $(this)
      .siblings(".list")
      .slideDown(300);
  });

  $(".menu-child li a").hover(function() {
    $(".menu-child li a").removeClass("active");
    $(this).addClass("active");
  });

  $(".licenze-items").owlCarousel({
    items: 2,
    nav: true,

    responsive: {
      0: {
        items: 1
      },
      480: {
        items: 2
      },
      768: {
        items: 4
      },
      992: {
        items: 2
      }
    }
  });

  $(".post-slider").owlCarousel({
    items: 1,
    dots: true
  });

  $(".prices-wrap--slider").owlCarousel({
    items: 2.5,
    nav: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      1200: {
        items: 3
      }
    }
  });

  $(".prices-wrap--slider1").owlCarousel({
    items: 3,
    nav: true,
    loop: true
  });

  $(".prices-wrap--slider .price__item").itemheight();

  $(".border-phone").magnificPopup({
    type: "inline"
  });

  $(".search-button-modal-trigger").magnificPopup({
    type: "inline"
  });

  $(".calculator-button.button").magnificPopup({
    type: "inline"
  });

  $(".form-button .button").click(function() {
    $.magnificPopup.close();
  });

  $(".arenda-button").magnificPopup({
    type: "inline"
  });

  $(".video-section__link").magnificPopup({
    type: "iframe"
  });

  // let openMenuFlag = false;

  // $('.menu__item-link').hover(function() {
  // 	if(openMenuFlag === false) {
  // 		$(this).siblings('ul').slideDown();
  // 		openMenuFlag = true;
  // 	}
  // 	else {
  // 		$(this).siblings('ul').slideUp();
  // 		openMenuFlag = false;
  // 	}
  // })

  //E-mail Ajax Send
  //Documentation & Example: https://github.com/agragregra/uniMail
  $("form").submit(function() {
    //Change
    var th = $(this);
    $.ajax({
      type: "POST",
      url: "mail.php", //Change
      data: th.serialize()
    }).done(function() {
      alert("Thank you!");
      setTimeout(function() {
        // Done Functions
        th.trigger("reset");
      }, 1000);
    });
    return false;
  });
});
