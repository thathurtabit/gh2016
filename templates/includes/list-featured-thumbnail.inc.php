<!-- section FEATURED IMG -->
	<section class="featured-img featured-img--flat">
	
	<?php
		// check if the post has a Post Thumbnail assigned to it.
	if ( has_post_thumbnail() ) {
		?> <a href="<?php the_permalink() ?>" class="thumb-click" rel="bookmark" title="Learn more about <?php the_title_attribute(); ?>">

		<!-- BG IMG -->
		<span class="featured-img--flat-thumb"
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> style="background-image:url(<?php echo $image[0]; ?>)"></span><!-- / END BG IMG -->
		<span class="featured-img--svg-border">
			<svg><rect class="thumb-rectangle" /></svg>
		</span>
	</a>									

	<?php endif; ?>

	<?php } else { ?>
		<a href="<?php the_permalink() ?>" class="thumb-click" rel="bookmark" title="Learn more about <?php the_title_attribute(); ?>">

			<!-- BG IMG -->
			<span class="featured-img--flat-thumb"
				<?php get_template_part('dist/images/inline', 'horse.svg');?>
			</span><!-- / END BG IMG -->

			<span class="featured-img--svg-border">
				<svg><rect class="thumb-rectangle" /></svg>
			</span>

		</a>
	<?php }	?>
</section>
<!-- / section FEATURED IMG -->