<article <?php post_class('page-article section--border-white-sides-top'); ?>>
    
    <!-- DEFAULT HEADER -->
    <?php include( TEMPLATEPATH . '/templates/includes/header-default.inc.php' ); ?>
  	<!-- / DEFAULT HEADER -->
 

    <!-- ARTICLE ROW -->
    <div class="article-row--blocks row section--background-white">

      
       <?php if (!have_posts()) : ?>
			  <div class="alert alert-warning">
			    <?php _e('Sorry, no results were found.', 'sage'); ?>
			  </div>
			  <?php get_search_form(); ?>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <?php get_template_part('templates/content-work', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>

    </div><!-- / ARTICLE ROW -->

    <!-- PREV / NEXT -->
    	<?php include( TEMPLATEPATH . '/templates/includes/prev-next-links.inc.php' ); ?>
  	<!-- / PREV / NEXT  -->
    
  </article>

