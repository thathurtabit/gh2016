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
    			  <div class="entry-content-inner">
              <article>
      			    <?php _e('Sorry, no results were found.', 'sage'); ?>
              </article>
    			  </div>
    			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>
      
      <!-- PREV / NEXT -->
        <?php include( TEMPLATEPATH . '/templates/includes/prev-next-links.inc.php' ); ?>
      <!-- / PREV / NEXT  -->

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

