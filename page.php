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
                          <article class="col">
                             <h1><?php the_title(); ?></h1>
                               <div><?php the_content(); ?></div>
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
    </div>
  </main>
<?php get_footer();?>
