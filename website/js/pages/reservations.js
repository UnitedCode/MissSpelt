$(document).ready(function() {
	$('#r-phone').click(function () {
		$('#email').addClass('hidden');
		$('#phone').removeClass('hidden');
	});

	$('#r-email').click(function () {
		$('#phone').addClass('hidden');
		$('#email').removeClass('hidden');
	});
}); 

