<?php
   /**
   
    * Template Name: New Our Process Template
   
    * Template Post Type: post, page
   
    *
   
    * @package WordPress
   
   
    */
   
   
   get_header('custom');
   
   
   ?>
<section class="spacing-section text-dark">
   <div class="container">
      <div class="row justify-content-center text-center">
         <div class="col-lg-9 col-12">
            <h2 class="font-Montserrat fw-medium mb-3 wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="0s"><?php the_field('our_process_header'); ?></h2>
         </div>
         <div class="col-lg-8 col-12 font-md lh-1 fw-light wow animate__animated animate__fadeIn" data-wow-duration="1.2s" data-wow-delay="0.2s">
            <p><?php the_field('our_process_content'); ?></p>
         </div>
      </div>
   </div>
</section>
<section >
   <div class="container">
      <div class="row justify-content-between align-items-center">
         <div class="col-xl-5 col-lg-5 col-12 text-left wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <div class="text-black  d-flex align-items-center">
               <span class="font_Karla font-lg fw-medium">1</span>
               <h3 class="font-Montserrat fw-medium m-2 pt-lg-4 pt-xxl-4 pt-0 ps-3"><?php the_field('first_process_tittle'); ?></h3>
            </div>
            <div class=" font-md fw-light lh-sm">
				<?php the_field('first_process_content'); ?>
            </div>
         </div>
		 
         <div class="col-xl-5 col-lg-5  col-12 text-right m-0 p-0 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/job-listion.png" class="img-fluid">
         </div>
      </div>
   </div>
</section>
<section class="mt-2 wow animate__animated animate__fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.2s">
   <div class="container">
      <div class="row d-flex justify-content-center text-center">
         <div class="col-lg-12 font-Montserrat fw-medium text-dark">
            <h2> Your entire talent pool </h2>
         </div>
      </div>
      <div class="row">
         <div class="shape-line"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/talent-pool.png" class="img-fluid"></div>
      </div>
   </div>
</section>
<section class="talent-section">
   <div class="container">
      <div class="row mt-3  d-flex justify-content-around align-items-center">
         <div class="col-xl-6 col-lg-6  col-12  col-12">
            <div class="d-flex justify-content-center wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
               <div class="img-fluid wow slideInLeft"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/phone1.png" class="img-fluid"></div>
               <div class="img-fluid mt-5 wow slideInRight"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/phone2.png" class="img-fluid"></div>
            </div>
         </div>
         <div class="col-xl-5 col-lg-5  col-12  px-3 mx-auto text-white  wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <div class="d-flex align-items-center">
               <span class="font_Karla font-lg fw-medium">2</span>
               <h3 class="font-Montserrat fw-medium m-2 pt-lg-4 pt-xxl-4 pt-0 ps-3"><?php the_field('second_process_tittle'); ?></h3>
            </div>
            <div class="font-md fw-light lh-sm">
				<?php the_field('second_process_content'); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="container p-0">
      <div class="row p-0 m-0 d-flex justify-content-around align-items-center ">
         <div class="col-xl-6 col-lg-6  col-12  p-0 m-0 text-center text-white left-process-content  wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            <h2 class="font_Karla font-xl-lg ">43.2%</h2>
            <h4 class="font-Montserrat fw-medium ">of your initial <br> talent pool</h4>
         </div>
         <div class="col-xl-6 col-lg-6  col-12   p-0 m-0 bg-white dark-text right-process-content font-dark">
            <div class="padding-60 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
               <div class="d-flex align-items-center">
                  <span class="font_Karla font-lg fw-medium">3</span>
                  <h3 class="font-Montserrat fw-medium m-2 pt-lg-4 pt-xxl-4 pt-0  ps-3"><?php the_field('third_process_tittle'); ?></h3>
               </div>
               <div class="font-md fw-light lh-sm">
					<?php the_field('third_process_content'); ?>
              </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container p-0">
      <div class="row p-0 m-0 d-flex justify-content-around align-items-center">
         <div class="col-xl-6 col-lg-6  col-12  p-0 m-0 text-center text-white">
            <div class="row d-flex justify-content-around align-items-end wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
               <div class="col-lg-6 col-12 pt-lg-0 pt-xxl-0 p-2">
                  <h2 class="font_Karla font-xl-lg ">12.23%</h2>
                  <h4 class="font-Montserrat fw-medium ">of your initial <br> talent pool</h4>
               </div>
               <div class="col-lg-6 col-12 wow bounceInLeft m-0 p-0"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/businesspeople-working.png" class="img-fluid"></div>
            </div>
         </div>
         <div class="col-xl-6 col-lg-6  col-12   p-0 m-0 bg-white dark-text right-process-content font-dark">
            <div class="padding-60 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
               <div class="d-flex align-items-center">
                  <span class="font_Karla font-lg fw-medium">4</span>
                  <h3 class="font-Montserrat fw-medium m-2 pt-lg-4 pt-xxl-4 pt-0  ps-3"><?php the_field('fourth_process_tittle'); ?></h3>
               </div>
               <div class="font-md fw-light lh-sm">
				<?php the_field('fourth_process_content'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--  White section -->
<section class="bg-white ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-12 padding-60 tab-pad">
            <div class=" text-center wow animate__animated animate__fadeInLeft box-hold-tab" data-wow-duration="1s" data-wow-delay="0s">
               <h2 class="wow bounceInUp font-xl-lg blue-text-number">6.17%</h2>
			   <div class="img-fluid mt-5 wow slideInRight"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/our-process01.png" alt="" class="img-fluid"></div>
            
             
           
            </div>
         </div>
         <div class="col-lg-6  col-12 right-process-content font-dark">
            <div class="padding-60 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
               <div class="d-flex align-items-center">
                  <span class="font_Karla font-lg fw-medium">5</span>
                  <h3 class="font-Montserrat fw-medium m-2 pt-lg-4 pt-xxl-4 pt-0  ps-3"><?php the_field('fifth_process_tittle'); ?></h3>
               </div>
               <div class="font-md fw-light lh-sm">
                  <p class="font-md fw-light"><?php the_field('fifth_process_content'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--  White section -->
<section class="bg-white ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-12 padding-60 tab-pad">
            <div class=" text-center wow animate__animated animate__fadeInLeft box-hold-tab" data-wow-duration="1s" data-wow-delay="0s">
               <h2 class="wow bounceInUp font-xl-lg blue-text-number">4.6%</h2>
              <div class="img-fluid mt-5 wow slideInRight px-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/our-process02.png" alt="" class="img-fluid"></div>
            
            </div>
         </div>
         <div class="col-lg-6  col-12 right-process-content font-dark">
            <div class="padding-60 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
               <div class="d-flex align-items-center">
                  <span class="font_Karla font-lg fw-medium">6</span>
                  <h3 class="font-Montserrat fw-medium m-2 pt-lg-4 pt-xxl-4 pt-0  ps-3"><?php the_field('sixth_process_tittle'); ?></h3>
               </div>
               <div class="font-md fw-light lh-sm">
			   <?php the_field('sixth_process_content'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--  White section -->
<section class="bg-white ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-12 padding-60 tab-pad">
            <div class=" text-center wow animate__animated animate__fadeInLeft box-hold-tab" data-wow-duration="1s" data-wow-delay="0s">
               <h2 class="wow bounceInUp font-xl-lg blue-text-number">2.75%</h2>
               <div class="img-fluid mt-5 wow slideInRight px-4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/our-process03.png" alt="" class="img-fluid"></div>
            
            </div>
         </div>
         <div class="col-lg-6  col-12 right-process-content font-dark">
            <div class="padding-60 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
               <div class="d-flex align-items-center">
                  <span class="font_Karla font-lg fw-medium">7</span>
                  <h3 class="font-Montserrat fw-medium m-2 pt-lg-4 pt-xxl-4 pt-0  ps-3"><?php the_field('seventh_process_tittle'); ?></h3>
               </div>
               <div class="font-md fw-light lh-sm">
					<?php the_field('seventh_process_content'); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--  White section -->
<section class="bg-white ">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 col-12 padding-60 tab-pad">
            <div class=" text-center wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
               <div class="img-fluid mt-5 wow slideInRight"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-stage/our-process04.png" alt="" class="img-fluid"></div>
            
            </div>
         </div>
         <div class="col-lg-6  col-12 right-process-content font-dark">
            <div class="padding-60 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
               <div class="d-flex align-items-center">
                  <span class="font_Karla font-lg fw-medium">8</span>
                  <h3 class="font-Montserrat fw-medium m-2 pt-lg-4 pt-xxl-4 pt-0 ps-3"><?php the_field('eight_process_tittle'); ?></h3>
               </div>
               <div class="font-md fw-light lh-sm">
				<?php the_field('eight_process_content'); ?>
                </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--  Black section -->
<section class="bg-black-service text-white spacing-section">
   <div class="container">
      <div class="row  d-flex justify-content-center align-items-center">
         <div class="col-lg-5 col-12 text-center font-xl-lg wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
            
				<h2 class="blue-text-number ms-md-5 ps-md-5">1%</h2>
				<div class="d-flex justify-content-center align-self-start ms-md-5 ps-md-5">
				   <div class="blue-box wow flipInX"></div>
				</div>
			
         </div>
         <div class="col-lg-7 col-12 wow animate__animated animate__fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
            <h3 class="fw-medium font-Montserrat">And that in a nutshell is the Abroadworks process for how we 
               introduce you to the top 1% of outsourced talent.
            </h3>
            <!-- <div class="button-findyour d-flex justify-content-center align-items-center mt-5 wow flipInY">Find Your Talent</div> -->
            <div class=" text-left"> <a href="https://www.abroadworks.com/#section-to-scroll-to" class="btn button-primary button-talent font-Montserrat py-2 px-4 fs-5 mt-4 bg-white  fw-normal hvr-float"><span class="text-dark">Find Your Talent</span></a></div>
         </div>
      </div>
   </div>
</section>
<?php
get_footer(custom);