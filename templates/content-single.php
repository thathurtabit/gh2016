<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('page-article section--border-white-sides-top'); ?>>

    <?php
// If it's a single page, add the featured image
 if (is_single() && has_post_thumbnail()) { ?>
    <div class="article-img-bg parallax-window" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url( 'full' ); ?>">
      <div class="article-img-bg__wrap row">
        <div class="col-md-2 content-border-side-col">
          <h3>Location</h3>
        </div>
        <header class="article-img-bg__header content-border-main-col col-md-7">
          <h1><?php the_title(); ?></h1>
              <?php if(function_exists('yoast_breadcrumb')) 
        {yoast_breadcrumb('<div class="single-breadcrumbs container"><p id="breadcrumbs">','</p></div>');} ?>
        </header>
        <div class="col-md-3 content-border-side-col">
          Something else
        </div>
      </div>
    </div>
  <?php } elseif (is_single()) { ?>
    <div class="article-img-bg parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/dist/images/fallback-large.jpg">

    <div class="article-img-bg__wrap">
      <header class="article-img-bg__header">
        <h1><?php the_title(); ?></h1>
            <?php if(function_exists('yoast_breadcrumb')) 
      {yoast_breadcrumb('<div class="single-breadcrumbs container"><p id="breadcrumbs">','</p></div>');} ?>
      </header>
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

        <footer class="content-border-main-col content-border-top">
          <h4>The Tags:</h4> <?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
        </footer>
        
        <div class="content-border-main-col comments-wrap content-border-top">
          <h2 class="sub-heading heading--icon-comment on-white">Comments<span></span></h2>

          <?php comments_template('/templates/comments.php'); ?>
        </div>

      </div>

      <div class="col-md-3">
          <aside class="sidebar">
            <?php dynamic_sidebar('sidebar-primary'); ?>
          </aside><!-- /.sidebar -->
      </div>

    </div><!-- / ARTICLE ROW -->
    
  </article>
<?php endwhile; ?>
