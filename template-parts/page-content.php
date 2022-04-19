<section class="content">
	<div class="container text-center pb5 pt5">
		<?php if (get_field('content_heading')){ ?>
		<h2 class="heading__lg font500"><?php the_field('content_heading');?></h2>
		<?php } ?>
		<div class="heading__sm"><?php the_field('content');?></div>
	</div>
</section>