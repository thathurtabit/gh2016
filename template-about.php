<?php
/**
 * Template Name: About Template
 */
?>

<article <?php post_class('page-article section--border-white-sides-top'); ?>>

	<?php if(has_post_thumbnail()) { ?>
    
    <!-- HEADER FEATURED -->
    <?php include( TEMPLATEPATH . '/templates/includes/header-default.inc.php' ); ?>
    <!-- / HEADER FEATURED -->
 

    <?php } else { ?>

    <!-- DEFAULT HEADER -->
    <?php include( TEMPLATEPATH . '/templates/includes/header-default.inc.php' ); ?>
    <!-- / DEFAULT HEADER -->
 
      
    </div>

	<?php } ?>
  

    <!-- ARTICLE ROW -->
    <div class="article-row row section--background-white">     

      <div class="col-md-8 col-md-offset-2">
        <div class="entry-content content-border-main-col">
          <div class="entry-content-inner">
            <?php get_template_part('templates/content', 'about'); ?>
          </div>
        </div>               
      </div>      

    </div><!-- / ARTICLE ROW -->
    
  </article>

