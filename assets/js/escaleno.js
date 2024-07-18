//menú sticky
jQuery(document).ready(function( $ ){

$(window).scroll(function () {
 if($(this).scrollTop() > 100){
	 $('#masthead').addClass('sticky-top').css({'top': '-50px', '-webkit-box-shadow': '0px 6px 10px 2px rgba(0,0,0,0.46)', 'box-shadow': '0px 6px 10px 2px rgba(0,0,0,0.46)'}).animate({'top': '0px'}, 500);
 }else{
 $('#masthead').removeClass('sticky-top'),css({'-webkit-box-shadow': '', 'box-shadow': ''});
 }
});
//Carrusel proyectos/inicio	
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