<footer id="main-footer" class="content-info --position-relative --border-white">
	<h2 class="section-heading  --icon-ellipsis-h">Footer stuff</h2>
  <div class="row">
		<div class="col-md-6">
			<h2 class="sub-heading --icon-bars">Links</h2>
			<!-- FOOTER COL -->
			<section class="footer-col">
			 <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
			</section>
			<!-- / FOOTER COL -->
		</div>
		
		<div class="col-md-6">
			<h2 class="sub-heading --icon-globe">Social</h2>
			<!-- FOOTER COL -->
			<section class="footer-col">
				<ul class="footer-social-icons">
					<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-google"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-codepen"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-github"></i></a></li>
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
