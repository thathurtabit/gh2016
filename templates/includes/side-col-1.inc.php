<?php if(is_singular('portfolio')) { ?>
	
	<h3>What we did</h3>
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

	<blockquote>
		<?php
		// ECHO OUT RANDOM THING
		echo $items[array_rand($items)]; ?>
	</blockquote>
	<small>Facts from <a href="http://www.chucknorrisfacts.com/
" target="_blank">CNF</a></small>
<?php } else { ?>
	
	<h3>Social stuff</h3>

<?php } ?>