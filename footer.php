<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Coach_House_Inn
 */

?>

	<footer class="pt5 pb3">
		<?php if( have_rows('footer', 'option') ): ?>
    	<?php while( have_rows('footer', 'option') ): the_row();?>
		<div class="footer__content">
			<div class="footer__logo">
				<?php get_template_part( 'template-parts/icon', 'logo' );?>
			</div>
			<div class="footer__contact">
				<div class="heading__light heading__lg"><?php the_sub_field('find_us_title');?></div>
				<div class="heading__light">
					<?php the_sub_field('address');?>
				</div>
			</div>
			<div class="footer__contact">
				<div class="heading__light heading__lg"><?php the_sub_field('contact_us_title');?></div>
				<div>
					<a class="heading__light" href="tel:<?php the_sub_field('phone_number');?>">
						<?php the_sub_field('phone_number');?>
					</a>
				</div>
				<div>
					<a class="heading__light" href="mailto:<?php the_sub_field('email');?>">
						<?php the_sub_field('email');?>
					</a>
				</div>
			</div>
			<div class="footer__gap"></div>
			<div class="footer__links">
				<?php if( have_rows('links_section_1') ): ?>
					<?php while( have_rows('links_section_1') ): the_row();?>
						<div><a class="heading__light" href="<?php the_sub_field('link');?>" class="heading__light"><?php the_sub_field('title');?></a></div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="footer__links">
				<?php if( have_rows('links_section_2') ): ?>
					<?php while( have_rows('links_section_2') ): the_row();?>
						<div><a class="heading__light" href="<?php the_sub_field('link');?>" class="heading__light"><?php the_sub_field('title');?></a></div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="footer__copyright pt2 heading__light">
				&copy; Copyright <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src='<?php echo get_template_directory_uri();?>/js/scripts.js'></script>

</body>
</html>
