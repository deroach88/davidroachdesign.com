<?php
/**
* Template Name: DRD &raquo; About
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header(); ?>

<?php
$content = types_render_field( 'content', array( 'raw' => true ) );
?>

<?php get_template_part( 'includes/include-sidebar' ); ?>

<section id="about">
<div class="overview">
<div class="container">
<h1><?php the_title(); ?></h1>
<?php echo $content; ?>
</div>
</div>
<?php get_template_part( 'includes/include-screens' ); ?>
</section>

<?php get_footer(); ?>
