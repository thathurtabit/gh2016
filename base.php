<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div id="spinner-wrapper">
      <div class="gh-folding-cube">
        <div class="gh-cube1 gh-cube"></div>
        <div class="gh-cube2 gh-cube"></div>
        <div class="gh-cube4 gh-cube"></div>
        <div class="gh-cube3 gh-cube"></div>
      </div>
      <div class="preloader-horse">
        <?php get_template_part('dist/images/inline', 'horse.svg');?>
      </div>
    </div>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container-fluid" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
   
  </body>
</html>
