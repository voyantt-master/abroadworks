<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abroadworks
 */

get_header('custom');;
?>


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
               <?php get_sidebar();?>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Angular panel start here -->
<!-- Angular panel end here -->

<?php
get_footer('custom');



