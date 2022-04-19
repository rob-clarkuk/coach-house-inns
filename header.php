<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coach_House_Inn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/kku6ogf.css">

	<?php wp_head(); ?>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coach-house-inn' ); ?></a>

	<header class="header">
		<div class="header__container">
			<div class="header__logo">
				<?php get_template_part( 'template-parts/icon', 'logo' );?>
			</div>
			<?php if( have_rows('header', 'option') ): ?>
    			<?php while( have_rows('header', 'option') ): the_row();?>
				<div class="header__links">
					<div class="header__link--container pl1 pr1">
						<div class="heading__light heading__sm"><?php the_sub_field('room_links_title');?></div>
						<?php if( have_rows('inn') ): ?>
							<ul class="header__dropdown text-right pr1">
								<?php while( have_rows('inn') ): the_row();?>
									<?php if(get_sub_field('unavailable') == 0){;?>
										<li><a href="<?php the_sub_field('room_booking_link');?>" class="heading__light"><?php the_sub_field('name');?> <?php the_sub_field('location');?></a></li>
									<?php };?>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
					<div class="header__link--container pl1 pr1">
						<div class="heading__light heading__sm"><?php the_sub_field('food_links_title');?></div>
						<?php if( have_rows('inn') ): ?>
							<ul class="header__dropdown text-right pr1">
								<?php while( have_rows('inn') ): the_row();?>
									<?php if(get_sub_field('unavailable') == 0){;?>
										<li><a href="<?php the_sub_field('table_booking_link');?>" class="heading__light"><?php the_sub_field('name');?> <?php the_sub_field('location');?></a></li>
									<?php };?>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="header__mobMenu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</header><!-- #masthead -->

<?php get_template_part( 'template-parts/content', 'mobileMenu' );?>
