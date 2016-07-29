<div class="row content-border-main-col">

	<div class="entry-content-inner col-md-5 col-md-offset-1 padding--top padding--right">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	     <?php the_content(); ?>
	    <?php endwhile; endif; ?>
	</div>

	<div class="col-md-5 padding--top padding--left">
		<?php if( get_field('alternative_content') ): ?>
			<p><?php the_field('alternative_content'); ?></p>
		<?php endif; ?>
		<a href="<?php bloginfo('url');?>/portfolio" class="btn btn--color-blue btn--size-tiny btn--arrow-right">Learn More</a>
	</div>

</div>

<div class="row">

	<div class="col-md-6 col-md-offset-3 content-divider--top">

		<div class="high-five-hand-wrapper">
			<div class="high-five-hand">
				<strong>Yeah!</strong>
				<?php get_template_part('dist/images/inline', 'hand.svg');?>
			</div>
			<h4>High five?</h4>
		</div>

	</div>

</div>