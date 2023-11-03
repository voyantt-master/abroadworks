<?php
   /**
    * Template Name: New Blog Template
    * Template Post Type: post, page
    *
    * @package WordPress
    * @subpackage Twenty_Twenty
    * @since Twenty Twenty 1.0
    */
   
   
     get_header('custom');
   ?>
<style type="text/css">
 .blog-list .card{ box-shadow: 1px 3px 7px rgba(0,0,0,0.15);border: 0;box-sizing: border-box;}
 .blog-list .card img { width: 100%;height: 210px; margin-bottom: 10px;object-fit: cover;}
 .blog-list .card-body h5 a{color:var(--seagreen); text-decoration: none;}
 .blog-list .card-body h5 a:hover{color:var(--dark);}
 .blog-sidebar li a{ font-size:1.125rem;	color:var(--seagreen); text-decoration: none;letter-spacing: 0.025em; }
 .blog-sidebar li a:hover{color:var(--dark);}



</style>


</style>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Banner section start here -->
<?php if ( has_post_thumbnail() ) {
   $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section class="banner-panel inner-banner clearfix" style="background-image: url('<?php echo $thumb['0'];?>')">
<?php } else { ?>
<!-- <section class="banner-panel inner-banner clearfix" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/process-2.jpg')">
   <?php } ?>
       <div class="main-container">
   		<h1><?php the_title(); ?></h1>
       </div>
   </section> -->
<!-- Banner section end here -->
<?php endwhile; ?>
<?php endif; ?>
<!-- Angular panel start here -->
<section class="spacing-section">
   <div class="container">
      <div class="row">
         <div class="col-xl-9 col-lg-9 col-12">
            <div class="blog-list">
               <div class="row align-items-start">
               	<?php
				$args = array(
				'post_type'=> 'post',
				'orderby'    => 'ID',
				'order'    => 'DESC',
				'posts_per_page' => -1 // this will retrive all the post that is published 
				);
				$result = new WP_Query( $args );
				if ( $result-> have_posts() ) : ?>
				<?php while ( $result->have_posts() ) : $result->the_post(); ?>

               	<div class="col-xl-4 col-lg-4 col-12 mb-5 ">
			      <div class="card post p-3 ">
			      	<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail(); ?>
					<?php } else { ?>
						
					  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/process-2.jpg" alt="..."class="post-image" >
					
					  <?php } ?>
					  <div class="card-body p-0 mt-2">
					    <h5 class="card-title fw-semibold font-Montserrat mt-4 mb-1"><a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a></h5>
					    <p class="card-text font_Karla font-sm"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
					    
					  </div>
					</div>
					
					
			    </div>
                   
					<?php endwhile; ?>
					<?php endif; wp_reset_postdata(); ?>

               </div>
               <?php get_template_part( 'template-parts/pagination' ); ?>
            </div>
         </div>
         <div class="col-xl-3 col-lg-3 col-12">
            <div class="blog-sidebar ">
               <?php get_template_part( 'template-parts/sidebar-widgets' ); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Angular panel end here -->
<?php
get_footer(custom);