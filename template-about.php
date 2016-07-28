<?php
/**
 * Template Name: About Template
 */
?>

<article <?php post_class('page-article section--border-white-sides-top'); ?>>

    <!-- DEFAULT HEADER -->
    <?php include( TEMPLATEPATH . '/templates/includes/header-default.inc.php' ); ?>
    <!-- / DEFAULT HEADER -->
 

    <!-- ARTICLE ROW -->
    <div class="article-row row section--background-white">     

      <div class="col-md-10 col-md-offset-1">
                  
            <?php get_template_part('templates/content', 'about'); ?>
                                
      </div>      

    </div><!-- / ARTICLE ROW -->

    <!-- ARTICLE ROW -->
    <div class="row section--background-white">

      <div class="col-md-5 col-md-offset-1">
          <h2 class="sub-heading on-white heading--icon-design">Design<span></span>
          </h2>

          <ul class="large-ul-blocks blocks--circle">
            <li>Website Design</li>
            <li>User Interface Design</li>
            <li>Logo Design</li>
            <li>Responsive Design</li>
          </ul>
      </div>

      <div class="col-md-5">
          <h2 class="sub-heading on-white heading--icon-code">Coding<span></span>
          </h2>

          <ul class="large-ul-blocks blocks--circle">
            <li>HTML5</li>
            <li>CSS / SASS / LESS</li>
            <li>WordPress</li>
            <li>Responsive Development</li>
          </ul>
                       
      </div>  

    </div><!-- / ARTICLE ROW -->
    
  </article>

