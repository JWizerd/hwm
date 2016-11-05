(function($) {

  var offset = 300,
	offset_opacity = 1200,
  scroll_top_duration = 700;

	$(window).on('scroll', function(){
    if ( $(this).scrollTop() > offset ) {
      $('.back-to-top').addClass('arrow-is-visible');
    } else {
      $('.back-to-top').removeClass('arrow-is-visible');
    }
  });


})( jQuery );
