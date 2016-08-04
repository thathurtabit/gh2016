<?php if(is_singular('production-diary')) { ?>
	<h3><a href="<?php bloginfo('url'); ?>/production-diary" class="btn-return" title="Return to Production Diary">Production Diary </a></h3>
<?php } elseif(is_singular('latest')) { ?>
	<h3><a href="<?php bloginfo('url'); ?>/latest" class="btn-return" title="Return to latest">Latest</a></h3>
<?php } elseif(is_singular('portfolio')) { ?>
	<h3><a href="<?php bloginfo('url'); ?>/portfolio" class="btn-return" title="Return to Work">Work</a></h3>
<?php } else { ?>
	<h3><a href="<?php bloginfo('url'); ?>/latest" class="btn-return" title="Return to Latest">Latest</a></h3>
<?php } 