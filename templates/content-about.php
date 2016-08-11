<div class="row content-big-blocks-row">

	<div class="content-big-blocks--centered content-big-block--coloured section--background-orange">
		<div class="content-big-blocks__content one">
			<h2 class="sub-heading alt heading--icon-question">Who<span></span></h2>
			<svg height="74" width="74" class="content-big-blocks__svg">
			 	<circle class="content-big-blocks__content-circle" cx="37" cy="37" r="30" />
			 </svg>
		</div>
	</div>

	<div class="content-big-blocks border-top">
		<div class="content-big-blocks__content two">
			<i class="side-quote">&ldquo;</i>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		     <?php the_content(); ?>
		    <?php endwhile; endif; ?>
		</div>
	</div>

</div><!-- / ROW -->

<div class="row content-big-blocks-row section--background-white">

	<div class="content-big-blocks--centered content-big-block--coloured section--background-green">
		<div class="content-big-blocks__content four">
			<div class="high-five-hand-wrapper">
				<div class="high-five-hand">
					<strong>Yeah!</strong>
					<?php get_template_part('dist/images/inline', 'hand.svg');?>
				</div>
				<h4>High five?</h4>
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

