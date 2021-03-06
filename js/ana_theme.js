
// When the user scrolls down 480px from the top of the document, show logo and search in menu, decrease font size

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  var navLink = document.getElementsByClassName("navbar");
  var dropDown = document.getElementsByClassName("dropdown-menu");
  var i;
  var j;
  if (document.body.scrollTop > 480 || document.documentElement.scrollTop > 480) {
		document.getElementById("menu-search").style.display = "block";
		document.getElementById("menu-logo").style.display = "block";
    for (i = 0; i < navLink.length; i++ ) {
			navLink[i].style.fontSize = "1.1em";
			navLink[i].style.transition = "font-size 0.25s ease-in";
    }
    for (j = 0; j < dropDown.length; j++ ) {
      dropDown[j].style.fontSize = "1rem";
      dropDown[j].style.transition = "font-size 0.25s ease-in";
		}
	} else {
		document.getElementById("menu-search").style.display = "none";
		document.getElementById("menu-logo").style.display = "none";
		for (i = 0; i < navLink.length; i++ ) {
			navLink[i].style.fontSize = "1.3em";
			navLink[i].style.transition = "font-size 0.25s ease-in";
    }
    for (j = 0; j < dropDown.length; j++ ) {
      dropDown[j].style.fontSize = "1.2rem";
      dropDown[j].style.transition = "font-size 0.25s ease-in";
		}
	}
}


jQuery(document).ready(function() {

		// When the user scrolls down from the top of de document, show the button
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

		    }
		    else {
		        jQuery(".navbar").removeClass("shadow");
		    }
		});

		// Reduce height of the search bar on scroll

		jQuery(window).scroll(function() {
		    var scroll = jQuery(window).scrollTop();
		    if (scroll > 480) {
						jQuery(".form-control").css({"font-size": "0.9rem", "height": "30px"});
						jQuery(".btn").css("height","30px");
						jQuery(".fa-search").css("vertical-align","top");
		    }
		    else {
						jQuery(".form-control").css({"font-size": "1rem", "height": "40px"});
						jQuery(".btn").css("height","40px");
						jQuery(".fa-search").css("vertical-align","baseline");
		    }
		});

});
