<section class="nav__mobile">
	<ul class="nav__links--mob">
		<?php if( have_rows('header', 'option') ): ?>
    		<?php while( have_rows('header', 'option') ): the_row();?>
				<li class="heading__caps heading__lg pb1"><?php the_sub_field('room_links_title');?></li>
				<?php while( have_rows('inn') ): the_row();?>
					<?php if(get_sub_field('unavailable') == 0){;?>
						<li class="heading__caps heading__md pb1"><a href="<?php the_sub_field('room_booking_link');?>" class="heading__caps heading__md pb1 pt1"><?php the_sub_field('location');?></a></li>
					<?php };?>
				<?php endwhile; ?>
				<li class="heading__caps heading__lg pt1 pb1"><?php the_sub_field('food_links_title');?></li>
				<?php while( have_rows('inn') ): the_row();?>
					<?php if(get_sub_field('unavailable') == 0){;?>
						<li class="heading__caps heading__md pb1"><a href="<?php the_sub_field('table_booking_link');?>" class="heading__caps heading__md pb1 pt1"><?php the_sub_field('location');?></a></li>
					<?php };?>
				<?php endwhile; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</ul>
</section>