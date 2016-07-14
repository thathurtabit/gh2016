<section id="contact-finger-wrap" class="section--background-blue section--border-white waypoints">
	<h2 class="sub-heading  heading--icon-meh">Don't Be Shy<span></span></h2>

	<!-- GHOST HORSES SVG -->
<div id="finger-slider">
	<h4 id="finger-get-in-touch"><a href="contact">Get in Touch</a></h4>
<span id="finger-point-wrap" class="--diamond"><?php get_template_part('dist/images/inline', 'pointed.svg');?></span>
</div>

<div id="contact-slider" class="animateme">
	<a href="contact" class="btn btn--color-white btn--size-x-large btn--bgcolor-spin section--background-blue"><span>Contact</span><svg height="50" width="50"><rect height="100%" width="100%" class="btn__rectangle" /></svg></a>
</div>
</section><!-- / GHOST HORSES SVG -->

<footer id="main-footer" class="content-info block--position-relative section--border-sides-white-only scrollme waypoints">
	<h2 class="section-heading  heading--icon-ellipsis-h">Footer stuff  <span class="zigzag"><?php get_template_part('dist/images/inline', 'zigzag.svg');?></h2>
  <div class="row footer-split-links">
		
		<div class="col-md-6 first">
			<h2 class="sub-heading heading--icon-bars">Links<span></span></h2>
			<!-- FOOTER COL -->
			<section class="footer-col">
			 <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav list-center']);
        endif;
        ?>
			</section>
			<!-- / FOOTER COL -->
		</div>
		
		
		<div class="col-md-6">
			<h2 class="sub-heading heading--icon-globe">Social<span></span></h2>
			<!-- FOOTER COL -->
			<section class="footer-col">
				<ul class="footer-social-icons list-center">
					<li><a href="http://twitter.com/nonbeliever" target="_blank" title="Find updates on Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://www.facebook.com/ghosthorses" target="_blank" title="Find updates on Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://plus.google.com/112561861475615412276" target="_blank" title="Find updates on Google"><i class="fa fa-google"></i></a></li>
					<li><a href="http://codepen.io/thathurtabit/" target="_blank" title="Find updates on CodePen"><i class="fa fa-codepen"></i></a></li>
					<li><a href="https://github.com/thathurtabit" target="_blank" title="Find updates on Github"><i class="fa fa-github"></i></a></li>
					<li><a href="http://www.linkedin.com/in/stephenfairbanks" target="_blank" title="Find updates on LinkedIn"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</section>
			<!-- / FOOTER COL -->
			
		</div>
	</div>
	<!--<div class="the-divider"></div>-->
</footer>
<div id="footer-meta" class="container-fluid section--background-white">
	<div class="row">
		<div class="col-md-6">
			<small>This website is best viewed whilst looking directly at it.</small>
		</div>
		<div class="col-md-6">
			<small>&copy; Ghost Horses Ltd 2005 - <?php echo date("Y") ?> | Reg No: 08556760</small>
		</div>

	</div>
	<section id="ghost-horses-svg" class="container-fluid"><!-- GHOST HORSES SVG -->
		<span class="horses" data-when="enter"
        data-from="1"
        data-to="0.5"
        data-opacity="1"
        data-translatex="1000"><?php get_template_part('dist/images/inline', 'horseoutline.svg');?></span><span id="horse-white-bg-span" class="horses"><?php get_template_part('dist/images/inline', 'horsewhite.svg');?></span>

    </section>
</div>


