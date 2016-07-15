<article <?php post_class('page-article section--border-white-sides-top'); ?>>

    <div class="article-img-bg parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/dist/images/page-header-default.png">

    	<div class="animated-lines-page">
			<div class="animated-lines--quarter-vertical">
				<span class="vert"></span>
				<span class="vert"></span>
				<span class="vert"></span>
				<span class="vert"></span>
			</div> 
		</div>

    <div class="article-img-bg__wrap row">
        <div class="col-md-2 content-border-side-col">
          <!-- TITLE TOP RIGHT -->
          <?php include( TEMPLATEPATH . '/templates/includes/single-results-tl.inc.php' ); ?>
          <!-- / TITLE TOP RIGHT -->
        </div>
        <header class="article-img-bg__header content-border-main-col col-md-7">
          <h1>Search: '<?php echo esc_html(get_search_query( false ));?>'</h1>
              <?php if(function_exists('yoast_breadcrumb')) 
        {yoast_breadcrumb('<div class="single-breadcrumbs container"><p id="breadcrumbs">','</p></div>');} ?>
        </header>
        <div class="col-md-3 content-border-side-col">
          <!-- TITLE TOP RIGHT -->
          <?php include( TEMPLATEPATH . '/templates/includes/single-results-tr.inc.php' ); ?>
          <!-- / TITLE TOP RIGHT -->
        </div>
      </div>  
    </div>    

    <!-- ARTICLE ROW -->
    <div class="article-row row section--background-white">

      <div class="col-md-2 content-border-side-col">
        <?php include( TEMPLATEPATH . '/templates/includes/side-col-1.inc.php' ); ?>
      </div>

      <div class="col-md-7 main-content-col">
        <div class="entry-content content-border-main-col">
          <div class="entry-content-inner">
            <?php if (!have_posts()) : ?>
			  <div class="article-divider">
				<article <?php post_class('row'); ?>>
				  <header>
				    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
				  </header>
				  <div class="entry-summary">
				    <p>Sorry, seems there's nothing here for: '<?php echo esc_html(get_search_query( false ));?>'</p>
				  </div>
				</article>
			</div>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <?php get_template_part('templates/content', 'search'); ?>
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

