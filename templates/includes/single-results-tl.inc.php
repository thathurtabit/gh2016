<?php if(is_singular('production-diary')) { ?>
	<h3>Production Diary</h3>
<?php } elseif(is_singular('latest')) { ?>
	<h3>Latest</h3>
<?php } elseif(is_singular('portfolio')) { ?>
	<h3>Work</h3>
<?php } else  { ?>
	<h3>Latest</h3>
<?php } 