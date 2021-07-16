<section class="information">
	<?php if( have_rows('information') ): ?>
		<div class="information__container">
			<?php while( have_rows('information') ): the_row();
				$image = get_sub_field('image'); ?>
				<div class="information__content" style="background-image: url('<?php echo esc_url($image['sizes']['location-image']); ?>')" data-infoid="information__block--<?php echo get_row_index(); ?>">
					<div class="heading__light heading__lg">
						<?php the_sub_field('title');?>
						<div class="information__circle">
							<?php get_template_part( 'template-parts/icon', 'arrow' );?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

	<?php if( have_rows('information') ): ?>

		<?php while( have_rows('information') ): the_row();
			$image = get_sub_field('image'); ?>
			<div class="information__block pb3 pt3 pl3 pr3" style="background-image: url('<?php echo esc_url($image['sizes']['information-image']); ?>')" id="information__block--<?php echo get_row_index(); ?>">
				<div class="information__block--content">
					<div class="heading__light heading__lg"><?php the_sub_field('title');?></div>
					<div class="heading__light"><?php the_sub_field('information');?></div>
					<div class="information__block--circle">
						<?php get_template_part( 'template-parts/icon', 'arrow' );?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		
	<?php endif; ?>
</section>