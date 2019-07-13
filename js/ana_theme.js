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

		// Add shadow on navbar on scroll

		jQuery(window).scroll(function() {
		    var scroll = jQuery(window).scrollTop();
		    if (scroll > 275) {
		        jQuery(".navbar").addClass("shadow");
						jQuery(".form-control").css("font-size","0.9rem");
						jQuery(".form-control").css("height","35px");
						jQuery(".btn").css("height","35px");
		    }
		    else {
		        jQuery(".navbar").removeClass("shadow");
						jQuery(".form-control").css("font-size","1rem");
						jQuery(".form-control").css("height","40px");
						jQuery(".btn").css("height","40px");
		    }
		});

});

// When the user scrolls down 225px from the top of the document, show logo and search in menu

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
