$(document).ready(function(){
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('.first-header').outerHeight();

  $(window).scroll(function(event){
      didScroll = true;
  });

  $('#nav-icon1').on('click', function(){
    $("html, body").animate(
        {
          scrollTop: 0
        },
    0);
    $('body').toggleClass('open-navbar').toggleClass('special');
    $('.vertical-navbar-open').addClass('open-navbar-wrap');
  });

  $('.button-close-navbar-vertical').on('click', function(){
    $('body').removeClass('open-navbar').removeClass('special');
  });

  $('.dropdown-vertical-nav').on('click', function(e){
    $(jQuery(this).children("ul")).slideToggle("slow", function(){
      //prepare for tomorrow
    });
  });
  
  $(".navbar-vertical nav ul li a").click(function(){
    $('body').removeClass('open-navbar').removeClass('special');
  });

  setInterval(function() {
      if (didScroll) {
          hasScrolled();
          didScroll = false;
      }
  }, 250);

  function hasScrolled() {
      var st = $(this).scrollTop();
      var offsetTop = $('.first-header').offset().top;
      if(Math.abs(lastScrollTop - st) <= delta){
          return;
      }

      if (st > lastScrollTop && st > navbarHeight){
          $('.first-header').removeClass('nav-down').addClass('nav-up');
      } else {
          if(st + $(window).height() < $(document).height()) {
              $('.first-header').removeClass('nav-up').addClass('nav-down');
          }
      }
      lastScrollTop = st;
  }

  $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

  // Variables
  var clickedTab = $(".tabs > .active");
  var tabWrapper = $(".tab__content");
  var activeTab = tabWrapper.find(".active");
  var activeTabHeight = activeTab.outerHeight();
  
  // Show tab on page load
  activeTab.show();

  
  // Set height of wrapper on page load
  var getLoops = 1;
  if(getLoops == 1){
    $(".tab__content").css({'height':'530px'});
    getLoops = 2;
  } else {
    tabWrapper.height(activeTabHeight);
  }
    
  
  $(".tabs > li").on("click", function() {
    
    // Remove class from active tab
    $(".tabs > li").removeClass("active");
    
    // Add class active to clicked tab
    $(this).addClass("active");
    
    // Update clickedTab variable
    clickedTab = $(".tabs .active");
    
    // fade out active tab
    activeTab.fadeOut(250, function() {
      
      // Remove active class all tabs
      $(".tab__content > li").removeClass("active");
      
      // Get index of clicked tab
      var clickedTabIndex = clickedTab.index();

      // Add class active to corresponding tab
      $(".tab__content > li").eq(clickedTabIndex).addClass("active");
      
      // update new active tab
      activeTab = $(".tab__content > .active");
      
      // Update variable
      activeTabHeight = activeTab.outerHeight();
      
      // Animate height of wrapper to new tab height
      tabWrapper.stop().delay(50).animate({
        height: activeTabHeight
      }, 500, function() {
        
        // Fade in active tab
        activeTab.delay(50).fadeIn(250);
        
      });
    });
  });
});