<article <?php post_class('page-article section--border-white-sides-top'); ?>>

	<?php if(has_post_thumbnail()) { ?>
    
    <div class="article-img-bg parallax-window animated-lines-page" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url( 'full' ); ?>">
        <header class="article-img-bg__header--large-text page-border-main-col">
          <h1><?php the_title(); ?></h1>              
        </header>
        <div class="animated-lines--quarter-vertical">
	        <span class="vert"></span>
	        <span class="vert"></span>
	        <span class="vert"></span>
	        <span class="vert"></span>
	      </div>
    </div>

    <?php } else { ?>

    <div class="article-img-bg parallax-window animated-lines-page" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/dist/images/page-header-default.png">
        <header class="article-img-bg__header--large-text page-border-main-col">
          <h1><?php the_title(); ?></h1>
              
        </header>
        <div class="animated-lines--quarter-vertical">
	        <span class="vert"></span>
	        <span class="vert"></span>
	        <span class="vert"></span>
	        <span class="vert"></span>
	    </div>
      
    </div>

	<?php } ?>
  

    <!-- ARTICLE ROW -->
    <div class="article-row row section--background-white">

      <div class="col-md-2 content-border-side-col">
        <h3>Social stuff</h3>
      </div>

      <div class="col-md-7">
        <div class="entry-content content-border-main-col">
          <div class="entry-content-inner">
            <?php the_content(); ?>
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

