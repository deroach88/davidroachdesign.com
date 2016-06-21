<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

		<?php get_template_part( 'includes/include-sidebar' ); ?>

		<section id="case-study">
			<div class="overview">
				<div class="container">
					<h1>Page not found</h1>
					<p>The page you're trying to reach can't be found, or it may not exist. You may have reached this page through an incorrect link. Use the navigation on the left to find what you're looking&nbsp;for.</p>
				</div>
			</div>
			<?php
				$image = ot_get_option( 'image' );
			?>
			<div class="screens">
				<div class="container">
					<img src="<?php echo $image; ?>" alt="">
				</div>
			</div>
		</section>

<?php get_footer(); ?>
