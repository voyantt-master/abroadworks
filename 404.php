<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package abroadworks
 */

 get_header('custom');
?>
			<section class="error-404 not-found">
			<header class="page-header">
			<div class="container text-center ">
				<h1 class="page-title com-padding pt-5 pb-5">
					<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'abroadworks' ); ?>
				</h1>
			</div>
			</header>
			
			

			</section>

<?php
get_footer(custom);
