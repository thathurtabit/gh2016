<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) : ?>

<div class="prev-next-wrap row">
	<div class="col-xs-6 prev">
	  <?php previous_posts_link('Prev'); ?>
	</div>
	<div class="col-xs-6 next">
	  <?php next_posts_link('Next'); ?>
	</div>
</div>

<?php endif; ?>