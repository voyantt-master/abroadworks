<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abroadworks
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
	   
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


		<link rel="profile" href="https://gmpg.org/xfn/11">

	  <!-- Font  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- font use -->
     
	  <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500;600&family=Montserrat:wght@400;500;600;700&family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600&display=swap" rel="stylesheet">
        <!-- owl.carousel use -->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" >

	   <!--WOW Animation-->
	  
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
		<style type="text/css">
			.wow {
	    visibility: hidden;
	}
		</style>

  <script defer>
    window.addEventListener('DOMContentLoaded', (event) => {
      setTimeout(function() {
        var owlCarouselElement = document.getElementsByClassName('owl-delay')[0];
        if (owlCarouselElement) {
          owlCarouselElement.style.display = 'block';
        }
      }, 3000);
    });
  </script>


	   <!-- bootstrap use -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
		
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css-stage/style.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css-stage/new_style.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css-stage/responsive.css" rel="stylesheet">
		
		
		
		<?php wp_head(); ?>

	
		
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZENF0JNTD6"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-ZENF0JNTD6');
		</script>

	</head>

	<body <?php body_class(); ?>>

		<?php
		//wp_body_open();
		?>


		<!-- Header panel start here -->
		<div id="myNav" class="overlay h-100 position-fixed d-flex align-items-stretch top-0 start-0 ">
        <div class="left-menubar bg-white h-100 text-center position-absolute d-flex  flex-column p-3">
           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/close-icon.svg" alt="" class="img-fluid"></a>
           <div class="logo mt-auto d-none d-md-block" >	
			<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/logo-icon.png" alt="Abroad Works" title="Abroad Works"></a>
			</div>
        </div>
        <div class="overlay-content d-flex align-items-center  position-relative text-white  font-Montserrat">
          
            <div class="flex-column d-flex h-50 pt-0 mb-5 ms-2 ms-md-0">
               <div class="w-100 top-navigation">
                  
				<?php wp_nav_menu( array( 'menu' => 'Top Menu', 'link_before' => '<span>','link_after'=>'</span>' ) ); ?>
				
               </div>
               <div class="w-100 social-icon mt-4 font_Nunito fw-bold">
                  
				  <?php wp_nav_menu( array( 'menu' => 'Social Menu', 'link_before' => '<span>','link_after'=>'</span>' ) ); ?>
               </div>
            </div>
          
               <div class="menu-footer position-absolute bottom-0  d-flex justify-content-between align-items-center w-92 font_Nunito mt-md-4 mt-5 pt-md-0 pt-5 mob-flex-column">
                  <div >
					<?php wp_nav_menu( array( 'menu' => 'Legal Menu', 'link_before' => '<span>','link_after'=>'</span>' ) ); ?>
				  </div>
                  <div class="text-end mob-font-xs me-md-2 ">© Copyright AbroadWorks 2022. All Rights Reserved</div>
               </div>
               
            
         
       </div>
   </div>

<div class="menu-bar position-absolute"><span onclick="openNav()"><i class="fa fa-bars"></i></span></div>	
	

<?php if ( is_front_page() && is_home() ) : ?>
  <!--<div class="banner home-banner">
    <h1>Welcome to the Home Page!</h1>
  </div>-->
<?php elseif ( is_front_page() ) : ?>
  <!--<div class="banner home-banner">
    <h1>Welcome to the Static Home Page!</h1>
  </div>-->
<?php elseif ( is_home() ) : ?>
     <section class="spacing-section text-white inner-banner m-0 p-0 position-relative">
   <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/about-new-banner.png" alt="">
  
     
         
       <div class="position-absolute top-50 start-50 translate-middle inner-banner-content">
              <div class=" d-flex flex-row mb-2 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
			  <h2 class="mb-0 inner-banner-text-bg font-Montserrat fw-semibold ps-5 pe-5 text-nowrap">FUELED BY PASSION,</h2>
			  </div>
              <div class=" d-flex flex-row-reverse wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
              <h2 class="mb-0 inner-banner-text-bg font-Montserrat fw-semibold ps-5 pe-5 text-nowrap"> DRIVEN BY RESULTS.</h2>
			  </div>
        </div>
      
              
    
</section>
<?php else : ?>
  <section class="spacing-section text-white inner-banner m-0 p-0 position-relative">
   <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/about-new-banner.png" alt="">
  
     
         
       <div class="position-absolute top-50 start-50 translate-middle inner-banner-content">
              <div class=" d-flex flex-row mb-2 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
			  <h2 class="mb-0 inner-banner-text-bg font-Montserrat fw-semibold ps-5 pe-5 text-nowrap">FUELED BY PASSION,</h2>
			  </div>
              <div class=" d-flex flex-row-reverse wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
              <h2 class="mb-0 inner-banner-text-bg font-Montserrat fw-semibold ps-5 pe-5 text-nowrap"> DRIVEN BY RESULTS.</h2>
			  </div>
        </div>
      
              
    
</section>
<?php endif; ?>

	
		<!-- Header panel end here -->
