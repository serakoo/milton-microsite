// SCROLL TO TOP
$(".scrollTop").click(function() {
	$('html, body').animate({scrollTop: $('.container').offset().top }, 'slow');
});



//SCROLL PAGE
$(".scrollPage").click(function() {
	var goTo=$(this).attr('data-scroll');
	$('html, body').animate({scrollTop: $(goTo).offset().top }, 'slow');
});



// TOGGLE OFF CANVAS MENU
$("#optionMenu").click(function() {
	$('.navmenu').offcanvas('show');
});



// SETUP BOOTSTRAP TOOLTIPS
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});



// TRIGGER MODAL FULLSCREEN
$(".open-fscreen").click(function() {
	var url=$(this).attr('data-img');
	$('#modal-fscreen #modal-img').attr("src",url);
});
