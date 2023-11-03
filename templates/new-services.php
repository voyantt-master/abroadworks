<?php
   /**
   
    * Template Name: New services Template
   
    * Template Post Type: post, page
   
    *
   
    * @package WordPress
   
   
    */
   
   
   get_header('custom');
  
   
   ?>



<section class="mb-5 mt-4">
   <div class="container">
    
               <h2 class="font-Montserrat fw-medium text-black text-center ls-wide mb-5 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Offshore Recruiting</h2>
     
      
      <div class="row justify-content-center mb-5 text-white">
        <div class="col-lg-12 col-12 wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="accordion font-dark" id="regularAccordionRobots">
						<?php if(have_rows('offshore_recruiting')): $i = 1; // Initialize counter variable for unique ID ?>
						  <?php while(have_rows('offshore_recruiting')): the_row(); ?>

							<div class="accordion-item font-md ">
							  <div id="regularHeading<?php echo $i; ?>" class="accordion-header">
								<button class="accordion-button font-Montserrat fw-semibold rounded-0 ls-wide" type="button" data-bs-toggle="collapse" data-bs-target="#regularCollapse<?php echo $i; ?>" aria-expanded="<?php echo ($i == 1 ? 'true' : 'false'); ?>" aria-controls="regularCollapse<?php echo $i; ?>">
								  <span class="pe-4"><?php the_sub_field('query_number'); ?>.</span><?php the_sub_field('query'); ?>
								</button>
							  </div>
							  <div id="regularCollapse<?php echo $i; ?>" class="accordion-collapse collapse <?php echo ($i == 1 ? 'show' : ''); ?> rounded-0" aria-labelledby="regularHeading<?php echo $i; ?>" data-bs-parent="#regularAccordionRobots">
								<div class="accordion-body fw-light px-36 lh-base pb-5">
								  <?php the_sub_field('query_answer'); ?>
								</div>
							  </div>
							</div>

						  <?php $i++; endwhile; // Increment the counter ?>
						<?php endif; ?>


                            
                        
                           
                        </div>
        </div>
      </div>

  </div>
</section>











<?php
get_footer(custom);