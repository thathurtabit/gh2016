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


        // When the document is ready, remove preloader
        $(document).ready(function($) {

          $('body').addClass('pageloaded');

          // site preloader -- also uncomment the div in the header and the css style for #preloader
          $(window).load(function(){
            $('#spinner-wrapper').fadeOut('2000',function(){$(this).remove();});
          });

        });


        // SHOW & HIDE SEARCH BOX
        //
        $(".btn-search, .btn-search-close").click(function(){

          if ($("#search-wrap").hasClass("open")) {
            $("#search-wrap").removeClass("open").delay(250).hide(10);
          } else {
            $("#search-wrap").show(1).addClass("open");
          }
          
        });

        // Smooth scroll to #target
        $(".btn--scrollto").click(function(){  

          var targetOffset = $(this.hash).offset().top;
          $('html,body').animate({scrollTop: targetOffset - 120}, 300, 'swing');
          return false;
        });
      

        // Fix navbar on scroll
        // http://getbootstrap.com/javascript/#affix

        $('#nav-banner-center').affix({
          offset: {
            top: 80,
            bottom: function () {
              return (this.bottom = $('.footer').outerHeight(true));
            }
          }
        });
     

        $('.waypoints').each(function() {
          $(this).waypoint(function() {
            //$('.waypoints').removeClass('waypoint-active');
            $(this.element).addClass('waypoint-active');
          },
           { offset: '40%'});
        });

        // Enable tooltips
        $('[data-toggle="tooltip"]').tooltip();
        

        // Change theme and save with cookie - toggle
        $(".toggle-color").click(function () {
          
              // If the website is already set to mute, then revert color
            if ($("body").hasClass("theme-muted")) {
              $("body").removeClass("theme-muted");
              localStorage['theme-mute'] = "theme-default";
              // Else add the muted theme class and save
            } else {
              $("body").addClass("theme-muted");
              localStorage['theme-mute'] = "theme-muted";
            }
        });

        // Check the sessionStorage property and add class
         if ('theme-mute' in localStorage) {
           // remove any default class setting here first
           $("body").addClass(localStorage['theme-mute']);
         };

             

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },

    // HOME PAGE JS
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page

        // slick carousel http://kenwheeler.github.io/slick/
        $('#person-carousel').slick({
          asNavFor: '#bg-carousel, #float-illustrations-1, #vert-carousel',
          speed: 1000,
          autoplay: false,
          autoplaySpeed: 15000,
          swipe: true
        });
        $('#adjective-carousel').slick({
          speed: 1000,                  
          autoplay: false,
          autoplaySpeed: 12500
        });
        $('#vert-carousel').slick({
          arrows: false,
          fade: true,
          touchMove: false,
          swipe: false
        });
        $('#object-carousel').slick({
          asNavFor: '#float-illustrations-2',
          speed: 1000,
          swipe: true,        
          autoplay: true,
          autoplaySpeed: 10000
        });
        $('#bg-carousel').slick({
          arrows: false,
          fade: true,
          speed: 1000,
          touchMove: false,
          swipe: false,
        }); 
        $('#float-illustrations-1').slick({
          arrows: false,
          fade: true,
          touchMove: false,
          swipe: false
        });
        $('#float-illustrations-2').slick({
          arrows: false,
          fade: true,
          touchMove: false,
          swipe: false
        });


        // jQuery - if that's your bag
        $(".large-ul-blocks li").hover(function () {
           $(this).toggleClass("on off");
        });

        // GOOGLEY EYES
        // If you use this code, please link to this pen (cdpn.io/rkcjt). Thanks :)

        function doGooglyEyes() {

          var DrawEye = function(eyecontainer, pupil, eyeposx, eyeposy){
            // Initialise core variables
            var r = $(pupil).width()/2;
            var center = {
              x: $(eyecontainer).width()/2 - r, 
              y: $(eyecontainer).height()/2 - r
            };
            var distanceThreshold = $(eyecontainer).width()/2 - r;
            var mouseX = 0, mouseY = 0;
            
            // Listen for mouse movement
            $(window).mousemove(function(e){ 
              var d = {
                x: e.pageX - r - eyeposx - center.x,
                y: e.pageY - r - eyeposy - center.y
              };
              var distance = Math.sqrt(d.x*d.x + d.y*d.y);
              if (distance < distanceThreshold) {
                mouseX = e.pageX - eyeposx - r;
                mouseY = e.pageY - eyeposy - r;
              } else {
                mouseX = d.x / distance * distanceThreshold + center.x;
                mouseY = d.y / distance * distanceThreshold + center.y;
              }
            });
            
            // Update pupil location
            var pupil = $(pupil);
            var xp = 0, yp = 0;
            var loop = setInterval(function(){
              // change 1 to alter damping/momentum - higher is slower
              xp += (mouseX - xp) / 1;
              yp += (mouseY - yp) / 1;
              pupil.css({left:xp, top:yp});    
            }, 1);
          };

          // Ghost Horses Eyes
          var gheye1 = new DrawEye("#eyeleft--gh", "#pupilleft--gh", 213, 72);
          var gheye2 = new DrawEye("#eyeright--gh", "#pupilright--gh", 50, 130);

          // Donald Trump Eyes
          var dteye1 = new DrawEye("#eyeleft--dt", "#pupilleft--dt", 213, 72);
          var dteye2 = new DrawEye("#eyeright--dt", "#pupilright--dt", 50, 130);

          // Khal Drogo Eyes
          var kdeye1 = new DrawEye("#eyeleft--kd", "#pupilleft--kd", 213, 72);
          var kdeye2 = new DrawEye("#eyeright--kd", "#pupilright--kd", 50, 130);

          // Bjork Eyes
          var bjeye1 = new DrawEye("#eyeleft--bj", "#pupilleft--bj", 213, 72);
          var bjeye2 = new DrawEye("#eyeright--bj", "#pupilright--bj", 50, 130);

          // Ryan Giggs Eyes
          var rgeye1 = new DrawEye("#eyeleft--rg", "#pupilleft--rg", 213, 72);
          var rgeye2 = new DrawEye("#eyeright--rg", "#pupilright--rg", 50, 130);

          // Rosa Parks Eyes
          var rpeye1 = new DrawEye("#eyeleft--rp", "#pupilleft--rp", 213, 72);
          var rpeye2 = new DrawEye("#eyeright--rp", "#pupilright--rp", 50, 130);

        }

          // Only Fire after the page has fully loaded
          $(window).load(function() {
            $('body').addClass('pageloaded');
            doGooglyEyes();
          });



        // On before slide change
        $('#person-carousel').on('afterChange', function(event, slick, currentSlide, nextSlide){
          // Do function
          doGooglyEyes();
        });


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



})(jQuery); // Fully reference jQuery after this point.
