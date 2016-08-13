<div class="content-list-block">
	<article <?php post_class('content-list-block-wrap'); ?>>
	<div class="content-list-block__img">		
		<!-- FEATURED THUMBNAIL -->
          <?php include( TEMPLATEPATH . '/templates/includes/list-featured-thumbnail.inc.php' ); ?>
          <!-- / FEATURED THUMBNAIL -->
	</div>
	<div class="content-list-block__text entry-content-inner">
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
