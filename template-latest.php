<?php
/**
 * Template Name: Latest Template
 */
?>

<article <?php post_class('page-article section--border-white-sides-top'); ?>>

    <!-- DEFAULT HEADER -->
    <?php include( TEMPLATEPATH . '/templates/includes/header-default.inc.php' ); ?>
    <!-- / DEFAULT HEADER -->

    <!-- ARTICLE ROW -->
    <div class="article-row row section--background-white">

      <div class="col-md-2 content-border-side-col">
        <?php include( TEMPLATEPATH . '/templates/includes/side-col-1.inc.php' ); ?>
      </div>

      <div class="col-md-7 main-content-col">
        <div class="entry-content content-border-main-col">
          <div class="entry-content-inner">
            <?php if (!have_posts()) : ?>
      			  <div class="alert alert-warning">
      			    <?php _e('Sorry, no results were found.', 'sage'); ?>
      			  </div>
      			<?php endif; ?>

          <?php
          // http://codex.wordpress.org/Pages#Using_Custom_Post_Types
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args=array(
            'post_type' => array('post','production-diary'),
            'post_status' => 'publish',
            'paged' => $paged,
            'posts_per_page' => 5, // CHANGE THIS IF NEEDED
            'ignore_sticky_posts'=> 1
          );
          
          $temp = $wp_query;  // assign orginal query to temp variable for later use   
          $wp_query = null;
          $wp_query = new WP_Query($args); 
    
          // the $wpcust-> variable is used to call the Loop methods. not sure if required
          if ( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
          ?>

               <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>


            <?php endwhile; ?>

            <div class="prev-next-wrap row">
              <div class="col-xs-6 prev">
                <?php previous_posts_link('Prev'); ?>
              </div>
              <div class="col-xs-6 next">
                <?php next_posts_link('Next'); ?>
              </div>
            </div>

            <?php endif; ?>

      			
          </div>
        </div>
               
      </div>

      <div class="col-md-3">
          <aside class="sidebar">
            <?php dynamic_sidebar('sidebar-primary'); ?>
          </aside><!-- /.sidebar -->
      </div>

    </div><!-- / ARTICLE ROW -->
    
  </article>

