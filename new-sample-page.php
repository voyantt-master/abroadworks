<?php
/**
 * The template for displaying all New Sample Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package abroadworks
 */

get_header('custom');
?>


<section class="spacing-section">
    <div class="container">
	 <div class="row">
 			<div class="col-xl-9 col-lg-9 col-12">
		
					<main id="primary" class="site-main blog-content text-left font_Karla font-sm">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'abroadworks' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'abroadworks' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
			
	        </div>
	         <div class="col-xl-3 col-lg-3 col-12">
				<div class="blog-sidebar">
					<?php get_sidebar(); ?>
				</div>
	        </div>
		</div>
    </div>
</section>
<?php

get_footer('custom');
