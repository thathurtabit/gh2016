<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('page-article section--border-white-all section--background-blue'); ?>>

    <?php
// If it's a single page, add the featured image
 if (is_single() && has_post_thumbnail()) { ?>
    <div class="article-img-bg parallax-window" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url( 'full' ); ?>">
    <div class="article-img-bg__wrap container">
    <header class="article-img-bg__header">
      <h1><?php the_title(); ?></h1>
          <?php if(function_exists('yoast_breadcrumb')) 
    {yoast_breadcrumb('<div class="single-breadcrumbs container"><p id="breadcrumbs">','</p></div>');} ?>
    </header>
    </div>
    </div>
  <?php } elseif (is_single()) { ?>
    <div class="article-img-bg parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/dist/images/unshackled-fallback-large.jpg">
    <div class="article-img-bg__wrap container">
    <header class="article-img-bg__header">
      <h1><?php the_title(); ?></h1>
          <?php if(function_exists('yoast_breadcrumb')) 
    {yoast_breadcrumb('<div class="single-breadcrumbs container"><p id="breadcrumbs">','</p></div>');} ?>
    </header>
    </div>
    </div>
  <?php } ?>

    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>

    <!-- ARTICLE ROW -->
    <div class="article-row row">

      <div class="col-sm-2">
        Social stuff
      </div>

      <div class="col-sm-8">
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="col-sm-2">
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
