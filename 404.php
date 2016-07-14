<article <?php post_class('page-article section--border-white-sides-top'); ?>>

    <div class="article-img-bg parallax-window animated-lines-page" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/dist/images/page-header-default.png">
        <header class="article-img-bg__header--large-text page-border-main-col">
          <h1><?php get_template_part('templates/page', 'header'); ?></h1>
              
        </header>
        <div class="animated-lines--quarter-vertical">
	        <span class="vert"></span>
	        <span class="vert"></span>
	        <span class="vert"></span>
	        <span class="vert"></span>
	    </div>      
    </div>
 

    <!-- ARTICLE ROW -->
    <div class="article-row row section--background-white">

      <div class="col-md-2 content-border-side-col">
        <?php include( TEMPLATEPATH . '/templates/includes/side-col-1.inc.php' ); ?>
      </div>

      <div class="col-md-7">
        <div class="entry-content content-border-main-col">
          <div class="entry-content-inner">
            <?php if (!have_posts()) : ?>
			  <div class="alert alert-warning">
			    <?php _e('Sorry Son, no results were found.', 'sage'); ?>
			  </div>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>
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


