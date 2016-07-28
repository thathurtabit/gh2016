<div class="row">

	<div class="entry-content-inner col-md-8">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	     <?php the_content(); ?>
	    <?php endwhile; endif; ?>
	</div>

	<div class="col-md-4">
		Hi five?
	</div>

</div>

<div class="row">

	<div class="col-md-8 col-md-offset-2">

	<?php if( get_field('alternative_content') ): ?>
		<p><?php the_field('alternative_content'); ?></p>
	<?php endif; ?>

	</div>

</div>