

/* */
jQuery(document).ready(function() {
	/* Dropdown start*/
	jQuery(".dropdown-menu").hide();
	jQuery(".dropdown-toggle").click(function(){
		jQuery(this).next(".dropdown-menu").toggle();
		return false;
	});	/* Dropdown ends*/
});/* jQuery documents ready ends here*/
