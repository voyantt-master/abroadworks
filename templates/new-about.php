<?php

/**

 * Template Name: New About Template

 * Template Post Type: post, page

 *

 * @package WordPress

 * @subpackage Twenty_Twenty

 * @since Twenty Twenty 1.0

 */


get_header('custom');


?>
         <!-- About Banner -->
         <section class="container-fluid about-banner m-0 p-0">
               <div class="img-fluid"><img src="<?php echo get_template_directory_uri(); ?>/assets/images-new/about-new-banner.png"></div>
               <div class="d-none d-md-block">
                    <div class="about-content ">
                        <div class="d-flex justify-content-start"><h2>FUELED BY PASSION,</h2></div>
                        <div class="d-flex justify-content-center"><h2> DRIVEN BY RESULTS.</h2></div>
                    </div>
                </div>
         </section>


         <!-- About content section  -->

      <section class="about-content-section">
         <div class="container pt-0">
            <div class="about-content">
            <h3>About Us</h3>
            <p>In the modern workplace, dedicated team members with a motivated work ethic and proven business expertise are in high demand. Over the years, we have encountered dozens of companies that needed a better hiring solution, one that was adaptable, agile, scalable, and flexible. A hiring solution that offered affordable staffing without a compromise in quality. As we successfully helped one company after another find talent overseas, we decided to create our own process. That’s when AbroadWorks was born.</p>
            <p>With extensive experience in consulting and banking as a driving factor, we established a company that is uniquely equipped to offer a hiring solution that checks all the boxes. It helps you win back your time, increase productivity, and significantly reduce your staffing costs. Our number one goal is to ease the recruiting burden for our clients, and every win for you is a win for us.</p>  
            <p> Although you may initially be hesitant to trust someone else with your hiring process, we will be here throughout the whole process to ensure your staffing solution exceeds your expectations. That’s why we rigorously test candidates and make sure they are specifically qualified to fill your open position. When you work with us, you can be sure that the candidate presented to you will be of the highest quality, saving you many long hours of recruiting, interviewing, training, and onboarding. All you need to do is provide the final sign-off, as you make one more step toward a successful future.</p>
            <p> We walk you through the entire onboarding process, and continue tracking progress even after a new hire begins work. With a commitment to meeting your unique staffing needs, we help keep your workforce happy and engaged through motivation and encouragement.</p>
         </div>
        
         </div>
      </section>     


      <section class="about-company com-padding">
         <div class="container">
            <div class="row justify-content-md-center">
               <div class="col-lg-10  text-center pt-5">
                  <h2>At AbroadWorks, our goal is to build an energized and efficient workforce that gives your company a sustained competitive edge.</h2>
               </div>
            </div>

            <div class="row d-lg-flex  mt-5 justify-content-md-center">
               <div class="col-lg-4 col-12 mb-3">
                 <div class="about-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images-new/mission-icon.png" class="mb-2">
                  <h3>Our Mission</h3>
                  <p>Our mission is to offer professional staffing solutions that provide flexibility and scalability
                      to accommodate fast-paced growth, with the adaptability to meet the evolving needs of our global economy. We desire to become a leading source of international recruiting solutions that offer reliability, dependability, and cost-efficiency to our clients.</p>
                 </div> 
               </div>
               <div class="col-lg-4 col-12 mb-3">
                  <div class="about-box">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images-new/vision-icon.png" class="mb-2">
                  <h3>Our Vision</h3>
                  <p>Our vision is to connect our clients with high-quality remote workers from across the globe who will be an integral part of their future success. We strive to nurture global prosperity and facilitate a more efficient marketplace through the talents and skills of our diverse remote workforce.</p>
                  </div> 
               </div>
               <div class="col-lg-4 col-12 mb-3"><div class="about-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images-new/values-icon.png" class="mb-2">
                  <h3>Our Core Values</h3>
                  <p>We have built our company foundation on the core values of integrity, transparency, and trust, which consistently drive us forward in our daily business operations. Our team is your trusted partner in building a workforce you can depend on – every day.
                  </p>
               </div> </div>
            </div>
         </div>
      </section>





 <!-- Git in Touch Section -->

 <section class="getintouch-section com-padding">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-8 col-12 text-center mb-5">
         <h2 class="text-white">Start Hiring. Start Saving. <br> Get in touch today! </h2>
       </div>
     </div>
     <div class="row justify-content-center mb-5">
       <ul class="nav nav-tabs d-none d-md-none d-lg-flex justify-content-center" id="myTab" role="tablist">
         <li class="nav-item" role="presentation">
           <button class="button-footer-primary  text-center p-2 mt-3 nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">I am a <br>
             <span>
               <strong>Business</strong>
             </span>
             <br>looking to hire </button>
         </li>
         <li class="nav-item" role="presentation">
           <button class="but button-footer-secondary text-center p-2 mt-3 nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"> I am an <br>
             <span>
               <strong>Applicant</strong>
             </span>
             <br>looking for a job </button>
         </li>
       </ul>
       <div class="tab-content accordion" id="myTabContent">
         <div class="tab-pane fade show active accordion-item" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
             <div class="accordion-header d-md-block d-lg-none" id="headingOne">
               <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  I am a Business looking to hire </button>
               </div>
           <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
             <div class="accordion-body">
               <form>
                 <div class="row justify-content-md-center">
                   <div class="col-lg-6 col-12">
                     <div class="form__group field">
                       <input type="text" class="form__field" placeholder="Name" name="name" id='name' required />
                       <label for="name" class="form__label">Name</label>
                     </div>
                   </div>
                   <div class="col-lg-6 col-12">
                     <div class="form__group field">
                       <input type="text" class="form__field" placeholder="Email" name="Schoolname" id='Schoolname' required />
                       <label for="Schoolname" class="form__label">Email</label>
                     </div>
                   </div>
                   <div class="col-lg-12 col-12">
                     <div class="form__group field">
                       <input type="text" class="form__field" placeholder="Phone" name="students" id='students' required />
                       <label for="students" class="form__label">Phone</label>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form__group field">
                       <input type="input" class="form__field" placeholder="Message" name="role" id='role' required />
                       <label for="role" class="form__label">Message</label>
                     </div>
                   </div>
                   <div class="col-12 text-center mx-auto">
                     <div class="form__group field ">
                       <button class="but button-secondary text-center p-2 w-100 mx-auto">Submit</button>
                     </div>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
         <div class="tab-pane fade accordion-item" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="accordion-header d-md-block d-lg-none" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              I am an Applicant looking for a job 
            </button>
           </div>
           <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
             <div class="accordion-body">
               <form>
                 <div class="row justify-content-md-center">
                   <div class="col-lg-6 col-12">
                     <div class="form__group field">
                       <input type="text" class="form__field" placeholder="Name" name="name" id='name' required />
                       <label for="name" class="form__label">Name</label>
                     </div>
                   </div>
                   <div class="col-lg-6 col-12">
                     <div class="form__group field">
                       <input type="text" class="form__field" placeholder="Email" name="Schoolname" id='Schoolname' required />
                       <label for="Schoolname" class="form__label">Email</label>
                     </div>
                   </div>
                   <div class="col-lg-6 col-12">
                     <div class="form__group field">
                       <input type="text" class="form__field" placeholder="Phone" name="students" id='students' required />
                       <label for="students" class="form__label">Phone</label>
                     </div>
                   </div>
                   <div class="col-lg-6 col-12">
                     <div class="form__group field">
                       <input type="input" class="form__field" placeholder=Company" name="email" id='email' required />
                       <label for="email" class="form__label">Company</label>
                     </div>
                   </div>
                   <div class="col-12">
                     <div class="form__group field">
                       <input type="input" class="form__field" placeholder="Message" name="role" id='role' required />
                       <label for="role" class="form__label">Message</label>
                     </div>
                   </div>
                   <div class="col-12 text-center mx-auto">
                     <div class="form__group field ">
                       <button class="but button-secondary text-center p-2 w-100 mx-auto bg-whit">Submit</button>
                     </div>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>





<?php

get_footer(custom);



