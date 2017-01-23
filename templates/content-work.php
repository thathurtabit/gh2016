<div class="article-divider-work waypoints">
	<article <?php post_class(' row'); ?>>

	<div class="article__thumb col-sm-3 col-md-12 col-md-offset-1">		
		<!-- FEATURED THUMBNAIL -->
          <?php include( TEMPLATEPATH . '/templates/includes/list-featured-thumbnail.inc.php' ); ?>
          <!-- / FEATURED THUMBNAIL -->
	</div>

	
	<div class="col-sm-8 col-md-12 article__content-col">
		<header>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part('templates/entry-meta'); ?>
		</header>
		<div class="entry-summary">
			<?php
	      	// GET THE CONTENT
			$content = get_the_content();
			echo wp_trim_words( $content , '20' ); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="btn btn--color-blue btn--size-tiny btn--arrow-right">Learn More</a>
	</div>

	
	</article>
</div>
