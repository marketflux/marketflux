import $ from 'jquery';

class MobileMenu {
   constructor() {
      $(document).ready(function(){
         this.menuIcon = $(".site-header__menu-icon");
         this.menucontent = $(".site-header__menu-content")
      });
this.events();

   }
   events() {
      $(document).ready(function(){
         $(this.menuIcon).click(function() {
            $(this.menucontent).toggleClass(".site-header__menu-content--is-visible");
            alert("hellow");
         });

      });

   };


}

export default MobileMenu;
