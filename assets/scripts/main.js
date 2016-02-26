/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);



  // ##################
  // MY CODE SNIPPETS


  // When the document is ready, remove preloader
  $(document).ready(function($) {  

    // site preloader -- also uncomment the div in the header and the css style for #preloader
    $(window).load(function(){
      $('#spinner-wrapper').fadeOut('50000',function(){$(this).remove();});
    });

  });


  // Fix navbar on scroll
  // http://getbootstrap.com/javascript/#affix

  $('.home #nav-banner').affix({
    offset: {
      top: 100,
      bottom: function () {
        return (this.bottom = $('.footer').outerHeight(true));
      }
    }
  });

  // slick carousel http://kenwheeler.github.io/slick/

  $('#person-carousel').slick({
    asNavFor: '#bg-carousel, #float-illustrations-1'
  });
  $('#adjective-carousel').slick();
  $('#object-carousel').slick({
    asNavFor: '#float-illustrations-2'
  });
  $('#bg-carousel').slick({
      fade: true
  });
  $('#float-illustrations-1').slick({
    arrows: false,
    fade: true
  });
  $('#float-illustrations-2').slick({
    arrows: false,
    fade: true
  });

  // https://github.com/maxwellito/vivus
  // load Vivus SVG outline animation after document loads
    //$(window).load(function(){
      new Vivus('logo-svg', {duration: 300});
    //});
  
  // Only Fire after the page has fully loaded
  $(window).load(function() {
    $('body').addClass('pageloaded');
  });






})(jQuery); // Fully reference jQuery after this point.
