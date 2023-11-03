<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abroadworks
 */

?>

<section class="bg-dark text-white pt-5">
	<div class="container">
		<ul class="d-flex justify-content-center social-icon m-0">
			<li class="d-flex">
				<a href="tel:888-204-2567"  class="text-white text-decoration-none"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/icon-phone.svg" width="30" height="30" class="img-fluid" alt="">
				(888) 204-2567</a>		
			
			</li>
			<li class="mx-3">
				<a href="https://www.instagram.com/abroadworks/" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/icon-instagram.svg" width="30" height="30" class="img-fluid" alt=""></a>
			</li>
			<li class="">
				<a href="https://www.facebook.com/AbroadWorks-109162967261883/" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/icon-facebook.svg" width="30" height="30" class="img-fluid" alt=""></a>
							
			</li>
		</ul>
		<div class="d-flex justify-content-center mt-3 pb-4">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/footer-logo.png"  class="img-fluid" alt=""></a>
				
		</div>
	</div>
</script>

 <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
<script>
$(document).ready(function(){
	
  // First carousel: One item, no loop, speed 500ms
  $(".allemployee").owlCarousel({
    items: 1,
    loop: true,
     
	autoplay: true,
	autoplayTimeout: 3000,
    smartSpeed: 500

  });

  // Second carousel: Seven items, loop on, auto-play, speed 500ms
 $(".brands").owlCarousel({
  loop: true,
  smartSpeed: 500,
  //autoplay: true,
  //autoplayTimeout: 2000, // Time in milliseconds for each slide to display
  //autoplayHoverPause: true, // Pause on hover
  dots: false,
  nav: true,
  responsive: {
    0: {
      items: 1 // 3 item between 0 and the next breakpoint

    },
    600: {
      items: 4 // 4 items between 600 and the next breakpoint
    },
    1000: {
      items: 6 // 6 items between 1000 and the next breakpoint
    },
    1200: {
      items: 7 // 7 items for anything larger than 1200
    }
  }
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


// Function to check if an element is in the viewport
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top <= window.innerHeight &&
    rect.bottom >= 0
  );
}

// Event listener for scrolling
$(window).on('scroll', function() {
  const section = document.querySelector('.proces-box'); // Replace with your section's class or ID
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

// Don't call the function here; it will be triggered by the scroll event
// fadeInSteps();

  
  	// Reasons 
  const $carousel = $(".reasons");

  $carousel.owlCarousel({
    loop: true,
    margin: 10,
	padding:10,
	nav: true,
	dots: false,	
    navText: ["<", ">"],
    responsive: {
      0: {
              items: 1
            },
            576: {
              items: 1
            },
			768: {
              items: 2
            },
            992: {
              items: 2
            },
            1024: {
              items: 3
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
  //$(window).resize(checkCarousel);
  //  new WOW().init();
	
	
});

</script>


<script>
$(document).ready(function(){
    var $carousel = $("#carousel-client");

    $carousel.owlCarousel({
        center: true, 
        items: 2,  
        loop: true,
        margin:4,
		nav: false,
    //autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    center: true,
    dots: true,
    responsive: {
      0: { items: 1 },
      600: { items: 2 },
      1000: { items: 2 },
	  1400: { items: 2 }
    }
    });

    // Event handler
    $carousel.on('translated.owl.carousel', function(event) {
    var $items = $(this).find('.owl-item'); // All items
    var $activeItem = $(this).find('.owl-item.active'); // Active item

    // First, remove any previously added classes
    $items.removeClass('before-active after-active');

    // Now, add classes to the items before and after the active item
    $activeItem.prev().addClass('before-active');
    $activeItem.next().addClass('after-active');

    // Ensure the active item doesn't have the .before-active class
    $activeItem.removeClass('before-active');
	});

});


</script>

<script>
let sectionReached = false;  // To make sure the animation only runs once

$(window).scroll(function() {
  const sectionTop = $('#highlights-section').offset().top;
  const sectionBottom = $('#highlights-section').offset().top + $('#highlights-section').height();
  const viewportTop = $(window).scrollTop();
  const viewportBottom = viewportTop + $(window).height();

  // Check if the section is in the viewport
  if (sectionTop < viewportBottom && sectionBottom > viewportTop && !sectionReached) {
    sectionReached = true;  // Set flag to true so this block only runs once

    // Your existing counter code
    $('.counter').each(function() {
      const $this = $(this);
      const countTo = $this.attr('data-target');
      const unit = $this.attr('data-unit') || '';  // Default to empty string if no unit

      let prependUnit = $this.hasClass('special-case'); // Check if it has a special-case class

      $({ countNum: $this.text() }).animate({
        countNum: countTo
      },
      {
        duration: 2000,
        easing: 'linear',
        step: function() {
          if (prependUnit) {
            $this.html(unit + Math.floor(this.countNum));  // Prepend unit
          } else {
            $this.html(Math.floor(this.countNum) + unit);  // Append unit
          }
        },
        complete: function() {
          if (prependUnit) {
            $this.html(unit + this.countNum);  // Prepend unit
          } else {
            $this.html(this.countNum + unit);  // Append unit
          }
        }
      });
    });

    // Your existing fade-in code
    setTimeout(function() {
      $('.fade-in').addClass('show');
    }, 2000);
  }
});

</script>
<script>
   $(document).ready(function(){
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
});
</script>
 <script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

// Add this function to toggle the content and close the nav
function toggleAndCloseNav() {
  // Here, toggle your content
  // For example:
  // const toggleSection = document.getElementById("toggle-section");
  // toggleSection.style.display = (toggleSection.style.display === 'none' || toggleSection.style.display === '') ? 'block' : 'none';

  // Close the navigation menu
  closeNav();
}

document.addEventListener("DOMContentLoaded", function() {
  const toggleLinks = document.getElementsByClassName("toggleLink");
  
  // Note: getElementsByClassName returns an HTML collection, so we loop through it
  Array.from(toggleLinks).forEach(function(toggleLink) {
    toggleLink.addEventListener("click", toggleAndCloseNav);
  });
});

 </script>
  <!-- Include WOW.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <!-- Initialize WOW.js -->
  <script>
    new WOW().init();
  </script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



<?php wp_footer(); ?>
</body>
</html>
