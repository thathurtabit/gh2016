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

      <div class="col-md-12">
                  
            <?php get_template_part('templates/content', 'about'); ?>
                                
      </div>      

    </div><!-- / ARTICLE ROW -->

    <div class="row section--background-white">

      <div class="col-md-6 content-big-blocks--centered content-big-block--coloured">
        <div class="content-big-blocks__content one">
          <h2 class="sub-heading on-white heading--icon-design">Design<span></span>
          </h2>
          <svg height="74" width="74" class="content-big-blocks__svg">
            <circle class="content-big-blocks__content-circle" cx="37" cy="37" r="30" />
           </svg>
        </div>
      </div>

      <div class="col-md-6 content-big-blocks align-full">
          <ul class="list-ul-blocks blocks--circle">
            <li class="purple">Website Design</li>
            <li>User Interface Design</li>
            <li class="orange">Logo Design</li>
            <li class="red">Responsive Design</li>
          </ul>
      </div>

    </div><!-- / ROW -->

    <div class="row section--background-white">

      <div class="col-md-6 content-big-blocks align-full">
          <ul class="list-ul-blocks blocks--circle">
            <li class="red">HTML5</li>
            <li class="green">CSS3 / SASS / LESS</li>
            <li>WordPress</li>
            <li class="pink">Responsive Development</li>
          </ul>
      </div>

      <div class="col-md-6 content-big-blocks--centered content-big-block--coloured reverse">
        <div class="content-big-blocks__content one">
          <h2 class="sub-heading on-white heading--icon-code">Coding<span></span>
          </h2>
          <svg height="74" width="74" class="content-big-blocks__svg">
            <circle class="content-big-blocks__content-circle" cx="37" cy="37" r="30" />
           </svg>
        </div>
      </div>
    
    </div><!-- / ROW -->
      
  </article>

