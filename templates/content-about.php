<div class="row content-big-blocks-row">

	<div class="content-big-blocks--centered content-big-block--coloured section--color-orange">
		<div class="content-big-blocks__content one">
			<h2 class="sub-heading alt heading--icon-question">Who<span></span></h2>
			<svg height="74" width="74" class="content-big-blocks__svg">
			 	<circle class="content-big-blocks__content-circle" cx="37" cy="37" r="30" />
			 </svg>
		</div>
	</div>

	<div class="content-big-blocks">
		<div class="content-big-blocks__content two">
			<i class="side-quote">&ldquo;</i>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		     <?php the_content(); ?>
		    <?php endwhile; endif; ?>

		    <span class="zigzag--blue small"><svg id="zigzag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 39.39 8.56"><defs></defs><title>zigzag</title><polyline id="zigzag-2" data-name="zigzag" points="0.62 1.27 8.25 7.28 15.88 1.27 23.5 7.28 31.14 1.27 38.77 7.28"></polyline></svg></span>
		</div>
	</div>

</div><!-- / ROW -->

<div class="row content-big-blocks-row section--background-white">

	<div class="content-big-blocks--centered content-big-block--coloured section--color-green">
		<div class="content-big-blocks__content four">
			<div class="high-five-hand-wrapper">
				<div class="high-five-hand">
					<strong>Yeah!</strong>
					<?php get_template_part('dist/images/inline', 'hand.svg');?>
				</div>
				<h4>High<br />five?</h4>
			</div>
			 <svg height="74" width="74" class="content-big-blocks__svg">
			 	<circle class="content-big-blocks__content-circle" cx="37" cy="37" r="30" />
			 </svg>
		</div>
	</div>

	<div class="content-big-blocks">
		<div class="content-big-blocks__content three">
			<i class="side-quote">&ldquo;</i>

			<?php if( get_field('alternative_content') ): ?>
				<p><?php the_field('alternative_content'); ?></p>
			<?php endif; ?>
			<a href="<?php bloginfo('url');?>/portfolio" class="btn-blue--smaller btn--arrow-right">View portfolio</a>
		</div>
	</div>

</div><!-- / ROW -->

