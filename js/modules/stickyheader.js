/* Stickey header starts*/
jQuery(document).ready(function() {
    var navOffset = jQuery("nav-container").offset.top;

jQuery(window).scroll(function() {
  var scrollPos = jQuery(window).scrollTop();
  if (scrollPos > navOffset) {
    jQuery("nav-container").addClass("fixed");
  } else {
    jQuery("nav-container").removeClass("fixed");
  }

})
});
/*Sticky header ends */
