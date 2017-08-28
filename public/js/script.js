//script for performing fly in animation
$(window).ready(function() {
	setTimeout(function() {
		$('.fly-in[produces=intro-animation-up]').addClass('loaded');
	}, 800);
});

//Runs the parralax effect on the homepage
$('#Parallax-content').mousemove(function(e) {
   var amountMovedX = (e.pageX * -0.3 / 6);
   var amountMovedY = (e.pageY * -1.29 / 6);
   $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px ');
});

//delays links in the navbar from opening to alloq time for the ripple animation to run
function delay (URL) {
	setTimeout( function() { window.location = URL }, 400);
}
