<?php if(is_singular('portfolio')) { ?>
	
	<h3>What I did</h3>
	<?php
	// What We Did List
	if(get_field('what_we_did')) { ?>
		<ul class="what-we-did">
			<?php the_field('what_we_did'); ?>
		</ul>
	<?php } ?>

<?php } elseif(is_page()) { ?>
	
	<h3>Did you know?</h3>

	<?php 
	// Array
	$items = array(
		'Chuck Norris can slam a revolving door.',
		'Death once had a near-Chuck Norris experience.',
		'Chuck Norris once kicked a horse in the chin. Its decendants are known today as Giraffes.',
		'Chuck Norris can win a game of Connect Four in only three moves.',
		'Chuck Norris can cut through a hot knife with butter.',
		);
	?>

	<div class="side-quotes">
		<blockquote class="side-quotes__blockquote">
			<?php
			// ECHO OUT RANDOM THING
			echo $items[array_rand($items)]; ?>
		</blockquote>
		<cite class="side-quotes__cite">Facts from <a href="http://www.chucknorrisfacts.com/
	" target="_blank">CNF</a></cite>
	</div>
<?php } else { ?>
	
	<h3>Am I available?</h3>
	
	<p>Maybe, who knows?<br />Well I should, so get in touch over at <a href="<?php bloginfo('url'); ?>/contact">Contact <i class="fa fa-comment-o"></i></a>.</p>

<?php } ?>