<header id="nav-banner-center">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar one"></span>
        <span class="icon-bar two"></span>
        <span class="icon-bar three"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><span class="sr-only"><?php bloginfo('name'); ?>"</span><?php get_template_part('dist/images/inline', 'horse.svg');?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-navbar-collapse">      
     
         <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
        <button class="btn-search" role="button"><i class="fa fa-search"></i></button>
        <button class="toggle-color" data-toggle="tooltip" data-placement="right" title="Toggle theme?"><span class="sr-only">Toggle theme?</span></button>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="search-wrap">
  <button class="btn-search-close" role="button"><i class="fa fa-times"></i></button>
  <form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>">
      <div class="form-group">
          <label class="sr-only"><?php echo _x( 'Search for:', 'label' ) ?></label>
          <span class="search-icon"></span>
          <input type="search" class="form-control"
              placeholder="<?php echo esc_attr_x( 'Search me...', 'placeholder' ) ?>"
              value="<?php echo get_search_query() ?>" name="s"
              title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
      </div>
  </form>
</div>

</header>
