$(function () {
	//owl-carousel

	$('.useful-articles-items').owlCarousel({
		items: 3,

		responsive: {
			0: {
				items: 1,
				dots: true,
			},
			768: {
				items: 2,
				dots: false,
			},

			1200: {
				items: 3,
			}
		}
	});

	$('.menu-btn').on('click', function (e) {
		e.preventDefault();
		$(this).toggleClass('menu-btn--active');
	});

	//SVG Fallback
	if (!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function () {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//function for match max height
	$.fn.itemheight = function(){
			var $blocks = $(this);
			var maxH = $(this).height();
			$($blocks).each(function(){
					if($(this).height() > maxH){
							maxH = $(this).height();
					}
			});
			$blocks.height(maxH);
	}


	//slider main-section

	if($(window).width() <= 992) {
		$('.main-services').addClass('owl-carousel');
		$('.main-services').owlCarousel({
			items: 1,
			dots: true
		});

		$('.counter-items').addClass('owl-carousel');
		$('.counter-items').owlCarousel({
			items: 1,
			dots: true
		});
	}

	if($(window).width() <= 768) {
		$('.advantages-items').addClass('owl-carousel');
		$('.advantages-items').owlCarousel({
			items: 1,
			dots: true
		});
	}


	$('.show-advantages').on('click', function() {
		$(this).siblings('.list').slideDown(300);
	});

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function () { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function () {
			alert("Thank you!");
			setTimeout(function () {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});


