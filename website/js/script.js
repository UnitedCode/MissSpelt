//
$(window).ready(function() {
	setTimeout(function() {
		$('.fly-in[produces=intro-animation-up]').addClass('loaded');
	}, 800);
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//delays links in the navbar from opening to alloq time for the ripple animation to run
function delay (URL) {
	setTimeout( function() { window.location = URL }, 400);
}