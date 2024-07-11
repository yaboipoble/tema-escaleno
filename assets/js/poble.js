//menú sticky
jQuery(document).ready(function( $ ){
/*$(".page-template-home #masthead").cbSlideDownHeader({
	slidePoint: 100,
	boxShadow:'3px 6px 19px 5px rgba(0,0,0,0.31)',
});*/
$(window).scroll(function () {
 if($(this).scrollTop() > 100){
	 $('#masthead').addClass('sticky-top').css({'top': '-50px'}).animate({'top': '0px'}, 500);
 }else{
 $('#masthead').removeClass('sticky-top');
 }
});
$('.scroll-left').marquee({
	 direction: 'left',
	 duration: 10000,
	duplicated: true
});
$('.scroll-right').marquee({
	 direction: 'right',
	 duration: 10000,
	duplicated: true,
});
$('.scroll-proyectos-left').marquee({
	 duplicated: true,
	direction: 'left',
	 duration: 10000,
	 gap: 150,
	delayBeforeStart: 0
});
$('.scroll-proyectos-right').marquee({
	 duplicated: true,
	direction: 'right',
	 duration: 10000,
	 gap: 150,
	delayBeforeStart: 0
});
if ($(".f-2:contains(initial)")){
        $(".f-2:contains(initial)").hide();
     };

$('.head-proyectos-2022').click(function(){
	$('#seccion-lista-2022').toggle("slow");
});
$('.head-proyectos-2021').click(function(){
	$('#seccion-lista-2021').toggle("slow");
});
$('.head-proyectos-2020').click(function(){
	$('#seccion-lista-2020').toggle("slow");
});
/*Animaciones por scroll*/
var waypoints = $('#escalera').waypoint({
  handler: function(direction) {
    $('#escala-0').css({'width': '80%'});
	$('#escala-1').css({'width': '75%'});
	$('#escala-2').css({'width': '70%'});
	$('#escala-3').css({'width': '85%'});
	$('#escala-4').css({'width': '65%'});
  },
	 offset: 80
})
/*Tarjetas de interés*/
$('#interes-0').click(function(){
	$('#interes-0').removeClass("col-md-4").addClass('col-md-12');
	$('#contenido-0').fadeIn(500).removeClass('d-none').fadeIn(1500);
	$('#extracto-0').fadeOut(500).addClass('d-none');
	$('#cerrar-0').fadeIn(500).removeClass('d-none');
	$('#interes-1').addClass('d-none');
	$('#interes-2').addClass('d-none');
	$('#interes-3').addClass('d-none');
	$('#interes-4').addClass('d-none');
	$('#interes-5').addClass('d-none');
});
$(document).on('click', '#cerrar-0', function(){
	$('#cerrar-0').fadeOut(500).addClass('d-none');
	$('#extracto-0').fadeIn(500).removeClass('d-none');
	$('#contenido-0').fadeOut(500).addClass('d-none');
	$('#interes-0').removeClass('col-md-12').fadeIn(500).addClass("col-md-4");
	$('#interes-1').removeClass('d-none');
	$('#interes-2').removeClass('d-none');
	$('#interes-3').removeClass('d-none');
	$('#interes-4').removeClass('d-none');
	$('#interes-5').removeClass('d-none');
});	
	
$('#interes-1').click(function(){
	$('#interes-1').removeClass("col-md-4").addClass('col-md-12');
	$('#contenido-1').fadeIn(500).removeClass('d-none').fadeIn(1500);
	$('#extracto-1').fadeOut(500).addClass('d-none');
	$('#cerrar-1').fadeIn(500).removeClass('d-none');
	$('#interes-0').addClass('d-none');
	$('#interes-2').addClass('d-none');
	$('#interes-3').addClass('d-none');
	$('#interes-4').addClass('d-none');
	$('#interes-5').addClass('d-none');
});
$(document).on('click', '#cerrar-1', function(){
	$('#cerrar-1').fadeOut(500).addClass('d-none');
	$('#extracto-1').fadeIn(500).removeClass('d-none');
	$('#contenido-1').fadeOut(500).addClass('d-none');
	$('#interes-1').removeClass('col-md-12').fadeIn(500).addClass("col-md-4");
	$('#interes-0').removeClass('d-none');
	$('#interes-2').removeClass('d-none');
	$('#interes-3').removeClass('d-none');
	$('#interes-4').removeClass('d-none');
	$('#interes-5').removeClass('d-none');
});
	
$('#interes-2').click(function(){
	$('#interes-2').removeClass("col-md-4").addClass('col-md-12');
	$('#contenido-2').fadeIn(500).removeClass('d-none').fadeIn(1500);
	$('#extracto-2').fadeOut(500).addClass('d-none');
	$('#cerrar-2').fadeIn(500).removeClass('d-none');
	$('#interes-0').addClass('d-none');
	$('#interes-1').addClass('d-none');
	$('#interes-3').addClass('d-none');
	$('#interes-4').addClass('d-none');
	$('#interes-5').addClass('d-none');
});
$(document).on('click', '#cerrar-2', function(){
	$('#cerrar-2').fadeOut(500).addClass('d-none');
	$('#extracto-2').fadeIn(500).removeClass('d-none');
	$('#contenido-2').fadeOut(500).addClass('d-none');
	$('#interes-2').removeClass('col-md-12').fadeIn(500).addClass("col-md-4");
	console.log('funciona');
	$('#interes-0').removeClass('d-none');
	$('#interes-1').removeClass('d-none');
	$('#interes-3').removeClass('d-none');
	$('#interes-4').removeClass('d-none');
	$('#interes-5').removeClass('d-none');
});
	
$('#interes-3').click(function(){
	$('#interes-3').removeClass("col-md-4").addClass('col-md-12');
	$('#contenido-3').fadeIn(500).removeClass('d-none').fadeIn(1500);
	$('#extracto-3').fadeOut(500).addClass('d-none');
	$('#cerrar-3').fadeIn(500).removeClass('d-none');
	$('#interes-0').addClass('d-none');
	$('#interes-1').addClass('d-none');
	$('#interes-2').addClass('d-none');
	$('#interes-4').addClass('d-none');
	$('#interes-5').addClass('d-none');
});
$(document).on('click', '#cerrar-3', function(){
	$('#cerrar-3').fadeOut(500).addClass('d-none');
	$('#extracto-3').fadeIn(500).removeClass('d-none');
	$('#contenido-3').fadeOut(500).addClass('d-none');
	$('#interes-3').removeClass('col-md-12').fadeIn(500).addClass("col-md-4");
	$('#interes-0').removeClass('d-none');
	$('#interes-1').removeClass('d-none');
	$('#interes-2').removeClass('d-none');
	$('#interes-4').removeClass('d-none');
	$('#interes-5').removeClass('d-none');
});
	
$('#interes-4').click(function(){
	$('#interes-4').removeClass("col-md-4").addClass('col-md-12');
	$('#contenido-4').fadeIn(500).removeClass('d-none').fadeIn(1500);
	$('#extracto-4').fadeOut(500).addClass('d-none');
	$('#cerrar-4').fadeIn(500).removeClass('d-none');
	$('#interes-0').addClass('d-none');
	$('#interes-1').addClass('d-none');
	$('#interes-2').addClass('d-none');
	$('#interes-3').addClass('d-none');
	$('#interes-5').addClass('d-none');
});
$(document).on('click', '#cerrar-4', function(){
	$('#cerrar-4').fadeOut(500).addClass('d-none');
	$('#extracto-4').fadeIn(500).removeClass('d-none');
	$('#contenido-4').fadeOut(500).addClass('d-none');
	$('#interes-4').removeClass('col-md-12').fadeIn(500).addClass("col-md-4");
	$('#interes-0').removeClass('d-none');
	$('#interes-1').removeClass('d-none');
	$('#interes-2').removeClass('d-none');
	$('#interes-3').removeClass('d-none');
	$('#interes-5').removeClass('d-none');
});
	
$('#interes-5').click(function(){
	$('#interes-5').removeClass("col-md-4").addClass('col-md-12');
	$('#contenido-5').fadeIn(500).removeClass('d-none').fadeIn(1500);
	$('#extracto-5').fadeOut(500).addClass('d-none');
	$('#cerrar-5').fadeIn(500).removeClass('d-none');
	$('#interes-0').addClass('d-none');
	$('#interes-1').addClass('d-none');
	$('#interes-2').addClass('d-none');
	$('#interes-3').addClass('d-none');
	$('#interes-4').addClass('d-none');
});
$(document).on('click', '#cerrar-5', function(){
	$('#cerrar-5').fadeOut(500).addClass('d-none');
	$('#extracto-5').fadeIn(500).removeClass('d-none');
	$('#contenido-5').fadeOut(500).addClass('d-none');
	$('#interes-5').removeClass('col-md-12').fadeIn(500).addClass("col-md-4");
	$('#interes-0').removeClass('d-none');
	$('#interes-1').removeClass('d-none');
	$('#interes-2').removeClass('d-none');
	$('#interes-3').removeClass('d-none');
	$('#interes-4').removeClass('d-none');
});
	
  class SlickCarousel {
    constructor() {
      this.initiateCarousel();
	}
	  
	 initiateCarousel() {
      $( '#proyectos-home' ).slick( {
        slidesToShow: 1,
        slidesToScroll: 1,
		dots: true,
		lazyLoad: 'progressive',
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: false,
      } );
    }
  }

  new SlickCarousel();
	
  class SlickCarousel2 {
    constructor() {
      this.initiateCarousel();
    }
	    initiateCarousel() {
      $( '.galeria' ).slick( {
        slidesToShow: 1,
        slidesToScroll: 1,
		dots: true,
		lazyLoad: 'progressive',
		autoplay: false,
		autoplaySpeed: 3000
      } );
    }
  }

  new SlickCarousel2();
	
}
					  
					);