 <?php get_header(); ?>

 <div class="content-area">
   <main>
     <div class="container">
       <div class="row">
          <?php
               // if there are any post
                  if( have_posts() ):
                    //load post loop
                    while ( have_posts() ): the_post();
                    //template tag
                ?>
                  <article>
                    <h2><?php the_title(); ?></h2>
                    <div class="">
                      <?php the_content(); ?>
                    </div>
                  </article>

                <?php
                    endwhile;
                  else:
                ?>
                <p> Nothing to display</p>
                <?php
                endif;
                ?>
             </div>
           </div>
           News
         </section>
       </div>
      </div>
   </main>
 </div>
<?php get_footer();?>
