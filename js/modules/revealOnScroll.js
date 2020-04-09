
/* */
/* */
jQuery(document).ready(function() {
/* Reveal on Scroll starts*/
var windowHeght = jQuery(window).height();
var WindowScrollPositionTop = jQuery(window).scrollTop();
var wndowScrollPositionBottom = windowHeght + WindowScrollPositionTop;
/* Function starts here*/
jQuery.fn.revealOnScroll = function() {
  return this.each(function() {
    var objectOffset = jQuery(this).offset();
    var objectOffsetTop = objectOffset.top;
    if (!jQuery(this).hasClass("hidden")) {
      jQuery(this).css("opacity", 0).addClass("hidden");
    }

    if (!jQuery(this).hasClass("animation-complete")) {
      if (WindowScrollPositionBottom > objectOffsetTop) {
        jQuery(this).animate({"opacity" : 1}, 3000).addClass("animation-complete");
      }
    }

  });
}/* Function ends here*/


jQuery(window).scroll(function() {
  windowHeght = jQuery(window).height();
  WindowScrollPositionTop = jQuery(window).scrollTop();
  wndowScrollPositionBottom = windowHeght + WindowScrollPositionTop;

  jQuery("").revealOnScroll();

});/* Reveal On Scroll Ends*/
});
