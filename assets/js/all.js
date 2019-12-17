$(document).on('click', '.page-link', function(event){
  event.preventDefault();

	var link = $.attr(this, 'href')
	var noSlashLink = link.replace(/\//g, "")

  $('html, body').animate({
    scrollTop: $( noSlashLink ).offset().top - 75
  }, 500);
});


$(function() {
  var counterAmount = parseInt($('#views-counter span').text());
  var navLinks = $('nav a');
  var nav = $('nav');
  var navToggle = $('.nav-toggle');
  var DESKTOP = 1025;
  var initialViewPort = window.innerWidth < DESKTOP ? 'mobile' : 'desktop';
  var body = $('body');
  var scrollPos = window.scrollY;

  function resize() {
    var heights = window.innerHeight;
    var homeDiv = document.getElementById("home");
  
    homeDiv.style.height = heights + "px";
    homeDiv.style.minHeight = heights + "px";
  }
  
  window.onresize = function() {
    resize();
  };
  
  resize();
  

  setInterval(function() {
      var randomnumber = Math.floor(Math.random() * (500 - 100)) + 100;

      counterAmount = counterAmount + randomnumber;
      $('#views-counter span').text(counterAmount + ' views');
  }, 1000);

  navLinks.on('click', function() {
    window.scrollTo(0, scrollPos);
    nav.removeClass('opened');
    body.removeClass('prevent-scroll');
  });

  navToggle.on('click', function() {
    if (!nav.hasClass('opened')) {
      scrollPos = window.scrollY;
    }
    
    nav.toggleClass('opened');
    body.toggleClass('prevent-scroll');

    if (!nav.hasClass('opened')) {
      window.scrollTo(0, scrollPos);
    }
  });


  $(window).resize($.throttle( 250, function() {
    var currentViewPort = window.innerWidth < DESKTOP ? 'mobile' : 'desktop';

    if (initialViewPort === 'mobile' && currentViewPort === 'desktop') {
      nav.removeClass('opened');
    }

    initialViewPort = currentViewPort;
  }));
})
