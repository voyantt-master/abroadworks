$(document).ready(function(){
	
  // First carousel: One item, no loop, speed 500ms
  $(".allemployee").owlCarousel({
    items: 1,
    loop: false,
	autoplay: true,
	autoplayTimeout: 3000,
    smartSpeed: 500
  });

  // Second carousel: Seven items, loop on, auto-play, speed 500ms
  $(".brands").owlCarousel({
    items: 7,
    loop: true,
    smartSpeed: 500,
    autoplay: true,
    autoplayTimeout: 2000, // Time in milliseconds for each slide to display
    autoplayHoverPause: true // Pause on hover
  });
  
  // The AbroadWorks Process
  // Function to check if element is in viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Flag to prevent multiple animations
let animated = false;

// Event listener for scrolling
$(window).on('scroll', function() {
  const section = document.querySelector('.your-section-class'); // Replace with your section's class or ID
  if (isInViewport(section) && !animated) {
    fadeInSteps();
    animated = true; // Prevents further animation
  }
});
  function fadeInSteps() {
    let delay = 0;  // initial delay
    const step = 800;  // time between each fadeIn
    const timelineDelay = 250; // additional delay for the timeline

    $('.process').each(function() {
      $(this).delay(delay).queue(function (next) { 
        $(this).css('opacity', '1');
        $(this).css('transform', 'translateY(0px)');
        next(); 
      });

      // Animate the timeline for each .process
      $(this).find('.timeline').delay(delay + timelineDelay).queue(function (next) { 
        $(this).css('width', '100%');
        next(); 
      });

      delay += step;
    });
  }

  // Call the function to start the animation
  fadeInSteps();
  
  	// Reasons 
  const $carousel = $(".reasons");

  $carousel.owlCarousel({
    loop: true,
    margin: 10,
	padding:10,
	nav: true,  
    navText: ["<", ">"],
    responsive: {
      0: {
              items: 1
            },
            576: {
              items: 1
            },
            992: {
              items: 2
            },
            1024: {
              items: 3
            }
    }
  });
$("#carousel-client").owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    center: true,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
  });
  // Disable Owl Carousel for Desktop
  function checkCarousel() {
    const windowWidth = $(window).width();
    if (windowWidth > 1024) {
      $carousel.trigger('destroy.owl.carousel');
      $carousel.addClass('off');
    } else {
      if ($carousel.hasClass('off')) {
        $carousel.removeClass('off');
        $carousel.owlCarousel({
          loop: true,
          margin: 10 ,
		  padding:10,
		  nav: true,  
		navText: ["<", ">"],
          responsive: {
            0: {
              items: 1
            },
            576: {
              items: 1
            },
            992: {
              items: 2
            },
            1024: {
              items: 3
            }
          }
        });
      }
    }
  }

  checkCarousel();

  // Check again if the window is resized
  $(window).resize(checkCarousel);
    new WOW().init();
	
	
});
