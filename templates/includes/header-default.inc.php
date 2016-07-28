<div class="article-img-bg parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/dist/images/page-header-default.png">
    <header class="article-img-bg__header--large-text page-border-main-col">
      <h1><?php get_template_part('templates/page', 'header'); ?></h1>
          
    </header>
    <div class="animated-lines-page">
		<div class="animated-lines--quarter-vertical">
			<span class="vert"></span>
			<span class="vert"></span>
			<span class="vert"></span>
			<span class="vert"></span>
		</div> 
	</div>

	<?php if(is_page('about')) { ?>
		<div class="wheelie-across">
			<span>
				<img src="<?php bloginfo('template_url'); ?>/dist/images/wheelie.png" alt="Look at this awesome wheelie." />
			</span>
		</div>
	<?php } ?>
</div>