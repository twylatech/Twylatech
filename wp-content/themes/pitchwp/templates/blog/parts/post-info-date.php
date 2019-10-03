<div class="date">
	<?php if(!pitch_qode_post_has_title()) { ?>
		<a href="<?php the_permalink() ?>">
	<?php } ?>

	<?php the_time(get_option('date_format')); ?>

	<?php if(!pitch_qode_post_has_title()) { ?>
		</a>
	<?php } ?>
</div>