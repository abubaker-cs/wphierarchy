(function( $ ){
  console.log('jQuery Loaded');
  $('.single-portfolio a.button').attr('target', '_blank');
})(jQuery);


// https://developer.wordpress.org/reference/functions/wp_enqueue_script/

// METHOD 1
// Replace jQuery with $ in wordpress
// jQuery('.single-portfolio a.button');

// METHOD 2
// Replace all instances of $ with jQuery


// jQuery 3 - https://digwp.com/2009/06/including-jquery-in-wordpress-the-right-way/
