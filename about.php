<?php
/*Template Name: About */
get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>



<div class="row snt-achivments">
  <div class="col-4 offset-4">
    <img src="<?php echo get_template_directory_uri().'/imgs/esifeu.png'; ?>" class="mx-auto d-block" alt="">
    <p class="text-center">Krajnji primatelj financijskog instrumenta sufinanciranog iz Europskog fonda za regionalni razvoj u sklopu Operativnog programa „Konkurentnost i kohezija” i "ESIF financijski instrumenti".</p>
  </div>
</div>
  
</div>

<?php get_footer(); ?>