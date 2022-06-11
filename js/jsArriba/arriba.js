$(document).ready(function(){

	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop:'620px'
		},600);
	});

	$(window).scroll(function(){
		if ($(this).scrollTop() > 10 ) {
			$('.ir-arriba').slideDown(300)

		} else{
			$('.ir-arriba').slideUp(300)
		}
	});
});