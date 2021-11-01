<section class="location">
	<?php if( have_rows('inn') ): ?>
	<div class="location__container">
		<?php while( have_rows('inn') ): the_row();
			$image = get_sub_field('image'); ?>
		    <div class="location__content<?php if(get_sub_field('unavailable')){;?> location__unavailable<?php };?>">
		    	<a class="location__link pb3 pt3 pl3 pr3" href="<?php the_sub_field('link');?>" style="background-image: url('<?php echo esc_url($image['sizes']['location-image']); ?>')">
		    		<div class="heading__light">
				    	<h3 class="location__name heading__xl mb0 pb0"><?php the_sub_field('name');?><?php if(get_sub_field('unavailable')){;?> <small> - Opening Soon</small><?php };?></h3>
				    	<div><?php the_sub_field('location');?></div>
				    </div>
			    </a>
		    </div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
</section>