<section id="home-intro" class="--screen-v-height"><!-- HOME INTRO CAROUSEL -->


<h1 id="home-intro-text">
	<div class="sr-only">Ghost Horses Makes Really Excellent Websites</div>
	<!--googleoff: all-->
	<div id="person-carousel">
		<div class="item">Ghost Horses</div>
		<div class="item">Donald Trump</div>
		<div class="item">Khal Drogo</div>
		<div class="item">Björk</div>
		<div class="item">Ryan Giggs</div>
		<div class="item">Rosa Parks</div>
	</div>
	<div id="make-really"><div class="item">Makes Really</div></div>
	<div id="adjective-carousel">
		<div class="item">Excellent</div>
		<div class="item">Disappointing</div>
		<div class="item">Lovely</div>
		<div class="item">Alarming</div>
		<div class="item">Awful</div>
		<div class="item">Mediocre</div>
	</div>
	<div id="object-carousel">
		<div class="item">Websites</div>
		<div class="item">Hummus</div>
		<div class="item">Life Descisions</div>
		<div class="item">Birthday Cards</div>
		<div class="item">Shoes</div>
		<div class="item">Stir Fry</div>
	</div>
	<!--googleon: all-->
	<p>
		<a href="#but-how" class="btn -color-white -size-large -arrow-down -bgcolor-spin --scrollto">Learn more</a>
	</p>
</h1>

<section id="float-illustrations-1">
	<div class="item"><span><img src="<?php bloginfo('template_url'); ?>/dist/images/person-gh-man.png" alt="Ghost Horses" /></span><span><img src="<?php bloginfo('template_url'); ?>/dist/images/person-gh-comp.png" alt="Website Design" /></span></div>
	<div class="item"><span><img src="<?php bloginfo('template_url'); ?>/dist/images/person-trump.png" alt="Donald Trump" /></span></div>
	<div class="item"><span><img src="<?php bloginfo('template_url'); ?>/dist/images/person-drogo.png" alt="Khal Drogo" /></span></div>
	<div class="item"><span><img src="<?php bloginfo('template_url'); ?>/dist/images/person-bjork.png" alt="Bjork" /></span></div>
	<div class="item"><span><img src="<?php bloginfo('template_url'); ?>/dist/images/person-giggs.png" alt="Ryan Giggs" /></span></div>
	<div class="item"><span><img src="<?php bloginfo('template_url'); ?>/dist/images/person-rosa.png" alt="Rosa Parks" /></span></div>
</section>
 
<!--
<section id="float-illustrations-2">
	<div class="item"><span>Websites<span></div>
	<div class="item"><span>Hummus<span></div>
	<div class="item"><span>Life Descisions<span></div>
	<div class="item"><span>Birthday Cards<span></div>
	<div class="item"><span>Shoes<span></div>
	<div class="item"><span>Stir Fry<span></div>
</section>
-->

<div id="bg-carousel">
	<div class="item"></div>
	<div class="item"></div>
	<div class="item"></div>
	<div class="item"></div>
	<div class="item"></div>
	<div class="item"></div>
	<div class="item"></div>
</div>

<svg height="100%" width="100%"><rect height="100%" width="100%" class="splash-rectangle" /></svg>

</section><!-- / HOME INTRO CAROUSEL -->


<section id="but-how" class="--screen-v-height"><!-- BUT HOW? -->

<h2 class="section-heading --icon-question">Lovely websites you say, b-but how?</h2>

<ul class="large-ul-blocks --diamond">
	<li><span>Creativity</span><svg height="50" width="50"><rect height="100%" width="100%" class="__rectangle" /></svg></li>
	<li><span>Smarts</span><svg height="50" width="50"><rect height="100%" width="100%" class="__rectangle" /></svg></li>
	<li><span>Love</span><svg height="50" width="50"><rect height="100%" width="100%" class="__rectangle" /></svg></li>
	<li><span>Perspiration</span><svg height="50" width="50"><rect height="100%" width="100%" class="__rectangle" /></svg></li>
	<li><span>Magic</span><svg height="50" width="50"><rect height="100%" width="100%" class="__rectangle" /></svg></li>
	<li><span>Good-Looks</span><svg height="50" width="50"><rect height="100%" width="100%" class="__rectangle" /></svg></li>
</ul>

</section><!-- / BUT HOW? -->

<section id="but-what" class="--screen-v-height"><!-- BUT WHAT -->

<h2 class="section-heading --icon-code">But like, what do you DO?</h2>

<ul class="large-ul-blocks --circle">
	<li><span>Digital Design / UI</span><svg height="74" width="74"><circle class="__circle" cx="37" cy="37" r="35" /></svg></li>
	<li><span>Logos</span><svg height="74" width="74"><circle class="__circle" cx="37" cy="37" r="35" /></svg></li>
	<li><span>HTML5 / CSS3</span><svg height="74" width="74"><circle class="__circle" cx="37" cy="37" r="35" /></svg></li>
	<li><span>SASS / LESS</span><svg height="74" width="74"><circle class="__circle" cx="37" cy="37" r="35" /></svg></li>
	<li><span>Responsive</span><svg height="74" width="74"><circle class="__circle" cx="37" cy="37" r="35" /></svg></li>
	<li><span>WordPress</span><svg height="74" width="74"><circle class="__circle" cx="37" cy="37" r="35" /></svg></li>	
</ul>

</section><!-- / BUT WHAT -->

<section id="latest-split" class="--background-purple"><!-- LATEST STUFF -->
<h2 class="section-heading  --icon-bolt">Latest stuff</h2>

<div class="row">
	<div class="col-md-6">
		<article class="--spacing">
			<h2 class="sub-heading --icon-news">News</h2>
			 <?php
		// NEWS Custom Loop Args
		$news_args = array('post_type' => 'post','showposts' => '1' );
		// my loop
		$news_loop = new WP_Query( $news_args );		  
		if ( $news_loop->have_posts() ) { while ( $news_loop->have_posts() ) { 	$news_loop->the_post(); ?>
				<!-- NEWS ARTICLE -->
			    <article class="--white">
			       <header>
				      <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Learn more about <?php the_title_attribute(); ?>">
				        <?php the_title(); ?>
				        </a></h1>

				        <time datetime="<?php echo the_time('Y-m-j'); ?>" class="date" pubdate><span class="padding">
				        <?php the_time('jS'); ?>
				        <span>
				        <?php the_time('M'); ?>
				        </span>
				        <?php the_time('Y'); ?>
				        </span></time>
			        </header>

			        <p class="__content">
				      	<?php
				      	// GET THE CONTENT
						$content = get_the_content();
						echo wp_trim_words( $content , '30' ); ?>
					</p>

			      <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more... it's good for you - <?php the_title_attribute(); ?>" class="btn -color-white -size-medium -arrow-dright -bgcolor-spin">Learn more</a>
			      </p>
			    </article>
    			<!--/ NEWS ARTICLE -->

			<?php } } ?>
		</article>
	</div>

	<div class="col-md-6">
		<article class="--spacing">
			<h2 class="sub-heading  --icon-cog">Production Diary</h2>
			
			<?php
		// PRODUCTION DIARY Custom Loop Args
		$prod_args = array('post_type' => 'production-diary','showposts' => '1' );
		// my loop
		$prod_loop = new WP_Query( $prod_args );		  
		if ( $prod_loop->have_posts() ) { while ( $prod_loop->have_posts() ) { 	$prod_loop->the_post(); ?>
				<!--PRODUCTION ARTICLE -->
			    <article class="--white">
			      
			      <header>
				      <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Learn more about <?php the_title_attribute(); ?>">
				        <?php the_title(); ?>
				        </a></h1>

				        <time datetime="<?php echo the_time('Y-m-j'); ?>" class="date" pubdate><span class="padding">
				        <?php the_time('jS'); ?>
				        <span>
				        <?php the_time('M'); ?>
				        </span>
				        <?php the_time('Y'); ?>
				        </span></time>
			        </header>

			      <p class="__content">
				      	<?php
				      	// GET THE CONTENT
						$content = get_the_content();
						echo wp_trim_words( $content , '30' ); ?>
					</p>

			      <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Read more... it's good for you - <?php the_title_attribute(); ?>" class="btn -color-white -size-medium -arrow-right -bgcolor-spin">Learn more</a>
			      </p>
			    </article>
    			<!--/ PRODUCTION ARTICLE-->

			<?php } } ?>
			
			</div>
		</article>
</div>


</section><!-- / LATEST STUFF -->

<section id="ghost-horses-svg" class="--screen-v-height"><!-- GHOST HORSES SVG -->
<span><?php get_template_part('dist/images/inline', 'horseoutline.svg');?></span><span id="horse-white-bg-span"><?php get_template_part('dist/images/inline', 'horsewhite.svg');?></span>
</section><!-- / GHOST HORSES SVG -->




