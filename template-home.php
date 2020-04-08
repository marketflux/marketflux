<?php
/*
Template name: home page
*/
  get_header();
 ?>

 <div class="content-area position-static">
   <main>
    <?php /*
    	==========================================
    	 Slider Start
    	==========================================
    */ ?>
        <section class="slider">
           <div class="cycle-slideshow" data-cycle-slides = "li" data-cycle-pause-on-hover="true">
             <span class="cycle-prev position-absolute">&laquo;</span>
             <span class="cycle-next position-absolute">&raquo;</span>
             <span class="cycle-pager position-absolute"></span>
             <ul>
               <?php
   						// Getting data from Customizer to display the Slider section
   						for ($i=1; $i < 4; $i++) :
   							$slider_page[$i] 			    	= get_theme_mod( 'set_slider_page' . $i );
   							$slider_button_text[$i]			= get_theme_mod( 'set_slider_button_text' . $i );
   							$slider_button_url[$i]			= get_theme_mod( 'set_slider_button_url' . $i );
   						endfor;

   						$args = array(
   							'post_type'			=> 'page',
   							'posts_per_page'	=> 3,
   							'post__in'			=> $slider_page,
   							'orderby'			=> 'post__in',
   						);

   						$slider_loop = new WP_Query( $args );
              $j =1;
   						if( $slider_loop->have_posts() ):
   							while( $slider_loop->have_posts() ):
   								$slider_loop->the_post();
   						?>
   					    <li>
   					      <?php the_post_thumbnail( 'marketflux-slider' ); ?>
                  <div class="">
                    <div class="slider-details-container position-absolute">
                      <div class="slider-title">
                          <h1><?php the_title(); ?></h1>
                      </div>
                      <div class="slider-description">
                        <div class="subtitle"><?php the_content(); ?></div>
                          <a class="btn-a" href="<?php echo esc_url( $slider_button_url[$j] ); ?>"><?php echo esc_html( $slider_button_text[$j] ); ?></a>
                      </div>
                    </div>
                  </div>
   					    </li>
   						<?php
              $j++;
   						endwhile;
   						wp_reset_postdata();
   						endif;
   						?>
             </ul>
           </div>
         </section>

         <?php /*
         	==========================================
         	 Slider end
         	==========================================
         */ ?>
            <?php if( class_exists( 'WooCommerce' ) ): ?>
               <section class="popular-products">
                 <div class="container">
                   <div class="row">
                     <div class="col">
                       <h2>Popular Products</h2>
                       <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity"]' ) ?>
                     </div>
                   </div>
                 </div>
               </section>
               <section class="new-arrivals">
                 <div class="container">
                   <h2>New Arrivals</h2>
                   <?php echo do_shortcode( '[products limit="4" columns="4" orderby="date"]' ) ?>
                 </div>
               </section>

               <?php

               $showdeal			= get_theme_mod( 'set_deal_show', 0 );
               $deal 				= get_theme_mod( 'set_deal' );
               $currency			= get_woocommerce_currency_symbol();
               $regular			= get_post_meta( $deal, '_regular_price', true );
               $sale 				= get_post_meta( $deal, '_sale_price', true );

               if( $showdeal == 1 && ( !empty( $deal ) ) ):
                  $discount_percentage = absint( 100 - ( ( $sale/$regular ) * 100 ) );
               ?>
               <section class="deal-of-the-week">
                  <div class="container">
                     <h2>Deal of the Week</h2>
                     <div class="row d-flex align-items-center">
                        <div class="deal-img col-md-6 col-12 ml-auto text-center">
                           <?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
                        </div>
                        <div class="deal-desc col-md-4 col-12 mr-auto text-center">
                           <?php if( !empty( $sale ) ): ?>
                              <span class="discount">
                                 <?php echo esc_html( $discount_percentage ) . '% OFF'; ?>
                              </span>
                           <?php endif; ?>
                           <h3>
                              <a href="<?php echo esc_url( get_permalink( $deal ) ); ?>"><?php echo esc_html( get_the_title( $deal ) ); ?></a>
                           </h3>
                           <p><?php echo esc_html( get_the_excerpt( $deal ) ); ?></p>
                           <div class="prices">
                              <span class="regular">
                                 <?php
                                 echo esc_html( $currency );
                                 echo esc_html( $regular );
                                 ?>
                              </span>
                              <?php if( !empty( $sale ) ): ?>
                                 <span class="sale">
                                    <?php
                                    echo esc_html( $currency );
                                    echo esc_html( $sale );
                                    ?>
                                 </span>
                              <?php endif; ?>
                           </div>
                           <a href="<?php echo esc_url( '?add-to-cart=' . $deal ); ?>" class="add-to-cart">Add to Cart</a>
                        </div>
                     </div>
                  </div>
               </section>
               <?php endif; ?>

            <?php endif; ?>
       </main>
 </div>

<?php get_footer();?>
