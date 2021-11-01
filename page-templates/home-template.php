<?php
/**
 * ============== Template Name: Home
 */
get_header();?>

<?php get_template_part( 'template-parts/home', 'hero' );?>
<?php get_template_part( 'template-parts/home', 'content' );?>
<?php get_template_part( 'template-parts/home', 'locations' );?>
<?php get_template_part( 'template-parts/home', 'information' );?>

<?php get_footer(); ?>