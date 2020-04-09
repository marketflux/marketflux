
  <footer class="site-footer">
     <section class="container container-fluid">
        <div class="row">
           <div class="col-3">
             <span class="ml-auto text-uppercase">marketflux</span>
              <nav class="">
                 <?php
                    wp_nav_menu(array(
                      'theme_location'=>'marketflux_main_menu',
                      'depth'						=>2,
                      'container' 			=> '',
                      'container_class'	=> '',
                      'menu_class'			=> 'nav navbar-nav',
                      'walker'					=> new Walker_Nav_Primary()
                  ));
               ?>
            </nav>
         </div> <!--marketflux---->
         <div class="col-3">
            <nav class="footer-list text-uppercase">
              <ul>
                <li><a>Support & Services </a></li>
              </ul>
            </nav>
         </div> <!--help--->
         <div class="col-3">
            <nav class="footer-list text-uppercase">
              <ul>
                <li><a>Download Our App</a></li>
              </ul>
            </nav>
         </div> <!--App--->
         <div class="col-3">
            <div class="footer-list text-uppercase">
               get social with us
            </div>
            <div class="">
               <a><span class="icon icon--facebook social-icon"></span></span></a>
               <a><span class="icon icon--twitter social-icon"></span></span></a>
               <a><span class="icon icon--facebook social-icon"></span></span></a>
            </div>
         </div>
        </div> <!--row-end--->

     </section>
     <section class="copyright bg-secondary">
        <div class="container container-fluid">
            Copyright
        </div>
     </section>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
