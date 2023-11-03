<?php
   /**
   
    * Template Name:  New Our Team Template
   
    * Template Post Type: post, page
   
    *
   
    * @package WordPress
   
   
    */
   
   
   get_header('custom');
  
   
   ?>





<section class="spacing-section text-white bg-dark">
   <div class="container">
    <ul class="row team-list  p-0 m-0">
	<?php while( have_rows('team_members') ): the_row(); ?>
    <li class="col-12 col-md-6 col-lg-3 hvr-grow-shadow mb-3 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
		<div class="team-Profile position-relative boder15 d-flex flex-column justify-content-center align-items-center">
		<img src="<?php the_sub_field('member_photo'); ?>" class="img-fluid bottom-0 position-absolute" alt="<?php the_sub_field('member_photo_alt'); ?>">
		</div>
      <div class="mt-3"> <h4 class="lh-1"><?php the_sub_field('member_name'); ?><br> <span class="font-md fw-normal"><?php the_sub_field('member_position'); ?></span></h4></div>
     </li>
	 <?php endwhile; ?>
     
    
    
   
    </ul>
  </div>

</section>









<?php
get_footer(custom);