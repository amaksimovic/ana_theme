// javascript function

// When the user scrolls down from the top of de document, show the button

jQuery(document).ready(function() {
		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('#myBtn').fadeIn(duration);
			} else {
				jQuery('#myBtn').fadeOut(duration);
			}
		});

		jQuery('#myBtn').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	});

// When the user scrolls down 225px from the top of the document, show logo in menu

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 480 || document.documentElement.scrollTop > 480) {
		document.getElementById("menu-search").style.display = "block";
		document.getElementById("menu-logo").style.display = "block";
	} else {
		document.getElementById("menu-search").style.display = "none";
		document.getElementById("menu-logo").style.display = "none";
	}
}

// $( document ).ready(function() {
//             $(".navbar-nav").append("<li>" + "<?php echo get_search_form(); ?>" + "</li>");
//         });


// $(window).scroll(function() {
// 	var scroll = $(window).scrollTop();
//
// 		if (scroll >= 225) {
// 				$(".menu-search").addClass("visible");
// 		} else {
// 				$(".menu-search").removeClass("visible");
// 			}
// 	});
