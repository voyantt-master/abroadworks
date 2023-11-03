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
				<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/footer-logo.png" alt="Abroad Works" title="Abroad Works"></a>
			
			</div>
			<div class="d-flex justify-content-between text-white  mob-flex-column mob-position-relative">
			<div class="col-lg-6 col-md-6 col-12 order-xl-1 my-md-5 py-md-5 mt-3 mb-5 pb-5 pe-md-5  ps-2 ps-md-5 wow animate__animated animate__fadeInLeft" data-wow-delay="0.4s">
				<h1 class="fs-7 lh-sm fw-medium font-Montserrat"><?php the_cfc_field('bannercontentfields', 'banner-caption'); ?>
				</h1>
				<p class="fs-4 fw-lighter font_Karla"><?php the_cfc_field('bannercontentfields', 'banner-sub-heading'); ?></p>
				<div class="fs-4 fw-lighter font_Karla"><?php the_cfc_field('bannercontentfields', 'banner-content'); ?></div>
				<a href="<?php the_cfc_field('bannercontentfields', 'banner-cta-link'); ?>" class="btn hvr-float ont-Montserrat button-talent font-Montserrat py-2 px-4 fs-5 mt-4 bg-white fw-medium"><?php the_cfc_field('bannercontentfields', 'banner-cta'); ?></a>
			</div>
			<div class="col-lg-6 col-md-6  col-12 order-xl-2 mt-5 position-relative mob-position-absolute tab-banner-right">
				<div class="button-top position-absolute end-0 "> <a href="#" class="btn hvr-float btn-lg button-contact d-none d-md-block d-lg-block bg-white fw-medium wow animate__animated animate__fadeInTop" data-wow-delay="0.4s">Contact</a></div>
				<div class="position-absolute backdrop wow animate__animated animate__fadeIn" data-wow-delay="0.09s" >	
				<svg width="900" height="300" viewBox="0 0 999 385" fill="white" xmlns="http://www.w3.org/2000/svg">
			  <path class="animate-draw" d="M877.177 10L718.73 284.071L776.541 369.718L986.377 10H877.177Z" stroke="none" shape-rendering="crispEdges"/>
			  <path class="animate-draw" d="M117.059 10L247.671 236.965L194.655 322.612L9.99997 10H117.059Z" stroke="none" shape-rendering="crispEdges"/>
			  <path class="animate-draw" d="M540.138 10.777L328.716 369.217L224.994 368.941L437.254 10.5008L540.138 10.777Z" stroke="none" shape-rendering="crispEdges"/>
			  <path class="animate-draw" d="M632.986 322.405L632.84 322.17L632.564 322.169L413.406 321.189L455.697 248.169L591.086 248.963L591.961 248.968L591.521 248.212L498.2 87.7646L543.138 10.891L558.849 10.507L719.841 280.045L775.658 373.497L664.535 373.079L632.986 322.405Z" stroke="none" shape-rendering="crispEdges"/>
			</svg>



			</div>
				
				<div class="owl-carousel owl-theme mt-5 mx-auto position-absolute allemployee w-75 start-0 end-0 d-none d-md-block wow animate__animated animate__fadeIn" data-wow-delay="14s">
					
					 <div class="item position-relative">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5 fw-normal"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile2.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
					    <img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile3.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile4.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile5.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile6.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile7.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile8.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile9.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
					  <div class="item">
						<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/team-profile10.png" class="img-fluid" alt="">
						<h4 class="position-absolute bottom-1 ps-5"><span class="fw-normal">Fname</span><br><span class="fw-light">Position<span></h4>
					  </div>
				</div>

			</div>
		</div>
	</div>
</section>
<section class="trusted-by spacing-section">
	<div class="container">
		<h3 class="font-dark font-Montserrat text-center fw-medium mob-font-md mb-2">Trusted By</h3>
		<div class="owl-carousel owl-theme brands my-4 px-1">
		  <div class="item m-auto">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/brand01.jpg" class="img-fluid m-auto" alt="">
			
		  </div>
		  <div class="item m-auto">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/brand02.jpg" class="img-fluid m-auto" alt="">
			
		  </div>
		  <div class="item m-auto">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/brand03.jpg" class="img-fluid m-auto" alt="">
			
		  </div>
		   <div class="item m-auto">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/brand04.jpg" class="img-fluid m-auto" alt="">
			
		  </div>
		  <div class="item m-auto">
			<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/brand05.jpg" class="img-fluid m-auto" alt="">
			
			
		  </div>
		</div>

	</div>
</section>
<section class="proces-section spacing-section">
	<div class="container text-white">
		<h2 class="text-center font-Montserrat fw-medium mob-font-md">The AbroadWorks Process</h2>
		<p class="text-center mb-0 pb-0 font-md  fw-light">We are an all-in-one talent solution, from vetting remote workers to monitoring them on the job.</p>
		<p class="text-center font-md  fw-light"> Here’s how we get your workforce down to a science.</p>
		<div class="row my-5 abroadworks-process wow animate__animated animate__fadeInLeft scrollable" data-wow-delay="0.4s" >
			<div class="col position-relative process px-0" >
				<div class="proces-box text-left px-4">
				<img src="https://www.abroadworks.com/v2/stage/wp-content/plugins/phastpress/phast.php/c2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd3d3LmFicm9hZHdvcmtzLmNvbSUyRnYyJTJGc3RhZ2UlMkZ3cC1jb250ZW50JTJGdGhlbWVzJTJGYWJyb2Fkd29ya3MlMkZhc3NldHMlMkZpbWFnZXMtbmV3JTJGY2FsbC5wbmcmY2FjaGVNYXJrZXI9MTY5MjI2NTc0Ny0zNDE4JnRva2VuPTQ0NWQ3ZmM1YTI0N2VhYTY.q.png" loading="lazy" class=" mb-3 img-fluid" alt="">
				<div class="card-body p-0">
				<h4 class="fw-medium font-Montserrat">Strategy Call</h4>
				<p class="fw-light ">We learn about your business and the specifics of your staffing needs.
				We create a tailored job description that attracts the ideal candidates.
				Starting a search with us is completely free.
				</p>
				</div>
				</div>
				<span class="step fw-normal font-xs text-center text-white  position-absolute start-0 end-0">Step 1</span>
				<div class="timeline justify-content-ceter gap-0"></div>
			</div>
			<div class="col position-relative process px-0" >
				<div class="proces-box text-left px-4 ">
				<img src="https://www.abroadworks.com/v2/stage/wp-content/plugins/phastpress/phast.php/c/2VydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd3d3LmFicm9hZHdvcmtzLmNvbSUyRnYyJTJGc3RhZ2UlMkZ3cC1jb250ZW50JTJGdGhlbWVzJTJGYWJyb2Fkd29ya3MlMkZhc3NldHMlMkZpbWFnZXMtbmV3JTJGc2VhcmNoLnBuZyZjYWNoZU1hcmtlcj0xNjkyMjY1NzY3LTQ2NzYmdG9rZW49NGNmZDhhOGQwMGJjOTYzZQ.q.png" loading="lazy" class="mb-3 img-fluid" alt="">
				<div class="card-body p-0">
				<h4 class="fw-medium font-Montserrat">Search &amp; Test</h4>
				<p class="fw-light">Candidates are screened through our rigorous aptitude tests, we then identify and schedule interviews for candidates who score in the top 10%.</p>
				</div>
				</div>
				<span class="step fw-normal font-xs text-center text-white  position-absolute start-0 end-0">Step 2</span>
				<div class="timeline justify-content-ceter gap-0"></div>
			</div>
			<div class="col position-relative process px-0" >
				<div class="proces-box text-left px-4 ">
				<img src="https://www.abroadworks.com/v2/stage/wp-content/plugins/phastpress/phast.php/c2Vyd/mljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd3d3LmFicm9hZHdvcmtzLmNvbSUyRnYyJTJGc3RhZ2UlMkZ3cC1jb250ZW50JTJGdGhlbWVzJTJGYWJyb2Fkd29ya3MlMkZhc3NldHMlMkZpbWFnZXMtbmV3JTJGaW50ZXJ2aWV3LnBuZyZjYWNoZU1hcmtlcj0xNjkyMjY1NzU0LTUyOTUmdG9rZW49MzhkYjhmMGE1MDU1NDljZg.q.png" loading="lazy" class="mb-3 img-fluid" alt="">
				<div class="card-body p-0">
				<h4 class="fw-medium font-Montserrat">Interviews</h4>
				<p class="fw-light">Our Specialists interview candidates to assess their demeanor, communication skills, and overall fit. We present to you the top 1% of candidates and you make the final decision.</p>
				</div>
				</div>
				<span class="step fw-normal font-xs text-center text-white position-absolute start-0 end-0">Step 3</span>
				<div class="timeline justify-content-ceter "></div>
			</div>
			<div class="col position-relative process px-0" >
				<div class="proces-box text-left px-4 ">
				<img src="https://www.abroadworks.com/v2/stage/wp-content/plugins/phastpress/phast.php/c2Vydm/ljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd3d3LmFicm9hZHdvcmtzLmNvbSUyRnYyJTJGc3RhZ2UlMkZ3cC1jb250ZW50JTJGdGhlbWVzJTJGYWJyb2Fkd29ya3MlMkZhc3NldHMlMkZpbWFnZXMtbmV3JTJGbW9uaXRvcmluZy5wbmcmY2FjaGVNYXJrZXI9MTY5MjI2NTc1OC01MzA3JnRva2VuPTI0MGJmNmIyN2YwZjE0ODg.q.png" loading="lazy" class="mb-3 img-fluid" alt="">
				<div class="card-body p-0">
				<h4 class="fw-medium font-Montserrat">Monitoring</h4>
				<p class="fw-light">Our sophisticated software tracks your employees daily with screenshots and keyboard / mouse activity monitoring. We inform you right away if we see a decline in productivity.</p>
				</div>
				</div>
				<span class="step fw-normal font-xs text-center text-white position-absolute start-0 end-0">Step 4</span>
				<div class="timeline justify-content-ceter "></div>
			</div>
			<div class="col position-relative process  px-0"  >
				<div class="proces-box text-left px-4 ">
				<img src="https://www.abroadworks.com/v2/stage/wp-content/plugins/phastpress/phast.php/c2V/ydmljZT1pbWFnZXMmc3JjPWh0dHBzJTNBJTJGJTJGd3d3LmFicm9hZHdvcmtzLmNvbSUyRnYyJTJGc3RhZ2UlMkZ3cC1jb250ZW50JTJGdGhlbWVzJTJGYWJyb2Fkd29ya3MlMkZhc3NldHMlMkZpbWFnZXMtbmV3JTJGcGF5YW1lbnQucG5nJmNhY2hlTWFya2VyPTE2OTIyNjU3NjAtNTQwOSZ0b2tlbj03YmNiOGQxZjlmZDFiMTRk.q.png" loading="lazy" class="mb-3 img-fluid" alt="">
				<div class="card-body p-0 ">
				<h4 class="fw-medium font-Montserrat">Payment</h4>
				<p class="fw-light">Once you've hired an employee, you'll receive a straightforward monthly invoice. Our software calculates pay by the minute, ensuring that you only pay for hours worked.</p>
				</div>
				</div>
				<span class="step fw-normal font-xs text-center text-white position-absolute start-0 end-0">Step 5</span>
				<div class="timeline justify-content-ceter gap-0"></div>
			</div>
		</div>
	</div>
</section>
<section class="reasons-section bg-dark text-white spacing-section">

   <div class="container ">
	
      <div class="row justify-content-md-center">
         <div class="col-lg-9 col-12 text-center">
            <h2 class="font-Montserrat fw-medium">8 Reasons to Join AbroadWorks</h2>
            
         </div>
      </div>
     
      <div class="row reasons px-4 px-sm-0 mt-5 owl-carousel owl-theme position-relative ">
         
            <div class="col-xl-3 col-lg-12 col-md-12 col-11  mb-5">
               <div class="reasons-box text-left p-4 hvr-grow-shadow">
				<div class="reasons-img">
                  <svg width="100" height="101" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_111_189)">
					<g filter="url(#filter0_d_111_189)">
					<path d="M2.00519 76.2613L13.9631 70.8184L25.1787 93.0847L13.6331 99.0224L2.00519 76.2613Z" stroke="white" stroke-width="2" stroke-linecap="round"/>
					<path d="M16.4371 92.507C17.3366 92.507 18.0658 91.7778 18.0658 90.8782C18.0658 89.9787 17.3366 89.2495 16.4371 89.2495C15.5376 89.2495 14.8083 89.9787 14.8083 90.8782C14.8083 91.7778 15.5376 92.507 16.4371 92.507Z" fill="white"/>
					<path d="M63.9947 79.6031C63.9947 79.6031 76.5322 71.6141 78.3399 70.5061C80.1476 69.3982 82.7717 69.2232 84.8127 71.5558C86.8537 73.8883 84.0546 76.979 84.0546 76.979C84.0546 76.979 62.3036 90.3911 58.0467 93.4234C53.7898 96.4557 50.6409 94.8813 50.6409 94.8813C50.6409 94.8813 38.5117 91.6157 32.3887 89.1082C26.2658 86.6007 23.8066 90.2815 23.8066 90.2815L15.4165 73.7234L30.6393 65.3745C30.6393 65.3745 33.6716 63.4502 37.1121 65.2579C40.5526 67.0656 58.3966 72.722 58.3966 72.722C58.3966 72.722 62.187 74.2965 61.079 77.5038C59.971 80.711 58.1051 81.4691 54.0231 80.5361C49.9411 79.6031 43.6433 77.5038 43.6433 77.5038" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</g>
					<circle cx="55.8823" cy="30.4118" r="28.4118" stroke="url(#paint0_linear_111_189)" stroke-width="2"/>
					<circle cx="55.8824" cy="30.4118" r="21.0588" stroke="url(#paint1_linear_111_189)" stroke-width="2"/>
					<path d="M36.0294 30.4119H39.7059" stroke="#1784A0" stroke-linecap="round"/>
					<path d="M55.8823 14.2354L55.8823 10.1301" stroke="#0962C8" stroke-linecap="round"/>
					<path d="M66.0709 24.5293L54.6088 31.1469" stroke="white" stroke-linecap="round"/>
					<path d="M52.9412 24.5293L55.6101 29.7713" stroke="white" stroke-linecap="round"/>
					<path d="M55.8823 51L55.8823 47" stroke="#239282" stroke-linecap="round"/>
					<path d="M70.5883 21.9558L73.7722 20.1176" stroke="#1076B3" stroke-linecap="round"/>
					<path d="M38.2353 41.0735L41.4192 39.2353" stroke="#1D8E90" stroke-linecap="round"/>
					<path d="M38.2353 20.1177L41.4192 21.9559" stroke="#0F72B7" stroke-linecap="round"/>
					<path d="M70.5883 39.2354L73.7722 41.0736" stroke="#1C8D91" stroke-linecap="round"/>
					<path d="M64.7059 16.4412L66.5441 13.2572" stroke="#0C69C1" stroke-linecap="round"/>
					<path d="M45.5883 48.3015L47.4265 45.1176" stroke="#219185" stroke-linecap="round"/>
					<path d="M47.4265 15.9485L45.5882 12.7646" stroke="#0A65C4" stroke-linecap="round"/>
					<path d="M66.5441 48.3015L64.7059 45.1176" stroke="#209187" stroke-linecap="round"/>
					<path d="M72.0588 30.4119H76.3712" stroke="#1784A2" stroke-linecap="round"/>
					<circle cx="55.8823" cy="30.4119" r="2.94118" fill="white"/>
					</g>
					<defs>
					<filter id="filter0_d_111_189" x="-11.3613" y="52.4839" width="109.919" height="60.8865" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
					<feOffset dy="1"/>
					<feGaussianBlur stdDeviation="6"/>
					<feComposite in2="hardAlpha" operator="out"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_111_189"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_111_189" result="shape"/>
					</filter>
					<linearGradient id="paint0_linear_111_189" x1="55.8823" y1="1" x2="55.8823" y2="59.8235" gradientUnits="userSpaceOnUse">
					<stop stop-color="#085ECB"/>
					<stop offset="1" stop-color="#0EC7A0" stop-opacity="0.6"/>
					</linearGradient>
					<linearGradient id="paint1_linear_111_189" x1="55.8824" y1="8.35303" x2="55.8824" y2="52.4707" gradientUnits="userSpaceOnUse">
					<stop stop-color="#085ECB"/>
					<stop offset="1" stop-color="#0EC7A0" stop-opacity="0.6"/>
					</linearGradient>
					<clipPath id="clip0_111_189">
					<rect width="100" height="101" fill="white"/>
					</clipPath>
					</defs>
					</svg>
					</div>
                  <h5 class="fw-medium font-Montserrat mt-4">SAVE TIME</h5>
                  <p class="font-sm fw-light">Hire 3 for the price of 1 in-house employee in more affordable regions.</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-11 mb-5">
               <div class="reasons-box text-left p-4 hvr-grow-shadow">
			   <div class="reasons-img">
                  <svg width="101" height="102" viewBox="0 0 101 102" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M79.1491 58.6808C76.5143 78.1701 58.4966 91.8523 38.8967 89.2292C19.2967 86.6062 5.55304 68.6734 8.18781 49.1841C10.8226 29.6948 28.8403 16.0126 48.4402 18.6357C68.0402 21.2587 81.7839 39.1915 79.1491 58.6808Z" stroke="url(#paint0_linear_117_20)" stroke-width="2"/>
					<g filter="url(#filter0_d_117_20)">
					<path d="M25.1579 75.4762C15.9032 67.0719 14.9231 55.1065 15.5899 50.1744C15.9279 41.6696 26.0722 23.0773 48.0793 26.0225C56.9291 27.614 74.0529 36.2571 71.7498 58.0974C70.6144 66.4954 62.7771 83.035 40.5104 82.0094C38.2512 81.707 33.218 80.7077 31.1584 79.1292" stroke="white" stroke-width="2" stroke-linecap="round"/>
					</g>
					<path d="M30.1449 59V49.912H26.5609V47.8H36.3209V49.912H32.7369V59H30.1449ZM36.481 59L41.473 47.8H44.033L49.041 59H46.321L42.225 49.112H43.249L39.137 59H36.481ZM38.977 56.6L39.665 54.632H45.425L46.129 56.6H38.977ZM49.1293 59L53.9453 52.36V54.248L49.3373 47.8H52.2813L55.4653 52.296L54.2333 52.312L57.3693 47.8H60.1853L55.6093 54.136V52.28L60.4573 59H57.4653L54.1693 54.248H55.3533L52.1053 59H49.1293Z" fill="white"/>
					<path d="M3.08362 1L17.1653 9.84211L10.0707 19.9441L18.7569 26.3197" stroke="url(#paint1_linear_117_20)" stroke-width="2" stroke-linecap="round"/>
					<path d="M78.5 65.5L86.6047 70.2206L76.4891 85.8192L96.0213 98.2893M96.0213 98.2893L94.4996 91.7778M96.0213 98.2893L88.97 100.105" stroke="url(#paint2_linear_117_20)" stroke-width="2" stroke-linecap="round"/>
					<defs>
					<filter id="filter0_d_117_20" x="2.4238" y="13.7097" width="82.5371" height="82.345" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
					<feOffset dy="1"/>
					<feGaussianBlur stdDeviation="6"/>
					<feComposite in2="hardAlpha" operator="out"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_117_20"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_117_20" result="shape"/>
					</filter>
					<linearGradient id="paint0_linear_117_20" x1="48.5742" y1="17.6447" x2="38.8597" y2="90.2332" gradientUnits="userSpaceOnUse">
					<stop stop-color="#085ECB"/>
					<stop offset="1" stop-color="#0EC7A0" stop-opacity="0.6"/>
					</linearGradient>
					<linearGradient id="paint1_linear_117_20" x1="11" y1="1" x2="10.2738" y2="27.4801" gradientUnits="userSpaceOnUse">
					<stop stop-color="#0C61CB"/>
					<stop offset="1" stop-color="#1170BD"/>
					</linearGradient>
					<linearGradient id="paint2_linear_117_20" x1="89" y1="66" x2="87.2744" y2="100.915" gradientUnits="userSpaceOnUse">
					<stop stop-color="#1C889E"/>
					<stop offset="1" stop-color="#269484"/>
					</linearGradient>
					</defs>
					</svg>
					</div>
                  <h5 class="fw-medium font-Montserrat mt-4">SAVE ON TAX</h5>
                  <p class="font-sm fw-light">Save on employment taxes with international employees.</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-11  mb-5">
               <div class="reasons-box p-4 hvr-grow-shadow">
			   <div class="reasons-img">
                  <svg width="102" height="101" viewBox="0 0 102 101" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M36.6271 42.5491L50.6631 50.761L63.7311 28.5405" stroke="white" stroke-width="2" stroke-linecap="round"/>
					<path d="M50.6643 11.1509L50.6643 16.9472" stroke="#085ECB" stroke-width="2" stroke-linecap="round"/>
					<path d="M16.7852 30.4749L20.657 33.373" stroke="#0F71B8" stroke-width="2" stroke-linecap="round"/>
					<path d="M90.8361 52.6939C92.1267 44.4819 89.0937 25.2564 66.6361 14.0495C56.1495 9.54102 31.5946 6.12743 17.2683 28.5412C2.94191 50.9549 15.1709 72.3379 23.0763 80.2276C27.2709 84.0921 38.9514 91.6277 52.1162 90.8548" stroke="url(#paint0_linear_16_18)" stroke-width="2"/>
					<path d="M99.5481 58.9728C100.267 56.0999 100.79 47.9947 99.0641 41.0997C96.9066 32.4808 89.5801 8.86735 59.3762 1.97229C29.1723 -4.92276 -5.00483 25.9467 1.89891 59.9911C8.80265 94.0354 42.9273 101.704 58.8922 99.5496" stroke="url(#paint1_linear_16_18)" stroke-width="2"/>
					<path d="M30.8197 84.5758L33.7236 80.2285" stroke="#219284" stroke-width="2" stroke-linecap="round"/>
					<path d="M16.7852 70.0831L21.1409 67.668" stroke="#1D8E8F" stroke-width="2" stroke-linecap="round"/>
					<path d="M10.9778 50.7615L16.3015 50.7615" stroke="#1682A4" stroke-width="2" stroke-linecap="round"/>
					<path d="M85.5113 30.4749L80.6716 33.373" stroke="#1075B3" stroke-width="2" stroke-linecap="round"/>
					<path d="M70.0249 16.9473L68.089 20.8115" stroke="#0B65C4" stroke-width="2" stroke-linecap="round"/>
					<path d="M30.3358 15.9836L33.2396 20.8139" stroke="#0A63C6" stroke-width="2" stroke-linecap="round"/>
					<ellipse cx="50.6644" cy="50.7617" rx="2.90382" ry="2.89816" fill="white"/>
					<path d="M100 78.2966C100 90.2813 90.265 100 78.2521 100C66.2392 100 56.5041 90.2813 56.5041 78.2966C56.5041 66.3119 66.2392 56.593 78.2521 56.593C90.265 56.593 100 66.3119 100 78.2966Z" stroke="url(#paint2_linear_16_18)" stroke-width="2"/>
					<defs>
					<linearGradient id="paint0_linear_16_18" x1="50.8689" y1="10.7405" x2="50.8689" y2="90.91" gradientUnits="userSpaceOnUse">
					<stop stop-color="#085ECB"/>
					<stop offset="1" stop-color="#0EC7A0" stop-opacity="0.6"/>
					</linearGradient>
					<linearGradient id="paint1_linear_16_18" x1="50.6115" y1="1" x2="50.6115" y2="99.8848" gradientUnits="userSpaceOnUse">
					<stop stop-color="#085ECB"/>
					<stop offset="1" stop-color="#0EC7A0" stop-opacity="0.6"/>
					</linearGradient>
					<linearGradient id="paint2_linear_16_18" x1="54.5" y1="77.8503" x2="100.5" y2="78.3513" gradientUnits="userSpaceOnUse">
					<stop stop-color="white"/>
					<stop offset="1" stop-color="white"/>
					</linearGradient>
					</defs>
					</svg>
					</div>
                  <h5 class="fw-medium font-Montserrat mt-4">SAVE ON HOURLY RATE</h5>
                  <p class="font-sm fw-light">Hire 3 for the price of 1 in-house employee in more affordable regions.</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-11  mb-5">
               <div class="reasons-box p-4 hvr-grow-shadow">
			   <div class="reasons-img">
                  <svg width="106" height="112" viewBox="0 0 106 112" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M87.2889 27.6601C89.2768 27.9568 90.9747 29.4145 91.5751 30.1063C93.2654 25.5415 96.8771 22.8692 98.4717 22.1036C99.2786 28.8476 96.8554 32.7009 95.6748 34.3311C94.7304 35.6353 92.5893 34.8741 91.6368 34.3305C91.4504 34.5034 90.3819 34.7453 87.5988 34.3299C84.8157 33.9144 82.5465 29.5615 81.7599 27.4369C82.7746 27.3876 85.3009 27.3633 87.2889 27.6601Z" stroke="#0F72B7" stroke-linecap="round"/>
					<path d="M83.9227 16.7126C85.8675 16.1388 87.8908 16.7729 88.6593 17.1616C88.8642 12.1773 91.4318 8.13716 92.6901 6.74014C95.4714 12.6899 94.3684 17.3237 93.7567 19.3506C93.2674 20.9721 91.0399 21.178 89.9873 21.0782C89.8653 21.3194 88.9406 22.0025 86.2179 22.8058C83.4951 23.6091 80.0679 20.517 78.6947 18.8706C79.627 18.3904 81.9779 17.2864 83.9227 16.7126Z" stroke="#0B66C4" stroke-linecap="round"/>
					<path d="M89.2571 39.5324C91.1277 40.3883 92.4836 42.2886 92.9278 43.1317C95.485 39.1824 99.5281 37.6194 101.23 37.3315C100.66 44.1098 97.5337 47.159 96.0603 48.4046C94.8816 49.4011 92.9555 48.0505 92.1398 47.2507C91.9242 47.3653 90.8381 47.295 88.2194 46.0968C85.6006 44.8986 84.2711 40.0241 83.9337 37.7366C84.9288 37.9786 87.3866 38.6766 89.2571 39.5324Z" stroke="#137CAB" stroke-linecap="round"/>
					<path d="M82.8528 62.7663C84.072 64.6627 84.3949 67.1283 84.4039 68.124C88.3148 66.3528 92.4462 67.5424 94.023 68.3587C90.5659 73.7808 86.5647 74.4299 84.7628 74.5726C83.3213 74.6867 82.2715 72.3341 81.9268 71.1435C81.6927 71.1067 80.7978 70.3693 79.0908 67.7144C77.3838 65.0595 78.3872 60.0753 79.1023 57.915C79.8444 58.742 81.6335 60.87 82.8528 62.7663Z" stroke="#1A8996" stroke-linecap="round"/>
					<path d="M86.8819 50.946C88.4399 52.4484 89.2385 54.7549 89.443 55.7203C92.8966 52.9044 97.1467 52.9051 98.84 53.2575C96.5452 59.4956 92.7831 61.2459 91.0595 61.8887C89.6806 62.4029 88.1977 60.4096 87.6285 59.3486C87.3937 59.3783 86.3788 58.9118 84.1975 56.8085C82.0162 54.7052 82.0118 49.5792 82.2823 47.2791C83.1663 47.8754 85.3238 49.4436 86.8819 50.946Z" stroke="#17849F" stroke-linecap="round"/>
					<g filter="url(#filter0_d_16_21)">
					<path d="M48.0797 98C48.2466 93.8176 51.0848 84.9749 61.102 83.0629C73.6234 80.673 84.1414 70.5158 89.6508 54.9813C95.1602 39.4467 90.6525 17.9374 84.6422 12.5601" stroke="white" stroke-width="2"/>
					</g>
					<path d="M54.0909 97.9998C54.2579 93.8174 51.8872 84.9747 41.0686 83.0627C27.5455 80.6728 13.5215 65.7358 11.0172 47.8113C8.51294 29.8869 12.5198 22.1196 17.5284 11.9624" stroke="white" stroke-width="2"/>
					<path d="M65.1861 81.6012L64.8547 82.1283L65.441 82.3381C67.3436 83.019 68.9482 84.304 70.1868 85.6556C71.1989 86.7601 71.9501 87.891 72.407 88.7313C67.4528 90.1169 64.3075 87.9604 62.9155 86.8534C62.5019 86.5244 62.294 85.8354 62.2778 84.9354C62.2622 84.0689 62.4277 83.1622 62.585 82.5994L62.6559 82.3456L62.5009 82.1607C62.5007 82.1572 62.4746 82.107 62.4363 81.9699C62.3894 81.802 62.3358 81.5477 62.2856 81.1862C62.1854 80.4641 62.1026 79.3433 62.1026 77.685C62.1026 76.1708 62.8635 74.6345 63.879 73.2971C64.6332 72.3039 65.5018 71.4547 66.2262 70.8502C66.3964 72.2881 66.612 74.5864 66.612 76.49C66.612 78.7606 65.6522 80.8599 65.1861 81.6012Z" stroke="#1E8E8B"/>
					<path d="M75.9344 71.0476C76.4888 73.3442 76.0344 75.7801 75.7378 76.711C79.9209 76.7663 83.4025 79.6739 84.6204 81.1208C79.7419 84.6619 75.8185 83.5226 74.0974 82.8703C72.7205 82.3484 72.4636 79.7009 72.5073 78.4424C72.3007 78.3061 71.6934 77.2298 70.9173 74.0145C70.1412 70.7993 72.6015 66.5966 73.9286 64.8972C74.3662 65.9904 75.38 68.751 75.9344 71.0476Z" stroke="#1D8E8D" stroke-linecap="round"/>
					<path d="M15.4223 27.6601C13.4374 27.9568 11.742 29.4145 11.1425 30.1063C9.45481 25.5415 5.84855 22.8692 4.25638 22.1036C3.45072 28.8476 5.87028 32.7009 7.04901 34.3311C7.992 35.6353 10.1299 34.8741 11.0809 34.3305C11.267 34.5034 12.334 34.7453 15.1128 34.3299C17.8917 33.9144 20.1574 29.5615 20.9429 27.4369C19.9297 27.3876 17.4072 27.3633 15.4223 27.6601Z" stroke="#0F72B7" stroke-linecap="round"/>
					<path d="M18.7852 16.7126C16.8433 16.1388 14.8231 16.7729 14.0557 17.1616C13.8511 12.1773 11.2874 8.13717 10.0311 6.74014C7.25396 12.6899 8.35536 17.3237 8.96609 19.3506C9.45468 20.9721 11.6788 21.178 12.7298 21.0782C12.8516 21.3194 13.7748 22.0025 16.4935 22.8058C19.2121 23.6091 22.6341 20.517 24.0052 18.8706C23.0743 18.3904 20.727 17.2864 18.7852 16.7126Z" stroke="#0B66C4" stroke-linecap="round"/>
					<path d="M13.4583 39.5324C11.5906 40.3883 10.2367 42.2886 9.79325 43.1317C7.23988 39.1824 3.20298 37.6194 1.50371 37.3315C2.07295 44.1098 5.19432 47.159 6.66546 48.4046C7.84237 49.4011 9.76552 48.0505 10.58 47.2507C10.7953 47.3653 11.8797 47.295 14.4945 46.0968C17.1093 44.8986 18.4368 40.0241 18.7736 37.7366C17.7801 37.9786 15.326 38.6766 13.4583 39.5324Z" stroke="#137CAB" stroke-linecap="round"/>
					<path d="M19.853 62.7663C18.6356 64.6627 18.3132 67.1283 18.3042 68.124C14.3993 66.3528 10.2741 67.5424 8.69971 68.3587C12.1516 73.7808 16.1467 74.4299 17.9459 74.5726C19.3852 74.6867 20.4334 72.3341 20.7776 71.1435C21.0113 71.1067 21.9049 70.3693 23.6093 67.7144C25.3137 65.0595 24.3118 60.0753 23.5978 57.915C22.8568 58.742 21.0705 60.87 19.853 62.7663Z" stroke="#1A8996" stroke-linecap="round"/>
					<path d="M15.8288 50.946C14.2731 52.4484 13.4758 54.7549 13.2716 55.7203C9.82316 52.9044 5.57957 52.9051 3.88882 53.2575C6.18016 59.4956 9.9365 61.2459 11.6575 61.8887C13.0343 62.4029 14.515 60.4096 15.0833 59.3486C15.3177 59.3783 16.3311 58.9118 18.5091 56.8085C20.6871 54.7052 20.6915 49.5792 20.4214 47.2791C19.5388 47.8754 17.3845 49.4436 15.8288 50.946Z" stroke="#17849F" stroke-linecap="round"/>
					<path d="M37.6666 81.9477L37.9638 82.4556L37.4145 82.6668C35.6028 83.3636 34.0704 84.6806 32.8846 86.0712C31.9037 87.2214 31.1782 88.4004 30.742 89.2695C35.458 90.6894 38.4513 88.4867 39.7847 87.3472C40.1824 87.0073 40.3844 86.2882 40.4001 85.3545C40.4152 84.458 40.2559 83.5215 40.1047 82.9401L40.0426 82.7013L40.1827 82.5218C40.1827 82.5218 40.1826 82.5218 40.1826 82.5218C40.1811 82.5209 40.2078 82.4686 40.247 82.3181C40.2925 82.143 40.344 81.8796 40.3922 81.5066C40.4884 80.7616 40.5677 79.6072 40.5677 77.9013C40.5677 76.3296 39.8335 74.7427 38.8628 73.369C38.157 72.3702 37.3471 71.5137 36.6644 70.8958C36.5019 72.3766 36.2978 74.7251 36.2978 76.6731C36.2978 79.0188 37.2198 81.1839 37.6666 81.9477Z" stroke="#1E8E8B"/>
					<path d="M26.7594 71.0476C26.2058 73.3442 26.6596 75.7801 26.9556 76.711C22.779 76.7663 19.3026 79.6739 18.0865 81.1208C22.9576 84.6619 26.8752 83.5226 28.5936 82.8703C29.9684 82.3484 30.2249 79.7009 30.1813 78.4424C30.3876 78.3061 30.9939 77.2298 31.7689 74.0145C32.5438 70.7993 30.0873 66.5966 28.7621 64.8972C28.3252 65.9904 27.3129 68.751 26.7594 71.0476Z" stroke="#1D8E8D" stroke-linecap="round"/>
					<path d="M19.0312 5.38993C17.0278 6.82388 17.1947 10.3689 17.5286 11.9622C18.1965 12.1614 20.1331 12.0817 22.5372 10.1698C24.9414 8.25784 25.5424 4.59328 25.5424 3C24.2068 3.19916 21.0346 3.95597 19.0312 5.38993Z" stroke="#0960CA" stroke-linecap="round"/>
					<path d="M82.6378 5.52826C84.6403 7.04522 84.4734 10.7955 84.1397 12.481C83.4722 12.6917 81.5364 12.6074 79.1333 10.5848C76.7303 8.56218 76.1296 4.68551 76.1296 3C77.4646 3.21069 80.6353 4.0113 82.6378 5.52826Z" stroke="#0960CA" stroke-linecap="round"/>
					<path d="M40.9257 47.8264L40.9257 33.7464L42.4657 35.2864L37.8457 35.2864L37.8457 32.4264L44.4897 32.4264L44.4897 47.8264L40.9257 47.8264ZM50.487 47.8264L61.003 32.4264L63.621 32.4264L53.105 47.8264L50.487 47.8264ZM51.829 40.7424C51.081 40.7424 50.421 40.5737 49.849 40.2364C49.277 39.8844 48.8223 39.3931 48.485 38.7624C48.1623 38.1171 48.001 37.3617 48.001 36.4964C48.001 35.6311 48.1623 34.8831 48.485 34.2524C48.8223 33.6217 49.277 33.1304 49.849 32.7784C50.421 32.4264 51.081 32.2504 51.829 32.2504C52.577 32.2504 53.237 32.4264 53.809 32.7784C54.381 33.1304 54.8283 33.6217 55.151 34.2524C55.4736 34.8831 55.635 35.6311 55.635 36.4964C55.635 37.3617 55.4736 38.1171 55.151 38.7624C54.8283 39.3931 54.381 39.8844 53.809 40.2364C53.237 40.5737 52.577 40.7424 51.829 40.7424ZM51.829 38.9384C52.313 38.9384 52.7016 38.7404 52.995 38.3444C53.2883 37.9337 53.435 37.3177 53.435 36.4964C53.435 35.6751 53.2883 35.0664 52.995 34.6704C52.7016 34.2597 52.313 34.0544 51.829 34.0544C51.3596 34.0544 50.971 34.2597 50.663 34.6704C50.3696 35.0664 50.223 35.6751 50.223 36.4964C50.223 37.3031 50.3696 37.9117 50.663 38.3224C50.971 38.7331 51.3596 38.9384 51.829 38.9384ZM62.279 48.0024C61.5456 48.0024 60.8856 47.8337 60.299 47.4964C59.727 47.1444 59.2796 46.6531 58.957 46.0224C58.6343 45.3771 58.473 44.6217 58.473 43.7564C58.473 42.8911 58.6343 42.1431 58.957 41.5124C59.2796 40.8817 59.727 40.3904 60.299 40.0384C60.8856 39.6864 61.5456 39.5104 62.279 39.5104C63.0416 39.5104 63.709 39.6864 64.281 40.0384C64.853 40.3904 65.3003 40.8817 65.623 41.5124C65.9456 42.1431 66.107 42.8911 66.107 43.7564C66.107 44.6217 65.9456 45.3771 65.623 46.0224C65.3003 46.6531 64.853 47.1444 64.281 47.4964C63.709 47.8337 63.0416 48.0024 62.279 48.0024ZM62.279 46.1984C62.763 46.1984 63.1516 46.0004 63.445 45.6044C63.7383 45.1937 63.885 44.5777 63.885 43.7564C63.885 42.9497 63.7383 42.3411 63.445 41.9304C63.1516 41.5197 62.763 41.3144 62.279 41.3144C61.8096 41.3144 61.421 41.5197 61.113 41.9304C60.8196 42.3264 60.673 42.9351 60.673 43.7564C60.673 44.5777 60.8196 45.1937 61.113 45.6044C61.421 46.0004 61.8096 46.1984 62.279 46.1984Z" fill="url(#paint0_linear_16_21)"/>
					<defs>
					<filter id="filter0_d_16_21" x="35.0805" y="0.814697" width="70.0612" height="110.225" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
					<feOffset dy="1"/>
					<feGaussianBlur stdDeviation="6"/>
					<feComposite in2="hardAlpha" operator="out"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_16_21"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_16_21" result="shape"/>
					</filter>
					<linearGradient id="paint0_linear_16_21" x1="30.4344" y1="37.3141" x2="75.9146" y2="49.7381" gradientUnits="userSpaceOnUse">
					<stop stop-color="white"/>
					<stop offset="1" stop-color="white"/>
					</linearGradient>
					</defs>
					</svg>
					</div>
                  <h5 class="fw-medium font-Montserrat mt-4">HIRE THE TOP 1%</h5>
                  <p class="font-sm fw-light">Our rigorous vetting process allows you to hire the top 1%.</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-11 mb-5">
               <div class="reasons-box p-4 hvr-grow-shadow">
			   <div class="reasons-img">
                  <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1_4)">
						<path d="M35.8519 8.00692L33.1448 1.95255L50.7149 9.63824L35.7163 21.013L36.4674 15.4797L36.6873 13.8594L35.1448 14.4018C30.0877 16.18 22.5583 20.2686 16.2787 26.7917C9.98555 33.3289 4.91275 42.3522 4.91275 53.9557C4.91275 68.4127 11.6733 79.2021 20.6039 86.414C29.5082 93.6048 40.6035 97.2719 49.4233 97.5258C58.2356 97.7794 70.406 94.7479 80.4602 87.7564C90.548 80.7417 98.5535 69.699 98.8289 53.9732C98.8468 52.951 98.8315 51.9484 98.7848 50.965C98.8756 51.9363 98.942 52.9453 98.9799 53.9918C99.398 65.5431 93.2032 76.2023 90.0659 80.0545L90.0442 80.0812L90.0243 80.1093C85.5074 86.5088 70.9924 99.38 49.4701 98.9914C22.5272 98.5049 1 77.5942 1 53.9557C1 30.2672 18.8538 14.7233 35.2496 9.36564L36.3052 9.0207L35.8519 8.00692Z" stroke="url(#paint0_linear_1_4)" stroke-width="2"/>
						<g clip-path="url(#clip1_1_4)">
						<path d="M24.1707 62V59.69L30.1107 54.08C30.5801 53.6547 30.9247 53.2733 31.1447 52.936C31.3647 52.5987 31.5114 52.2907 31.5847 52.012C31.6727 51.7333 31.7167 51.4767 31.7167 51.242C31.7167 50.626 31.5041 50.1567 31.0787 49.834C30.6681 49.4967 30.0594 49.328 29.2527 49.328C28.6074 49.328 28.0061 49.4527 27.4487 49.702C26.9061 49.9513 26.4441 50.34 26.0627 50.868L23.4667 49.196C24.0534 48.316 24.8747 47.6193 25.9307 47.106C26.9867 46.5927 28.2041 46.336 29.5827 46.336C30.7267 46.336 31.7241 46.5267 32.5747 46.908C33.4401 47.2747 34.1074 47.7953 34.5767 48.47C35.0607 49.1447 35.3027 49.9513 35.3027 50.89C35.3027 51.3887 35.2367 51.8873 35.1047 52.386C34.9874 52.87 34.7381 53.3833 34.3567 53.926C33.9901 54.4687 33.4474 55.0773 32.7287 55.752L27.8007 60.394L27.1187 59.096H35.8087V62H24.1707ZM37.967 58.766V56.368L45.227 46.6H48.967L41.861 56.368L40.123 55.862H52.245V58.766H37.967ZM46.261 62V58.766L46.371 55.862V52.98H49.737V62H46.261ZM53.3426 64.2L60.6026 43.476H63.6606L56.4006 64.2H53.3426ZM67.2347 62L73.4387 47.964L74.3627 49.504H66.0687L67.6527 47.832V52.012H64.4847V46.6H76.8267V48.91L71.1067 62H67.2347Z" fill="white"/>
						</g>
						</g>
						<defs>
						<linearGradient id="paint0_linear_1_4" x1="50" y1="2.77958e-06" x2="50" y2="100" gradientUnits="userSpaceOnUse">
						<stop stop-color="#085ECB"/>
						<stop offset="1" stop-color="#0EC7A0" stop-opacity="0.6"/>
						</linearGradient>
						<clipPath id="clip0_1_4">
						<rect width="100" height="100" fill="white"/>
						</clipPath>
						<clipPath id="clip1_1_4">
						<rect width="54" height="22" fill="white" transform="translate(23 43)"/>
						</clipPath>
						</defs>
				</svg>
				</div>
                  <h5 class="fw-medium font-Montserrat mt-4">OPERATE 24/7</h5>
                  <p class="font-sm fw-light">Hire 3 for the price of 1 in-house employee in more affordable regions.</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-11  mb-5">
               <div class="reasons-box p-4 hvr-grow-shadow">
				<div class="reasons-img">
                  <svg width="126" height="139" viewBox="0 0 126 139" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13.9346 66C13.97 39.4903 35.489 18 61.9987 18C77.0462 18 90.4672 24.9241 99.2535 35.7599L101.114 34.8801C91.9685 23.3748 77.8511 16 62.0014 16C34.3872 16 11.9715 38.3857 11.9346 66C11.9297 69.6146 12.3086 73.1396 13.0327 76.5365L14.8933 75.6565C14.2604 72.5371 13.9301 69.3076 13.9346 66Z" fill="white"/>
					<path d="M92.5279 34.7624L100.405 35.6832L99.0358 27.486" stroke="white" stroke-width="2" stroke-linecap="round"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M109.605 66.3926C109.04 92.8963 87.0958 113.952 60.5914 113.423C45.547 113.122 32.267 105.931 23.699 94.9217L21.8216 95.7641C30.735 107.45 44.7022 115.105 60.5488 115.422C88.1575 115.974 111.016 94.0406 111.605 66.4326C111.682 62.8188 111.374 59.2869 110.717 55.8762L108.84 56.7188C109.41 59.8502 109.676 63.0857 109.605 66.3926Z" fill="white"/>
					<path d="M30.4033 96.0534L22.5466 94.9754L23.7513 103.198" stroke="white" stroke-width="2" stroke-linecap="round"/>
					<g clip-path="url(#clip0_2_6)">
					<path d="M62.7344 62C68.2573 62 72.7344 57.7467 72.7344 52.5C72.7344 47.2533 68.2573 43 62.7344 43C57.2116 43 52.7344 47.2533 52.7344 52.5C52.7344 57.7467 57.2116 62 62.7344 62Z" stroke="url(#paint0_linear_2_6)" stroke-width="2" stroke-linecap="round"/>
					</g>
					<g clip-path="url(#clip1_2_6)">
					<path d="M47.7344 87L77.6705 86.6324L77.7344 75.5425C77.7344 75.5425 73.7686 64.759 62.3187 65.0041C50.8688 65.2492 47.9903 75.5425 47.9903 75.5425L47.7344 87Z" stroke="url(#paint1_linear_2_6)" stroke-width="2" stroke-linecap="round"/>
					</g>
					<defs>
					<linearGradient id="paint0_linear_2_6" x1="62.7344" y1="43" x2="62.7344" y2="62" gradientUnits="userSpaceOnUse">
					<stop stop-color="#0960CA"/>
					<stop offset="1" stop-color="#157FA8"/>
					</linearGradient>
					<linearGradient id="paint1_linear_2_6" x1="62.7344" y1="65" x2="62.7344" y2="87" gradientUnits="userSpaceOnUse">
					<stop stop-color="#1682A5"/>
					<stop offset="1" stop-color="#229281"/>
					</linearGradient>
					<clipPath id="clip0_2_6">
					<rect width="23" height="21" fill="white" transform="translate(51 42)"/>
					</clipPath>
					<clipPath id="clip1_2_6">
					<rect width="33" height="25" fill="white" transform="translate(46 64)"/>
					</clipPath>
					</defs>
					</svg>
				</div>
                  <h5 class="fw-medium font-Montserrat mt-4">REDUCE  TURNOVER</h5>
                  <p class="font-sm fw-light">Save on employment taxes with international employees.</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-11   mb-5">
               <div class="reasons-box p-4 hvr-grow-shadow">
			   <div class="reasons-img">
                  <svg width="122" height="129" viewBox="0 0 122 129" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g filter="url(#filter0_d_3_14)">
					<path d="M27 27.0092L30.7428 23.0278L35.5906 27.7882L36.3135 28.4979L37.0077 27.7593L41.4273 23.058L45.8469 27.7593L46.5412 28.4979L47.2639 27.7882L52.1402 23L57.0164 27.7882L57.7713 28.5293L58.4627 27.7269L62.4849 23.0593L67.3008 27.7882L68.0236 28.4979L68.7179 27.7593L73.1054 23.0921L76.8519 27.4398V54.8643V55.8796H77.8512H101.848C104.927 55.8796 106.685 57.2155 107.702 58.8304C108.759 60.5082 109.056 62.5642 108.992 63.9327L108.99 63.9568V63.9811V87.1253H93.7062H92.7069V88.1405V94.9781C92.7069 97.0392 92.5864 99.3025 91.6507 101.044C91.1972 101.889 90.552 102.607 89.6143 103.124C88.6685 103.645 87.3682 103.991 85.5644 103.991H36.2851H36.2633L36.2416 103.992C34.6861 104.061 32.3418 103.681 30.4186 102.355C28.5538 101.068 27 98.84 27 94.9781V27.0092Z" stroke="white" stroke-width="2"/>
					</g>
					<g clip-path="url(#clip0_3_14)">
					<path d="M50.8061 62V38.5H53.3061V62H50.8061ZM51.7061 59.3C50.3061 59.3 48.9644 59.1167 47.6811 58.75C46.3977 58.3667 45.3644 57.875 44.5811 57.275L45.9561 54.225C46.7061 54.7583 47.5894 55.2 48.6061 55.55C49.6394 55.8833 50.6811 56.05 51.7311 56.05C52.5311 56.05 53.1727 55.975 53.6561 55.825C54.156 55.6583 54.5227 55.4333 54.756 55.15C54.9894 54.8667 55.106 54.5417 55.106 54.175C55.106 53.7083 54.9227 53.3417 54.556 53.075C54.1894 52.7917 53.7061 52.5667 53.1061 52.4C52.5061 52.2167 51.8394 52.05 51.1061 51.9C50.3894 51.7333 49.6644 51.5333 48.9311 51.3C48.2144 51.0667 47.5561 50.7667 46.9561 50.4C46.3561 50.0333 45.8644 49.55 45.4811 48.95C45.1144 48.35 44.9311 47.5833 44.9311 46.65C44.9311 45.65 45.1977 44.7417 45.7311 43.925C46.2811 43.0917 47.0977 42.4333 48.1811 41.95C49.2811 41.45 50.6561 41.2 52.3061 41.2C53.4061 41.2 54.4894 41.3333 55.556 41.6C56.6227 41.85 57.5644 42.2333 58.381 42.75L57.131 45.825C56.3144 45.3583 55.4977 45.0167 54.681 44.8C53.8644 44.5667 53.0644 44.45 52.2811 44.45C51.4977 44.45 50.8561 44.5417 50.3561 44.725C49.8561 44.9083 49.4977 45.15 49.2811 45.45C49.0644 45.7333 48.9561 46.0667 48.9561 46.45C48.9561 46.9 49.1394 47.2667 49.5061 47.55C49.8727 47.8167 50.3561 48.0333 50.9561 48.2C51.5561 48.3667 52.2144 48.5333 52.9311 48.7C53.6644 48.8667 54.3894 49.0583 55.106 49.275C55.8394 49.4917 56.506 49.7833 57.106 50.15C57.706 50.5167 58.1894 51 58.556 51.6C58.9394 52.2 59.131 52.9583 59.131 53.875C59.131 54.8583 58.856 55.7583 58.306 56.575C57.756 57.3917 56.931 58.05 55.831 58.55C54.7477 59.05 53.3727 59.3 51.7061 59.3Z" fill="white"/>
					</g>
					<g clip-path="url(#clip1_3_14)">
					<path d="M45.2372 82.98H70.109" stroke="white" stroke-width="2"/>
					</g>
					<g clip-path="url(#clip2_3_14)">
					<path d="M45.2372 94.2041H70.109" stroke="white" stroke-width="2"/>
					</g>
					<path d="M112 18L12 118" stroke="url(#paint0_linear_3_14)" stroke-width="4" stroke-linecap="round"/>
					<g clip-path="url(#clip3_3_14)">
					<path d="M33.8731 83.2041H35.5884" stroke="white" stroke-width="2"/>
					</g>
					<line x1="77" y1="56" x2="77" y2="104" stroke="white" stroke-width="2"/>
					<line x1="93" y1="56" x2="93" y2="87" stroke="white" stroke-width="2"/>
					<defs>
					<filter id="filter0_d_3_14" x="14" y="10.5977" width="108" height="107.402" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
					<feOffset dy="1"/>
					<feGaussianBlur stdDeviation="6"/>
					<feComposite in2="hardAlpha" operator="out"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_3_14"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_3_14" result="shape"/>
					</filter>
					<linearGradient id="paint0_linear_3_14" x1="112.095" y1="17.6205" x2="13.1638" y2="121.494" gradientUnits="userSpaceOnUse">
					<stop stop-color="#085ECB"/>
					<stop offset="1" stop-color="#229281"/>
					</linearGradient>
					<clipPath id="clip0_3_14">
					<rect width="16" height="24" fill="white" transform="translate(44 38)"/>
					</clipPath>
					<clipPath id="clip1_3_14">
					<rect width="26" height="3" fill="white" transform="translate(45 81)"/>
					</clipPath>
					<clipPath id="clip2_3_14">
					<rect width="26" height="3" fill="white" transform="translate(45 93)"/>
					</clipPath>
					<clipPath id="clip3_3_14">
					<rect width="3" height="3" fill="white" transform="translate(33 82)"/>
					</clipPath>
					</defs>
					</svg>
					</div>
                  <h5 class="fw-medium font-Montserrat mt-4">NO RECRUITMENT FREE</h5>
                  <p class="font-sm fw-light">Hire 3 for the price of 1 in-house employee in more affordable regions.</p>
               </div>
            </div>
            <div class="col-xl-3 col-lg-12 col-md-12 col-11   mb-5">
               <div class="reasons-box p-4 hvr-grow-shadow">
			   <div class="reasons-img">
                  <svg width="106" height="101" viewBox="0 0 106 101" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14.4679 41.1504L22.4035 41.1504" stroke="#269488" stroke-linecap="round"/>
					<path d="M25.9324 14.2576L31.2228 19.548" stroke="#095FCA" stroke-linecap="round"/>
					<path d="M53.266 2.79517L53.266 11.1716" stroke="#0960CA" stroke-linecap="round"/>
					<path d="M74.8684 19.5482L80.5997 13.8169" stroke="#0962C8" stroke-linecap="round"/>
					<path d="M83.2436 41.5898L91.62 41.5898" stroke="#279587" stroke-linecap="round"/>
					<path d="M86.3307 28.3658L89.8576 26.6023" stroke="#1683A2" stroke-linecap="round"/>
					<path d="M92.5024 25.2794L94.2659 24.3977" stroke="#1683A2" stroke-linecap="round"/>
					<path d="M67.2955 9.00373L68.5474 5.26451" stroke="#0B65C3" stroke-linecap="round"/>
					<path d="M69.4857 2.45975L70.1117 0.590141" stroke="#0B65C3" stroke-linecap="round"/>
					<path d="M40.2356 8.90557L38.8608 5.20975" stroke="#0A63C5" stroke-linecap="round"/>
					<path d="M37.8306 2.43862L37.1432 0.590716" stroke="#0A63C5" stroke-linecap="round"/>
					<path d="M20.6261 27.0969L16.9103 25.7773" stroke="#1178B0" stroke-linecap="round"/>
					<path d="M14.1236 24.7875L12.2656 24.1277" stroke="#1178B0" stroke-linecap="round"/>
					<g filter="url(#filter0_d_16_66)">
					<path d="M26.8131 87.0005C27.4009 83.3266 27.4303 75.2735 22.8453 72.4519C17.114 68.925 13.1462 60.1077 14.028 54.3764C14.1749 52.7599 15.0861 49.6151 17.5549 49.9678C20.641 50.4087 21.0819 52.1719 21.0819 54.3764C21.0819 56.581 21.0819 68.0435 36.0713 67.6026C46.1928 67.3049 48.6758 62.1829 49.221 58.3444M79.2762 85.6781C79.2762 76.8608 81.9214 73.1868 83.244 72.4519C92.0613 64.0753 92.0613 57.4627 92.5021 54.3764C92.943 51.2902 90.7387 49.9678 88.5343 49.9678C86.33 49.9678 85.0074 50.8497 85.0074 54.3766C85.0074 57.9036 83.244 67.6026 70.4588 67.6026C57.6737 67.6026 57.2329 56.1401 57.2329 54.3766C57.2329 52.6132 56.792 50.4088 52.8242 49.968C49.65 49.6153 49.1503 52.76 49.2973 54.3764C49.2973 54.9492 49.4833 56.4984 49.221 58.3444M49.221 58.3444C49.8867 60.3806 51.1922 63.7079 52.8242 66.6299M62.5233 85.6781C62.0824 78.1834 61.6415 74.6565 57.2329 72.0113C55.6607 71.068 54.1368 68.98 52.8242 66.6299M52.8242 66.6299C52.2898 67.8359 50.72 70.6005 48.7161 72.0113C46.2112 73.7747 44.0069 72.893 44.0069 85.6781" stroke="white" stroke-width="2"/>
					</g>
					<path d="M35.1907 40.2685C33.8681 37.7703 31.3111 31.892 31.6638 28.3651C32.1047 23.9565 33.4273 23.0747 35.1907 23.0747C36.9542 23.0747 39.5994 23.9565 39.1585 28.3651C38.7176 32.7738 42.6854 41.1502 53.2662 40.7094C63.847 40.2685 66.9331 33.6555 66.9331 28.3651C66.9331 24.1328 69.2843 23.0747 70.46 23.0747C72.0765 22.9278 75.2213 23.6919 74.8686 27.9243C74.5159 32.1566 71.7826 37.9172 70.46 40.2685" stroke="url(#paint0_linear_16_66)" stroke-width="2"/>
					<g filter="url(#filter1_d_16_66)">
					<circle cx="35.1885" cy="52.6134" r="8.69905" stroke="white" stroke-width="2" shape-rendering="crispEdges"/>
					</g>
					<g filter="url(#filter2_d_16_66)">
					<circle cx="70.4588" cy="52.6134" r="8.69905" stroke="white" stroke-width="2" shape-rendering="crispEdges"/>
					</g>
					<circle cx="52.8248" cy="26.1612" r="8.69905" stroke="url(#paint1_linear_16_66)" stroke-width="2"/>
					<defs>
					<filter id="filter0_d_16_66" x="0.905273" y="37.9395" width="104.653" height="62.219" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
					<feOffset dy="1"/>
					<feGaussianBlur stdDeviation="6"/>
					<feComposite in2="hardAlpha" operator="out"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_16_66"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_16_66" result="shape"/>
					</filter>
					<filter id="filter1_d_16_66" x="13.4894" y="31.9143" width="43.3981" height="43.3982" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
					<feOffset dy="1"/>
					<feGaussianBlur stdDeviation="6"/>
					<feComposite in2="hardAlpha" operator="out"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_16_66"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_16_66" result="shape"/>
					</filter>
					<filter id="filter2_d_16_66" x="48.7598" y="31.9143" width="43.3981" height="43.3982" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
					<feFlood flood-opacity="0" result="BackgroundImageFix"/>
					<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
					<feOffset dy="1"/>
					<feGaussianBlur stdDeviation="6"/>
					<feComposite in2="hardAlpha" operator="out"/>
					<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
					<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_16_66"/>
					<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_16_66" result="shape"/>
					</filter>
					<linearGradient id="paint0_linear_16_66" x1="53.2634" y1="23.0581" x2="53.2634" y2="40.7261" gradientUnits="userSpaceOnUse">
					<stop stop-color="#085ECB"/>
					<stop offset="1" stop-color="#0EC7A0" stop-opacity="0.6"/>
					</linearGradient>
					<linearGradient id="paint1_linear_16_66" x1="52.8248" y1="16.4622" x2="52.8248" y2="35.8603" gradientUnits="userSpaceOnUse">
					<stop stop-color="#085ECB"/>
					<stop offset="1" stop-color="#1B8A97"/>
					</linearGradient>
					</defs>
					</svg>
				</div>
                  <h5 class="fw-medium font-Montserrat mt-4">HAPPY WORKFORCE</h5>
                  <p class="font-sm fw-light">Our rigorous vetting process allows you to hire the top 1%.</p>
               </div>
            </div>
           
       </div>
        <div class="col-12 text-center "> <a href="#" class="btn button-primary button-talent font-Montserrat py-2 px-4 fs-5 mt-4 bg-white font-dark fw-normal hvr-float">JOIN NOW</a></div>
			
    


      
   </div>
</section>

<section class="ourservice-section spacing-section">
	<div class="container ">
		<div class="row justify-content-between">
         <div class="col-lg-6 col-12 pe-5 d-none d-sm-block mt-5">
			
               <div class="content-box pe-5">
               <h2 class="font-Montserrat mt-5 fw-medium">Our Services</h2>
               <p class="fw-light">We're a U.S. based firm that specializes in finding extremely talented people from all over the world. With our home brewed technology, comprehensive assessments and extensive interviews, we carefully sift through thousands of candidates to find the perfect fit for our clients. </p>
               <p class="fw-light"> We've spent countless hours and sleepless nights developing a recruitment process and strategy that is both effective and effortless for our clients. We don't believe in lengthy T&amp;C's, hidden fees or anything else that can get in the way of us having the opportunity to show you what we do and earn your trust.</p>
            </div>
         </div>
            <div class="col-lg-6 col-12">
               <div class="row">
                  
                     <div class="box fadeInLeft wow p-4 col-11 hvr-forward" style="--n: 0;" data-wow-delay="300ms" >
                        <div class="d-flex justify-content-between align-items-center"><h4 class="fw-medium font-Montserrat font-md mt-0">Offshore Recruiting</h4> <span><svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 8H34.5M34.5 8L27.5 1M34.5 8L27.5 15" stroke="#888888"/>
</svg>
</span></div>
                        <ul class="list-unstyled fw-light lh-1">
                           <li class="position-relative ps-3"><p class="mb-1 fw-light">Unlock top-tier talent from around the world</p></li>
                           <li class="position-relative ps-3"><p class="mb-1 fw-light">Maximize your recruitment budget with cost-efficient solutions</p></li>
                           <li class="position-relative ps-3"><p class="mb-1 fw-light">Discover talent that has excelled (top 1%) in rigorous evaluations</p></li>
                           <li class="position-relative ps-3"><p class="mb-1 fw-light">Simplify international recruitment with our seamless, efficient process</p></li>

                        </ul>
                     </div>
                  
                 
                     <div class="box ml-12 fadeInLeft wow p-4 col-11 hvr-forward" style="--n: 1;" data-wow-delay="800ms">
                        <div class="d-flex justify-content-between align-items-cente"><h4 class="fw-medium font-Montserrat font-md mt-0">Onshore Executive Search</h4> <span><svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 8H34.5M34.5 8L27.5 1M34.5 8L27.5 15" stroke="#888888"/>
</svg>
</span></div>
                        <ul class="list-unstyled fw-light lh-1">
                           <li class="position-relative ps-3"><p class="mb-1 fw-light">Aggressive talent search for high-potential professionals in the U.S.</p> </li>
                           <li class="position-relative ps-3"> <p class="mb-1 fw-light"> Detailed candidate summaries to facilitate informed hiring decisions </p></li>
                           <li class="position-relative ps-3"><p class="mb-1 fw-light">Rigorous candidate vetting ensures high-quality talent for our clients </p></li>
                           <li class="position-relative ps-3"> <p class="mb-1 fw-light"> Comprehensive support and cost-effective services from start to hire</p> </li>

                        </ul>
                     </div>
                  
                
                     <div class="box ml-16 fadeInLeft wow p-4 col-11 hvr-forward" style="--n: 2;" data-wow-delay="1200ms">
                        <div class="d-flex justify-content-between align-items-cente"><h4 class="fw-medium font-Montserrat font-md mt-0">Development Services</h4>  <span><svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 8H34.5M34.5 8L27.5 1M34.5 8L27.5 15" stroke="#888888"/>
</svg>
</span>
                        </div>
                        <ul class="list-unstyled fw-light lh-1">
                           <li class="position-relative ps-3"><p class="mb-1 fw-light"> Global top-tier talent for software design and development </p></li>
                           <li class="position-relative ps-3"><p class="mb-1 fw-light"> Cost-efficient solutions for UX/UI review and implementation </p></li>
                           <li class="position-relative ps-3"><p class="mb-1 fw-light">Simplified, efficient process for mobile and web development </p></li>

                        </ul>
                     </div>
                 
                  
                  
                     <div class="box ml-20 fadeInLeft wow p-4 col-11 hvr-forward" style="--n: 3;" data-wow-delay="1600ms" >
                        <div class="d-flex justify-content-between align-items-cente"><h4 class="fw-medium font-Montserrat font-md  mt-0">Ad-hoc Services</h4>  <span><svg width="36" height="16" viewBox="0 0 36 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 8H34.5M34.5 8L27.5 1M34.5 8L27.5 15" stroke="#888888"/>
</svg>
</span></div>
                        <ul class="list-unstyled fw-light lh-1">
                           <li class="position-relative ps-3"><p class="mb-1 fw-light">Reliable, expertly managed services in accounting and bookkeeping</p></li>
                           <li class="position-relative ps-3"><p class="mb-1 fw-light"> Expertly managed multimedia design, animation, illustration services</p></li>
                           <li class="position-relative ps-3"> <p class="mb-1 fw-light">Flexible pay-as-you-go model tailored to client needs</p></li>

                        </ul>
                     </div>
                

               </div>
               
            </div>
	</div>
  </div>
</section>

<section class="spacing-section highlight-section text-white">
	<div class="container">
      <div class="row justify-content-md-center">
         <div class="col-lg-9 col-12  text-center mb-0 mb-md-5">
            <h2 class="font-Montserrat mt-md-5 mt-4 fw-medium">AbroadWorks Highlights</h2>
         </div>
      </div>
      <div class="row mt-3 highlights">
		<div class="col text-center highlights-block mb-4 mb-md-0">
		  <h3 class="font-lg fw-bold counter" data-target="97" data-unit="%">0</h3>
		  <h4 class="font-Montserrat fw-medium font-md fade-in">Retention Rate</h4>
		</div>
		<div class="col text-center highlights-block mb-4 mb-md-0">
		  <h3 class="font-lg fw-bold counter" data-target="400" data-unit="+">0</h3>
		  <h4 class="font-Montserrat fw-medium font-md fade-in">Employees Hired</h4>
		</div>
         <div class="col text-center d-none d-md-block  highlights-block">
		 <h3 class="font-lg fw-bold counter" data-target="75" data-unit="+">0</h3>
		 <h4 class="font-Montserrat fw-medium font-md fade-in">Active clients</h4>
		 </div>
         <div class="col text-center  highlights-block mb-4 mb-md-0">
		 <h3 class="font-lg fw-bold counter" data-target="79" data-unit="K+">0</h3>
		 <h4 class="font-Montserrat fw-medium font-md fade-in">Candidates in our database</h4>
		 </div>
         <div class="col text-center  highlights-block mb-4 mb-md-0">
		  <h3 class="font-lg fw-bold counter special-case" data-target="10" data-unit="&lt;">0</h3>
		  <h4 class="font-Montserrat fw-medium font-md fade-in">Average days to fill job</h4>
		</div>
     
   </div>
</section>
<section class="client-say text-white d-flex align-items-center">
	
            <div class="client-box d-flex align-items-center ">
            <div class="d-flex justify-content-between w-100 mob-flex-column tab-flex-column">
				<div class="col-lg-4 col-12 px-4">
                  <div class="content-box">
					<h2 class="fw-medium font-Montserrat">What Our<br> Clients Say</h2>
                     <p class="fw-light lh-base font-md">In our first two years of operations we've grown, by word-of-mouth alone, to several hundred employees serving over 75 clients. Our secret? Satisfied clients and a unique recruitment strategy. See what they have to say...</p>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
					<div id="carousel-client" class="owl-carousel">
						<div class="item client-slidebox p-4">
							<p class="fw-light">
								“AbroadWorks has been instrumental in our company’s rapid growth. From answering phone calls to following up with our vendors and clients, AbroadWorks has consistently provided us with talented individuals that help us with our daily operations. Their professionalism and turnover time are unlike anything we’ve seen in the industry.”
							</p>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/testimonial-photo01.png">
								<div class="ms-2">
									<b class="w-100 d-block">Aaron Singer, CEO</b>
									<span class="w-100 d-block">Bulldog Adjusters</span>
								</div>
							</div>
						</div>
						<div class="item client-slidebox p-4">
							<p class="fw-light">
								“AbroadWorks has been instrumental in our company’s rapid growth. From answering phone calls to following up with our vendors and clients, AbroadWorks has consistently provided us with talented individuals that help us with our daily operations. Their professionalism and turnover time are unlike anything we’ve seen in the industry.”
							</p>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/testimonial-photo01.png">
								<div class="ms-2">
									<b class="w-100 d-block">Aaron Singer, CEO</b>
									<span class="w-100 d-block">Bulldog Adjusters</span>
								</div>
							</div>
						</div>
						<div class="item client-slidebox p-4">
							<p class="fw-light">
								“AbroadWorks has been instrumental in our company’s rapid growth. From answering phone calls to following up with our vendors and clients, AbroadWorks has consistently provided us with talented individuals that help us with our daily operations. Their professionalism and turnover time are unlike anything we’ve seen in the industry.”
							</p>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/testimonial-photo01.png">
								<div class="ms-2">
									<b class="w-100 d-block">Aaron Singer, CEO</b>
									<span class="w-100 d-block">Bulldog Adjusters</span>
								</div>
							</div>
						</div>
						<div class="item client-slidebox p-4">
							<p class="fw-light">
								“AbroadWorks has been instrumental in our company’s rapid growth. From answering phone calls to following up with our vendors and clients, AbroadWorks has consistently provided us with talented individuals that help us with our daily operations. Their professionalism and turnover time are unlike anything we’ve seen in the industry.”
							</p>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/testimonial-photo01.png">
								<div class="ms-2">
									<b class="w-100 d-block">Aaron Singer, CEO</b>
									<span class="w-100 d-block">Bulldog Adjusters</span>
								</div>
							</div>
						</div>
						<div class="item client-slidebox p-4">
							<p class="fw-light">
								“AbroadWorks has been instrumental in our company’s rapid growth. From answering phone calls to following up with our vendors and clients, AbroadWorks has consistently provided us with talented individuals that help us with our daily operations. Their professionalism and turnover time are unlike anything we’ve seen in the industry.”
							</p>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/testimonial-photo01.png">
								<div class="ms-2">
									<b class="w-100 d-block">Aaron Singer, CEO</b>
									<span class="w-100 d-block">Bulldog Adjusters</span>
								</div>
							</div>
						</div>
						<div class="item client-slidebox p-4">
							<p class="fw-light">
								“AbroadWorks has been instrumental in our company’s rapid growth. From answering phone calls to following up with our vendors and clients, AbroadWorks has consistently provided us with talented individuals that help us with our daily operations. Their professionalism and turnover time are unlike anything we’ve seen in the industry.”
							</p>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/testimonial-photo01.png">
								<div class="ms-2">
									<b class="w-100 d-block">Aaron Singer, CEO</b>
									<span class="w-100 d-block">Bulldog Adjusters</span>
								</div>
							</div>
						</div>
						<div class="item client-slidebox p-4">
							<p class="fw-light">
								“AbroadWorks has been instrumental in our company’s rapid growth. From answering phone calls to following up with our vendors and clients, AbroadWorks has consistently provided us with talented individuals that help us with our daily operations. Their professionalism and turnover time are unlike anything we’ve seen in the industry.”
							</p>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/testimonial-photo01.png">
								<div class="ms-2">
									<b class="w-100 d-block">Aaron Singer, CEO</b>
									<span class="w-100 d-block">Bulldog Adjusters</span>
								</div>
							</div>
						</div>
						<div class="item client-slidebox p-4">
							<p class="fw-light">
								“AbroadWorks has been instrumental in our company’s rapid growth. From answering phone calls to following up with our vendors and clients, AbroadWorks has consistently provided us with talented individuals that help us with our daily operations. Their professionalism and turnover time are unlike anything we’ve seen in the industry.”
							</p>
							<div class="d-flex client-name w-100 position-relative">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images-stage/testimonial-photo01.png">
								<div class="ms-1">
									<b class="w-100 d-block">Aaron Singer, CEO</b>
									<span class="w-100 d-block">Bulldog Adjusters</span>
								</div>
							</div>
						</div>
						<!-- Repeat -->
						</div>
              
				</div>
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



