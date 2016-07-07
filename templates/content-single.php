<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('page-article section--border-white-all'); ?>>

    <?php
// If it's a single page, add the featured image
 if (is_single() && has_post_thumbnail()) { ?>
    <div class="article-img-bg parallax-window" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url( 'full' ); ?>">
      <div class="article-img-bg__wrap row">
        <div class="col-md-2 content-border-side-col">
          Location
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
        Social stuff
      </div>

      <div class="col-md-7 content-border-main-col">
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="col-md-3 content-border-side-col">
          <aside class="sidebar">
            <?php dynamic_sidebar('sidebar-primary'); ?>
          </aside><!-- /.sidebar -->
      </div>


    </div><!-- / ARTICLE ROW -->
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
