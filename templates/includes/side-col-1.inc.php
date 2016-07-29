<?php if(is_singular('portfolio')) { ?>
	
	<h3>What we did</h3>
	<?php
	// What We Did List
	if(get_field('what_we_did')) { ?>
		<ul class="what-we-did">
			<?php the_field('what_we_did'); ?>
		</ul>
	<?php } ?>

<?php } else { ?>
	
	<h3>Social stuff</h3>

<?php } ?>