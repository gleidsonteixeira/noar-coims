$(document).ready(function(){
	$(".button-collapse").sideNav({
		menuWidth: 300,
		closeOnClick: true
	});
	$('.slider').slider({full_width: true});
	$("#programacao ul.tabs").tabs();
	$('.tooltipped').tooltip({
		delay: 10
	});
	$('.carousel.carousel-slider').carousel({
		indicators: true,
		full_width: true
	});
	$('.parallax').parallax();
});

$(window).resize(function(){
	
})
$(window).scroll(function(){
	voltar();
})



function voltar(){
	var a = window.pageYOffset;
	if (a > 800) {
		$(".voltar").fadeIn("fast")
	}else{
		$(".voltar").fadeOut("fast")
	}
}




















