(function($) {
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} )(jQuery);

$(function() {
  $('#fv-slider').slick({ //メインのスライダーにしたい要素
    dots: true,
    autoplay: true,
    pauseOnFocus: false,
    pauseOnHover: false,
    allows:false,
    speed:500,
    autoplaySpeed:3000,
   });

});

$(function(){
  $("#acMenu dt").on("click", function() {
  $(this).next().slideToggle();
  });
  });






