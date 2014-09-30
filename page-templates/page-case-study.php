<?php
/**
 * Template Name: DRD &raquo; Case Study
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
					<h1><?php the_title(); ?></h1>
					<?php
						$client = types_render_field( 'client', array( 'raw' => true ) );
						$role = types_render_field( 'role', array( 'raw' => true ) );
					?>
					<ul class="project-info">
						<li>Client: <strong><?php echo $client; ?></strong></li>
						<li>Role: <strong><?php echo $role; ?></strong></li>
					</ul>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<?php get_template_part( 'includes/include-screens' ); ?>
		</section>

<?php get_footer(); ?>