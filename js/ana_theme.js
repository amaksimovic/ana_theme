// javascript function

// When the user scrolls down 20px from the top of the document, show the button

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

// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 225 || document.documentElement.scrollTop > 225) {
    document.getElementById("nav-icon").style.display = "block";
	} else {
		document.getElementById("nav-icon").style.display = "none";
	}
}
