<?php

/**

 * Template Name: New Home Template

 * Template Post Type: post, page

 *

 * @package WordPress


 */


get_header('custom');


?>


<section class="banner-section position-relative">
	<div class="container overflow-hidden">
			<div class="d-block d-md-none mt-2">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/footer-logo.png" class="top-logo" alt="Abroad Works" title="Abroad Works"></a>
			
			</div>
			<div class="d-flex justify-content-between text-white  mob-flex-column mob-position-relative">
			<div class="col-lg-6 col-md-6 col-12 order-xl-1 my-md-5 py-md-5 mt-3 mb-5 pb-5 pe-md-5  ps-2 ps-md-5 wow animate__animated animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="0s">
				<h1 class="lh-sm fw-medium font-Montserrat ls-wide">
					<div class="flex-column d-flex">
						<?php while( have_rows('top_banner_heading') ): the_row(); ?>
						<span><?php the_sub_field('punchword'); ?></span>
						<?php endwhile; ?>
						
					</div>
				</h1>
				<h4 class="fw-light lh-sm"><?php the_field('sub-heading'); ?></h4>
				<h4 class="fw-light lh-sm"><?php the_field('banner_details_content'); ?></h4>
				<a href="<?php the_field('find_your_people_link'); ?>" class="btn hvr-float ont-Montserrat button-talent font-Montserrat py-2 px-4 fs-5 mt-4 bg-white fw-medium"><?php the_field('banner_button'); ?></a>
			</div>
			<div class="col-lg-6 col-md-6  col-12 order-xl-2 mt-5 position-relative mob-position-absolute tab-banner-right">
				<div class="button-top position-absolute end-0 "> <a href="#section-to-scroll-to" id="scroll-btn" class="btn hvr-float btn-lg button-contact d-none d-md-block d-lg-block bg-white fw-medium wow animate__animated animate__fadeInTop" data-wow-duration="1s" data-wow-delay="0.4s">Contact</a></div>
				<div class="position-absolute backdrop wow animate__animated animate__fadeIn" data-wow-delay="0.09s" >	
				<svg width="900" height="300" viewBox="0 0 999 385" fill="white" xmlns="http://www.w3.org/2000/svg">
			  <path class="animate-draw" d="M877.177 10L718.73 284.071L776.541 369.718L986.377 10H877.177Z" stroke="none" shape-rendering="crispEdges"/>
			  <path class="animate-draw" d="M117.059 10L247.671 236.965L194.655 322.612L9.99997 10H117.059Z" stroke="none" shape-rendering="crispEdges"/>
			  <path class="animate-draw" d="M540.138 10.777L328.716 369.217L224.994 368.941L437.254 10.5008L540.138 10.777Z" stroke="none" shape-rendering="crispEdges"/>
			  <path class="animate-draw" d="M632.986 322.405L632.84 322.17L632.564 322.169L413.406 321.189L455.697 248.169L591.086 248.963L591.961 248.968L591.521 248.212L498.2 87.7646L543.138 10.891L558.849 10.507L719.841 280.045L775.658 373.497L664.535 373.079L632.986 322.405Z" stroke="none" shape-rendering="crispEdges"/>
			</svg>



			</div>
				<div class="owl-delay"  style="display:none;">
				<div class="owl-carousel owl-theme mt-5 mx-auto position-absolute allemployee w-75 start-0 end-0 d-none d-md-block wow animate__animated animate__fadeIn" data-wow-delay="14s">
						
						<?php while( have_rows('banner_team_members') ): the_row(); ?>
							 <div class="item <?php the_sub_field('banner_team_members_classname'); ?>">
								<img src="<?php the_sub_field('banner_team_members_photo'); ?>" class="img-fluid " alt="<?php the_sub_field('banner_team_members__alt_tag'); ?>">
								<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal"><?php the_sub_field('banner_team_members_name'); ?></span><br><span class="fw-light"><?php the_sub_field('banner_team_members_position'); ?><span></h4>
							  </div>
				
						<?php endwhile; ?>
						
					
					
				</div>
				</div>

			</div>
		</div>
	</div>
</section>
<section class="trusted-by spacing-section">
	<div class="container">
		<h3 class="font-dark font-Montserrat text-center fw-medium mob-font-md mb-2"><?php the_field('second_heading'); ?></h3>
		<div class="owl-carousel owl-theme brands my-4 px-1">
			<?php while( have_rows('all_clients') ): the_row(); ?>
			 <div class="item m-auto">
				<img src="<?php the_sub_field('clients_logo'); ?>" class="img-fluid m-auto" alt="<?php the_sub_field('client_logo_alt'); ?>">
			
			 </div>
				
			<?php endwhile; ?>
		
		
		</div>

	</div>
</section>
<section class="proces-section spacing-section">
	<div class="container text-white">
		<h2 class="text-center font-Montserrat fw-medium mob-font-md ls-wide wow animate__animated animate__fadeInUp" data-wow-delay="1s" data-wow-duration="0s" ><?php the_field('third_heading'); ?></h2>
		<p class="text-center mb-0 pb-0 font-md  fw-light wow animate__animated animate__fadeInUp" data-wow-delay="1s" data-wow-duration="0s"><?php the_field('section_third_content'); ?></p>
		<p class="text-center font-md  fw-light wow animate__animated animate__fadeInUp" data-wow-delay="1s" data-wow-duration="0s"> <?php the_field('section_third_subcontent'); ?></p>
		<div class="row my-5 abroadworks-process scrollable">
			<?php while( have_rows('all_prorcess') ): the_row(); ?>
					<div class="col position-relative process px-0 wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s" data-wow-duration="0s" >
						<div class="proces-box text-left pe-md-4">
							<img src="<?php the_sub_field('process_icon'); ?>" loading="lazy" class=" mb-3 img-fluid" alt="<?php the_sub_field('process_icon_alt'); ?>">
							<div class="card-body p-0">
							<h4 class="fw-medium font-Montserrat mob-font-md"><?php the_sub_field('process_tittle'); ?></h4>
							<p class="fw-light lh-sm"><?php the_sub_field('process_details'); ?></p>
							</div>
						</div>
						<span class="step fw-normal font-xs text-center text-white  position-absolute start-0 end-0">Step<?php the_sub_field('step'); ?></span>
						<div class="timeline justify-content-ceter gap-0"></div>
				</div>
				
			<?php endwhile; ?>
		
		
		
		</div>
	</div>
</section>
<section class="reasons-section bg-dark text-white spacing-section">

   <div class="container ">
	
      <div class="row justify-content-md-center">
         <div class="col-lg-9 col-12 text-center">
            <h2 class="font-Montserrat fw-medium ls-wide"><?php the_field('section_fourth_heading'); ?></h2>
            
         </div>
      </div>
     
      <div class="row reasons px-4 px-sm-0 mt-md-5 mt-3 owl-carousel owl-theme d-flex position-relative ">
         <?php while( have_rows('all_reasons') ): the_row(); ?>
			            <div class="col-xl-3 col-lg-12 col-md-12 col-11 ms-2 ms-md-0 mb-md-5">
               <div class="reasons-box boder15 text-left p-4 hvr-grow-shadow wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2s">
					<div class="reasons-img">
						<img src="<?php the_sub_field('reasons_icon'); ?>" loading="lazy" class=" mb-3 img-fluid" alt="<?php the_sub_field('reasons_icon_alt'); ?>">
							
					</div>
                  <p class="fw-medium font-md ls-wide font-Montserrat mt-4"><?php the_sub_field('reasons_tittle'); ?></p>
                  <p class="font-sm fw-light"><?php the_sub_field('reasons_details'); ?></p>
               </div>
            </div>
				
			<?php endwhile; ?>
 
     
           
       </div>
        <div class="col-12 text-center "> <a href="<?php the_field('join_now_link'); ?>" class="btn button-primary button-talent font-Montserrat py-2 px-4 fs-5 mt-4 bg-white font-dark fw-normal hvr-float fw-medium"><?php the_field('join_now_button_label'); ?></a></div>
			
    


      
   </div>
</section>

<section class="ourservice-section spacing-section">
	<div class="container ">
		<div class="row justify-content-between">
         <div class="col-lg-6 col-12 pe-5 d-none d-sm-block mt-5">
			
               <div class="content-box pe-5">
               <h2 class="font-Montserrat mt-5 fw-medium"><?php the_field('section_fifth_heading'); ?></h2>
               <div class="fw-light"><?php the_field('section_fifth_content'); ?></div>
            </div>
         </div>
            <div class="col-lg-6 col-12">
               <div class="row">
			    <h2 class="font-Montserrat mt-0 fw-medium d-block d-sm-none text-center my-2 pb-2"><?php the_field('section_fifth_heading'); ?></h2>
			    <?php $counter = 0; ?>
				<?php while( have_rows('all_services') ): the_row(); ?>
					      <div class="box boder15 fadeInLef p-4 col-11 hvr-forward wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="0s" style="--n: <?php echo $counter; ?>;" data-wow-delay="300ms">
                        <div class="d-flex justify-content-between align-items-center">
						<h4 class="fw-medium font-Montserrat font-md mt-0"><?php the_sub_field('service_name'); ?></h4> 
						<!--<span><a href="<?php the_sub_field('service_link'); ?>"><svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 8H34.5M34.5 8L27.5 1M34.5 8L27.5 15" stroke="#888888"/></a>
</svg>
</span>--></div>
                        <ul class="list-unstyled fw-light lh-1">
							<?php while( have_rows('service_points') ): the_row(); ?>
							<li class="position-relative ps-3"><p class="mb-1 fw-light"><?php the_sub_field('points_of_services'); ?></p></li>
                           <?php endwhile; ?>
                        </ul>
                     </div>
				<?php $counter++; ?>
				<?php endwhile; ?>
                  
               

                 
               
                  
                
                 
             
                

               </div>
               
            </div>
	</div>
  </div>
</section>

<section class="highlight-section text-white" id="highlights-section">
<div class="bg-w">
	<div class="container spacing-section ">
      <div class="row justify-content-md-center">
         <div class="col-lg-9 col-12  text-center mb-0 mb-md-5">
            <h2 class="font-Montserrat mt-md-5 mt-4 fw-medium"><?php the_field('section_sixth_heading'); ?></h2>
         </div>
      </div>
      <div class="row mt-3 highlights">
		<div class="col text-center highlights-block mb-4 mb-md-0">
		  <h3 class="font-lg fw-bold counter" data-target="<?php the_field('highlight_value_one'); ?>" data-unit="%">0</h3>
		  <h4 class="font-Montserrat fw-medium font-md fade-in"><?php the_field('highlight_tittle_one'); ?></h4>
		</div>
		<div class="col text-center highlights-block mb-4 mb-md-0">
		  <h3 class="font-lg fw-bold counter" data-target="<?php the_field('highlight_value_two'); ?>" data-unit="+">0</h3>
		  <h4 class="font-Montserrat fw-medium font-md fade-in"><?php the_field('highlight_tittle_two'); ?></h4>
		</div>
         <div class="col text-center d-none d-md-block  highlights-block">
		 <h3 class="font-lg fw-bold counter" data-target="<?php the_field('highlight_value_third'); ?>" data-unit="+">0</h3>
		 <h4 class="font-Montserrat fw-medium font-md fade-in"><?php the_field('highlight_tittle_third'); ?></h4>
		 </div>
         <div class="col text-center  highlights-block mb-4 mb-md-0">
		 <h3 class="font-lg fw-bold counter" data-target="<?php echo (int) $final_value; ?>" data-unit="K+"></h3>
	
		 <h4 class="font-Montserrat fw-medium font-md fade-in"><?php the_field('highlight_tittle_fourth'); ?></h4>
		 </div>
         <div class="col text-center  highlights-block mb-4 mb-md-0">
		  <h3 class="font-lg fw-bold counter special-case" data-target="<?php the_field('highlight_value_fifth'); ?>" data-unit="&lt;">0</h3>
		  <h4 class="font-Montserrat fw-medium font-md fade-in"><?php the_field('highlight_tittle_fifth'); ?></h4>
		</div>
     
   </div>
   </div>
</section>
<section class="client-say text-white d-flex align-items-center">
	
            <div class="client-box d-flex align-items-center ">
            <div class="d-flex justify-content-between w-100 mob-flex-column tab-flex-column">
				<div class="col-lg-5 col-12 px-4">
                  <div class="content-box">
					<h2 class="fw-medium font-Montserrat">What Our<br> Clients Say</h2>
                    <div class="fw-light lh-base font-md "><?php the_field('section_seventh_content'); ?></div>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
					<div id="carousel-client" class="owl-carousel">
					<?php while( have_rows('all_testimonial') ): the_row(); ?>
						<div class="item client-slidebox p-45">
							<div class="fw-light client-comment mb-4">
								<?php the_sub_field('testimonial_content'); ?>
								
							</div>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php the_sub_field('client_photo'); ?>" alt="<?php the_sub_field('client_photo_alt'); ?>">
								<div class="ms-2 font-Montserrat">
									<b class="w-100 d-block fw-500 font-sx lh-1 pt-2"><?php the_sub_field('client_name'); ?>, <?php the_sub_field('client_position'); ?></b>
									<span class="w-100 d-block fw-normal font-xm text-keppe"><?php the_sub_field('client_company_name'); ?></span>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
					
						
						
					
					
					
						<!-- Repeat -->
						</div>
              
				</div>
             </div>
      </div>
</section>
<section class="bg-dark pt-5" id="section-to-scroll-to">
	<div class="container text-white ">
		<h2 class="fw-medium font-Montserrat text-center wow animate__animated animate__fadeIn" data-wow-duration="1s" data-wow-delay="0s">Start Hiring. Start Saving.<br> Get in touch today!</h2>
		<ul class="nav nav-pills my-5 d-flex justify-content-center" id="pills-tab" role="tablist">
			  <li class="nav-item me-2 font-Montserrat boder15" role="presentation">
				<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#business" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
				I am a <br>
				<strong class="fw-bold">Business </strong><br>
				looking to hire
				</button>
			  </li>
			  <li class="nav-item ms-2 boder15 font-Montserrat " role="presentation">
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



