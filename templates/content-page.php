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

      <div class="col-md-2 content-border-side-col">

        <!-- DEFAULT HEADER -->
        <?php include( TEMPLATEPATH . '/templates/includes/side-col-1.inc.php' ); ?>
        <!-- / DEFAULT HEADER -->
        
      </div>

      <div class="col-md-7 main-content-col">
        <div class="entry-content content-border-main-col">
          <div class="entry-content-inner">
            <?php the_content(); ?>
          </div>
        </div>
               
      </div>

      <div class="col-md-3">
          <aside class="sidebar">
            <?php dynamic_sidebar('sidebar-primary'); ?>
          </aside><!-- /.sidebar -->
      </div>

    </div><!-- / ARTICLE ROW -->
    
  </article>

