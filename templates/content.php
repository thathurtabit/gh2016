<div class="article-divider">
	<article <?php post_class('row'); ?>>
	<div class="col-md-8">
		<header>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part('templates/entry-meta'); ?>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</div>
	  <div class="col-md-3 col-md-offset-1">		
		<!-- FEATURED THUMBNAIL -->
          <?php include( TEMPLATEPATH . '/templates/includes/list-featured-thumbnail.inc.php' ); ?>
          <!-- / FEATURED THUMBNAIL -->
	</div>
	</article>
</div>
