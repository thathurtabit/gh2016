<div class="article-divider waypoints">
	<article <?php post_class('row'); ?>>
	<div class="article__thumb col-sm-3 col-md-offset-1">		
		<!-- FEATURED THUMBNAIL -->
          <?php include( TEMPLATEPATH . '/templates/includes/list-featured-thumbnail.inc.php' ); ?>
          <!-- / FEATURED THUMBNAIL -->
	</div>
	<div class="col-sm-8">
		<header>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part('templates/entry-meta'); ?>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
	</div>
	</article>
</div>
