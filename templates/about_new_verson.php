<?php
   /**
   
    * Template Name: About New verson Template
   
    * Template Post Type: post, page
   
    *
   
    * @package WordPress
   
   
    */
   
   
   get_header('custom');
  
   
   ?>





<section class="text-black about-section">
   <div class="container">
      <div class="row justify-content-start">
            <div class="col-lg-9 col-12  text-left">
               <h2 class="font-Montserrat fw-medium wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0s"><?php the_title(); ?></h2>
            </div>
      </div>
      <div class="row mt-3 pb-5 font_Karla font-sm wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
			<?php the_content(); ?>
         
      
       </div>
  </div>
  <div class="w-shape"></div>
</section>


<section class="about-company spacing-section">

<div class="container">
      
               <h3 class="font-Montserrat lh-base  fw-medium text-center text-white wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><?php the_field('header_of_objective'); ?></h3>
      

      <div class="d-flex justify-content-between mt-5 text-white mt-3 mob-flex-column tab-flex-column">
		<?php while( have_rows('our_objectives') ): the_row(); ?>
         <div class="col-xl-4 col-lg-12 col-md-12 col-12 m-0 mb-5 about-company-inner wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
			
            <div class="aboutcompany-box boder15 text-left p-4 hvr-grow-shadow">
               <div class="aboutcompany-img"><?php the_sub_field('objectives_icons'); ?>
            

               </div>
               <h4 class="fw-medium font-Montserrat mt-4 mb-1 "><?php the_sub_field('objectives_tittle'); ?></h4>
               <p class="fw-light lh-sm"><?php the_sub_field('objectives_details'); ?></p>
            </div>
         </div>
		 <?php endwhile; ?>
		 
		 
        
         
      </div>

</div>
</section>









<section class="bg-dark py-5">
   <div class="container text-white ">
      <h2 class="fw-medium font-Montserrat text-center">Start Hiring. Start Saving.<br> Get in touch today!</h2>
      <ul class="nav nav-pills my-5 d-flex justify-content-center" id="pills-tab" role="tablist">
         <li class="nav-item me-2 font-Montserrat" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#business" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
            I am a <br>
            <strong class="fw-bold">Business </strong><br>
            looking to hire
            </button>
         </li>
         <li class="nav-item ms-2" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#applicant" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
            I am an<br>
            <strong class="fw-bold">Applicant</strong><br>
            looking for a job
            </button>
         </li>
      </ul>
      <div class="tab-content m-auto contact-from" id="pills-tabContent">
         <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <?php echo do_shortcode('[contact-form-7 id="2597" title="Business looking to hire"]'); ?>
         </div>
         <div class="tab-pane fade" id="applicant" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <?php echo do_shortcode('[contact-form-7 id="2598" title="Applicant looking for a job"]'); ?>
         </div>
      </div>
   </div>
</section>


<?php
get_footer(custom);