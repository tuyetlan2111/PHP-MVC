$('.form').find('input, textarea').on('keyup blur focus', function (e) {
 
    var $this = $(this),
        label = $this.prev('label');
  
        if (e.type === 'keyup') {
      
  if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
          if( $this.val() === '' ) {
              label.removeClass('active highlight'); 
              } else {
              label.removeClass('highlight');   
              }   
      } else if (e.type === 'focus') {
        
        if( $this.val() === '' ) {
              label.removeClass('highlight'); 
              } 
        else if( $this.val() !== '' ) {
              label.addClass('highlight');
              }
      }
  
  });
  
  $('.tab a').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    target = $(this).attr('href');
  
    $('.tab-content > div').not(target).hide();
    
    $(target).fadeIn(600);
    
  });



  /************cms************* */
  var Core = function(options) {
    var Window = $(window);
    var Body = $('body');
    var Navbar = $('.navbar');
    var Topbar = $('#topbar');
 
    var windowH = Window.height();
    var bodyH = Body.height();
    var navbarH = 0;
    var topbarH = 0;
 
    if (Navbar.is(':visible')) { navbarH = Navbar.height(); }
    if (Topbar.is(':visible')) { topbarH = Topbar.height(); }
 
    // Get content elements inner height
    var contentHeight = windowH - (navbarH + topbarH);
 
    // SideMenu
    var runSideMenu = function(options) {
 
       // Init Nano scrollbar if exist
       if ($('.nano.affix').length) {
           $(".nano.affix").nanoScroller({
              preventPageScrolling: true
           });
       }
       // SideBar Left Toggle Function
       var sidebarLeftToggle = function() {
 
          // If Horizontal Sidebar - return
          if ($('body.sb-top').length) { return; }   
          // Reopen Sidebar if closed - it would appear minified.
          if (Body.hasClass('sb-l-c') && options.collapse === "sb-l-m") {
             Body.removeClass('sb-l-c');
          }
          Body.toggleClass(options.collapse).removeClass('sb-r-o').addClass('sb-r-c');
          triggerResize();
       };
 
       // SideBar Right Toggle Function
       var sidebarRightToggle = function() {
 
          // If Horizontal Sidebar - return
          if ($('body.sb-top').length) { return; }
 
          // Sidebar open/close
          if (options.siblingRope === true && !Body.hasClass('mobile-view') && Body.hasClass('sb-r-o')) {
             Body.toggleClass('sb-r-o sb-r-c').toggleClass(options.collapse);
          }
          else {
             Body.toggleClass('sb-r-o sb-r-c').addClass(options.collapse);
          }
          triggerResize();
       };
       // SideBar Top Toggle Function
       var sidebarTopToggle = function() {       
          // Sidebar open/close
          Body.toggleClass('sb-top-collapsed');
       };
       // Sidebar Left Collapse Entire Menu event
       $('.sidebar-toggler').on('click', function(e) {
          e.preventDefault();
 
          // If Horizontal Sidebar - return
          if ($('body.sb-top').length) { return; }   
 
          // Close Menu
          Body.addClass('sb-l-c');
          triggerResize();
 
          // Toggle menu if state is not responsive
          if (!Body.hasClass('mobile-view')) {
             setTimeout(function() {
                Body.toggleClass('sb-l-m sb-l-o');
             }, 250);
          }
       });
       // Check window size on load
       // Toggles "mobile-view" class based on window size
       var sbOnLoadCheck = function() {
 
          // If sidebar menu Horizontal - add mobile classes
          if ($('body.sb-top').length) {
             // Add ".mobile-view" class if window width < 900
             if ($(window).width() < 900) {
                Body.addClass('sb-top-mobile').removeClass('sb-top-collapsed');
             }
             return; 
          }
 
          // If Left/Right Sidebar class not found in body - add default sidebar settings
          if (!$('body.sb-l-o').length && !$('body.sb-l-m').length && !$('body.sb-l-c').length) {
             $('body').addClass(options.sbl);
          }
          if (!$('body.sb-r-o').length && !$('body.sb-r-c').length) {
             $('body').addClass(options.sbr);
          }
 
          if (Body.hasClass('sb-l-m')) { Body.addClass('sb-l-disable-animation'); }
          else { Body.removeClass('sb-l-disable-animation'); }
 
          // If window width is < 1281px - collapse sidebars and add ".mobile-view" class
          if ($(window).width() < 1281) {
             Body.removeClass('sb-r-o').addClass('mobile-view sb-l-m sb-r-c');
          }
 
          resizeBody();
       };
       // Check window size on resize
       // Toggle "mobile-view" class based on window size
       var sbOnResize = function() {
 
          // If horizontal sidebar menu - return
          if ($('body.sb-top').length) {
             // If window width < 900px - collapse sidebars and add ".mobile-view" class
             if ($(window).width() < 900 && !Body.hasClass('sb-top-mobile')) {
                Body.addClass('sb-top-mobile');
             } else if ($(window).width() > 900) {
                Body.removeClass('sb-top-mobile');
             }
             return; 
          }
 
          // If window width < 1281px - collapse sidebars and add ".mobile-view" class
          if ($(window).width() < 1281 && !Body.hasClass('mobile-view')) {
             Body.removeClass('sb-r-o').addClass('mobile-view sb-l-m sb-r-c');
          } else if ($(window).width() > 1281) {
             Body.removeClass('mobile-view');
          } else {
             return;
          }
 
          resizeBody();
       };
 
       // Set content min-height equal body height so bgs have full height
       var resizeBody = function() {
 
          var sidebarH = $('#sidebar_left').outerHeight();
          var cHeight = (topbarH + navbarH + sidebarH + 21);
 
          Body.css('min-height', cHeight);
       };
 
       // Trigger global resize function to catch plugins after menu animation (300ms)
       var triggerResize = function() {
          setTimeout(function() {
             $(window).trigger('resize');
 
             if(Body.hasClass('sb-l-m')) {
                Body.addClass('sb-l-disable-animation');
             }
             else {
                Body.removeClass('sb-l-disable-animation');
             }
          }, 300)
       };
 
       sbOnLoadCheck();
       $("#sidebar_top_toggle").on('click', sidebarTopToggle);
       $("#sidebar_left_toggle").on('click', sidebarLeftToggle);
       $("#sidebar_right_toggle").on('click', sidebarRightToggle);
 
       // Attach debounced resize handler
       var rescale = function() {
          sbOnResize();
       };
       var lazyLayout = _.debounce(rescale, 300);
       $(window).resize(lazyLayout);
 
       //
       // 2. LEFT USER MENU TOGGLE
       //
 
       // Author Widget selector 
       var authorWidget = $('#sidebar_left .author-widget');
 
       // Toggle open user menu
       $('.sidebar-menu-toggle').on('click', function(e) {      
          e.preventDefault();
 
          // Sidebar widgets are not supported for Horizontal menu
          if ($('body.sb-top').length) { return; }
 
          // Let author widget sibling menu know if it is present
          if (authorWidget.is(':visible')) { authorWidget.toggleClass('menu-widget-open'); }
 
          // Class toggle for state change
          $('.menu-widget').toggleClass('menu-widget-open').slideToggle('fast');
 
       });
 
       // 3. LEFT MENU LINKS TOGGLE
       $('.sidebar-menu li a.accordion-toggle').on('click', function(e) {
          e.preventDefault();
 
          // If selected menu item is minified and is a submenu (has sub-nav parent) - return
          if ($('body').hasClass('sb-l-m') && !$(this).parents('ul.sub-nav').length) { return; }
 
          // If selected menu item is a dropdown - open it
          if (!$(this).parents('ul.sub-nav').length) {
 
             // If sidebar horizontal - return
             if ($(window).width() > 900) {
                if ($('body.sb-top').length) { return; }
             }
 
             $('a.accordion-toggle.menu-open').next('ul').slideUp('fast', 'swing', function() {
                $(this).attr('style', '').prev().removeClass('menu-open');
             });
          }
          // If selected menu item is a dropdown inside of a dropdown -
          // close menu items which are not children of the main top level menu
          else {
             var activeMenu = $(this).next('ul.sub-nav');
             var siblingMenu = $(this).parent().siblings('li').children('a.accordion-toggle.menu-open').next('ul.sub-nav');
 
             activeMenu.slideUp('fast', 'swing', function() {
                $(this).attr('style', '').prev().removeClass('menu-open');
             });
             siblingMenu.slideUp('fast', 'swing', function() {
                $(this).attr('style', '').prev().removeClass('menu-open');
             });
          }
 
          // Expand target menu item, add ".open-menu" class
          // and remove unneeded inline jQuery animation styles
          if (!$(this).hasClass('menu-open')) {
             $(this).next('ul').slideToggle('fast', 'swing', function() {
                $(this).attr('style', '').prev().toggleClass('menu-open');
             });
          }
 
       });
    };
 
    // Footer Functions
    var runFooter = function() {
 
       // Smoothscroll for "move-to-top" button
       var pageFooterBtn = $('.footer-return-top');
       if (pageFooterBtn.length) {
         pageFooterBtn.smoothScroll({offset: -55});
       }
       
    };
 
    // jQuery Helper Functions
    var runHelpers = function() {
 
       // Disable element selection
       $.fn.disableSelection = function() {
          return this
             .attr('unselectable', 'on')
             .css('user-select', 'none')
             .on('selectstart', false);
       };
 
       // Get element scrollbar visibility
       $.fn.hasScrollBar = function() {
          return this.get(0).scrollHeight > this.height();
       };
 
       // If IE 9 - add class
       function msieversion() {
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");
            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) { 
               var ieVersion = parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
               if (ieVersion === 9) {$('body').addClass('no-js ie' + ieVersion);}
               return ieVersion;
            }
            else { return false; }
       }
       msieversion();
 
       // Define FF browser
       if(!(window.mozInnerScreenX == null)) $('html').addClass('ff');
 
       // Remove unneeded helper classes
       setTimeout(function() {
          $('#content').removeClass('animated fadeIn');
       },800);
 
    };
 
    // Delayed Animations
    var runAnimations = function() {
 
       // Prevent bluring pages with intensive resources
       if (!$('body.boxed-layout').length) {
          setTimeout(function() {
             $('body').addClass('onload-check');
          }, 100);
       }
 
       // Delayed Animations
       $('.animated-delay[data-animate]').each(function() {
          var This = $(this)
          var delayTime = This.data('animate');
          var delayAnimation = 'fadeIn';
 
          // Reset Defaults if data attribute is array (2 or more atts)
          if (delayTime.length > 1 && delayTime.length < 3) {
             delayTime = This.data('animate')[0];
             delayAnimation = This.data('animate')[1];
          }
 
          var delayAnimate = setTimeout(function() {
             This.removeClass('animated-delay').addClass('animated ' + delayAnimation)
                .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                   This.removeClass('animated ' + delayAnimation);
                });
          }, delayTime);
       });
 
       // "In-View" Animations
       $('.animated-waypoint').each(function(i, e) {
          var This = $(this);
          var Animation = This.data('animate');
          var offsetVal = '35%';
 
          // Reset Defaults if data attribute is array (2 or more atts)
          if (Animation.length > 1 && Animation.length < 3) {
             Animation = This.data('animate')[0];
             offsetVal = This.data('animate')[1];
          }
 
          var waypoint = new Waypoint({
             element: This,
             handler: function(direction) {
                console.log(offsetVal)
                if (This.hasClass('animated-waypoint')) {
                   This.removeClass('animated-waypoint').addClass('animated ' + Animation)
                      .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                         This.removeClass('animated ' + Animation);
                      });
                }
             },
             offset: offsetVal
          });
       });
 
    };
 
    // Header Functions
    var runHeader = function() {
 
       // Searchbar - Mobile hack
       $('.search-form').on('click', function(e) {
          var This = $(this);
          var searchForm = This.find('input');
          var searchRemove = This.find('.search-remove');
 
          // If mobile - start
          if ($('body.mobile-view').length || $('body.sb-top-mobile').length) { 
 
             // Open search bar, add search remove icon if one there isn't one
             This.addClass('search-open');
             if (!searchRemove.length) {
                This.append('<div class="search-remove"></div>'); 
             }
 
             // Focus search input on animation (fadeIn) complete
             setTimeout(function() {
                This.find('.search-remove').fadeIn();
                searchForm.focus().one('keydown', function() {
                   $(this).val('');
                });
             },250);
 
             // Close search bar
             if ($(e.target).attr('class') == 'search-remove') {
                This.removeClass('search-open').find('.search-remove').remove();
             }
 
          }
 
       });
 
       if (jQuery(".info-circle").length > 0) {
          jQuery(".info-circle").each(function() {
             var circle_color = jQuery(this).attr("data-circle-color");
             var circle_color_class = 'circle-text-' + circle_color;
             jQuery(this).addClass(circle_color_class);
          });
       }
 
       if (jQuery(".progress.vertical").length > 0) {
          jQuery(".progress.vertical").each(function() {
             var skillBar = $(this).find('.progress-bar');
             var skillVal = skillBar.attr("aria-valuenow");
             $(skillBar).css({
                height: skillVal + '%'
             });
          });
       }
       if (jQuery(".progress:not(.vertical)").length > 0) {
          jQuery(".progress:not(.vertical)").each(function() {
             var skillBar = $(this).find('.progress-bar');
             var skillVal = skillBar.attr("aria-valuenow");
             $(skillBar).css({
                width: skillVal + '%'
             });
          });
       }
 
 
       // Init jQuery Multi-Select for navbar user dropdowns
       var btnClass = "btn-primary";
 
       if ($("#user-status").length) {
           $('#user-status').multiselect({
             buttonClass: 'btn ' + btnClass + ' btn-sm btn-bordered btn-bordered',
             buttonWidth: 100,
             dropRight: false
          });
       }
       if ($("#user-role").length) {
           $('#user-role').multiselect({
             buttonClass: 'btn ' + btnClass + ' btn-sm btn-bordered btn-bordered',
             buttonWidth: 100,
             dropRight: true
          });
       }  
       // Sliding Topbar Menu
       var menu = $('#topbar-dropmenu-wrapper');
       var items = menu.find('.service-box');
       var serviceModal = $('.service-modal');
 
       // Toggle topbar menu
       $('.topbar-dropmenu-toggle').on('click', function() {
             menu.slideToggle(230).toggleClass('topbar-dropmenu-open');
          serviceModal.fadeIn();
       });
 
       // Close menu on modal click
       $('body').on('click', '.service-modal', function() {
          serviceModal.fadeOut('fast');
          setTimeout(function() {
             menu.slideToggle(150).toggleClass('topbar-dropmenu-open');
          }, 250);
       });
    };
 
    // Columns related Functions
    var runChutes = function() {
    
       // Match column height with body height
       var chuteFormat = $('#content .chute');
       if (chuteFormat.length) {
 
          // Loop each column and set height to match body
          chuteFormat.each(function(i,e) {
             var This = $(e);
             var chuteScroll = This.find('.chute-scroller');
 
             This.height(contentHeight);
             chuteScroll.height(contentHeight);
 
             if (chuteScroll.length) {
               chuteScroll.scroller();
             }
          });
          // Scroll lock for fixed content overflow
          $('#content').scrollLock('on', 'div');
 
       }
       // Debounced resize handler
       var rescale = function() {
          if ($(window).width() < 1281) { Body.addClass('chute-rescale'); }
          else { Body.removeClass('chute-rescale chute-rescale-left chute-rescale-right'); }
       };
       var lazyLayout = _.debounce(rescale, 300);
 
       if (!Body.hasClass('disable-chute-rescale')) {
          // Rescale on window resize
          $(window).resize(lazyLayout);
 
          // Rescale on load
          rescale();
       }
 
       // Custom animation for chute-nav if exists
       var navAnimate = $('.chute-nav[data-nav-animate]');
       if (navAnimate.length) {
           var Animation = navAnimate.data('nav-animate');
 
           // Set default "fadeIn" animation if none is set
           if (Animation == null || Animation == true || Animation == "") { Animation = "fadeIn"; }
           setTimeout(function() {
             navAnimate.find('li').each(function(i, e) {
               var Timer = setTimeout(function() {
                 $(e).addClass('animated animated-short ' + Animation);        
               }, 50 * i);
             });
           }, 500);
       }
        var dataChute = $('.chute[data-chute-mobile]');
        var dataAppend = dataChute.children();
        function fcRefresh() {
          if ($('body').width() < 585) {
            dataAppend.appendTo($(dataChute.data('chute-mobile')));
          }
          else { dataAppend.appendTo(dataChute); }
        }
        fcRefresh();
        var fcResize = function() { fcRefresh(); };
        var fcLayout = _.debounce(fcResize, 300);
        $(window).resize(fcLayout);
 
    };
    var chuteIconStyle = function() {
          $('.chute-icon').on("click", function(e) {
              if (jQuery(this).parent().hasClass("hover")) {
                jQuery('.chute-icon-style').removeClass( "hover" );
             } else{
                jQuery('.chute-icon-style').removeClass( "hover" );
                jQuery(this).parent().addClass( "hover" );
             }
          });
          $(document).on("click", function(e) {
              var target = e.target;
 
              if (!$(target).is('.chute-icon-style') && !$(target).parents().is('.chute-icon-style')) {
                  jQuery('.chute-icon-style').removeClass( "hover" );
              }
          });
  
    }
 
    var HorizontalMenu = function() {
       if (jQuery("body.sb-top").length > 0) {
          
          $(".sidebar-menu > li > a", ".sidebar-left-content").click(function(event) {
             if ($(this).hasClass("menu-open")) {
                $("a.menu-open", ".sidebar-menu").removeClass("menu-open");
             } else {
                $("a.menu-open", ".sidebar-menu").removeClass("menu-open");
                $(this).toggleClass('menu-open')
             }
             if ($(this).attr('href') == '#') {
                return false;
             } else {
             }
          });
          $(".sidebar-menu > li > .sub-nav > li > a", ".sidebar-left-content").click(function(event) {
             if ($(this).hasClass("menu-open")) {
                $("a.menu-open", ".sub-nav").removeClass("menu-open");
             } else {
                $("a.menu-open", ".sub-nav").removeClass("menu-open");
                $(this).toggleClass('menu-open')
             }
             if ($(this).attr('href') == '#') {
                return false;
             } else {
             }
          });
       }
    }
 
    // Form related Functions
    var runFormElements = function() {
 
       // Bootstrap tooltips init if exists
       var Tooltips = $("[data-toggle=tooltip]");
       if (Tooltips.length) {
          if (Tooltips.parents('#sidebar_left')) {
             Tooltips.tooltip({
                container: $('body'),
                template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>'
             });
          } else {
             Tooltips.tooltip();
          }
       }
 
       // Bootstrap Popovers Init if exist
       var Popovers = $("[data-toggle=popover]");
       if (Popovers.length) {
           Popovers.popover();
       }
 
       // Init Bootstrap persistent tooltips to prevent popup from closing
       // if a checkbox in it is clicked
       $('.dropdown-menu.keep-dropdown').on('click', function(e) {
          e.stopPropagation();
       });
 
       // Prevent close dropdown menu if a nav-tab in it is clicked
       $('.dropdown-menu .nav-tabs li a').on('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
          $(this).tab('show')
       });
 
       // Prevents close dropdown menu if btn-group in it is clicked
       $('.dropdown-menu .btn-group-nav a').on('click', function(e) {
          e.preventDefault();
          e.stopPropagation();
 
          // Remove ".active" from btn-group > btn and toggle tab content
          $(this).siblings('a').removeClass('active').end().addClass('active').tab('show');
       });
 
       // Track btn with ".btn-state" for click to toggle classes
       if ($('.btn-states').length) {
           $('.btn-states').on('click', function() {
             $(this).addClass('active').siblings().removeClass('active');
          });
       }
 
       // If ".panel-scroller" - add fixed height content scroller
       var panelScroller = $('.panel-scroller');
       if (panelScroller.length) {
           panelScroller.each(function(i, e) {
            var This = $(e);
            var Delay = This.data('scroller-delay');
            var Margin = 5;
 
            // Check if scroller bar margin is required
            if (This.hasClass('scroller-thick')) { Margin = 0; }
 
            // If scroller bar is in dropdown - init it after dropdown is visible
            var DropMenuParent = This.parents('.dropdown-menu');
            if (DropMenuParent.length) {
                DropMenuParent.prevAll('.dropdown-toggle').on('click', function() {
                   setTimeout(function() {
                      This.scroller();
                      $('.navbar').scrollLock('on', 'div');
                   },50);
                });
                return;
            }
 
            if (Delay) {
              var Timer = setTimeout(function() {
                 This.scroller({ trackMargin: Margin, });
                $('#content').scrollLock('on', 'div');
              }, Delay);
            } 
            else {
              This.scroller({ trackMargin: Margin, });
              $('#content').scrollLock('on', 'div');
            }
 
          });
       }
 
       // Init smoothscroll for elements where data attr is set
       var SmoothScroll = $('[data-smoothscroll]');
       if (SmoothScroll.length) {
         SmoothScroll.each(function(i,e) {
           var This = $(e);
           var Offset = This.data('smoothscroll');
           var Links = This.find('a');
 
           // Init Smoothscroll with data stored offset
           Links.smoothScroll({
             offset: Offset
           });
 
         }); 
       }
 
    };
    return {
       init: function(options) {
 
          // Set Default Options
          var defaults = {
             sbl: "sb-l-o", // sidebar left open
             sbr: "sb-r-c", // sidebar right closed
             sbState: "save", //Enable local storage for sidebar states
 
             collapse: "sb-l-m", // sidebar left collapse
             // if true - reopen SL when SR is closed
             siblingRope: true
          };
 
          // Extend Default Options
          var options = $.extend({}, defaults, options);
 
          // Call Core Functions
          runHelpers();
          runAnimations();
          runHeader();
          runSideMenu(options);
          runFooter();
          runChutes();
          runFormElements();
          chuteIconStyle();
          HorizontalMenu();
       }
 
    }
 }();
 











 // Theme colors Global Library
 var bgPrimary = '#6d5cae',
    bgPrimaryL = '#48b0f7',
    bgPrimaryLr = '#10cfbd',
    bgPrimaryD = '#aedbfa',
    bgPrimaryDr = '#40c1d0',
    bgSuccess = '#C3D62D',
    bgSuccessL = '#CADB47',
    bgSuccessLr = '#10cfbd',
    bgSuccessD = '#AEBF25',
    bgSuccessDr = '#a2b31c',
    bgInfo = '#12c7b7',
    bgInfoL = '#68DEBB',
    bgInfoLr = '#78e8c7',
    bgInfoD = '#9fede6',
    bgInfoDr = '#29c598',
    bgWarning = '#FF7022',
    bgWarningL = '#FF8441',
    bgWarningLr = '#ff8e51',
    bgWarningD = '#FF5C03',
    bgWarningDr = '#f05704',
    bgDanger = '#F5393D',
    bgDangerL = '#F6565A',
    bgDangerLr = '#6d5cae',
    bgDangerD = '#F41C20',
    bgDangerDr = '#e61418',
    bgAlert = '#FFBC0B',
    bgAlertL = '#FFC42A',
    bgAlertLr = '#ffc837',
    bgAlertD = '#EBAB00',
    bgAlertDr = '#dca001',
    bgSystem = '#c3b4ef',
    bgSystemL = '#6852b2',
    bgSystemLr = '#756da5',
    bgSystemD = '#4D4773',
    bgSystemDr = '#413b67',
    bgLight = '#FAFAFA',
    bgLightL = '#FEFEFE',
    bgLightLr = '#ffffff',
    bgLightD = '#F2F2F2',
    bgLightDr = '#e7e7e7',
    bgDark = '#2a2f43',
    bgDarkL = '#363C56',
    bgDarkLr = '#404661',
    bgDarkD = '#1E2230',
    bgDarkDr = '#171b28',
    bgBlack = '#273847',
    bgBlackL = '#2a3241',
    bgBlackLr = '#34495a',
    bgBlackD = '#1a2620',
    bgBlackDr = '#0e151a';