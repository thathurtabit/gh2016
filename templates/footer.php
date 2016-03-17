<footer id="main-footer" class="content-info --position-relative --border-white">
	<h2 class="section-heading  --icon-ellipsis-h">Footer stuff</h2>
  <div class="row">
		<div class="col-md-6">
			<h2 class="sub-heading --icon-bars">Links<span></span></h2>
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
			<h2 class="sub-heading --icon-globe">Social<span></span></h2>
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
<div id="footer-meta" class="container-fluid --background-white">
	<div class="row">
		<div class="col-md-6">
			<small>This website is best viewed whilst looking directly at it.</small>
		</div>
		<div class="col-md-6 pull-right">
			<small>&copy; Ghost Horses Ltd 2005 - <?php echo date("Y") ?> | Reg No: 08556760</small>
		</div>

	</div>
</div>

<section id="ghost-horses-svg" class="container-fluid --background-white"><!-- GHOST HORSES SVG -->
<span class="horses" data-when="enter"
        data-from="1"
        data-to="0.5"
        data-opacity="1"
        data-translatex="1000"><?php get_template_part('dist/images/inline', 'horseoutline.svg');?></span><span id="horse-white-bg-span" class="horses"><?php get_template_part('dist/images/inline', 'horsewhite.svg');?></span>

    </section>
